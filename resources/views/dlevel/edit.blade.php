@extends('layout.master')

@section('title','Edit Diploma Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Diploma Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('dlevel/'.$dl->id.'/edit') }}">
							{{ method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="colname" class="col-md-4 control-label">College Name:</label>
                            <div class="col-md-6">
                                <input id="colname" type="text" class="form-control" name="colname" required autofocus placeholder="{{$dl->colname}}">
                        	</div>
						</div>

						<div class="form-group">
                            <label for="dyear" class="col-md-4 control-label">Year Attendance:</label>
                            <div class="col-md-6">
                                <input id="dyear" type="text" class="form-control" name="dyear" placeholder="{{$dl->dyear}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="program" class="col-md-4 control-label">Program:</label>
                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program" placeholder="{{$dl->program}}">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			<a href="{{url('dlevel/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection