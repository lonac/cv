@extends('layout.master')

@section('title','Awards')

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
				  @if($aw->count()>0)
				  <div class="panel-body">
				      @foreach($aw as $awee)
				      	<strong>AWARDS: <a href="{{url('awards/'.$awee->id.'/edit')}}">Edit</a></strong></br>
				        <strong>Date/Year:</strong>{{$awee->date}}</br>
				        <strong>Award Name:</strong>{{$awee->name}}</br>
				      @endforeach
				    @else
				  @endif
				  </div>  
				</div>
				</div>
  		  
        </div>
    </div>

@endsection