<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($cl->count()>0)
			<div class="panel-body">
				<strong>CERTIFICATE DETAILS:</strong></br>
				@foreach($cl as $clee)
					<strong>College Name:</strong>{{$clee->colname}}</br>
					<strong>Year of Study:</strong>{{$clee->cyear}}</br>
					<strong>Remarks:</strong>{{$clee->remark}} </br>
				@endforeach
			</div>
		@else	
		@endif		
	</div>
</div>