@extends('layout.master')

@section('title','Interests')

@section('content')
    <div class="container">
        <div class="row">
             @include('interests._form')
        </div>

    </div>

@endsection