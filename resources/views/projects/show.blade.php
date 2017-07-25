@extends('layout.master')

@section('title','Projects')

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
				  @if($pr->count()>0)
				  <div class="panel-body">
				      @foreach($pr as $pree)
				  		<strong>PROECT DESCRIPTIONS:<a href="{{url('projects/'.$pree->id.'/edit')}}">Edit</a></strong></br>
				        <strong>Title:</strong>{{$pree->title}}</br>
				        <strong>   </strong>{{$pree->description}}</br>
				        <strong>Rerefences </strong>{{$pree->reference}}</br>
				      @endforeach
				    @else
				  @endif
				  </div>  
				</div>
			</div>
  
        </div>

    </div>

@endsection