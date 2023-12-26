@extends('layouts.admin')

@section('title', "Dashboard")

@section('content')

		<div class="title pb-20">
			<h2 class="h3 mb-0">Sale Overview</h2>
		</div>

		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"></div>
							<div class="font-14 text-secondary weight-500">
								Todays Sale
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf">
								<i class="icon-copy dw dw-calendar1"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"></div>
							<div class="font-14 text-secondary weight-500">
								Yesterday Sale
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ff5b5b">
								<span class="icon-copy ti-heart"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"></div>
							<div class="font-14 text-secondary weight-500">
								This Month Sale
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon">
								<i
									class="icon-copy fa fa-stethoscope"
									aria-hidden="true"
								></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"></div>
							<div class="font-14 text-secondary weight-500">Last Month Sale</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06">
								<i class="icon-copy fa fa-money" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		




@endsection


