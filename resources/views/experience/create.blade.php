@extends('layout.master')

@section('title','Experiences')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Add Experiences:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('experience/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="organisation" class="col-md-4 control-label">Company or Organisation</label>
                            <div class="col-md-6">
                                <input id="organisation" type="text" class="form-control" name="organisation" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="role" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" placeholder="Worked As">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">SAVE</button>
                   			<a href="{{url('interests/create')}}" class="btn btn-success" role="button">NEXT</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection