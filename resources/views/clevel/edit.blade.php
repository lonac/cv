@extends('layout.master')

@section('title','Edit Certificates Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Certificate Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('clevel/'.$cl->id.'/edit')}}">
						{{ method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="colname" class="col-md-4 control-label">College Name:</label>
                            <div class="col-md-6">
                                <input id="colname" type="text" class="form-control" name="colname" required autofocus placeholder="{{$cl->colname}}">
                        	</div>
						</div>

						<div class="form-group">
                            <label for="cyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="cyear" type="text" class="form-control" name="cyear" placeholder="{{$cl->cyear}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="remark" class="col-md-4 control-label">Remark:</label>
                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control" name="remark" placeholder="{{$cl->remark}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('clevel/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection