@extends('layout.master')

@section('title','Edit Professional Affiliation')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Professional Affiliation:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('professionalaffiliation/'.$pa->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Title:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="{{$pa->name}}">
                        	</div>
						</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('professionalaffiliation/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection