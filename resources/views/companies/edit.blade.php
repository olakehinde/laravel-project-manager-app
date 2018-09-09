@extends('layouts.app')

@section('content')
	<div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
		<div class="row col-sm-12 col-md-12 col-lg-12" style="background-color: white; margin: 3px;">

		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 pull-right blog-sidebar">
		<div class="sidebar-module">
			<h4>Manage Project</h4>
			<ol class="list-unstyled">
				<li style="padding-bottom: 3px"><a href="/companies/{{ $company->id }}/edit" class="btn btn-primary">Edit</a></li>
				<li style="padding-bottom: 3px"><a href="/companies/{{ $company->id }}/delete" class="btn btn-danger">Delete</a></li>
				<li style="padding-bottom: 3px"><a href="#" class="btn btn-success">Add new Member</a></li>
			</ol>
		</div>

	</div>
@endsection