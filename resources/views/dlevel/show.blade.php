@extends('layout.master')

@section('title','Diploma Level Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Diploma Details:</div>
					<div class="panel-body">
						@if($dl->count()>0)
							<strong>College Name:</strong>{{$dl->colname}}</br>
							<strong>Year of Study:</strong>{{$dl->dyear}}</br>
							<strong>Program:</strong>{{$dl->program}}
						@else
							non Diploma level
						@endif
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection