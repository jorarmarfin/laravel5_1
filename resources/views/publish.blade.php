@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">My Publish</div>
				<div class="panel-body">
					@include('partials.errors')
					@if(Session::has('alert'))
						<p class='alert alert-success'>{{Session::get('alert')}}</p>
					@endif
					<p>Welcome my Publish </p>
					<form method="POST" action="{{url('publish')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Titulo</label>
					    <input type="text" name="titulo" class="form-control" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">post</label>
					    <input type="text" name="post" class="form-control" >
					  </div>

					  <button type="submit" class="btn btn-default">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection