@include('header')

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-primary p-48">
												<i class="ti-eye"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Order Received</div>
												<div class="stat-digit">6,250</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-success p-48">
												<i class="ti-bag"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Today Delevered</div>
												<div class="stat-digit">2,584</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-warning p-48">
												<i class="ti-user"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">New Customer</div>
												<div class="stat-digit">9,874</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-danger p-48">
												<i class="ti-money"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Net Earning</div>
												<div class="stat-digit">3,5621</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card bg-success">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-up"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Daily sales</div>
												<div class="stat-text">Total: 9765</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card bg-primary">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-down"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Daily Expense</div>
												<div class="stat-text">Total: 6765</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /# column -->
						<div class="col-lg-6">
							<div class="card alert">
								<div class="card-header">
									<h4>Earning Graph</h4>
									<div class="card-header-right-icon">
										<ul>
											<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
											<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="sales-chart">
									<canvas id="team-chart"></canvas>
								</div>
							</div>
						</div><!-- /# column -->
                    </div><!-- /# row -->
					<div class="row">
						<div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Menu List</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <tbody>
                                            <tr>
                                                <td class="no-border">Chicken Burger</td>
                                                <td class="no-border"><span class="btn btn-primary">$21</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hot Dog</td>
                                                <td><span class="btn btn-success">$15</span></td>
                                            </tr>
                                            <tr>
                                                <td>Soft Drinks</td>
                                                <td><span class="btn btn-danger">$30</span></td>
                                            </tr>
                                            <tr>
                                                <td>Nudulles</td>
                                                <td><span class="btn btn-primary">$25</span></td>
                                            </tr>
                                            <tr>
                                                <td>Thai Soup</td>
                                                <td><span class="btn btn-success">$29</span></td>
                                            </tr>
                                            <tr>
                                                <td>Fried Rice</td>
                                                <td><span class="btn btn-danger">$14</span></td>
                                            </tr>
                                            <tr>
                                                <td>Vegitables</td>
                                                <td><span class="btn btn-success">$18</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /# column -->
						<div class="col-lg-8">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Online Order List </h4>
									<div class="card-header-right-icon">
										<ul>
											<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
											<li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
												<ul class="card-option-dropdown dropdown-menu">
													<li><a href="#"><i class="ti-loop"></i> Update data</a></li>
													<li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
													<li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
													<li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
												</ul>
											</li>
											<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
										</ul>
									</div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Order ID</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Delevery</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Saiful Islam</td>
												<td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-success">$21.56</td>
                                                <td><span class="btn btn-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jannatul Mariam</td>
												<td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-warning">$21.56</td>
                                                <td><span class="btn btn-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>Anik Hasan</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-danger">$21.56</td>
                                                <td><span class="btn btn-danger">Cancel</span></td>
                                            </tr>
                                            <tr>
                                                <td>Micheal Qin</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-success">$21.56</td>
                                                <td><span class="btn btn-success">paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>John Doe</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-success">$21.56</td>
                                                <td><span class="btn btn-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jannatul Tasnim</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-warning">$21.56</td>
                                                <td><span class="btn btn-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /# column -->
					</div><!-- /# row -->

				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->


@include('footer')







