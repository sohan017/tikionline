@extends('layouts.admin')

@section('title', "Create Trip")

@section('content')

<div class="title pb-20">
	<h2 class="h3 mb-0">Create New Trip</h2>
</div>

<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Create New Trip</h4>
		</div>
		<div class="pull-right">
			<a
			href="{{ route('trip.index') }}"
			{{-- class="btn btn-primary btn-sm scroll-click" --}}
			rel="content-y"
			data-toggle="collapse"
			{{-- role="button" --}}
			><i class=""></i> Trip List </a
			>
		</div>
	</div>
	<form  method="post" action="{{ route('trip.store') }}">
		@csrf
		<div class="form-group">

			<label>Trip Name <span style="color: red">*</span></label>
			<input
			name="name"
			class="form-control @error('name') is-invalid @enderror"
			type="text"
			placeholder="Trip Name"
			/>
			@error('name')
				<small class="invalid-feedback">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
			<label>Departure Location<span style="color: red">*</span></label>
			<select
				class="custom-select2 form-control"
				name="departure_location_id"
				style="width: 100%; height: 38px"
			>
				{{-- <option value="AK">Alaska</option>
				<option value="HI">Hawaii</option> --}}
				@foreach ($locations as $location)
					<option  value="{{$location->id}}">{{$location->name}}</option>
				@endforeach
				</select>

				@if($errors->has('departure_location_id'))
					<span class="help-block">
						{{ $errors->first('departure_location_id') }}
					</span>
				@endif
		</div>
		<div class="form-group">
			<label>Destination Location<span style="color: red">*</span></label>
			<select
				class="custom-select2 form-control"
				name="destination_location_id"
				style="width: 100%; height: 38px"
			>
			@foreach ($locations as $location)
			<option  value="{{$location->id}}">{{$location->name}}</option>
			@endforeach
			</select>

			@if($errors->has('destination_location_id'))
				<span class="help-block">
					{{ $errors->first('destination_location_id') }}
				</span>
			@endif
		</div>
		
		<div class="form-group">
			<label>Date and Time <span style="color: red">*</span></label>
			<input
			name="departure_date"
			class="form-control datetimepicker @error('quantity') is-invalid @enderror"
			type="text"
			placeholder="Trip Quantity"
			/>
			@error('quantity')
				<small class="invalid-feedback">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
			<button class="btn btn-secondary" type="submit">Save</button>
		</div>
		
	</form>
</div>

@endsection


