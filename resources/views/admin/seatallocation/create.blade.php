@extends('layouts.admin')

@section('title', "Create seat allocation")

@section('content')

<div class="title pb-20">
	<h2 class="h3 mb-0">Create New seat allocation</h2>
</div>

<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Create New seat allocation</h4>
		</div>
		<div class="pull-right">
			<a
			href="{{ route('seatallocation.index') }}"
			{{-- class="btn btn-primary btn-sm scroll-click" --}}
			rel="content-y"
			data-toggle="collapse"
			{{-- role="button" --}}
			><i class=""></i> Trip List </a
			>
		</div>
	</div>
	<form  method="post" action="{{ route('seatallocation.store') }}">
		@csrf
		<div class="form-group">

			<label>Trip Name <span style="color: red">*</span></label>
			<select
				class="custom-select2 form-control"
				name="trip_id"
				style="width: 100%; height: 38px"
			>
				@foreach ($trips as $trip)
					<option  value="{{$trip->id}}">{{$trip->name}}</option>
				@endforeach
				</select>

				@if($errors->has('trip_id'))
					<span class="help-block">
						{{ $errors->first('trip_id') }}
					</span>
				@endif
		</div>
		<div class="form-group">
			<label>User Name<span style="color: red">*</span></label>
			<select
				class="custom-select2 form-control"
				name="user_id"
				style="width: 100%; height: 38px"
			>
				{{-- <option value="AK">Alaska</option>
				<option value="HI">Hawaii</option> --}}
				@foreach ($users as $user)
					<option  value="{{$user->id}}">{{$user->name}}</option>
				@endforeach
				</select>

				@if($errors->has('user_id'))
					<span class="help-block">
						{{ $errors->first('user_id') }}
					</span>
				@endif
		</div>
		<div class="form-group">
			<label>Seat Number<span style="color: red">*</span></label>
			<select
				class="custom-select2 form-control"
				name="seat_number"
				style="width: 100%; height: 38px"
			>
			<option  value="1">1</option>
			<option  value="2">2</option>
			<option  value="3">3</option>
			<option  value="4">4</option>
			<option  value="5">5</option>
			<option  value="6">6</option>
			<option  value="7">7</option>
			<option  value="8">8</option>
			<option  value="9">9</option>
			<option  value="10">10</option>
			<option  value="11">11</option>
			<option  value="12">12</option>
			<option  value="13">13</option>
			<option  value="14">14</option>
			<option  value="15">15</option>
			<option  value="16">16</option>
			<option  value="17">17</option>
			<option  value="18">18</option>
			<option  value="19">19</option>
			<option  value="20">20</option>
			<option  value="21">21</option>
			<option  value="22">22</option>
			<option  value="23">23</option>
			<option  value="24">24</option>
			<option  value="25">25</option>
			<option  value="26">26</option>
			<option  value="27">27</option>
			<option  value="28">28</option>
			<option  value="29">29</option>
			<option  value="30">30</option>
			<option  value="31">31</option>
			<option  value="32">32</option>
			<option  value="33">33</option>
			<option  value="34">34</option>
			<option  value="35">35</option>
			<option  value="36">36</option>
			
			</select>

			@if($errors->has('seat_number'))
				<span class="help-block">
					{{ $errors->first('seat_number') }}
				</span>
			@endif
		</div>
		
		
		<div class="form-group">
			<button class="btn btn-secondary" type="submit">Save</button>
		</div>
		
	</form>
</div>

@endsection


