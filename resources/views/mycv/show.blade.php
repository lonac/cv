@extends('layout.master')

@section('title','My CV')

@section('content')
	<div class="container">
		<div class="row">
			{{--  Personal--}}
			@include('personaldetails._form')
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				@if($address!==null&& $pers!==null)
					{{$address->address}} </br>{{$address->location}}</br>{{Auth::user()->email}}</br>	
				@endif
				@if($myphonenumbers->count()>0)Mobile Phones:
					@foreach($myphonenumbers as $phonee)
	              	- {{ $phonee->phonenumber}}</br>
	        		@endforeach
		    @endif
			</div>
			<div class="col-md-4 col-md-offset-2">
				@if($pers!==null)
					Citizenship : {{$pers->nationality}} </br>Languages : {{ $pers->language}} </br>
					Gender :    {{$pers->gender}} </br>Marital Status : {{$pers->marital}}</br>Birthdate: {{$pers->birthdate}}</br>		
				@endif
			</div>
		</div>
		<div class="row">
			<legend>EDUCATION</legend>
			<div>
			</div>
		</div>

			{{--Ordinary level--}}
			<div class="row">
				@include('olevel._form')
			</div>

			{{--Advanced Level --}}
			<div class="row">
				@include('alevel._form')
			</div>

			{{-- Certificates--}}
			<div class="row">
				@include('clevel._form')
			</div>

			{{-- Diploma --}}
			<div class="row">
				@include('dlevel._form')
			</div>

			{{-- Degree --}}
			<div class="row">
				@include('dglevel._form')
			</div>

			{{-- Masters--}}
			<div class="row">
				@include('mlevel._form')
			</div>

			{{-- Doctorial --}}
			<div class="row">
				@include('plevel._form');
			</div>
			
			{{--Experiences--}}
			<div class="row">	
				@include('experience._form')
			</div>

			<div class="row">
				@include('interests._form')
			</div>

			{{--skills--}}
			<div class="row">
				@include('skills._form')
			</div>

			{{--fereees--}}
			<div class="row">
				@include('referees._form')
			</div>

			{{--Research--}}
			<div class="row">
				@include('research._form')
			</div>

			{{--Professional afflication--}}
			<div class="row">
             	@include('professionalaffiliation._form')
       		 </div>

			{{--Research--}}
			<div class="row">
				@include('awards._form')
			</div>

			{{--jobdescriptions--}}
			<div class="row">
				@include('jobdesc._form')
			</div>

			{{--Projects--}}
			<div class="row">
				@include('projects._form')
			</div>

			{{--Professional Trainings--}}
			<div class="row">
				@include('trainings._form')
			</div>

			{{--Academic presentations--}}
			<div class="row">
				@include('presentation._form')
			</div>

			{{--Activities--}}
			<div class="row">
				@include('activities._form')
			</div>

	</div>

@endsection