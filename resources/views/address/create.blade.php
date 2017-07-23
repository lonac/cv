@extends('layout.master')
@section('title','Address')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h2>Add your Address</h2>

                <form action="{{ url('address/create') }}" method="POST" role="form" class="form-horizontal">

                    {{ csrf_field() }}

                   <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="address" class="form-control" id="address" required="required">
                           
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
                            <button type="submit" class="btn btn-primary">Add</button>
                               <a href="{{url('phonenumbers/create')}}" class="btn btn-success" role="button">SKIP</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
