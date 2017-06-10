@extends('layout.master')

@section('title','My CV')

@section('content')
	<div class="container">
		<div class="row">
			{{--  Personal--}}
			@include('personaldetails._form')
		</div>
		{{--  Contacts--}}
		<div class="row">
			@include('contacts._form')
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

	</div>

@endsection