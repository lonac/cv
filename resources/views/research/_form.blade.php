<div class ="row">
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($rs->count()>0)
  <div class="panel-body">
    <strong>RESEARCHES:</strong></br>
      @foreach($rs as $rsee)
        <strong>Title:</strong>{{$rsee->name}}</br>
        <strong>   </strong>{{$rsee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
</div>
  