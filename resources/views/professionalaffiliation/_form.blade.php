<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($pa->count()>0)
  <div class="panel-heading"> <strong>Reseaches:</strong></div>
  <div class="panel-body">
      @foreach($pa as $paee)
        <strong>Title:</strong>{{$paee->name}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  