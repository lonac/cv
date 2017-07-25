@extends('layout.master')

@section('title','O-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				<div class="panel panel-inverse">
						<div class="panel panel-body">
							@if($ol->count()>0)	
								@foreach($ol as $olee)
									<strong>ORDINARY-LEVEL:<a href="{{url('olevel/'.$olee->id.'/edit')}}">Edit</a></strong></br>
									<strong>School Name:</strong>{{$olee->olevname}}</br>
									<strong>Year of Study:</strong>{{$olee->oyear}}</br>
									<strong>Remarks:</strong>{{$olee->remark}} </br>
								@endforeach
							@else
							@endif
						</div>
					</div>
			</div>
		</div>

	</div>

@endsection