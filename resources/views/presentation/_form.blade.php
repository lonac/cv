<div class ="row">
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($acp->count()>0) 
  <div class="panel-body">
    <strong>ACADEMIC PRESENTATIONS:</strong></br>
      @foreach($acp as $acpee)
        <strong>Date/Year:</strong>{{$acpee->date}}</br>
        <strong>  </strong>{{$acpee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
</div>
  