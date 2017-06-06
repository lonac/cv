@extends('layout.master')

@section('title','Certificate Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Certificate Details:</div>
					<div class="panel-body">
						@if($cl->count()>0)
							<strong>College Name:</strong>{{$cl->alevname}}</br>
							<strong>Year of Study:</strong>{{$cl->ayear}}
							<strong>Remarks:{{cl->remark}}</strong>
						@else
							non Certicate level
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection