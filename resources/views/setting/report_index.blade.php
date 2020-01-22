@extends('setting.main')

@section('report')
<h2>学習日報</h2>
<p>{!! link_to_route('report.create','新規作成',[],['class'=>'btn col-12 btn-outline-light']) !!}</p>
<p>{{ $count }}件を表示中</p>
@if(isset($reports))
    
        
        @foreach ($reports as $report)
        <div class="row" style="padding: 10px; margin-bottom: 10px; border: 3px double;">
            <div class="col-11">
                <p class="m-0">{{ $report->created_at }}&emsp;&emsp;{{ $report->time }}&nbsp;分</p>
                <div class="dropdown-divider"></div>
                <p class="m-0">{{ $report->title }}&emsp;{{ $report->content }}</p>
            </div>
            <div class="col-1">
                <div class="row">
                    {!! Form::open(['route' => ['report.edit',$report->id],'method'=>'get']) !!}
                        {{ csrf_field() }}
                        {!! Form::submit('編集', ['class' => 'btn btn-primary btn-md']) !!}
                    {!! Form::close() !!}
                    {!! Form::open(['route' => ['report.destroy',$report->id],'method'=>'delete']) !!}
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-md']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endforeach
            {{ $reports->links('pagination::bootstrap-4') }}
@endif

<!--<div class="row">-->
<!--    <div class="card-body" style="color:black;">-->
<!--    @if(isset($reports))-->
<!--        @foreach ($reports as $report)-->
        
<!--            <div class="offset-2 col-8">-->
<!--                    <p class="m-0">{{ $report->created_at }}</p>-->
<!--                    <p class="m-0">{{ $report->title }}&nbsp;{{ $report->time }}分</p>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <p class="m-0">{{ $report->content }}</p>-->
<!--                </div>-->
<!--            <div class="col-2">-->
                    
<!--                    @if (Auth::id() === $report->user_id)-->
                    
<!--                        {!! Form::open(['route' => ['report.edit', $report->id], 'method' => 'get']) !!}-->
<!--                            {!! Form::submit('編集', ['class' => 'btn btn-primary btn-md']) !!}-->
<!--                        {!! Form::close() !!}-->
                        
<!--                        {!! Form::open(['route' => ['report.destroy', $report->id], 'method' => 'delete']) !!}-->
<!--                            {!! Form::submit('削除', ['class' => 'btn btn-danger btn-md']) !!}-->
<!--                        {!! Form::close() !!}-->
                        
<!--                    @endif-->
                    
<!--                </div>-->
            
<!--        @endforeach-->
       
<!--    @endif-->
<!--    </div>-->
<!--</div>-->
@endsection

