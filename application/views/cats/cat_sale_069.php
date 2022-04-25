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
                    <li class="breadcrumb-item active"> Cat Sale</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cat Detail</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputID">Cat ID</label>
                            <input type="text" id="inputID" class="form-control" value="<?= $cat->id_069 ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Cat Name</label>
                            <input type="text" id="inputName" class="form-control" value="<?= $cat->name_069 ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Cat Type</label>
                            <select id="inputStatus" class="form-control custom-select" disabled>
                                <option selected><?= $cat->type_069 ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAge">Age <small>(month)</small></label>
                            <input type="text" id="inputAge" class="form-control" value="<?= $cat->age_069 ?>" disabled>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Customer Profil</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="c_name">Customer Name</label>
                            <input type="text" id="c_name" class="form-control" name="customer_name_069">
                        </div>
                        <div class="form-group">
                            <label for="c_address">Customer Address</label>
                            <textarea id="c_address" class="form-control" rows="4" name="customer_address_069"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="c_phone">Customer Phone</label>
                            <input type="text" id="c_phone" class="form-control" name="customer_phone_069">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputpPrice">Price </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" name="price_069" id="inputpPrice" class="form-control" value="<?= $cat->price_069 ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <a href="<?= site_url('cats069') ?>" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Sale Cat" class="btn btn-success float-right" name="submit">
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