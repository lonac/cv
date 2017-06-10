<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($pl->count()>0)
		<div class="panel-heading"><strong>PHD DESCRIPTIONS:</strong></div>
		<div class="panel-body">
				@foreach($pl as $plee)
					<strong>University Name:</strong>{{$plee->uniname}}</br>
					<strong>Year of Study:</strong>{{$plee->pyear}}</br>
					<strong>Program:</strong>{{$plee->program}}
				@endforeach
			@else
			@endif
		</div>
	</div>
</div>