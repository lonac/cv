<div class="col-md-10 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($dl->count()>0)
		<div class="panel-body">
			<strong>DIPLOMA DETAILS:</strong</br>
						@foreach($dl as $dlee)
				<strong>College Name:</strong>{{$dlee->colname}}</br>
				<strong>Year of Study:</strong>{{$dlee->dyear}}</br>
				<strong>Program:</strong>{{$dlee->program}} </br>
			@endforeach
		@else
		@endif
			</div>
	</div>
</div>