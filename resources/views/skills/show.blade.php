@extends('layout.master')

@section('title','Skills')

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
			  @if($sk->count()>0)
			  <div class="panel-body">
			      @foreach($sk as $skee)
			      	<strong>SKILLS/TALENTS:<a href="{{url('skills/'.$skee->id.'/edit')}}">Edit</a></strong></br>
			        <strong>Skill:</strong>{{$skee->skillname}}</br>
			        <strong>   </strong>{{$skee->description}}</br>
			      @endforeach
			    @else
			  @endif
			  </div>  
			</div>
			</div>
        </div>
    </div>

@endsection