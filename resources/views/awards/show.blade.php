@extends('layout.master')

@section('title','Awards')

@section('content')
    <div class="container">
        <div class="row">
             @include('awards._form')
        </div>

    </div>

@endsection