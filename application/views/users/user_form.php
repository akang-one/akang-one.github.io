<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manage User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage User</a></li>
                    <li class="breadcrumb-item active">Add new User | Edit User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?php
$username = "";
$password = "";
$usertype = "";
$fullname = "";

if (isset($user)) {
    $username = $user->username_069;
    $password = $user->password_069;
    $usertype = $user->usertype_069;
    $fullname = $user->fullname_069;
} ?>

<div style="color:red;"><?= validation_errors() ?></div>

<!-- Main content -->
<section class="content">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">User Name</label>
                            <input type="text" id="inputName" class="form-control" name="username_069" value="<?= set_value('username_069', $username) ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">User Type</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="Manager" type="radio" id="customRadio1" name="usertype_069" <?= set_radio('usertype_069', $usertype, $usertype == 'Manager' ? TRUE : FALSE) ?> required>
                                <label for="customRadio1" class="custom-control-label">Manager</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="Cashier" type="radio" id="customRadio2" name="usertype_069" <?= set_radio('usertype_069', $usertype, $usertype == 'Cashier' ? TRUE : FALSE) ?> required>
                                <label for="customRadio2" class="custom-control-label">Cashier</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFN">Fullname</label>
                            <input type="text" name="fullname_069" id="inputFN" class="form-control" value="<?= set_value('fullname_069', $fullname) ?>" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="submit" value="Save Category" class="btn btn-success float-right" name="submit">
                <a href="<?= site_url('users069') ?>" class="btn btn-secondary float-right">Cancel</a>
            </div>
        </div>
    </form>
</section>
<!-- /.content -->