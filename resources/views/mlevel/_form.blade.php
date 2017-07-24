<div class="col-md-10 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($ml->count()>0)
		<strong>MASTERS DESCRIPTIONS:</strong></br>
		<div class="panel-body">
				@foreach($ml as $mlee)
					<strong>University Name:</strong>{{$mlee->uniname}}</br>
					<strong>Year of Study:</strong>{{$mlee->myear}}</br>
					<strong>Program:</strong>{{$mlee->program}} </br>
				@endforeach
			@else
			@endif
			</div>
	</div>
</div>