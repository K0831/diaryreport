@extends('setting.main')

@section('report')
<p>{!! link_to_route('report.create','新規作成',[],['class'=>'btn btn-block btn-outline-light mt-5']) !!}</p>
       
@if(isset($reports))
       
       @foreach ($reports as $report)
       <p class="m-0">{{ $report->created_at }}</p>
       <p class="m-0">{{ $report->time }}</p>
           <p class="m-0">{{ $report->title }}</p>
           <div class="dropdown-divider"></div>
           <p class="m-0">{{ $report->content }}</p>
       @if (Auth::id() === $report->user_id)
              <div class="row">
                     <div class="col-1.5 ml-3" >
                            {!! Form::open(['route' => ['report.edit', $report->id], 'method' => 'get']) !!}
                                  {!! Form::submit('編集', ['class' => 'btn btn-primary btn-md']) !!}
                            {!! Form::close() !!}
                     </div>
                     <div class="col-1.5">
                            {!! Form::open(['route' => ['report.destroy', $report->id], 'method' => 'delete']) !!}
                                  {!! Form::submit('削除', ['class' => 'btn btn-danger btn-md']) !!}
                            {!! Form::close() !!}
                     </div>
              </div>
  
              

       @endif
       @endforeach
       
@endif

        
@endsection