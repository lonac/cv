@extends('layout.master')

@section('title','Phone numbers')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
        		@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
                 @include('phonenumbers._form')
            </div>
        </div>

    </div>

@endsection