<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($acp->count()>0)
  <strong>ACADEMIC PRESENTATIONS:</strong></br>
  <div class="panel-body">
      @foreach($acp as $acpee)
        <strong>Date/Year:</strong>{{$acpee->date}}</br>
        <strong>  </strong>{{$acpee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  