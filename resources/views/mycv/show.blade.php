@extends('layout.master')

@section('title','My CV')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class ="panel-body">
			<div class="row">
				
							{{--  Personal--}}
							@include('personaldetails._form')
					
							<div class ="panel panel-body">
									<div class="col-md-5 col-md-offset-0">
										@if($address!==null&& $pers!==null)
											{{$address->address}}, </br>{{$address->location}}.</br>{{Auth::user()->email}}</br>	
										@endif
										@if($myphonenumbers->count()>0)Mobile Phones:
											@foreach($myphonenumbers as $phonee)
							              	- {{ $phonee->phonenumber}}</br>
							        		@endforeach
								    	@endif
									</div>
								<div class="col-md-4 col-md-offset-3">
									@if($pers!==null)
										Citizenship : {{$pers->nationality}} </br>Languages : {{ $pers->language}} </br>
										Gender :    {{$pers->gender}} </br>Marital Status : {{$pers->marital}}</br>Birthdate: {{$pers->birthdate}}</br>		
									@endif
								</div>
							</div>
							{{--Ordinary level--}}
							@include('olevel._form')
						
							@include('alevel._form')

						{{-- Certificates--}}
							@include('clevel._form')

						{{-- Diploma --}}
							@include('dlevel._form')
						{{--Degree}}
							@include('dglevel._form')

						{{-- Masters--}}
							@include('mlevel._form')
						{{-- Doctorial --}}
							@include('plevel._form');
						
						{{--Experiences--}}
							@include('experience._form')

							@include('interests._form')

						{{--skills--}}
							@include('skills._form')

						{{--fereees--}}
							@include('referees._form')

						{{--Research--}}
							@include('research._form')

						{{--Professional afflication--}}
			             	@include('professionalaffiliation._form')

						{{--Research--}}
							@include('awards._form')

						{{--jobdescriptions--}}
							@include('jobdesc._form')

						{{--Projects--}}
							@include('projects._form')

						{{--Professional Trainings--}}
							@include('trainings._form')

						{{--Academic presentations--}}
							@include('presentation._form')

						{{--Activities--}}
							@include('activities._form')
			</div>
		</div>
	</div>
</div>

@endsection