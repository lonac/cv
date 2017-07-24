<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($al->count()>0)
		<div class="panel-body">
				<strong>
				ADVANCED/HIGH SCHOOL:</strong></br>
				@foreach($al as $alee)
					<strong>School/College Name:</strong>{{$alee->alevname}}</br>
					<strong>Year of Study:</strong>{{$alee->ayear}}</br>
					<strong>Remarks:</strong>{{$alee->remark}} </br>
				@endforeach
		</div>
		@endif	
	</div>
</div>
