@extends('layout.master')

@section('title','Edit Referee')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Referees:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('referees/'.$rf->id.'/edit') }}">
							{{method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="refaname" class="col-md-4 control-label">Referee Name:</label>
                            <div class="col-md-6">
                                <input id="refaname" type="text" class="form-control" name="refaname" required autofocus placeholder="{{$rf->refaname}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="title" class="col-md-4 control-label">Referee Title:</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus placeholder="{{$rf->title}}">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="address" type="text" class="form-control" name="address" required autofocus placeholder="{{$rf->address}}"></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('referees/show')}}" class="btn btn-success" role="button">Go Back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection