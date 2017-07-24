<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-inverse">
		@if($ex->count()>0)
		<strong>WORK EXPERIENCE:</strong>	</br>	
        @foreach($ex as $expee)
            <div class="panel-body">
            <strong>Organisation:</strong>{{$expee->organisation}}</br>
            <strong>Role:</strong>{{$expee->role}}</br>
           </div>
       @endforeach
       @endif
  </div> 
</div>
