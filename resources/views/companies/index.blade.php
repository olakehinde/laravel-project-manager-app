@extends('layouts.app')
@section('content')
	<div class="col-md-6-offset-3 col-lg-6 col-lg-offest-3 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading panel-primary">Company <a class="btn btn-success pull-right btn-sm" href="/companies/create">Add new Company</a></div>
			<div class="panel-body">
				<ul class="list-group">
					@foreach($companies as $company)
					<li class="list-group-item"><a href="/companies/{{$company->id}}">{{ $company->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection