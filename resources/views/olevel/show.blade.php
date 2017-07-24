@extends('layout.master')

@section('title','O-level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading"><strong>ORDINARY-LEVEL DETAILS:</strong></div>
						@include('olevel._form')
					</div>
			</div>
		</div>

	</div>

@endsection