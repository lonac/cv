<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($aw->count()>0)
  <div class="panel-body">
    <strong>AWARDS:</strong></br>
      @foreach($aw as $awee)
        <strong>Date/Year:</strong>{{$awee->date}}</br>
        <strong>Award Name:</strong>{{$awee->name}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  