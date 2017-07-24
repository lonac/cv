<div class="col-md-10 col-md-offset-1">
<div class="panel panel-inverse">
  @if($pr->count()>0)
  <strong>JOB DESCRIPTIONS:</strong></br>
  <div class="panel-body">
      @foreach($pr as $pree)
        <strong>Title:</strong>{{$pree->title}}</br>
        <strong>   </strong>{{$pree->description}}</br>
        <strong>Rerefences </strong>{{$pree->reference}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  