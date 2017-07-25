@extends('layout.master')

@section('title','Referees')

@section('content')
    <div class="container">
        <div class="row">
			 <div class="col-md-12 col-md-offset-0">
			 	@if(session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
			<div class="panel panel-inverse">
			  @if($rf->count()>0)
			  <div class="panel-body">
			      @foreach($rf as $rfee)
			      	<strong>REFEREES:<a href="{{url('referees/'.$rfee->id.'/edit')}}">Edit</a></strong></br>
			        <strong>Name:</strong>{{$rfee->refaname}}</br>
			        <strong>Title:</strong>{{$rfee->title}}</br>
			        <strong>Address:</strong>{{$rfee->address}}</br>
			      @endforeach
			    @else
			  @endif
			  </div>  
			</div>
			</div>
			  
        </div>

    </div>

@endsection