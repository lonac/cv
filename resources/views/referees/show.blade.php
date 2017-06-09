@extends('layout.master')

@section('title','Referees')

@section('content')
    <div class="container">
        <div class="row">
             @include('referees._form')
        </div>

    </div>

@endsection