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
                    <li class="breadcrumb-item"><a href="#">Cats List</a></li>
                    <li class="breadcrumb-item active">Add new Cat | Edit Cat</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?= $this->session->flashdata('msg') ?>
<?php
$name = "";
$type = "";
$gender = "";
$age = "";
$price = "";

if (isset($cat)) {
    $name = $cat->name_069;
    $type = $cat->type_069;
    $gender = $cat->gender_069;
    $age = $cat->age_069;
    $price = $cat->price_069;
}


?>
<div style="color:red;"><?= validation_errors() ?></div>

<!-- Main content -->
<section class="content">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cat Profil</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Cat Name</label>
                            <input type="text" id="inputName" class="form-control" name="name_069" value="<?= set_value('name_069', $name) ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputType">Cat Type</label>
                            <select id="inputType" class="form-control custom-select" name="type_069" required>
                                <option selected disabled>Select one</option>
                                <?php foreach ($category as $categ) { ?>
                                    <option value="<?= $categ->category_name_069 ?>" <?= set_select(
                                                                                            'type_069',
                                                                                            $categ->category_name_069,
                                                                                            $type == $categ->category_name_069 ? TRUE : FALSE
                                                                                        ) ?>><?= $categ->category_name_069 ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Cat Gender</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="Male" type="radio" id="customRadio1" name="gender_069" <?= set_radio('gender_069', $gender, $gender == 'Male' ? TRUE : FALSE) ?> required>
                                <label for="customRadio1" class="custom-control-label">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="Female" type="radio" id="customRadio2" name="gender_069" <?= set_radio('gender_069', $gender, $gender == 'Female' ? TRUE : FALSE) ?> required>
                                <label for="customRadio2" class="custom-control-label">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAge">Age <small>(month)</small></label>
                            <input type="number" name="age_069" id="inputAge" class="form-control" value="<?= set_value('age_069', $age) ?>" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Price</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputpPrice">Price to sell</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" name="price_069" id="inputpPrice" class="form-control" value="<?= set_value('price_069', $price) ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <a href="<?= site_url('cats069') ?>" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save Cat" class="btn btn-success float-right" name="submit">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
</section>
<!-- /.content -->