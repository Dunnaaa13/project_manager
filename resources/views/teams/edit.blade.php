@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/teams/{{ $team->id }}/update">
		@csrf
		   <div class="form-group">
		    <label for="id">ID</label>
		    <input type="text" class="form-control" name='id' aria-describedby="emailHelp" placeholder="ID">
		  </div>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection