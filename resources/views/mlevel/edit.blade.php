@extends('layout.master')

@section('title','Edit Masters Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Masters Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('mlevel/'.$ml->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="uniname" class="col-md-4 control-label">University Name:</label>
                            <div class="col-md-6">
                                <input id="uniname" type="text" class="form-control" name="uniname" required autofocus placeholder="{{$ml->uniname}}">
                        	</div>
						</div>

						<div class="form-group">
                            <label for="myear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="myear" type="text" class="form-control" name="myear" placeholder="{{$ml->myear}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="program" class="col-md-4 control-label">Program:</label>
                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program" placeholder="{{$ml->program}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('mlevel/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection