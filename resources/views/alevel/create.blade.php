@extends('layout.master')

@section('title','A-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Add Olevel Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('alevel/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="alevname" class="col-md-4 control-label">A-level School Name:</label>
                            <div class="col-md-6">
                                <input id="alevname" type="text" class="form-control" name="alevname" required autofocus>
                        	</div>
						</div>

						<div class="form-group">
                            <label for="ayear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="ayear" type="text" class="form-control" name="ayear" placeholder="e.g. 1995 - 2010">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="remark" class="col-md-4 control-label">Remark:</label>
                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control" name="remark" placeholder="eg. class monitor">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">SAVE</button>
                   			<a href="{{url('dlevel/create')}}" class="btn btn-success" role="button">NEXT</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection