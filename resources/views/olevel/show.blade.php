@extends('layout.master')

@section('title','O-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Olevel Details:</div>
					<div class="panel-body">
						@if($ol->count()>0)
							<strong>School Name:</strong>{{$ol->olevname}}</br>
							<strong>Year of Study:</strong>{{$ol->oyear}}
							<strong>Remarks:{{$ol->remark}}</strong>
						@else
							non olvel
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection