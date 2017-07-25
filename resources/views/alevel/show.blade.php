@extends('layout.master')

@section('title','A-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
				<div class="panel panel-inverse">
					@if($al->count()>0)
					<div class="panel-body">
							@foreach($al as $alee)
								<strong>ADVANCED-HIGH SCHOOL:<a href="{{url('alevel/'.$alee->id.'/edit')}}">Edit</a></strong></br>
								<strong>School/College Name:</strong>{{$alee->alevname}}</br>
								<strong>Year of Study:</strong>{{$alee->ayear}}</br>
								<strong>Remarks:</strong>{{$alee->remark}} </br>
							@endforeach
					</div>
					@endif	
				</div>
			</div>
		</div>
	</div>
@endsection