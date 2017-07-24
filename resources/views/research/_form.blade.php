<div class="col-md-10 col-md-offset-0">
<div class="panel panel-inverse">
  @if($rs->count()>0)
  <strong>RESEARCHES:</strong></br>
  <div class="panel-body">
      @foreach($rs as $rsee)
        <strong>Title:</strong>{{$rsee->name}}</br>
        <strong>   </strong>{{$rsee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  