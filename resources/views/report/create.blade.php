@extends('setting.main')

@section('report')

    <h2>学習日報</h2>
    {!! Form::open(['route'=>'report.store']) !!}
     {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('time','学習時間(分)',['class'=>'h5']) !!}
        {!! Form::number('time',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('title','タイトル',['class'=>'h5']) !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','学習の詳細',['class'=>'h5']) !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
        {!! Form::submit('作成！',['class'=>'btn btn-block btn-outline-light btn-lg mt-4']) !!}
    {!! Form::close() !!}

@endsection