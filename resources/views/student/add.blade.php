@extends('master')

@section('title', 'Add student')

@section('content')
		
	<h2>Add student</h2>	
	<hr>
	<form method="post" class="col-sm-8 col-sm-offset-1">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" required>

			<label for="last_name">Last name:</label>
			<input type="text" name="last_name" class="form-control" required>

			<label for="grade">Grade:</label>
			<input type="text" name="grade" class="form-control" required>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</div>

		<button type="submit" class="btn btn-primary pull-right">Add</button>
	</form>	

@endsection