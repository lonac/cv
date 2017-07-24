<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($rf->count()>0)
  <div class="panel-body">
    <strong>REFEREES:</strong></br>
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
  