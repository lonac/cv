@extends('layout.master')
@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-inverse">
                <div class="panel-heading">MY CV</div>
                    {{--check if i have the cv--}}


                    {{--if i dont have cv then allow  me create ones--}}
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
