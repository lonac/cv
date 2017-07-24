<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($pa->count()>0)
  <div class="panel-body">
  	<strong>PROFESSIONAL AFFILIATIONS:</strong></br>
      @foreach($pa as $paee)
        <strong>Title:</strong>{{ $paee->name }}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  