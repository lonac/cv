<div class="col-md-10 col-md-offset-0">
<div class="panel panel-inverse">
  @if($pt->count()>0)
   <strong>PROFESSIONAL TRAININGS:</strong></br>
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
  