<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
		@if($ex->count()>0)
		<div class="panel-heading"><strong>Experiences:</strong></div>			
        @foreach($ex as $expee)
            <div class="panel-body">
            <strong>Organisation:</strong>{{$expee->organisation}}</br>
            <strong>Role:</strong>{{$expee->role}}</br>
           </div>
       @endforeach
       @endif
  </div> 
</div>
