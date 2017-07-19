@extends('layout.master')
@section('title','Phone-number')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">

            	@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif

                <h2>Add your Phonenumber</h2>

                <form action="{{ url('phonenumbers/create') }}" method="POST" role="form" class="form-horizontal">

                    {{ csrf_field() }}

                    @include('phonenumbers._form')

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                               <a href="{{url('address/create')}}" class="btn btn-success" role="button">SKIP</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
