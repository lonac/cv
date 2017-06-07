@extends('layout.master')

@section('title','Interests')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Add Interests:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('interests/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="interests" class="col-md-4 control-label">Interests:</label>
                            <div class="col-md-6">
                                <input id="interests" type="text" class="form-control" name="interest" required autofocus>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Create</button>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection