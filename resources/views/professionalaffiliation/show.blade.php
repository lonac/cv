@extends('layout.master')

@section('title','Professional Affiliation')

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
				  @if($pa->count()>0)
				  <div class="panel-body">
				      @foreach($pa as $paee)
					      	<strong>IPROFESSIONAL AFFILIATIONS:<a href="{{url('professionalaffiliation/'.$paee->id.'/edit')}}">Edit</a></strong></br>
					        <strong>Title:</strong>{{ $paee->name }}</br>
					  @endforeach
					    @else
				@endif
				  </div>  
				</div>
			</div>
        </div>
    </div>

@endsection