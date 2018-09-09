@extends('layouts.app')

@section('content')
	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		<div class="jumbotron">
			<h1>{{$company->name}}</h1>
			<p class="lead">{{$company->description}}</p>
			<!-- <p><a class="btn btn-lg btn-success" href="#" role="button">view details</a></p> -->
		</div>

		<div class="row" style="background-color: white; margin: 3px;">
			@foreach($company->projects as $project)
			<div class="col-lg-4">
				<h2>{{ $project->name }}</h2>
				<p class="text-danger">{{ $project->description }}</p>
				<p><a href="/projects/{{ $project->id }}" class=" btn btn-primary">View Details</a></p>
			</div>
			@endforeach
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 pull-right blog-sidebar">
		<!-- <div class="sidebar-module sidebar-module-inset">
			<h4>About</h4>
			<p>Lorem ipsum dolor sit amet, <em>consectetur adipisicing elit,</em> sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div> -->

		<div class="sidebar-module">
			<h4>Manage Project</h4>
			<ol class="list-unstyled">
				<li><a href="#">Edit</a></li>
				<li><a href="#">Delete</a></li>
				<li><a href="#">Add new Member</a></li>
			</ol>
		</div>

		<!-- <div class="sidebar-module">
			<h4>Members</h4>
			<ol class="list-unstyled">
				<li><a href="#">January 2018</a></li>
				<li><a href="#">February 2018</a></li>
				<li><a href="#">March 2018</a></li>
				<li><a href="#">April 2018</a></li>
				<li><a href="#">May 2018</a></li>
				<li><a href="#">June 2018</a></li>
				<li><a href="#">July 2018</a></li>
				<li><a href="#">August 2018</a></li>
				<li><a href="#">September 2018</a></li>
				<li><a href="#">October 2018</a></li>
				<li><a href="#">November 2018</a></li>
				<li><a href="#">December 2018</a></li>
			</ol>
		</div>
		<div class="sidebar-module">
			<h4>Social Media</h4>
			<ol class="list-unstyled">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Instagram</a></li>
			</ol>
		</div> -->
	</div>
@endsection