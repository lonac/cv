<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($ol->count()>0)	
		<div class="panel-heading"><strong>ORDINARY-LEVEL DETAILS:</strong></div>
			<div class="panel-body">
					@foreach($ol as $olee)
					<strong>School Name:</strong>{{$olee->olname}}</br>
					<strong>Year of Study:</strong>{{$olee->oyear}}</br>
					<strong>Remarks:{{$olee->remark}}</strong>
					@endforeach
			@else
			@endif
			</div>
	</div>
</div>