@extends('layout.master')
@section('title','Phone-number')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-inverse">
                    <div class="panel-heading">Add your Phonenumber:</div>
                    <div class="panel-body">
                        <form action="{{ url('phonenumbers/create') }}" method="POST" role="form" class="form-horizontal">

                            {{ csrf_field() }}
                           <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" name="phonenumber" value="phonenumber" class="form-control" id="phonenumber" required="required">
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
                                <div class="col-md-6 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                       <a href="{{url('olevel/create')}}" class="btn btn-success" role="button">SKIP</a>
                                </div>
                            </div>
                          </form>
                     </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
