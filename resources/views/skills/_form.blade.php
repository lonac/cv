<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($sk->count()>0)
  <div class="panel-heading"> <strong>SKILLS/TALENTS:</strong></div>
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
  