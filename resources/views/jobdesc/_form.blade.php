<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($jd->count()>0)
  <div class="panel-body">
    <strong>JOB DESCRIPTIONS:</strong></br>
      @foreach($jd as $jdee)
        <strong>Title:</strong>{{$jdee->title}}</br>
        <strong>   </strong>{{$jdee->description}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  