@extends('layout.master')

@section('title','Phd-Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				<div class="panel panel-inverse">
					@if($pl->count()>0)
					<div class="panel-body">
							@foreach($pl as $plee)
								<strong>PHD-LEVEL:<a href="{{url('plevel/'.$plee->id.'/edit')}}">Edit</a></strong></br>
								<strong>University Name:</strong>{{$plee->uniname}}</br>
								<strong>Year of Study:</strong>{{$plee->pyear}}</br>
								<strong>Program:</strong>{{$plee->program}} </br>
							@endforeach
						@else
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection