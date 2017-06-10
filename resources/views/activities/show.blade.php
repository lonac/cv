@extends('layout.master')

@section('title','Other Activities')

@section('content')
    <div class="container">
        <div class="row">
             @include('activities._form')
        </div>

    </div>

@endsection