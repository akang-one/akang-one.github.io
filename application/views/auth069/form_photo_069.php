<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Change Photo</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage User</a></li>
                    <li class="breadcrumb-item active">Change Photo</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<?= $this->session->flashdata('msg') ?>

<div style="color:red;"><?= $error ?></div>

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

                        <p class="text-muted text-center">Current Photo</p>

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
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="photo" required>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <input type="submit" value="Upload" name="upload" class="input-group-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>