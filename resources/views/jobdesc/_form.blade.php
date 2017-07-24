<div class="col-md-10 col-md-offset-1">
<div class="panel panel-inverse">
  @if($jd->count()>0)
  <strong>JOB DESCRIPTIONS:</strong></br>
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
  