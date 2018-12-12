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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Closing/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>STO</th>
										<th>Date</th>
										<th>No Tiket</th>
										<th>Customer</th>
										<th>PIC</th>
										<th>Headline</th>
										<th>Layanan</th>
										<th>RFO</th>
										<th>Petugas</th>
										<th>NIK</th>
										<th>Position</th>
										<th>Jenis Customer</th>
										<th>Status</th>
										<th>Keterangan</th>
										
								</tr>
								</thead>
								<tbody>
									<?php foreach ($tb_closing as $closing): ?>
									<tr>
										<td width="150">
											<?php echo $closing->id_sto ?>
										</td>
										<td>
											<?php echo $closing->date ?>
										</td>
										<td>
											<?php echo $closing->no_tiket ?>
										</td>
										<td>
											<?php echo $closing->namacustomer ?>
										</td>
										<td>
											<?php echo $closing->pic ?>
										</td>
										<td>
											<?php echo $closing->headline ?>
										</td>
										<td>
											<?php echo $closing->layanan ?>
										</td>
										<td>
											<?php echo $closing->rfo ?>
										</td>
										<td>
											<?php echo $closing->petugas ?>
										</td>
										<td>
											<?php echo $closing->nik ?>
										</td>
										<td>
											<?php echo $closing->position ?>
										</td>
										<td>
											<?php echo $closing->customer ?>
										</td>
										<td>
											<?php echo $closing->status?>
										</td>
										<td>
											<?php echo $closing->keterangan ?>
										</td>
										<td>
											<a href="<?php echo site_url('admin/Closing/edit/'.$closing->id_close) ?>" class="btn btn-small"><i class="fas fa-edit"></i>
												Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/Closing/delete/'.$closing->id_close) ?>')" href="#!"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>


	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}

	</script>

</body>

</html>
