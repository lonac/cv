<div class="col-md-10 col-md-offset-0">
<div class="panel panel-inverse">
  @if($pa->count()>0)
   <strong>PROFESSIONAL AFFILIATIONS:</strong></br>
  <div class="panel-body">
      @foreach($pa as $paee)
        <strong>Title:</strong>{{ $paee->name }}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  