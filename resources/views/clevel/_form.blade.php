<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($cl->count()>0)
			<div class="panel-heading">Certificate Details:</div>
			<div class="panel-body">
				@foreach($cl as $clee)
					<strong>College Name:</strong>{{$clee->colname}}</br>
					<strong>Year of Study:</strong>{{$clee->cyear}}</br>
					<strong>Remarks:</strong>{{$clee->remark}}
				@endforeach
			</div>
		@else	
		@endif		
	</div>
</div>