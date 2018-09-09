@extends('layouts.app')

@section('content')
	<div class="jumbotron">
		<h1>{{$company->name}}</h1>
		<p class="lead">{{$company->description}}</p>
		<!-- <p><a class="btn btn-lg btn-success" href="#" role="button">view details</a></p> -->
	</div>

	<div class="row">
		@foreach($company->projects as $project)
		<div class="col-lg-4">
			<h2>{{ $project->name }}</h2>
			<p class="text-danger">{{ $project->description }}</p>
			<p><a href="/projects/{{ $project->id }}" class=" btn btn-primary">View Details</a></p>
		</div>
		@endforeach
	</div>
@endsection