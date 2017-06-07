	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-inverse">	
			<div class="panel-heading">Ordinary level Details:</div>
			<div class="panel-body">
					@if($ol->count()>0)
						@foreach($ol as $olee)
						<strong>School Name:</strong>{{$olee->olname}}</br>
						<strong>Year of Study:</strong>{{$olee->oyear}}</br>
						<strong>Remarks:{{$olee->remark}}</strong>
						@endforeach
					@else
						non-ordinary details <a href="{{url('olevel/create')}}">Add?</a>
					@endif
				</div>
		</div>
	</div>