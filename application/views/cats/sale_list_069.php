<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sales Report</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Sales Report</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-fuchsia card-outline">
        <div class="card-header">
            <h3 class="card-title">Sales Reports</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 6%">
                            Sale ID
                        </th>
                        <th style="width: 15%">
                            Sale Date
                        </th>
                        <th style="width: 17%">
                            Cat
                        </th>
                        <th style="width: 10%" class="text-center">
                            Customer Name
                        </th>
                        <th class="text-center">
                            Customer Address
                        </th>
                        <th class="text-center">
                            Costumer Phone
                        </th>
                        <th style="width: 10%" class="text-center">
                            Sold At
                            <small>($)</small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $total = 0;
                    foreach ($sales as $sale) {
                        $total = $total  + $sale->price_069;
                    ?>
                        <tr>
                            <td>
                                <?= $i++ ?>
                            </td>
                            <td class="text-center">
                                <?= $sale->sale_id_069 ?>
                            </td>
                            <td>
                                <?= date('D, d F Y / H:i', strtotime($sale->sale_date_069)) ?>
                            </td>
                            <td>
                                <?php echo "<strong>", $sale->name_069, "</strong>",
                                "<small> (", $sale->age_069, " month)", "<br> ",
                                "Type : ", $sale->type_069, "<br> ",
                                "Gender : ", $sale->gender_069, "</small>"
                                ?>
                            </td>
                            <td class="text-center">
                                <?= $sale->customer_name_069 ?>
                            </td>
                            <td>
                                <?= $sale->customer_address_069 ?>
                            </td>
                            <td class="text-center">
                                <?= $sale->customer_phone_069 ?>
                            </td>

                            <td class="text-right">
                                <strong><?= $sale->price_069 ?></strong>
                            </td>
                        </tr>

                    <?php } ?>
                    <tr>
                        <td colspan="7" style="text-align: center;"><strong>Sales Total</strong> </td>
                        <td style="text-align: right;"><strong>: $ <?= $total ?></strong></td>
                    </tr>


                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
        <!-- pagination -->
        <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                
            </ul>
        </div> -->
    </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->