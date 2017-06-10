<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($rs->count()>0)
  <div class="panel-heading"> <strong>RESEARCHES:</strong></div>
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
  