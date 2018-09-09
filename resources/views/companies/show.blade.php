@extends('layouts.app')

@section('content')
	<div class="jumbotron">
		<h1>{{$company->name}}</h1>
		<p class="lead">{{$company->description}}</p>
		<!-- <p><a class="btn btn-lg btn-success" href="#" role="button">view details</a></p> -->
	</div>

	<div class="row">
		<div class="col-lg-4">
			<h2>Project name</h2>
			<p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p><a href="#" class=" btn btn-primary">View</a></p>
		</div>

		<div class="col-lg-4">
			<h2>Project name</h2>
			<p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p><a href="#" class=" btn btn-primary">View</a></p>
		</div>

		<div class="col-lg-4">
			<h2>Project name</h2>
			<p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p><a href="#" class=" btn btn-primary">View</a></p>
		</div>
	</div>
@endsection