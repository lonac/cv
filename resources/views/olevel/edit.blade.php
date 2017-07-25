@extends('layout.master')

@section('title','Edit O-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Olevel Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('olevel/'.$ol->id.'/edit') }}">
						{{ method_field('patch') }}

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="olevname" class="col-md-4 control-label">O-level School Name:</label>
                            <div class="col-md-6">
                                <input id="olevname" type="text" class="form-control" name="olevname" placeholder="{{$ol->olevname}}"required="">
                        	</div>
						</div>

						<div class="form-group">
                            <label for="oyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="oyear" type="text" class="form-control" name="oyear" placeholder="{{$ol->oyear}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="remark" class="col-md-4 control-label">Remark:</label>
                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control" name="remark" placeholder="{{$ol->remark}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('clevel/show')}}" role="button" class="btn btn-success">Go Back</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection