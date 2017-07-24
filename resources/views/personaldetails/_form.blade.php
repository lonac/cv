<div class="col-md-8 col-md-offset-2">
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
		@if($pers!==null)
			<center>
				<h4>{{ $pers->firstname}} {{$pers->middlename}} {{ $pers->lastname}}</h4>
						Curriculum Vitae</br>
						{{$pers->updated_at->diffForHumans()}}</br>	
			</center>
			
			@else
				<div class="col-md-8 col-md-offset-2">				
					<h3>
						<font color="red">No Personal Details so far!</font>
					</h3>
					<strong><a href="{{url('personaldetails/create')}}">Add Details?</a></strong>	
				</div>
			
			@endif
		
</div>