<div class ="row">
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($sk->count()>0)
  <div class="panel-body">
    <strong>SKILLS/TALENTS:</strong></br>
      @foreach($sk as $skee)
        <strong>Skill:</strong>{{$skee->skillname}}</br>
        <strong>   </strong>{{$skee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
</div>
  