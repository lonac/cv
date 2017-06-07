<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($pers->count()>0)
		<div class="panel-heading"><strong>Personal Details:</strong></div>	
		<div class="panel-body">
				@foreach($pers as $personee)
					<strong>Firstname :</strong>{{$personee->firstname}}</br>
					<strong>Middlename:</strong>{{$personee->middlename}}</br>
					<strong>Lastname :</strong>{{$personee->lastname}}</br>
					<strong>Nationality :</strong>{{$personee->nationality}}</br>
					<strong>Birthdate:</strong>{{$personee->birthdate}}</br>
				@endforeach
			@else
				<font color="red">No Personal Details so far!</font>
				<a href="{{url('personaldetails/create')}}">Add Details?</a>
			@endif
		</div>
	</div>
</div>