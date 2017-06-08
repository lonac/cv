<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($al->count()>0)
			<div class="panel-heading">A-level Details:</div>
			<div class="panel-body">
				@foreach($al as $alee)
					<strong>School Name:</strong>{{$alee->alevname}}</br>
					<strong>Year of Study:</strong>{{$alee->ayear}}</br>
					<strong>Remarks:{{$alee->remark}}</strong>
				@endforeach
			</div>
		@endif	
	</div>
</div>
