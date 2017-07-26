<div class ="row">
<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-inverse">
		  @if($act->count()>0)
		  <div class="panel-body">
			 <strong>OTHER ACTIVITIES:</strong></br>
			      @foreach($act as $actee)
			        <strong>-</strong>{{$actee->description}}</br>
			      @endforeach
		   </div>  
		  @endif
	</div>
</div>
</div>
  