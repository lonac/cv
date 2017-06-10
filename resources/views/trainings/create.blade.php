@extends('layout.master')

@section('title','Professional Trainings')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Professional Trainings:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('trainings/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Date/Year:</label>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descriptions:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" required autofocus></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">SAVE</button>
                   			    <a href="{{url('mycv/show')}}" class="btn btn-success" role="button">DONE</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection