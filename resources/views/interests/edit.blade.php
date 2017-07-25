@extends('layout.master')

@section('title','Edit Interests')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Interests:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('interests/'.$int->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}
						 <div class="form-group">
                            <label for="interests" class="col-md-4 control-label">Interests:</label>
                            <div class="col-md-6">
                                <input id="interests" type="text" class="form-control" name="interest" required autofocus placeholder="{{$int->interest}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('interests/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection