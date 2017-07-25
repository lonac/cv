@extends('layout.master')

@section('title','Edit A-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Advance/High School Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('alevel/'.$al->id.'/edit') }}">
						{{ method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="alevname" class="col-md-4 control-label">School/College Name:</label>
                            <div class="col-md-6">
                                <input id="alevname" type="text" class="form-control" name="alevname" required="autofocus" placeholder="{{$al->alevname}}">
                        	</div>
						</div>

						<div class="form-group">
                            <label for="ayear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="ayear" type="text" class="form-control" name="ayear" placeholder="{{$al->ayear}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="remark" class="col-md-4 control-label">Remark:</label>
                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control" name="remark" placeholder="{{$al->remark}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('alevel/show')}}" class="btn btn-success" role="button">Go Back</a>
							</form>
						</div>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection