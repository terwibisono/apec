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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/Closing/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Closing/edit') ?>" method="post">

							<input type="hidden" name="id" value="<?php echo $closing->id_close?>" />

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="id_sto">STO*</label>
										<select class="form-control" name="id_sto">
											<?php foreach($sto as $row){?>
											<option value="<?php echo $row['sto'];?>">
												<?php echo $row['sto'];?>
											</option>
											<?php
										}
									?>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="date">Date</label>
										<input class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>" type="text" name="date" min="0"
										 placeholder="No Tiket" value="<?php echo $closing->date ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('date') ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="no_tiket">No Tiket*</label>
										<input class="form-control <?php echo form_error('no_tiket') ? 'is-invalid':'' ?>" type="text" name="no_tiket"
										 min="0" placeholder="No Tiket" value="<?php echo $closing->no_tiket ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('no_tiket') ?>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="namacustomer">Customer*</label>
										<input class="form-control <?php echo form_error('namacustomer') ? 'is-invalid':'' ?>" type="text" name="namacustomer"
										 min="0" placeholder="Customer" value="<?php echo $closing->namacustomer ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('namacustomer') ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="pic">PIC</label>
										<input class="form-control <?php echo form_error('pic') ? 'is-invalid':'' ?>" type="text" name="pic" min="0"
										 placeholder="PIC" value="<?php echo $closing->pic ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('pic') ?>
										</div>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label for="headline">Headline</label>
										<input class="form-control <?php echo form_error('headline') ? 'is-invalid':'' ?>" type="text" name="headline"
										 min="0" placeholder="Headline" value="<?php echo $closing->headline ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('headline') ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="layanan">Layanan</label>
										<select class="form-control" name="layanan">
											<?php foreach($layanan as $row){?>
											<option value="<?php echo $row['layanan'];?>">
												<?php echo $row['layanan'];?>
											</option>
											<?php
										}
									?>
										</select>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label for="rfo">RFO*</label>
										<input class="form-control <?php echo form_error('rfo') ? 'is-invalid':'' ?>" type="text" name="rfo" min="0"
										 placeholder="RFO" value="<?php echo $closing->rfo ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('rfo') ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-md-6">
									<div class="form-group">
										<label for="petugas">Petugas*</label>
										<input class="form-control <?php echo form_error('petugas') ? 'is-invalid':'' ?>" type="text" name="petugas" min="0"
										 placeholder="Petugas" value="<?php echo $closing->petugas ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('petugas') ?>
										</div>
									</div>
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
										<label for="nik">NIK</label>
										<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>" type="text" name="nik" min="0"
										 placeholder="NIK" value="<?php echo $closing->nik ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('nik') ?>
										</div>
									</div>
								</div>
							</div>				

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="position">Position</label>
										<input class="form-control <?php echo form_error('position') ? 'is-invalid':'' ?>" type="text" name="position" min="0"
										placeholder="Position" value="<?php echo $closing->position ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('position') ?>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="customer">Jenis Customer</label>
										<input class="form-control <?php echo form_error('customer') ? 'is-invalid':'' ?>" type="text" name="customer" min="0"
										placeholder="Jenis Customer" value="<?php echo $closing->customer ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('customer') ?>
										</div>
									</div>
								</div>
							</div>


							<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="status">Status</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>" type="text" name="status"
								 min="0" placeholder="Status" value="<?php echo $closing->status ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>
							</div>

							<div class="col-md-6">				
							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" type="text" name="keterangan"
								 min="0" placeholder="Keterangan" value="<?php echo $closing->keterangan ?>" />
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
