<div class="col-md-10 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($dgl->count()>0)
		<div class="panel-body">
			<strong>DEGREE DESCRIPTIONS:</strong></br>
			@foreach($dgl as $dglee)
				<strong>University Name:</strong>{{$dglee->uniname}}</br>
				<strong>Year of Study:</strong>{{$dglee->dgyear}}</br>
				<strong>Program:</strong>{{$dglee->program}} </br>
			@endforeach
			@else
			@endif
		</div>
	</div>
</div>