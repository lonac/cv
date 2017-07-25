@extends('layout.master')

@section('title','Edit Activities')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Activities:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('activities/'.$act->id.'/edit') }}">
							{{ method_field('patch')}}
						{{ csrf_field() }}
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descriptions:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" placeholder="{{$act->description}}" name="description" required autofocus></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('activities/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection