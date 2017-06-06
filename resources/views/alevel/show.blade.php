@extends('layout.master')

@section('title','A-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">A-level Details:</div>
					<div class="panel-body">
						@if($al->count()>0)
							<strong>School Name:</strong>{{$al->alevname}}</br>
							<strong>Year of Study:</strong>{{$al->ayear}}
							<strong>Remarks:{{$al->remark}}</strong>
						@else
							non A-lvel
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection