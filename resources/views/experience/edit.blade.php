@extends('layout.master')

@section('title','Edit Experiences')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Experiences:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('experience/'.$ex->id.'/edit') }}">
							{{ method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="organisation" class="col-md-4 control-label">Company or Organisation</label>
                            <div class="col-md-6">
                                <input id="organisation" type="text" class="form-control" name="organisation" placeholder="{{$ex->organisation}}" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="role" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" placeholder="{{$ex->role}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('experience/create')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection