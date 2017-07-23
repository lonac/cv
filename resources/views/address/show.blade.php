@extends('layout.master')

@section('title','Address')

@section('content')
    <div class="container">
        <div class="row">
        		@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
             @include('address._form')
        </div>

    </div>

@endsection