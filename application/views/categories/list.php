<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $header ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?= $header ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?= $this->session->flashdata('msg') ?>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-fuchsia card-outline">
        <div class="card-header">
            <h3 class="card-title"><?= $header ?></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body"><a href="<?= site_url('categories069/add') ?>" class="btn btn-primary btn-sm "><i class="fas fa-plus"></i> Add New Category</a></div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Category
                        </th>
                        <th>
                            Description
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($categories as $cate) {
                    ?>
                        <tr>
                            <td>
                                <?= $i++ ?>
                            </td>
                            <td>
                                <?= $cate->category_name_069 ?>
                            </td>
                            <td>
                                <?= $cate->category_description_069 ?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= site_url('categories069/edit/' . $cate->category_id_069) ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= site_url('categories069/delete/' . $cate->category_id_069) ?>" onclick="return confirm('are you sure want to delete?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
        <!-- /.card-body -->

        <!-- pagination -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <?= $this->pagination->create_links(); ?>
            </ul>
        </div>
    </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->