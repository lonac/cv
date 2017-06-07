@extends('layout.master')

@section('title','Diploma Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Diploma Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('dlevel/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="colname" class="col-md-4 control-label">College Name:</label>
                            <div class="col-md-6">
                                <input id="colname" type="text" class="form-control" name="colname" required autofocus>
                        	</div>
						</div>

						<div class="form-group">
                            <label for="dyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="dyear" type="text" class="form-control" name="dyear" placeholder="e.g. 1995 - 2010">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="program" class="col-md-4 control-label">Program:</label>
                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program" placeholder="Diploma in ICT">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Save</button>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection