@extends('layout.master')

@section('title','Masters Level Details')

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
					@if($ml->count()>0)
					<div class="panel-body">
							@foreach($ml as $mlee)
								<strong>MASTERS-LEVEL:<a href="{{url('mlevel/'.$mlee->id.'/edit')}}">Edit</a></strong></br>
								<strong>University Name:</strong>{{$mlee->uniname}}</br>
								<strong>Year of Study:</strong>{{$mlee->myear}}</br>
								<strong>Program:</strong>{{$mlee->program}} </br>
							@endforeach
						@else
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection