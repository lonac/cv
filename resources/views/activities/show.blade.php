@extends('layout.master')

@section('title','Other Activities')

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
					  @if($act->count()>0)
					  <div class="panel-body">
						      @foreach($act as $actee)
						      	<strong>OTHER ACTIVITIES:<a href="{{url('activities/'.$actee->id.'/edit')}}">Edit</a></strong></br>
						        <strong>-</strong>{{$actee->description}}</br>
						      @endforeach
					   </div>  
					  @endif
				</div>
			</div>
        </div>
    </div>

@endsection