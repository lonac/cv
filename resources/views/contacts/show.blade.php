@extends('layout.master')

@section('title','My Contacts')

@section('content')
	<div class="container">
		<div class="row">
			@include('contacts._form')
		</div>

	</div>

@endsection