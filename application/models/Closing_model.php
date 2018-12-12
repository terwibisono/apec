<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Closing_model extends CI_Model
{
    private $_table = "tb_closing";

    public $id_close;
    public $id_sto;
    public $no_tiket;
    public $namacustomer;
    public $pic;
    public $headline;
    public $layanan;
    public $rfo;
    public $petugas; 
    public $nik;
    public $position;
    public $customer;
    public $status;
    public $keterangan;



    public function rules()
    {
        return [
            ['field' => 'id_sto',
            'label' => 'STO',
            'rules' => 'required'],

            ['field' => 'no_tiket',
            'label' => 'No Tiket',
            'rules' => 'required'],
            
            ['field' => 'rfo',
            'label' => 'RFO',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_close" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_close = uniqid();
        $this->id_sto = $post["id_sto"];
        $this->date = $post["date"];
        $this->no_tiket = $post["no_tiket"];
        $this->namacustomer = $post["namacustomer"];
        $this->pic = $post["pic"];
        $this->headline = $post["headline"];
        $this->layanan = $post["layanan"];
        $this->rfo = $post["rfo"];
        $this->petugas = $post["petugas"];
        $this->nik = $post["nik"];
        $this->position = $post["position"];
        $this->customer = $post["customer"];
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];    
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_close = uniqid();
        $this->id_sto = $post["id_sto"];
        $this->date = $post["date"];
        $this->no_tiket = $post["no_tiket"];
        $this->namacustomer = $post["namacustomer"];
        $this->pic = $post["pic"];
        $this->headline = $post["headline"];
        $this->layanan = $post["layanan"];
        $this->rfo = $post["rfo"];
        $this->petugas = $post["petugas"];
        $this->nik = $post["nik"];
        $this->position = $post["position"];
        $this->customer = $post["customer"];
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];    
        $this->db->update($this->_table, $this, array('id_close' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_close" => $id));
    }
}
