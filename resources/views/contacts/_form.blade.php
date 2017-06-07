<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
	<div class="panel-heading">Contacts:</div>
	<div class="panel-body">
		@if($cont->count()>0)
			@foreach($cont as $contee)
				<strong>Phone Number:</strong>{{$contee->phonenumber}}</br>
				<strong>Email:</strong>{{$contee->myemail->email}}</br>
				<strong>Address:</strong>{{$contee->address}}</br>
			@endforeach
		@else
			<a href="{{url('contacts/create')}}">Add Contacts Details?</a>
		@endif
	</div>	
</div>
</div>
	
	