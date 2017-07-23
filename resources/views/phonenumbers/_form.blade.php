<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-inverse">
	  @if($myphonenumbers->count()>0)
	  <div class="panel-heading"><strong>MY PHONE NUMBERS:</strong></div>		
		<div class="panel-body">
	        @foreach($myphonenumbers as $phonee)
	            <h3>
	                Phone Number : {{ $phonee->phonenumber}}  <a href="{{url('phonenumbers/'.$phonee->id.'/edit')}}">Edit</a>
	            </h3>
	        @endforeach
	       @else
	       		No phone number registered!
		    @endif
		 </div>  
	</div>
</div>