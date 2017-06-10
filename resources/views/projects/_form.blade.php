<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($pr->count()>0)
  <div class="panel-heading"> <strong>JOB DESCRIPTIONS:</strong></div>
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
  