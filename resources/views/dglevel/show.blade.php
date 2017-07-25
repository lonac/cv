@extends('layout.master')

@section('title','Degree Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<div class="panel panel-inverse">
					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif
					@if($dgl->count()>0)
					<div class="panel-body">
						@foreach($dgl as $dglee)
						<strong>DEGREE-LEVEL:<a href="{{url('dglevel/'.$dglee->id.'/edit')}}">Edit</a></strong></br>
							<strong>University Name:</strong>{{$dglee->uniname}}</br>
							<strong>Year of Study:</strong>{{$dglee->dgyear}}</br>
							<strong>Program:</strong>{{$dglee->program}} </br>
						@endforeach
						@else
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection