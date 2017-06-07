@extends('layout.master')
@section('title', $user->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-inverse">
                <div class="panel-heading">CV-CREATOR</div>
                <div class="panel-body">
                	<a href="{{url('mycv/show')}}" role="button" class="btn btn-primary">Mycv</a>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
