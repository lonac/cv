<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-inverse">
		@if($ex->count()>0)
    <div class="panel-body">
		<strong>WORK EXPERIENCE:</strong>	</br>	
        @foreach($ex as $expee) 
            <strong>Organisation:</strong>{{$expee->organisation}}</br>
            <strong>Role:</strong>{{$expee->role}}</br>
           </div>
       @endforeach
       @endif
  </div> 
</div>
