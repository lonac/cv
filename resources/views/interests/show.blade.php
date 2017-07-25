@extends('layout.master')

@section('title','Interests')

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
				  @if($int->count()>0)
				  <div class="panel-body">
				      @foreach($int as $intee)
				      	<strong>INTERESTS:<a href="{{url('interests/'.$intee->id.'/edit')}}">Edit</a></strong></br>
				        <strong>Interests:</strong>{{$intee->interest}}</br>
				      @endforeach
				    @else
				  @endif
				  </div>  
				</div>
			</div> 
        </div>
    </div>

@endsection