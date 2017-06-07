@extends('layout.master')

@section('title','Phd Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Phd Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('plevel/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="uniname" class="col-md-4 control-label">University Name:</label>
                            <div class="col-md-6">
                                <input id="uniname" type="text" class="form-control" name="uniname" required autofocus>
                        	</div>
						</div>

						<div class="form-group">
                            <label for="pyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="pyear" type="text" class="form-control" name="pyear" placeholder="e.g. 1995 - 2010">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="program" class="col-md-4 control-label">Program:</label>
                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program" placeholder="Diploma in ICT">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Save</button>
                   			<a href="{{url('experience/create')}}" class="btn btn-success" role="button">NEXT</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection