<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($aw->count()>0)
  <div class="panel-heading"> <strong>AWARDS:</strong></div>
  <div class="panel-body">
      @foreach($aw as $awee)
        <strong>Date/Year:</strong>{{$awee->date}}</br>
        <strong>Award Name:</strong>{{$awee->name}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  