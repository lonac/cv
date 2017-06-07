@extends('layout.master')

@section('title','Masters Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Masters Details:</div>
					<div class="panel-body">
						@if($ml->count()>0)
							<strong>University Name:</strong>{{$ml->uniname}}</br>
							<strong>Year of Study:</strong>{{$ml->myear}}</br>
							<strong>Program:</strong>{{$ml->program}}
						@else
							non Masters level
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection