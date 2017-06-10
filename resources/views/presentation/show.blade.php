@extends('layout.master')

@section('title','Academic presentations')

@section('content')
    <div class="container">
        <div class="row">
             @include('presentation._form')
        </div>

    </div>

@endsection