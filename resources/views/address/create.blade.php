@extends('layout.master')
@section('title','Address')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-inverse">
                    <div class="panel-heading">Add your Address:</div>
                    <div class="panel-body">
                        <form action="{{ url('address/create') }}" method="POST" role="form" class="form-horizontal">

                            {{ csrf_field() }}

                           <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" name="address" value="e.g. box 737 TZ" class="form-control" id="address" required="required">
                                   
                                    @if($errors->has('address'))
                                      <p class="help-block">
                                            <span class="alert alert-danger">
                                                {{ $errors->first('address') }}
                                            </span>
                                        </p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                       <a href="{{url('phonenumbers/create')}}" class="btn btn-success" role="button">SKIP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
