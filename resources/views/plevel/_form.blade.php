<div class ="row">
<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($pl->count()>0)
		<div class="panel-body">
			<strong>PHD DESCRIPTIONS:</strong></br>
				@foreach($pl as $plee)
					<strong>University Name:</strong>{{$plee->uniname}}</br>
					<strong>Year of Study:</strong>{{$plee->pyear}}</br>
					<strong>Program:</strong>{{$plee->program}} </br>
				@endforeach
			@else
			@endif
		</div>
	</div>
</div>
</div>