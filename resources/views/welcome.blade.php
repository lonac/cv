@extends('layout.master')

@section('title','Mycv')

@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-sm-10 col-md-12">
                <div class="side-borders">
                        <div class="hero-bg" style="background-image:url('/images/zanz.png');background-repeat: no-repeat;background-size: 100% 100%; height: 500px;">
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12 col-md-offset-1">
        		<b>CV-CREATOR</b>
        	</div>

        </div>

        	<div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-inverse">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>CREATE CV</h3>
                                <p>Generate CV with your likely style and format.</p>
                                <a href="{{ url('home')}}" class="btn btn-primary" role="button">
                                    Create CV
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4">
                <div class="panel panel-inverse">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>ACADEMIC</h3>
                                <p>For all Academic issues 
                               !</p>
                                <a href="{{ url('home')}}" class="btn btn-primary" role="button">
                                    Academic
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4">
                <div class="panel panel-inverse">
                    <div class="panel-body">
                        <div class="caption">
                            <h3>ONLINE SCHOOL</h3>
                                <p>Acquire degree, masters and phd online</p>
                                <a href="{{ url('#')}}" class="btn btn-primary" role="button">
                                   Study
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        

    </div>
    
@endsection