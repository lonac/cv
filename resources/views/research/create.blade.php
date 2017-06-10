@extends('layout.master')

@section('title','Research')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Have Any Research?:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('research/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Title:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" required autofocus></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">SAVE</button>
                   			    <a href="{{url('professionalaffiliation/create')}}" class="btn btn-success" role="button">NEXT</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection