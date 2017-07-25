@extends('layout.master')

@section('title','Job Descriptions')

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
					  @if($jd->count()>0)
					  <div class="panel-body">
					      @foreach($jd as $jdee)
							<strong>JOB DESCRIPTIONS:<a href="{{url('jobdesc/'.$jdee->id.'/edit')}}">Edit</a></strong></br>
					        <strong>Title:</strong>{{$jdee->title}}</br>
					        <strong>   </strong>{{$jdee->description}}</br>
					      @endforeach
					    @else
					  @endif
					  </div>  
					</div>
			</div>
        </div>

    </div>

@endsection