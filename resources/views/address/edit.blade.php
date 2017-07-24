@extends('layout.master')
@section('title','Edit Address')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-inverse">
                    <div class="panel-heading">Edit Address:</div>
                    <div class="panel-body">
                        <form action="{{ url('address/edit')}}" method="POST" role="form" class="form-horizontal">
                            {{ method_field('patch') }}

                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="address"
                                      placeholder="{{$address->address}}"></textarea>                                  
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
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{url('/address/show')}}">Go Back</a>        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
