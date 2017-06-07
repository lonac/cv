<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($int->count()>0)
  <div class="panel-heading"> <strong>Interests:</strong></div>
  <div class="panel-body">
      @foreach($int as $intee)
        <strong>Interests:</strong>{{$intee->interest}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  