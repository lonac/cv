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
                                     <textarea class="form-control" rows="2" name="address" required=""
                                      placeholder="CV-CREATOR COMPANY,BOX 2783."></textarea>
                                <label for="location">Location</label>
                                    <input type="text" placeholder="eg.Country/Region-city" name="location" required="" class="form-control">
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
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
