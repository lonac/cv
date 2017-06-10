@extends('layout.master')
@section('title', $user->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-inverse">
                <div class="panel-heading"><strong>CURRICULUM VITAE (CV):</strong></div>
                <div class="panel-body">
                	<a href="{{url('mycv/show')}}" role="button" class="btn btn-primary">VIEW</a>  
                    <a href="#" role="button" class="btn btn-primary">EDIT</a> 
                    <a href="#" role="button" class="btn btn-danger">DELETE</a>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
