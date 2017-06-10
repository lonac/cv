<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($pt->count()>0)
  <div class="panel-heading"> <strong>PROFESSIONAL TRAININGS:</strong></div>
  <div class="panel-body">
      @foreach($pt as $ptee)
        <strong>Date/Year:</strong>{{$ptee->date}}</br>
        <strong>  </strong>{{$ptee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  