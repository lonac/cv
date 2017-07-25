@extends('layout.master')

@section('title','Edit Academic presentations')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Edit Academic Presentations:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('presentation/'.$acp->id.'/edit') }}">
							{{ method_field('patch')}}
						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Date/Year:</label>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" placeholder="{{$acp->date}}" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descriptions:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" placeholder="{{$acp->description}}" required autofocus></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">Update</button>
                   			    <a href="{{url('presentation/show')}}" class="btn btn-success" role="button">Go back</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection