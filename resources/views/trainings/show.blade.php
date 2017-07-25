@extends('layout.master')

@section('title','Professional Trainings')

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
				  @if($pt->count()>0)
				  <div class="panel-body">
				      @foreach($pt as $ptee)
				      	<strong>PROFESSIONAL TRAININGS:<a href="{{url('trainings/'.$ptee->id.'/edit')}}">Edit</a></strong></br>
				        <strong>Date/Year:</strong>{{$ptee->date}}</br>
				        <strong>  </strong>{{$ptee->description}}</br>
				      @endforeach
				    @else
				  @endif
				  </div>  
				</div>
				</div>
  
        </div>

    </div>

@endsection