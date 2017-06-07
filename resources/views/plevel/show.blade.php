@extends('layout.master')

@section('title','Phd-Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Phd Details:</div>
					<div class="panel-body">
						@if($pl->count()>0)
							<strong>University Name:</strong>{{$pl->uniname}}</br>
							<strong>Year of Study:</strong>{{$pl->pyear}}</br>
							<strong>Program:</strong>{{$pl->program}}
						@else
							non PHD level
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection