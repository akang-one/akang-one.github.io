<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cats List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Cats List</li>
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
            <h3 class="card-title">Cats List</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-header">
            <a href="<?= site_url('cats069/add') ?>" class="btn btn-primary btn-sm "><i class="fas fa-plus"></i> Add New Cat</a>
            <div class="card-tools">
                <div class="mt-2">
                    <div class="col-md">
                        <form action="<?= base_url('cats069') ?>" method="POST">
                            <div class="input-group input-group-sm" style="width: 300px;">
                                <input type="text" name="keyword" class="form-control float-right" placeholder="Search" autocomplete="off" value="<?= $this->session->userdata('keyword'); ?>">
                                <div class="input-group-append">
                                    <a href="<?= site_url('cats069/destroykeyword') ?>" class="btn btn-secondary">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>
                                <div class="input-group-append" hidden>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 18%">
                            Cat Name
                        </th>
                        <th style="width: 18%">
                            Cat Type
                        </th>
                        <th style="width: 10%">
                            Cat Gender
                        </th>
                        <th style="width: 8%" class="text-center">
                            Age
                            <small>(Month)</small>
                        </th>
                        <th class="text-center">
                            Price
                            <small>($)</small>
                        </th>
                        <th class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($cats as $cat) {
                    ?>
                        <tr>
                            <td>
                                <?= $i++ ?>
                            </td>
                            <td>
                                <?= $cat->name_069 ?>
                            </td>
                            <td>
                                <?= $cat->type_069 ?>
                            </td>
                            <td>
                                <?= $cat->gender_069 ?>
                            </td>
                            <td class="text-center">
                                <?= $cat->age_069 ?>
                            </td>
                            <td class="text-center">
                                <?= $cat->price_069 ?>
                            </td>
                            <td class="project-state">
                                <span class="badge <?= $cat->sold_069 == 1 ? 'badge-danger' : 'badge-success' ?>">
                                    <?= $cat->sold_069 == 1 ? 'Sold' : 'Available' ?></span>
                            </td>
                            <?php if ($cat->sold_069 == 1) { ?>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm disabled" href="#">
                                        <i class="fas fa-solid fa-dollar-sign"></i>
                                        Sell
                                    </a>
                                    <a class="btn btn-info btn-sm disabled" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm disabled" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            <?php } else { ?>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm <?php if ($cat->sold_069 == 1) echo 'disabled'; ?>" href="<?= site_url('cats069/sale/' . $cat->id_069) ?>">
                                        <i class="fas fa-solid fa-dollar-sign"></i>
                                        Sell

                                    </a>
                                    <a class="btn btn-info btn-sm <?php if ($cat->sold_069 == 1) echo 'disabled'; ?>" href="<?= site_url('cats069/edit/' . $cat->id_069) ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm <?php if ($cat->sold_069 == 1) echo 'disabled'; ?>" href="<?= site_url('cats069/delete/' . $cat->id_069) ?>" onclick="return confirm('are you sure want to delete?')">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            <?php } ?>
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