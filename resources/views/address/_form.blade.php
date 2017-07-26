<div class="row">
<div class="col-md-12 col-md-offset-0">
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
</div.