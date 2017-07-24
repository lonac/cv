<div class="col-md-10 col-md-offset-1">
<div class="panel panel-inverse">
  @if($int->count()>0)
  <strong>INTERESTS:</strong></br>
  <div class="panel-body">
      @foreach($int as $intee)
        <strong>Interests:</strong>{{$intee->interest}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  