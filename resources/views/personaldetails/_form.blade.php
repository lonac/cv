<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($pers->count()>0)
		<div class="panel-heading"><strong>PERSONAL DETAILS:</strong></div>	
		<div class="panel-body">
				@foreach($pers as $personee)
					<strong>Firstname :</strong>{{$personee->firstname}}</br>
					<strong>Middlename:</strong>{{$personee->middlename}}</br>
					<strong>Lastname :</strong>{{$personee->lastname}}</br>
					<strong>Gender : </strong>{{$personee->gender}} </br>
					<strong>Citizenship :</strong>{{$personee->nationality}}</br>
					<strong>Birthdate:</strong>{{$personee->birthdate}}</br>
				@endforeach
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