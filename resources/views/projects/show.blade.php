@extends('layout.master')

@section('title','Projects')

@section('content')
    <div class="container">
        <div class="row">
             @include('projects._form')
        </div>

    </div>

@endsection