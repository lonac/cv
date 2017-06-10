<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($rf->count()>0)
  <div class="panel-heading"> <strong>REFEREES:</strong></div>
  <div class="panel-body">
      @foreach($rf as $rfee)
        <strong>Name:</strong>{{$rfee->refaname}}</br>
        <strong>Title:</strong>{{$rfee->title}}</br>
        <strong>Address:</strong>{{$rfee->address}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  