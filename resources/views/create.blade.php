<!--create new property-->
@extends('layouts.app')

@section('content')
	<div>
		<h1 class="mb-4">Add New Property</h1>
		<form method="post" action="{{ route('store') }}" enctype="multipart/form-data" class="border p-4 rounded shadow">
			@csrf
			<div class="mb-3">
				<label for="title">Property Title</label>
				<input type="text" name="title" id="title" class="form-control" required>
			</div>
			<div class="mb-3">
				<label for="description">Description</label>
				<textarea name="description" id="description" class="form-control"></textarea>
			</div>
			<div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="number_of_bedrooms">No. of Rooms</label>
						<input type="number" name="number_of_bedrooms" id="number_of_bedrooms" class="form-control" required>
					</div>
					<div class="col-md-6 mb-3">
						<label for="number_of_bathrooms">No. of Bathrooms</label>
						<input type="number" name="number_of_bathrooms" id="number_of_bathrooms" step="0.5" class="form-control" required>
					</div>
				</div>
			</div>
			<div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="price">Price</label>
						<input type="number" name="price" id="price" step="0.01" class="form-control" required>
					</div>
					<div class="col-md-6 mb-3">
						<label for="type">Property Title</label>
						<select name="type" id="type" class="form-control" required>
							<option value="House">House</option>
							<option value="Apartment">Apartment</option>
						</select>
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label for="location">Location</label>
				<input type="text" name="location" id="location" class="form-control" required>
			</div>
			<div class="mb-3">
				<label for="photo">Photo:</label>
				<input type="file" name="photo" id="photo" class="form-control">
			</div>
			<div>
				<button type="Submit" class="btn btn-primary">Add Property</button>
			</div>
		</form>
		@if($errors->any())
			<div class="alert alert-danger mt-3">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
@endsection