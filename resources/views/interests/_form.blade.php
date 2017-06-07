@if($int->count()>0)
<div class="col-md-3 col-md-offset-2">
		<div class="panel panel-inverse">
			<div class="panel-heading"><strong>
				Interests:</strong></div>	
		</div>
	</div>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
	            @foreach($int as $intee)
		            <div class="panel-body">
		            <strong>Interests:</strong>{{$intee->interest}}</br>
		           </div>
	           @endforeach
        </div>
	</div>  
@endif