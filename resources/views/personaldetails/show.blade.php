@extends('layout.master')

@section('title','My Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">Personal Details:</div>
					<div class="panel-body">
						@if($pers->count()>0)
							<strong>Firstname :</strong>{{$pers->firstname}}</br>
							<strong>Middlename:</strong>{{$pers->middlename}}</br>
							<strong>Lastname :</strong>{{$pers->lastname}}</br>
							<strong>Nationality :</strong>{{$pers->nationality}}</br>
							<strong>Birthdate:</strong>{{$pers->birthdate}}</br>
						@else
							<font color="red">No Personal Details so far!</font>
						@endif
					</div>
				</div>
			</div>

		</div>

	</div>

@endsection