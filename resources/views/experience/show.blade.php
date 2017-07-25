@extends('layout.master')

@section('title','Experiences')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12 col-md-offset-0">
             	<div class="col-md-12 col-md-offset-0">
			 	@if(session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
					<div class="panel panel-inverse">
						@if($ex->count()>0)
				    <div class="panel-body">
				        @foreach($ex as $expee) 
				        	<strong>Experiences: <a href="{{url('experience/'.$expee->id.'/edit')}}">Edit</a></strong></br>
				            <strong>Organisation:</strong>{{$expee->organisation}}</br>
				            <strong>Role:</strong>{{$expee->role}}</br>
				           </div>
				       @endforeach
				       @endif
				  </div> 
				</div>

        </div>

    </div>

@endsection