@extends('layout.master')

@section('title','My CV')

@section('content')
	<div class="container">
		<div class="row">
			{{--  Personal--}}
			@include('personaldetails._form')
		</div>

		<div class="row">
			{{--  Contacts--}}
			@include('contacts._form')
		</div>

			{{--Ordinary level--}}
			<div class="row">
				@include('olevel._form');
			</div>

			{{--Advanced Level --}}
			<div class="row">
				@include('alevel._form')
			</div>

			{{-- Certificates--}>
			@if($cl->count()>0)
				@foreach($cl as $clee)
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Certificate Level</div>
							<div class="panel-body">
								<strong>College Secondary:</strong>{{$clee->colname}}
							</div>	
						</div>
					</div>
				@endforeach
			@endif

			{{-- Diploma --}}
			@if($dl->count()>0)
				@foreach($dl as $dlee)
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Ordinary Level</div>
							<div class="panel-body">
								<strong>College Name:</strong>{{$dlee->colname}}
							</div>	
						</div>
					</div>
				@endforeach
			@endif

			{{-- Degree --}}
			@if($dgl->count()>0)
				@foreach($dgl as $dglee)
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Degree Level</div>
							<div class="panel-body">
								<strong>University:</strong>{{$dglee->uniname}}
							</div>	
						</div>
					</div>
				@endforeach
			@endif

			{{-- Masters--}}
			@if($ml->count()>0)
				@foreach($ml as $mlee)
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Masters Level</div>
							<div class="panel-body">
								<strong>University:</strong>{{$mlee->uniname}}
							</div>	
						</div>
					</div>
				@endforeach
			@endif

			{{-- Doctorial --}}
			@if($pl->count()>0)
				@foreach($pl as $plee)
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Doctorial Level</div>
							<div class="panel-body">
								<strong>University:</strong>{{$plee->uniname}}
							</div>	
						</div>
					</div>
				@endforeach
			@endif


		<div class="row">
			{{--Experiences--}}
			@include('experience._form')
		</div>

		<div class="row">
			{{--Interests--}}
			@include('interests._form')
		</div>
	</div>

@endsection