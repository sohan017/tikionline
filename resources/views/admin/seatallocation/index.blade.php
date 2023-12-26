@extends('layouts.admin')

@section('title', "Seat allocation")

@section('content')


<div class="card-box pb-10">
	<div class="h5 pd-20 mb-0">
		<a type="" class="btn btn-info btn-round" href="{{ route('seatallocation.create') }}">Seat Allocation</a>
		<p>Seat Allocation</p>
		
	</div>
	
	<table class="data-table table nowrap">
		<thead>
			<tr>
				<th class="table-plus">#No</th>
				<th>Trip Name</th>
				<th>User Name</th>
				<th>Seat Number</th>
				<th class="datatable-nosort">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0 ?>
				@foreach($seatallocations as $seatallocation)
			<?php $i++ ?>
			<tr>
				<td>{{ $i }}</td>
				<td>{{ $seatallocation->trip->name }}</td>
				<td>{{ $seatallocation->user->name }}</td>
				<td>{{ $seatallocation->seat_number }}</td>
				
				<td>
					<div class="table-actions">
						<a href="{{ route('seatallocation.edit', $seatallocation->id) }}" data-color="#265ed7"
							><i class="icon-copy dw dw-edit2"></i
						></a>
						<form action="{{ route('seatallocation.destroy', $seatallocation->id) }}" method="post">
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

	