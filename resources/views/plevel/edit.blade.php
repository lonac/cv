@extends('layout.master')

@section('title','Edit Phd Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Phd Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('plevel/'.$pl->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="uniname" class="col-md-4 control-label">University Name:</label>
                            <div class="col-md-6">
                                <input id="uniname" type="text" class="form-control" name="uniname" required autofocus placeholder="{{$pl->uniname}}">
                        	</div>
						</div>

						<div class="form-group">
                            <label for="pyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="pyear" type="text" class="form-control" name="pyear" placeholder="{{$pl->pyear}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="program" class="col-md-4 control-label">Program:</label>
                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program" placeholder="{{$pl->program}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('plevel/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection