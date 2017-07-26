<div class ="row">
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($int->count()>0)
  <div class="panel-body">
  	 <strong>INTERESTS:</strong></br>
      @foreach($int as $intee)
        <strong>Interests:</strong>{{$intee->interest}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
</div>
  