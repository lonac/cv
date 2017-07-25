@extends('layout.master')

@section('title','Reseaches')

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
					  @if($rs->count()>0)
					  <div class="panel-body">
					      @foreach($rs as $rsee)
					      	<strong>RESEARCHES:<a href="{{url('research/'.$rsee->id.'/edit')}}">Edit</a></strong></br>
					        <strong>Title:</strong>{{$rsee->name}}</br>
					        <strong>   </strong>{{$rsee->description}}</br>
					      @endforeach
					    @else
					  @endif
				  </div>  
				</div>
				</div>
          </div>
    </div>

@endsection