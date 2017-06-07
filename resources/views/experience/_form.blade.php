@if($ex->count()>0)
<div class="col-md-3 col-md-offset-2">
		<div class="panel panel-inverse">
			<div class="panel-heading"><strong>
				Experiences:</strong></div>	
		</div>
	</div>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
	            @foreach($ex as $expee)
		            <div class="panel-body">
		            <strong>Organisation:</strong>{{$expee->organisation}}</br>
		            <strong>Role:</strong>{{$expee->role}}</br>
		           </div>
	           @endforeach
        </div>
	</div>  
@endif