<!--list all properties-->
@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<h1 class="mb-3">Properties</h1>
		@if($properties->count()>0)
			<div class="row">
				@foreach($properties as $property)
					<div class="col-md-4 mb-4">
						<div class="card">
							@if($property->photo)
								<img src="{{ asset('storage/' .$property->photo) }}" class="card-img-top" alt="{{ $property->title }}" style="height: 200px; object-fit: cover;">
							@endif
							<div class="card-body d-flex flex-column">
								<h5 class="card-title text-primary">{{$property->title}}</h5>
								<p class="card-text">{{$property->location}}</p>
								<p class="card-text">${{number_format($property->price, 2)}}</p>
								<div class="mt-auto">
									<a href="{{ route('single', $property) }}" class="btn btn-primary w-100">View Property</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<p class="mt-3">No properties found.</p>
		@endif
	</div>
@endsection