@extends('layout.master')

@section('title','Certificates Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Certificate Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('clevel/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="colname" class="col-md-4 control-label">College Name:</label>
                            <div class="col-md-6">
                                <input id="colname" type="text" class="form-control" name="colname" required autofocus>
                        	</div>
						</div>

						<div class="form-group">
                            <label for="cyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="cyear" type="text" class="form-control" name="cyear" placeholder="e.g. 1995 - 2010">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="remark" class="col-md-4 control-label">Remark:</label>
                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control" name="remark" placeholder="eg. class monitor">
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