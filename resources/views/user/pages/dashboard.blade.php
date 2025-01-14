@extends('admin.main')
@session('content')
    <!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('admin.components.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('admin.components.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="card shadow-none bg-transparent">
					<div class="card-header py-3">
						<div class="row align-items-center">
							<div class="col-md-3">
								<h4 class="mb-3 mb-md-0">Audience Overview</h4>
							</div>
							<div class="col-md-9">
								<form class="float-md-end">
									<div class="row row-cols-md-auto g-lg-3">
										<label for="inputFromDate" class="col-md-2 col-form-label text-md-end">From Date</label>
										<div class="col-md-4">
											<input type="date" class="form-control" id="inputFromDate">
										</div>
										<label for="inputToDate" class="col-md-2 col-form-label text-md-end">To Date</label>
										<div class="col-md-4">
											<input type="date" class="form-control" id="inputToDate">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div id="chart1"></div>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Users</p>
										<h5 class="mb-0">85,028</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="" id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Page Views</p>
										<h5 class="mb-0">42,892</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="" id="chart3"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Avg. Session Duration</p>
										<h5 class="mb-0">00:03:20</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="" id="chart4"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Bounce Rate</p>
										<h5 class="mb-0">51.46%</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="" id="chart5"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-2">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div id="chart6"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div id="chart7"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row row-cols-1 row-cols-md-1">
					<div class="col col-lg-8">
						<div class="card radius-10 shadow-none bg-transparent">
							<div class="card-body">
								<div id="geographic-map"></div>
							</div>
						</div>
					</div>
					<div class="col col-lg-4">
						<div class="card radius-10 shadow-none bg-transparent overflow-hidden">
							<div class="card-body">
								<div class="d-lg-flex align-items-center">
									<div>
										<h5 class="mb-0">Top countries</h5>
									</div>
									<div class="ms-auto">
										<h3 class="mb-0"><span class="font-14">Total Visits:</span> 9587</h3>
									</div>
								</div>
							</div>
							<hr/>
							<div class="dashboard-top-countries mb-3 px-2">
								<ul class="list-group list-group-flush radius-10">
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-in"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">India</h6>
											</div>
										</div>
										<div class="ms-auto">647</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-us"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">United States</h6>
											</div>
										</div>
										<div class="ms-auto">435</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-vn"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">Vietnam</h6>
											</div>
										</div>
										<div class="ms-auto">287</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-au"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">Australia</h6>
											</div>
										</div>
										<div class="ms-auto">432</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-dz"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">Angola</h6>
											</div>
										</div>
										<div class="ms-auto">345</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-ax"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">Aland Islands</h6>
											</div>
										</div>
										<div class="ms-auto">134</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-ar"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">Argentina</h6>
											</div>
										</div>
										<div class="ms-auto">147</div>
									</li>
									<li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
										<div class="d-flex align-items-center">
											<div class="font-20"><i class="flag-icon flag-icon-be"></i>
											</div>
											<div class="flex-grow-1 ms-2">
												<h6 class="mb-0">Belgium</h6>
											</div>
										</div>
										<div class="ms-auto">210</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div id="chart8"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Browser Statistics</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mt-4" id="chart9"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 font-weight-bold">Social Traffic</h5>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="d-flex mt-2 mb-4">
									<h2 class="mb-0 font-weight-bold">89,421</h2>
									<p class="mb-0 ms-1 font-14 align-self-end text-secondary">Total Visits</p>
								</div>
								<div class="progress radius-10" style="height:10px">
									<div class="progress-bar bg-primary w-25" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table mb-0">
										<tbody>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class="bx bxs-checkbox me-2 font-22 text-primary"></i>
														</div>
														<div>Facebook</div>
													</div>
												</td>
												<td>46 Visits</td>
												<td class="px-0 text-right">33%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class="bx bxs-checkbox me-2 font-22 text-danger"></i>
														</div>
														<div>YouTube</div>
													</div>
												</td>
												<td>12 Visits</td>
												<td class="px-0 text-right">17%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class="bx bxs-checkbox me-2 font-22 text-info"></i>
														</div>
														<div>Linkedin</div>
													</div>
												</td>
												<td>29 Visits</td>
												<td class="px-0 text-right">21%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class="bx bxs-checkbox me-2 font-22 text-warning"></i>
														</div>
														<div>Twitter</div>
													</div>
												</td>
												<td>34 Visits</td>
												<td class="px-0 text-right">23%</td>
											</tr>
											<tr>
												<td class="px-0">
													<div class="d-flex align-items-center">
														<div><i class="bx bxs-checkbox me-2 font-22 text-success"></i>
														</div>
														<div>Dribbble</div>
													</div>
												</td>
												<td>28 Visits</td>
												<td class="px-0 text-right">19%</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="card radius-10">
					<div class="card-body">
						<div class="table-responsive lead-table">
							<table class="table mb-0 align-middle">
								<thead class="table-light">
									<tr>
										<th>Potential Leads</th>
										<th>Diposit</th>
										<th>Progress</th>
										<th>Last Update</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="">
													<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="40" height="40" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">Ronald Waters</h6>
													<p class="mb-0 font-13 text-secondary">Lead Designers</p>
												</div>
											</div>
										</td>
										<td>$89,620</td>
										<td class=" w-25">
											<div class="progress radius-10" style="height:5px">
												<div class="progress-bar bg-primary w-75" role="progressbar"></div>
											</div>
										</td>
										<td>14 Oct 2020</td>
										<td>
											<div class="badge rounded-pill bg-primary w-100">In Progress</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="">
													<img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="40" height="40" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">David Buckley</h6>
													<p class="mb-0 font-13 text-secondary">Lead Designers</p>
												</div>
											</div>
										</td>
										<td>$38,520</td>
										<td class=" w-25">
											<div class="progress radius-10" style="height:5px">
												<div class="progress-bar bg-danger w-50" role="progressbar"></div>
											</div>
										</td>
										<td>15 Oct 2020</td>
										<td>
											<div class="badge rounded-pill bg-danger w-100">Cancelled</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="">
													<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="40" height="40" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">James Caviness</h6>
													<p class="mb-0 font-13 text-secondary">Lead Designers</p>
												</div>
											</div>
										</td>
										<td>$63,820</td>
										<td class=" w-25">
											<div class="progress radius-10" style="height:5px">
												<div class="progress-bar bg-success w-100" role="progressbar"></div>
											</div>
										</td>
										<td>16 Oct 2020</td>
										<td>
											<div class="badge rounded-pill bg-success w-100">Completed</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="">
													<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="40" height="40" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">John Roman</h6>
													<p class="mb-0 font-13 text-secondary">Lead Designers</p>
												</div>
											</div>
										</td>
										<td>$97,420</td>
										<td class=" w-25">
											<div class="progress radius-10" style="height:5px">
												<div class="progress-bar bg-primary w-50" role="progressbar"></div>
											</div>
										</td>
										<td>18 Oct 2020</td>
										<td>
											<div class="badge rounded-pill bg-primary w-100">In Progress</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="">
													<img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="40" height="40" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">Johnny Seitz</h6>
													<p class="mb-0 font-13 text-secondary">Lead Designers</p>
												</div>
											</div>
										</td>
										<td>$48,360</td>
										<td class=" w-25">
											<div class="progress radius-10" style="height:5px">
												<div class="progress-bar bg-danger w-50" role="progressbar"></div>
											</div>
										</td>
										<td>22 Oct 2020</td>
										<td>
											<div class="badge rounded-pill bg-danger w-100">Cancelled</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="">
													<img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="40" height="40" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">Pauline Bird</h6>
													<p class="mb-0 font-13 text-secondary">Lead Designers</p>
												</div>
											</div>
										</td>
										<td>$74,620</td>
										<td class=" w-25">
											<div class="progress radius-10" style="height:5px">
												<div class="progress-bar bg-success w-100" role="progressbar"></div>
											</div>
										</td>
										<td>24 Oct 2020</td>
										<td>
											<div class="badge rounded-pill bg-success w-100">Completed</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
		  <div class="modal-content">
			<div class="modal-header gap-2">
			  <div class="position-relative popup-search w-100">
				<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
				<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
			  </div>
			  <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="search-list">
				   <p class="mb-1">Html Templates</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i class='bx bxl-angular fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Web Designe Company</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-windows fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-dropbox fs-4' ></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Software Development</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Online Shoping Portals</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-slack fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-skype fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
				   </div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
    <!-- end search modal -->



	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsession