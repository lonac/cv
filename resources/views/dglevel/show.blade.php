@extends('layout.master')

@section('title','Degree Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Degree Details:</div>
					<div class="panel-body">
						@if($dgl->count()>0)
							<strong>University Name:</strong>{{$dgl->uniname}}</br>
							<strong>Year of Study:</strong>{{$dgl->dgyear}}</br>
							<strong>Program:</strong>{{$dgl->program}}
						@else
							non Degree level
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection