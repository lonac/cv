@extends('layout.master')

@section('title','Phone Number')

@section('content')
	<div class="container">
		<div class="row">
			@if($myphonenumbers->count()>0)
				@foreach($myphonenumbers as $phonee)
					<h3>
						Phone Number : {{ $phonee->phonenumber}}  <a href="{{url('phonenumbers/'.$phonee->id)}}">Edit</a>
					</h3>
				@endforeach
			@endif
		</div>

	</div>

@endsection