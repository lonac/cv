<div class="col-md-6 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($ml->count()>0)
		<div class="panel-heading">Masters Details:</div>
		<div class="panel-body">
				@foreach($ml as $mlee)
					<strong>University Name:</strong>{{$mlee->uniname}}</br>
					<strong>Year of Study:</strong>{{$mlee->myear}}</br>
					<strong>Program:</strong>{{$mlee->program}}
				@endforeach
			@else
			@endif
			</div>
	</div>
</div>