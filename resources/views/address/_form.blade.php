<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($address->count()>0)
  	<div class="panel-heading"><strong> MY ADDRESS:</strong></div>
	  	<div class="panel-body">
		        @foreach($address as $addresse)
		            <h3>
		              Address : {{ $addresse->address}}  <a href="{{url('address/'.$addresse->id.'/edit')}}">Edit</a>
		            </h3>
		        @endforeach
	     </div>
     	@else
     		You have no address!
    @endif
  </div>  
</div>