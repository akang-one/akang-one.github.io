<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Change Password</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage User</a></li>
                    <li class="breadcrumb-item active">Change Password</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<?= $this->session->flashdata('msg') ?>
<div style="color:red;"><?= validation_errors() ?></div>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <!-- Profile Image -->
                <div class="card card-fuchsia card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('uploads/users/' . $this->session->userdata('photo')) ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $this->session->userdata('fullname') ?></h3>

                        <p class="text-muted text-center"><?= $this->session->userdata('usertype') ?></p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-7">
                <div class="card card-fuchsia">

                    <div class="card-header">
                        <h3 class="card-title">Upload New Photo</h3>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Old Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password" name="oldpassword" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">New Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="New Password" name="newpassword" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="change" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>