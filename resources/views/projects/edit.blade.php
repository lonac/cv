@extends('layout.master')

@section('title','Edit PROJECTS')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Projects:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('projects/'.$pr->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="title" class="col-md-4 control-label">JOB TITLE:</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" placeholder="{{$pr->title}}" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">DESCRIPTIONS:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" placeholder="{{$pr->description}}" required autofocus></TEXTAREA>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="reference" class="col-md-4 control-label">REFERENCES:</label>
                            <div class="col-md-6">
                                <input id="reference" type="text" class="form-control" name="reference" placeholder="{{$pr->reference}}" required autofocus>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('projects/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection