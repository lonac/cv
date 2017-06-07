@extends('layout.master')

@section('title','Contacts')

@section('content')

@if(Auth::guest())
@else						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Add Contacts:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('contacts/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="phonenumber" class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-6">
                                <input id="phonenumber" type="number" class="form-control" name="phonenumber" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control" name="address" placeholder="address">
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Create</button>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>
	@endif

@endsection