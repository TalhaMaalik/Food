<? include 'header.php'?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="main-content">

                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-2">
                                        <h4 class="card-title">Restaurants List</h4></div>
                                    <div class="col-md-2 pull-right"><input type="text" class="form-control" placeholder="Enter ID to search"></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KFC</td>
                                            <td>Gulistan-E-Jauhar</td>
                                            <td>0332-2326464</td>
                                            <td><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit" style="margin-right: 10px"><i
                                                            class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()"
                                                                                                         data-toggle="tooltip" data-placement="top" title="Close"><i
                                                            class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->




<? include 'footer.php'?>