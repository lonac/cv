@extends('layout.master')

@section('title','Diploma Level Details')

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
					@if($dl->count()>0)
						<div class="panel-body">
							@foreach($dl as $dlee)
								<strong>DIPLOMA-LEVEL:<a href="{{url('dlevel/'.$dlee->id.'/edit')}}">Edit</a></strong></br>
								<strong>College Name:</strong>{{$dlee->colname}}</br>
								<strong>Year of Study:</strong>{{$dlee->dyear}}</br>
								<strong>Program:</strong>{{$dlee->program}} </br>
							@endforeach
					@endif
						</div>
				</div>
			</div>
		</div>
	</div>

@endsection