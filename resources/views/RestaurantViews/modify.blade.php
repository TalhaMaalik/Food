@include('header')

    <div class="content-wrap">



        <div class="main">
            <div class="container-fluid">

                <div class="main-content">

                    @if (isset($add_ons['message']))
                    <div class="alert alert-success">
                        <strong>{{$add_ons['message']}}.</strong>
                    </div>
                    @endif

                    @if (isset($add_ons['error']))
                    <div class="alert alert-danger">
                        <strong>{{$add_ons['error']}}</strong>.
                    </div>
                    @endif

                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">


                            <div class="card-body">

                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-2">
                                        <h4 class="card-title">Restaurants List</h4></div>

                                    <div class="form-search float-left">
                                        <form action="/modify/search" class="d-none d-sm-block" method="post">
                                            <div class="input-group search-box">
                                                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="mdi mdi mdi-magnify"></i>
                  </span>
                                                </div>
                                                <input class="form-control" name="search" placeholder="Type to search…" type="text">
                                            </div>
                                        </form>
                                    </div>
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
                                        @if (isset($add_ons['restobj']))
                                        @foreach ($add_ons['restobj'] as $restaurant)
                                        <tr>
                                            <td>{{$restaurant->id}}</td>
                                            <td>{{$restaurant->name}}</td>
                                            <td>{{$restaurant->address}}</td>
                                            <td>{{$restaurant->phone}}</td>
                                            <td><a href="/edit/{{$restaurant->id}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit" style="margin-right: 10px"><i
                                                            class="fa fa-pencil color-muted"></i> </a><a href="#" data-id="{{$restaurant->id}}" data-toggle="modal" data-target="#{{$restaurant->id}}"  title="Delete"><i
                                                            class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>
                                        <div id="{{$restaurant->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Delete Restaurant Information</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this restaurant's information?</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <a href="/delete/{{$restaurant->id}}" class="btn btn-success mr-2">Yes</a>

                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    {{$add_ons['restobj']->render()}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->





@include('footer')