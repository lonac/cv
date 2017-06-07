<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($dgl->count()>0)
		<div class="panel-heading"><strong>Degree Details:</strong></div>
		<div class="panel-body">
			@foreach($dgl as $dglee)
				<strong>University Name:</strong>{{$dglee->uniname}}</br>
				<strong>Year of Study:</strong>{{$dglee->dgyear}}</br>
				<strong>Program:</strong>{{$dglee->program}}
			@endforeach
			@else
			@endif
		</div>
	</div>
</div>