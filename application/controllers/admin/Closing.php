<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Closing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Closing_model");
        $this->load->library('form_validation');
    }

public function index()
{
    $data["tb_closing"] = $this->Closing_model->getAll();
    $this->load->view("admin/Closing/list", $data); 
    $this->load->view("admin/overview", $data);

}



    public function add()
    {
        $closing = $this->Closing_model;
        $validation = $this->form_validation;
        $validation->set_rules($closing->rules());

        if ($validation->run()) {
            $closing->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('index.php/admin/closing'));
        }
        $data['sto'] = $this->db->get('tb_sto')->result_array();
        $data['rfo'] = $this->db->get('tb_rfo')->result_array();
        $data['customer'] = $this->db->get('tb_customer')->result_array();
        $data['layanan'] = $this->db->get('tb_layanan')->result_array();
        $data['position'] = $this->db->get('tb_position')->result_array();
        $data['status'] = $this->db->get('tb_status')->result_array();
        $this->load->view("admin/Closing/new_form",$data);
      
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/Closing');
       
        $closing = $this->Closing_model;
        $validation = $this->form_validation;
        $validation->set_rules($closing->rules());

        if ($validation->run()) {
            $closing->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url('index.php/admin/closing'));
            }

        $data['sto'] = $this->db->get('tb_sto')->result_array(); 
        $data['sto'] = $this->db->get('tb_sto')->result_array();
        $data['rfo'] = $this->db->get('tb_rfo')->result_array();
        $data['customer'] = $this->db->get('tb_customer')->result_array();
        $data['layanan'] = $this->db->get('tb_layanan')->result_array();
        $data['position'] = $this->db->get('tb_position')->result_array();
        $data['status'] = $this->db->get('tb_status')->result_array();   
        $data["closing"] = $closing->getById($id);
        if (!$data["closing"]) show_404();
        
        $this->load->view("admin/Closing/edit_form", $data);
        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Closing_model->delete($id)) {
            redirect(site_url('admin/Closing'));
        }
    }
}
