<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($act->count()>0)
  <div class="panel-heading"> <strong>OTHER ACTIVITIES:</strong></div>
  <div class="panel-body">
      @foreach($act as $actee)
        <strong>   </strong>{{$actee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  