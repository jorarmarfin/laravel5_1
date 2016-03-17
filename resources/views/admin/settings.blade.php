@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Settings</div>
				<div class="panel-body">
					@include('partials.errors')
					@if(Session::has('alert'))
						<p class='alert alert-success'>{{Session::get('alert')}}</p>
					@endif
					<p>Welcome Settings</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection