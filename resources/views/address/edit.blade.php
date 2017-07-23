@extends('layout.master')
@section('title','Edit Address')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h2>Edit Address</h2>

                <form action="{{ url('address/'.$address->id.'/edit')}}" method="POST" role="form" class="form-horizontal">

                    {{ method_field('patch') }}

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="{{ $address->address}}" class="form-control" id="address" required="required">
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

@endsection
