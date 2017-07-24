<div class="col-md-12 col-md-offset-1">
<div class="panel panel-inverse">
  @if($act->count()>0)
 <strong>OTHER ACTIVITIES:</strong></br>
  <div class="panel-body">
      @foreach($act as $actee)
        <strong>   </strong>{{$actee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  