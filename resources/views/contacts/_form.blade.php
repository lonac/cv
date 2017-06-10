<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
	@if($cont->count()>0)
	<div class="panel-heading"><strong>CONTACTS:</strong></div>
	<div class="panel-body">
			@foreach($cont as $contee)
				<strong>Phone Number:</strong>{{$contee->phonenumber}}</br>
				<strong>Email:</strong>{{$contee->myemail->email}}</br>
				<strong>Address:</strong>{{$contee->address}}</br>
			@endforeach
		@else
	@endif
	</div>	
</div>
</div>
	
	