<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($dl->count()>0)
		<div class="panel-heading"><strong>Diploma Details:</strong></div>
		<div class="panel-body">
			@foreach($dl as $dlee)
				<strong>College Name:</strong>{{$dlee->colname}}</br>
				<strong>Year of Study:</strong>{{$dlee->dyear}}</br>
				<strong>Program:</strong>{{$dlee->program}}
			@endforeach
		@else
		@endif
			</div>
	</div>
</div>