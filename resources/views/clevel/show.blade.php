@extends('layout.master')

@section('title','Certificate Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				@if(session('status'))
					<div class="alert alert-success">
						{{session ('status')}}
					</div>
				@endif
				<div class="panel panel-inverse">
					@if($cl->count()>0)
						<div class="panel-body">
							@foreach($cl as $clee)
								<strong>CERTIFICATE DETAILS: <a href="{{url('clevel/'.$clee->id.'/edit')}}">Edit</a></strong></br>
								<strong>College Name:</strong>{{$clee->colname}}</br>
								<strong>Year of Study:</strong>{{$clee->cyear}}</br>
								<strong>Remarks:</strong>{{$clee->remark}} </br>
							@endforeach
						</div>
					@else	
					@endif		
				</div>
			</div>
		</div>

	</div>

@endsection