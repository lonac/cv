@extends('layout.master')

@section('title','Phone numbers')

@section('content')
    <div class="container">
        <div class="row">
        		@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
             @include('phonenumbers._form')
        </div>

    </div>

@endsection