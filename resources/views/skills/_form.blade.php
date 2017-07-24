<div class="col-md-10 col-md-offset-1">
<div class="panel panel-inverse">
  @if($sk->count()>0)
  <strong>SKILLS/TALENTS:</strong></br>
  <div class="panel-body">
      @foreach($sk as $skee)
        <strong>Skill:</strong>{{$skee->skillname}}</br>
        <strong>   </strong>{{$skee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  