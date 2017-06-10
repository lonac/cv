<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($acp->count()>0)
  <div class="panel-heading"> <strong>ACADEMIC PRESENTATIONS:</strong></div>
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
  