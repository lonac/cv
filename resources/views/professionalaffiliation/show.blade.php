@extends('layout.master')

@section('title','Professional Affiliation')

@section('content')
    <div class="container">
        <div class="row">
             @include('professionalaffiliation._form')
        </div>

    </div>

@endsection