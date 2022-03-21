<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>General Form</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/home">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/testimonial">Testimonial</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
<asside class="container-fluid">
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Create Testimonial</h3>
    </div>
    <?php echo form_open_multipart('admin/testimonial/store');?>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Massukan Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1" placeholder="Massukan Deskripsi">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="form-control" id="exampleInputFile">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
    <?php echo form_close(); ?>
    </div>
</div>
</div>
</div>
</section>
</div>