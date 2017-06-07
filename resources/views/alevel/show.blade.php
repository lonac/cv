@extends('layout.master')

@section('title','A-level Details')

@section('content')
	<div class="container">
		<div class="row">
			@include('alevel._form')
		</div>

	</div>

@endsection