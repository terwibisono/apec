<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
				
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Closing/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					
					<div class="card-body">
						<form action="<?php base_url('admin/Closing/add') ?>" method="post" >
						
						<div class ="row">
							<div class="col-md-6">

							<div class="form-group">
								<label for="id_sto">STO*</label>
								<select class="form-control" name="id_sto">
									<?php foreach($sto as $row){?>
									<option value="<?php echo $row['sto'];?>"><?php echo $row['sto'];?></option>
									<?php
										}
									?>
								</select>
							</div>	
							</div>

							<div class="col-md-6">
							<div class="form-group">
								<label for="date">Date*</label>
								<input class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>"
								 type="text" name="date" min="0" placeholder="Date" />
								<div class="invalid-feedback">
									<?php echo form_error('date') ?>
								</div>
							</div>
							</div>
							</div>

							<div class ="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="no_tiket">No Tiket*</label>
								<input class="form-control <?php echo form_error('no_tiket') ? 'is-invalid':'' ?>"
								 type="text" name="no_tiket" min="0" placeholder="No Tiket" />
								<div class="invalid-feedback">
									<?php echo form_error('no_tiket') ?>
								</div>
							</div>
							</div>
											
							<div class="col-md-6">	
                            <div class="form-group">
								<label for="namacustomer">Customer</label>
								<input class="form-control <?php echo form_error('customer') ? 'is-invalid':'' ?>"
								 type="text" name="namacustomer" min="0" placeholder="Customer" />
								<div class="invalid-feedback">
									<?php echo form_error('customer') ?>
								</div>
							</div>
							</div>
							</div>

							<div class ="row">
							<div class="col-md-6">
							   <div class="form-group">
								<label for="pic">PIC</label>
								<input class="form-control <?php echo form_error('pic') ? 'is-invalid':'' ?>"
								 type="text" name="pic" min="0" placeholder="PIC" />
								<div class="invalid-feedback">
									<?php echo form_error('pic') ?>
								</div>
							</div>
							</div>

							<div class="col-md-6">				
							<div class="form-group">
								<label for="headline">Headline</label>
								<input class="form-control <?php echo form_error('headline') ? 'is-invalid':'' ?>"
								 type="text" name="headline" min="0" placeholder="Headline" />
								<div class="invalid-feedback">
									<?php echo form_error('headline') ?>
								</div>
							</div>
							</div>
							</div>
							
							<div class ="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="layanan">Layanan</label>
								<select class="form-control" name="layanan">
									<?php foreach($layanan as $row){?>
									<option value="<?php echo $row['layanan'];?>"><?php echo $row['layanan'];?></option>
									<?php
										}
									?>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label for="rfo">RFO*</label>
								<select class="form-control" name="rfo">
									<?php foreach($rfo as $row){?>
									<option value="<?php echo $row['rfo'];?>"><?php echo $row['rfo'];?></option>
									<?php
										}
									?>
								</select>
							</div>
							</div>
							</div>

							<div class ="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="petugas">Petugas</label>
								<input class="form-control <?php echo form_error('petugas') ? 'is-invalid':'' ?>"
								 type="text" name="petugas" min="0" placeholder="Petugas" />
								<div class="invalid-feedback">
									<?php echo form_error('petugas') ?>
								</div>
							</div>
							</div>
							<div class="col-md-6">			
								<div class="form-group">
								<label for="nik">NIK</label>
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" name="nik" min="0" placeholder="NIK" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>
							</div>
							</div>

							<div class ="row">			
							<div class="col-md-6">
							<div class="form-group">
								<label for="position">Position</label>
								<select class="form-control" name="position">
									<?php foreach($position as $row){?>
									<option value="<?php echo $row['position'];?>"><?php echo $row['position'];?></option>
									<?php
										}
									?>
								</select>
							</div>
							</div>

                            <div class="col-md-6">
							<div class="form-group">
								<label for="id_customer">Jenis Customer</label>
								<select class="form-control" name="customer" >
									<?php foreach($customer as $row){?>
									<option value="<?php echo $row['customer'];?>"><?php echo  $row['customer'];?></option>
									<?php
										}
									?>
								</select>
								</div>
							</div>
							</div>

								<div class ="row">			
							<div class="col-md-6">			
                            	<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control" name="status" >
									<?php foreach($status as $row){?>
									<option value="<?php echo $row['status'];?>"><?php echo  $row['status'];?></option>
									<?php
										}
									?>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 type="text" name="keterangan" min="0" placeholder="Keterangan" />
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>
							</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
