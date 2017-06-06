@extends('layout.master')

@section('title','My Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Add Personal Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('personaldetails/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="middlename" class="col-md-4 control-label">Middle Name</label>
                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename" placeholder="not must">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" required autofocus>
                        	</div>
						</div>
						
						<div class="form-group">
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>
                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="birthdate" class="col-md-4 control-label">Birthdate</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate">
                        	</div>
                   			<button type="submit" class="btn btn-success">Create</button>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection