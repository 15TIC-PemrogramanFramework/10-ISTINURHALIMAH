	<?php $this->load->view('Templates/Admin/Header'); ?>
	<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
		<div class="page-header pull-left">
			<div class="page-title">
				Data Barang</div>
			</div>
			<ol class="breadcrumb page-breadcrumb pull-right">
				<li><i class="fa fa-table "></i>&nbsp;<a href="Home.php">Table</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
				<li class="hidden"><a href="#">Data Barang</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
				<li class="active">Data Barang</li>
			</ol>
			<div class="clearfix">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-right">
				<div style="margin-top:20px;margin-bottom:10px;">
					<?=$this->session->flashdata('beli')?>
					<?php echo anchor(site_url('Databarang/tambah'),
						'<i class="fa fa-plus-circle">
					</i> Tambah data', 'class="btn btn-primary"'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-blue" style="background:#FFF;">
			<div class="panel-heading">Data Barang</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Harga Barang</th>
							<th>Stok Barang</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($databarang as $key => $row) { ?>
						<tr>
							<td><?php echo $row->nama_barang; ?></td>
							<td><?php echo $row->harga_barang; ?></td>
							<td><?php echo $row->stok_barang; ?></td>
							<td>
								<?php echo anchor(site_url('Databarang/update/'.$row->nama_barang),
									'<i class="fa fa-pencil-square" aria-hidden="true"></i>',
									'class="btn btn-warning"'); ?>
								<?php echo anchor(site_url('Databarang/delete/'.$row->nama_barang),
									'<i class="fa fa-trash-o" aria-hidden="true"></i>',
									'class="btn btn-danger"'); ?>
								</td>
							</tr>
							<?php } ?>
						</tbody> </table>
					</div>
				</div>
				<?php $this->load->view('Templates/Admin/Footer'); ?>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#example').DataTable();
					} );
				</script>