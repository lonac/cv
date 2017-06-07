<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-inverse">
			@if($int->count()>0)
				<div class="panel-heading"><strong>
				Interests:</strong></div>	
	            @foreach($int as $intee)
		            <div class="panel-body">
		           	 <strong>Interests:</strong>{{$intee->interest}}</br>
		           </div>
	           	@endforeach
		    @else
		    @endif
        </div>
	</div>  
