<div class="col-md-10 col-md-offset-0">
	<div class="panel panel-inverse">
	  @if($myphonenumbers->count()>0)
	  <strong>MY PHONE NUMBERS:</strong></br>		
		<div class="panel-body">
	        @foreach($myphonenumbers as $phonee)
	            <h3>
	                Phone Number : {{ $phonee->phonenumber}}  <a href="{{url('phonenumbers/'.$phonee->id.'/edit')}}">Edit</a>
	            </h3>
	        @endforeach
		    @endif
		 </div>  
	</div>
</div>