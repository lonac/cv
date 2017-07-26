<div class ="row">
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($pt->count()>0)
  <div class="panel-body">
    <strong>PROFESSIONAL TRAININGS:</strong></br>
      @foreach($pt as $ptee)
        <strong>Date/Year:</strong>{{$ptee->date}}</br>
        <strong>  </strong>{{$ptee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
</div>
  