<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($ol->count()>0)	
			<div class="panel-body">
				<strong>ORDINARY-LEVEL:</strong></br>
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