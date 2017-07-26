<div class ="row">
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($pr->count()>0)
  <div class="panel-body">
    <strong>PROJECTS DESCRIPTIONS:</strong></br>
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
</div>
  