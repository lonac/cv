@extends('layout.master')
@section('title','Edit Phone-number')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-inverse">
                    <div class="panel-heading"><strong>Edit Phone Numbers:</strong></div>
                    <div class="panel-body">
                        <form action="{{ url('phonenumbers/'.$phonenumber->id.'/edit')}}" method="POST" role="form" class="form-horizontal">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="number" name="phonenumber" value="{{ $phonenumber->phonenumber}}" class="form-control" id="phonenumber" required="required">
                                    @if($errors->has('phonenumber'))
                                        <p class="help-block">
                                            <span class="alert alert-danger">
                                                {{ $errors->first('phonenumber') }}
                                            </span>
                                        </p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{url('/phonenumbers/show')}}">Go Back</a>        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
