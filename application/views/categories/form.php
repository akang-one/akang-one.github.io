<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categories List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories List</a></li>
                    <li class="breadcrumb-item active">Add new Category | Edit Category</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?= $this->session->flashdata('msg') ?>

<?php
$name = "";
$descrip = "";

if (isset($cate)) {
    $name = $cate->category_name_069;
    $descrip = $cate->category_description_069;
}
?>
<!-- Main content -->
<section class="content">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Category Name</label>
                            <input type="text" id="inputName" class="form-control" name="c_name_069" value="<?= $name ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="c_address">Category Description</label>
                            <textarea id="c_address" class="form-control" rows="4" name="descrip_069"><?= $descrip ?></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </div>
        <div class="row">
            <div class="col-6">
                <a href="<?= site_url('categories069') ?>" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save New Category" class="btn btn-success float-right" name="submit">
            </div>
        </div>
        <!-- /.card -->
    </form>
</section>
<!-- /.content -->