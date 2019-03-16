
@include('header')



<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="main-content">



                <div class="row">
                    <section>
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                @if (isset($add_ons['errors']))
                                @foreach ($add_ons['errors'] as $error)
                                <div class="alert alert-danger">
                                    <strong>Error !</strong> {{$error}}.
                                </div>
                                @endforeach
                                @endif

                                @if (isset($add_ons['success']))
                                <div class="alert alert-success">
                                    {{$add_ons['success']}}.
                                </div>
                                @endif
                                <ul class="nav nav-tabs" role="tablist">

                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                                        </a>
                                    </li>

                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-map-marker"></i>
                            </span>
                                        </a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                                        </a>
                                    </li>

                                    <li role="presentation" class="disabled">
                                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <form action="/register" method="post" enctype="multipart/form-data">
                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                <div class="card alert">

                                                    <div class="card-header">
                                                        <h4 style="color: black">Owner's Information</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="basic-elements">

                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control" PLACEHOLDER="Name" name="owner_name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input id="example-email" class="form-control" type="text" placeholder="Email" name="email" >
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Phone</label>
                                                                            <input type="tel" class="form-control" name="owner_phone" data-masked-input="9999-9999999" placeholder="xxxx-xxxxxxx" >
                                                                        </div>
                                                                        <button type="button" class="btn btn-primary next-step pull-right ">Save and continue</button>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /# column -->
                                            <div class="col-lg-1"></div>

                                        </div><!-- /# row -->
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                <div class="card alert">

                                                    <div class="card-header">
                                                        <h4 style="color: black">Restaurant's Information</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="basic-elements">

                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Restaurant Name</label>
                                                                            <input type="text" class="form-control" name="restaurant_name" PLACEHOLDER="Name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <input id="example-email" class="form-control" type="text" placeholder="address" name="restaurantaddress">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Phone</label>
                                                                            <input type="tel" class="form-control" name="rest_phone" data-masked-input="9999-9999999" placeholder="xxxx-xxxxxxx">
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label class="control-label">Lat.:</label>
                                                                                <input type="text" class="form-control" id="us3-lat" name="lat" />
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label>Long.:</label>
                                                                                <input type="text" class="form-control" id="us3-lon" name="long" />
                                                                            </div>
                                                                        </div>

                                                                        <!-- map -->
                                                                        <div id="googleMap" style="height: 500px;"></div>

                                                                        <button type="button" class="btn btn-primary next-step pull-right ">Save and continue</button>
                                                                        <button type="button" class="btn btn-primary prev-step pull-right">Previous</button>

                                                                    </div>

                                                                </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /# column -->
                                            <div class="col-lg-1"></div>
                                        </div><!-- /# row -->
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                <div class="card alert">

                                                    <div class="card-header">
                                                        <h4 style="color: black">Menu's Information</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="basic-elements">

                                                                <div class="row">

                                                                    <div class="col-lg-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label">Item Name:</label>
                                                                                <input type="text" class="form-control" name="item[0][name]" />
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label>Item Price:</label>
                                                                                <input type="Number" class="form-control" name="item[0][price]" />
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label>Picture:</label>
                                                                                <input type="file" accept="image/img,png" class="form-control" name="item[0][image]" />
                                                                            </div>
                                                                            <div class="col-sm-1">
                                                                                <label> Add Item:</label>
                                                                                <input type="button" class="btn btn-success addmore" value="+" />
                                                                            </div>

                                                                        </div>
                                                                        <div id="addHtml"></div>


                                                                        <button type="button" class="btn btn-primary next-step pull-right ">Save and continue</button>
                                                                        <button type="button" class="btn btn-primary prev-step pull-right" id="addmore">Previous</button>

                                                                    </div>

                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /# column -->
                                            <div class="col-lg-1"></div>
                                        </div><!-- /# row -->

                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="complete">

                                        <div class="col-lg-1"></div>

                                        <div class="col-lg-10">
                                            <div class="card alert">
                                                <div class="card-header">
                                                    <h4 style="color: black">Delivery Information</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="basic-elements">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Delivery Charges</label>
                                                                    <input type="number" class="form-control" PLACEHOLDER="$" name="deliverycharges">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Delivery Time</label>
                                                                    <input class="form-control" type="Number" placeholder="Time in minutes" name="deliverytime">
                                                                </div>

                                                                <button type="submit" class="btn btn-primary  pull-right ">Submit</button>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /# column -->
                                        <div class="col-lg-1"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>


            </div><!-- /# main content -->
        </div><!-- /# container-fluid -->
    </div><!-- /# main -->
</div><!-- /# content wrap -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="/js/jquery.masked-input.min.js"></script>
<script src="/js/multistepform.js"></script>



@include('footer')
