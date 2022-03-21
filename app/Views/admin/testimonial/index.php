<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Testimonial</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
	<li class="breadcrumb-item"><a href="#">Home</a></li>
	<li class="breadcrumb-item active">Testimonial</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
	<div class="card-header">
	<a class="btn btn-success" href="<?= base_url(); ?>/admin/testimonial/create">Tambah</a>
	</div> 
	<!-- /.card-header -->
	<div class="card-body">
	<table id="example2" class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Deskripsi</th>
			<th>Image</th>
		</tr>
		</thead>
		<tbody>
		<?php $nomor = 0; ?>
		<?php foreach($testimonial as $key => $row) { ?>
		<tr>
			<td><?= ++$nomor; ?></td>
			<td><?= $row['username'];  ?></td>
			<td><?= $row['deskripsi']; ?></td>
			<td><img class="rounded-circle" width='50' height='50' src="<?= base_url('uploads/' .$row['image']); ?>" alt="Image"></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>