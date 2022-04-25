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
        <div class="card-body"><a href="<?= site_url('users069/add') ?>" class="btn btn-primary btn-sm "><i class="fas fa-plus"></i> Add New User</a></div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Username
                        </th>
                        <th>
                            Usertype
                        </th>
                        <th>
                            Fullname
                        </th>
                        <th style="width: 25%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($users as $user) {
                    ?>
                        <tr>
                            <td>
                                <?= $i++ ?>
                            </td>
                            <td>
                                <?= $user->username_069 ?>
                            </td>
                            <td>
                                <?= $user->usertype_069 ?>
                            </td>
                            <td>
                                <?= $user->fullname_069 ?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="<?= site_url('users069/edit/' . $user->userid_069) ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= site_url('users069/delete/' . $user->userid_069) ?>" onclick="return confirm('are you sure want to delete?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                                <a class="btn btn-warning btn-sm" href="<?= site_url('users069/resetpassword/' . $user->userid_069 . '/' . $user->usertype_069) ?>" onclick="return confirm('are you sure ?')">
                                    <i class=" fas fa-solid fa-key"></i>
                                    Reset <small>Password</small>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
        <!-- /.card-body -->

    </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->