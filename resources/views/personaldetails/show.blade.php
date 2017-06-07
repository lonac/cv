@extends('layout.master')

@section('title','My Details')

@section('content')
	<div class="container">
		<div class="row">
			@include('personaldetails._form')
		</div>

	</div>

@endsection