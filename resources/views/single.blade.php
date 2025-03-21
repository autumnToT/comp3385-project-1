<!--show property-->
@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				@if($property->photo)
					<img src="{{ asset('storage/' .$property->photo) }}" alt="{{ $property->title }}" class="img-fluid rounded" style="max-width: 400px;">
				@endif
			</div>
			<div class="col-md-6">
				<h1>{{ $property->title }}</h1>
                <h4 class="text-primary">${{ number_format($property->price, 2) }}</h4>
                <p class="text-muted">{{ $property->type }}</p>
                <p>{{ $property->description }}</p>
                <ul class="list-unstyled">
                    <li><strong>{{ $property->number_of_bedrooms }}</strong> Bedrooms</li>
                    <li><strong>{{ $property->number_of_bathrooms }}</strong> Bathrooms</li>
                    <li><strong>{{ $property->location }}</strong></li>
                </ul>
                <a href="#" class="btn btn-primary">Email Realtor</a>
			</div>
		</div>
	</div>
@endsection