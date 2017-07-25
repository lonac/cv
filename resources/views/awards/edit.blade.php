@extends('layout.master')

@section('title','Edit Awards')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Awards:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('awards/'.$aw->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Date/Year:</label>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" required="" placeholder="{{$aw->date}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Award Name:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="{{$aw->name}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('awards/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection