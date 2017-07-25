@extends('layout.master')

@section('title','Edit Research')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Research:</div>
					<div class="panel-body">
						
						<form method="POST" action="{{ url('research/'.$rs->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Title:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="{{$rs->name}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" required autofocus placeholder="{{$rs->description}}"></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('research/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection