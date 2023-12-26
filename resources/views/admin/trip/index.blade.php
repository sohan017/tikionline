@extends('layouts.admin')

@section('title', "Product")

@section('content')


<div class="card-box pb-10">
	<div class="h5 pd-20 mb-0">
		<a type="" class="btn btn-info btn-round" href="{{ route('trip.create') }}">Trip Product</a>
		<p>Trip List</p>
		
	</div>
	
	<table class="data-table table nowrap">
		<thead>
			<tr>
				<th class="table-plus">#No</th>
				<th>Trip Name</th>
				<th>Departure Location</th>
				<th>Destination Location</th>
				<th>Date and Time</th>
				<th class="datatable-nosort">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0 ?>
				@foreach($trips as $trip)
			<?php $i++ ?>
			<tr>
				<td>{{ $i }}</td>
				<td>{{ $trip->name }}</td>
				<td>{{ $trip->departureLocation->name }}</td>
				<td>{{ $trip->destinationLocation->name }}</td>
				<td>{{ $trip->departure_date }}</td>
				
				<td>
					<div class="table-actions">
						<a href="{{ route('trip.edit', $trip->id) }}" data-color="#265ed7"
							><i class="icon-copy dw dw-edit2"></i
						></a>
						<form action="{{ route('trip.destroy', $trip->id) }}" method="post">
                            @method("DELETE")
                            @csrf

                            <button type="submit" onclick="return confirm('Are you sure?')" data-color="#e95959" data-toggle="tooltip" data-placement="top" title="Delete Product"><i class="icon-copy dw dw-delete-3"></i></button>
                        </form>

						
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection

	