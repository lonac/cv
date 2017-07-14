<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($al->count()>0)
			<div class="panel-heading"><strong>
				ADVANCED/HIGH SCHOOL DETAILS:</strong></div>
			<div class="panel-body">
				@foreach($al as $alee)
					<strong>School/College Name:</strong>{{$alee->alevname}}</br>
					<strong>Year of Study:</strong>{{$alee->ayear}}</br>
					<strong>Remarks:</strong>{{$alee->remark}} </br>
				@endforeach
			</div>
		@endif	
	</div>
</div>
