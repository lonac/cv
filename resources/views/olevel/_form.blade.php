<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($ol->count()>0)	
		<div class="panel-heading"><strong>ORDINARY-LEVEL DETAILS:</strong></div>
			<div class="panel-body">
					@foreach($ol as $olee)
					<strong>School Name:</strong>{{$olee->olevname}}</br>
					<strong>Year of Study:</strong>{{$olee->oyear}}</br>
					<strong>Remarks:</strong>{{$olee->remark}} </br>
					@endforeach
			@else
			@endif
			</div>
	</div>
</div>