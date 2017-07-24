<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
	@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
	@endif
  @if($address!=null)
  	<div class="panel-heading"><strong> MY ADDRESS:</strong></div>
	  	<div class="panel-body">
		            <h3>
		              Address : {{ $address->address}}  <a href="{{url('address/edit')}}">Edit</a>
		            </h3>
	     </div>
    @endif
  </div>  
</div>