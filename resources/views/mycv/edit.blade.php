@extends('layout.master')

@section('title','Edit -My Details')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel panel-heading">Edit CV based on Category:</div>
						<div class="panel-body">
							<strong>Personal Details: <a href="{{url('personaldetails/show')}}">View</a></strong></br>
							<strong>Address Details: <a href="{{url('address/show')}}">View</a></strong></br>
							<strong>Phone Numbers: <a href="{{url('phonenumbers/show')}}">View</a></strong></br>
							<strong>Ordinary Level Details: <a href="{{url('olevel/show')}}">View</a></strong></br>
							<strong>Certificate Level Details: <a href="{{url('clevel/show')}}">View</a></strong></br>
							<strong>Advance-High School Details: <a href="{{url('alevel/show')}}">View</a></strong></br>
							<strong>Diploma Level: <a href="{{url('dlevel/show')}}">View</a></strong></br>
							<strong>Degree Level: <a href="{{url('dglevel/show')}}">View</a></strong></br>
							<strong>Masters Level: <a href="{{url('mlevel/show')}}">View</a></strong></br>
							<strong>PHD Level: <a href="{{url('plevel/show')}}">View</a></strong></br>
							<strong>Awards Details: <a href="{{url('awards/show')}}">View</a></strong></br>
							<strong>Activities Details: <a href="{{url('activities/show')}}">View</a></strong></br>
							<strong>Experiences Details: <a href="{{url('experience/show')}}">View</a></strong></br>
							<strong>Interests Details: <a href="{{url('interests/show')}}">View</a></strong></br>
							<strong>Job descriptions: <a href="{{url('jobdesc/show')}}">View</a></strong></br>
							<strong>Academic presentations: <a href="{{url('presentation/show')}}">View</a></strong></br>
							<strong>Professional affiliation: <a href="{{url('professionalaffiliation/show')}}">View</a></strong></br>
							<strong>Projects Details: <a href="{{url('projects/show')}}">View</a></strong></br>
							<strong>Referees Details: <a href="{{url('referees/show')}}">View</a></strong></br>
							<strong>Skills and Talents: <a href="{{url('skills/show')}}">View</a></strong></br>
							<strong>Academic Trainings: <a href="{{url('trainings/show')}}">View</a></strong></br>
						</div>
				</div>
			</div>
		</div>

	</div>

@endsection