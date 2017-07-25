@extends('layout.master')

@section('title','Academic presentations')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12 col-md-offset-0">
             	@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				<div class="panel panel-inverse">
				  @if($acp->count()>0) 
				  <div class="panel-body">
				      @foreach($acp as $acpee)
				      	<strong>ACADEMIC PRESENTATIONS:<a href="{{url('presentation/'.$acpee->id.'/edit')}}">Edit</a></strong></br>
				        <strong>Date/Year:</strong>{{$acpee->date}}</br>
				        <strong>  </strong>{{$acpee->description}}</br>
				      @endforeach
				    @else
				  @endif
				  </div>  
				</div>
				</div>
        </div>

    </div>

@endsection