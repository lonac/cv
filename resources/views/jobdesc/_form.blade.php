<div class="col-md-8 col-md-offset-2">
<div class="panel panel-inverse">
  @if($jd->count()>0)
  <div class="panel-heading"> <strong>JOB DESCRIPTIONS:</strong></div>
  <div class="panel-body">
      @foreach($jd as $jdee)
        <strong>Title:</strong>{{$jdee->title}}</br>
        <strong>   </strong>{{$jdee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  