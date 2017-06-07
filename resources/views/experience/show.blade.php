@extends('layout.master')

@section('title','Experiences')

@section('content')
    <div class="container">
        <div class="row">
             @include('experience._form')
        </div>

    </div>

@endsection