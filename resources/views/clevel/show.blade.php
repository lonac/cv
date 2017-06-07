@extends('layout.master')

@section('title','Certificate Level Details')

@section('content')
	<div class="container">
		<div class="row">
			@include('clevel._form')
		</div>

	</div>

@endsection