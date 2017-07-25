@extends('layout.master')

@section('title','Edit Professional Trainings')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Professional Trainings:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('trainings/'.$pt->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Date/Year:</label>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" required="" placeholder="{{$pt->date}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descriptions:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" placeholder="{{$pt->description}}">
                        	</TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('trainings/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection