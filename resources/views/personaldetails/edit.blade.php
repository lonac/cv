@extends('layout.master')

@section('title','Edit -My Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Personal Details:</div>
					<div class="panel-body">
						<form method="POST" action="{{ url('personaldetails/edit') }}">

						{{ method_field('patch') }}
						
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text" value="{{$pers->firstname}}" class="form-control" name="firstname" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="middlename" class="col-md-4 control-label">Middle Name</label>
                            <div class="col-md-6">
                                <input id="middlename" type="text" value="{{$pers->middlename}}" class="form-control" name="middlename">
                        	</div>
						</div>
						<div class="form-group">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input id="lastname" type="text" value="{{$pers->lastname}}" class="form-control" name="lastname" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
							<label for="gender" class="col-md-4 control-label">Gender</label>
							<div class="col-md-6">
								<select name="gender" class="form-control">
									<option>Select Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
                            <label for="nationality" class="col-md-4 control-label">Citizenship</label>
                            <div class="col-md-6">
                                <input id="nationality" type="text" value="{{$pers->nationality}}" class="form-control" name="nationality" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="birthdate" class="col-md-4 control-label">Birthdate</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="date" value="{{$pers->birthdate}}" class="form-control" name="birthdate">
                        	</div>
                        	<button class="btn btn-default">Cancel</button>
                   			<button type="submit" class="btn btn-success">Update</button>
						</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection