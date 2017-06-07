@extends('layout.master')

@section('title','My Contacts')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">Contacts Details:</div>
					<div class="panel-body">
						@if($cont->count()>0)
							@foreach($cont as $contee)
								<strong>Phone Number:</strong>{{$contee->phonenumber}}</br>
								<strong>Address:</strong>{{$contee->address}}</br>	
							@endforeach
						@else
							<font color="red">No Contacts Details so far!</font>
						@endif
					</div>
				</div>
			</div>

		</div>

	</div>

@endsection