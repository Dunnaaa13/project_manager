@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teams as $team)
					<tr>
						<td>{{ $team->id }}</td>
						<td>{{ $team->name }}</td>
						<td><a href="/teams/{{ $team->id }}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teams/add'>Add New Team</a>
	</div>
@endsection