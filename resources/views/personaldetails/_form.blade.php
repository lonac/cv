<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
		@if($pers!==null)
		<div class="panel-heading"><strong>PERSONAL DETAILS:
		 	</a></strong></div>	
		<div class="panel-body">		
					<strong>Firstname :</strong>{{$pers->firstname}}</br>
					<strong>Middlename:</strong>{{$pers->middlename}}</br>
					<strong>Lastname :</strong>{{$pers->lastname}}</br>
					<strong>Gender : </strong>{{$pers->gender}} </br>
					<strong>Citizenship :</strong>{{$pers->nationality}}</br>
					<strong>Birthdate:</strong>{{$pers->birthdate}}</br>
			@else
				<div class="col-md-6">
					<h3>
						<font color="red">No Personal Details so far!</font>
					</h3>
					<strong><a href="{{url('personaldetails/create')}}">Add Details?</a></strong>	
				</div>
			
			@endif
		</div>
	</div>
</div>