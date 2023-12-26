@extends('layouts.admin')

@section('title', "Update seat allocation")

@section('content')

<div class="title pb-20">
	<h2 class="h3 mb-0">Update seat allocation</h2>
</div>

<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Update seat allocation</h4>
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
	<form  method="post" action="{{ route('seatallocation.update', $seatallocation->id) }}">
		@csrf
        @method("PUT")
		<div class="form-group">

			<label>Trip Name <span style="color: red">*</span></label>
			<select
				class="custom-select2 form-control"
				name="trip_id"
				style="width: 100%; height: 38px"
			>
				@foreach ($trips as $trip)
                    <option @if ($seatallocation->trip_id == $trip->id) selected @endif value="{{$trip->id}}">{{$trip->name}}</option>
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
                  <option @if ($seatallocation->user_id == $user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
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
			<option @if($seatallocation->seat_number == "1") selected @endif value="1">1</option>
			<option @if($seatallocation->seat_number == "2") selected @endif value="2">2</option>
			<option @if($seatallocation->seat_number == "3") selected @endif value="3">3</option>
			<option @if($seatallocation->seat_number == "4") selected @endif value="4">4</option>
			<option @if($seatallocation->seat_number == "5") selected @endif value="5">5</option>
			<option @if($seatallocation->seat_number == "6") selected @endif value="6">6</option>
			<option @if($seatallocation->seat_number == "7") selected @endif value="7">7</option>
			<option @if($seatallocation->seat_number == "8") selected @endif value="8">8</option>
			<option @if($seatallocation->seat_number == "9") selected @endif value="9">9</option>
			<option @if($seatallocation->seat_number == "10") selected @endif value="10">10</option>
			<option @if($seatallocation->seat_number == "11") selected @endif value="11">11</option>
			<option @if($seatallocation->seat_number == "12") selected @endif value="12">12</option>
			<option @if($seatallocation->seat_number == "13") selected @endif value="13">13</option>
			<option @if($seatallocation->seat_number == "14") selected @endif value="14">14</option>
			<option @if($seatallocation->seat_number == "15") selected @endif value="15">15</option>
			<option @if($seatallocation->seat_number == "16") selected @endif value="16">16</option>
			<option @if($seatallocation->seat_number == "17") selected @endif value="17">17</option>
			<option @if($seatallocation->seat_number == "18") selected @endif value="18">18</option>
			<option @if($seatallocation->seat_number == "19") selected @endif value="19">19</option>
			<option @if($seatallocation->seat_number == "20") selected @endif value="20">20</option>
			<option @if($seatallocation->seat_number == "21") selected @endif value="21">21</option>
			<option @if($seatallocation->seat_number == "22") selected @endif value="22">22</option>
			<option @if($seatallocation->seat_number == "23") selected @endif value="23">23</option>
			<option @if($seatallocation->seat_number == "24") selected @endif value="24">24</option>
			<option @if($seatallocation->seat_number == "25") selected @endif value="25">25</option>
			<option @if($seatallocation->seat_number == "26") selected @endif value="26">26</option>
			<option @if($seatallocation->seat_number == "27") selected @endif value="27">27</option>
			<option @if($seatallocation->seat_number == "28") selected @endif value="28">28</option>
			<option @if($seatallocation->seat_number == "29") selected @endif value="29">29</option>
			<option @if($seatallocation->seat_number == "30") selected @endif value="30">30</option>
			<option @if($seatallocation->seat_number == "31") selected @endif value="31">31</option>
			<option @if($seatallocation->seat_number == "32") selected @endif value="32">32</option>
			<option @if($seatallocation->seat_number == "33") selected @endif value="33">33</option>
			<option @if($seatallocation->seat_number == "34") selected @endif value="34">34</option>
			<option @if($seatallocation->seat_number == "35") selected @endif value="35">35</option>
			<option @if($seatallocation->seat_number == "2") selected @endif value="36">36</option>
			
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


