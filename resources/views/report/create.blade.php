@extends('layouts.app')



@section('content')

<div class="text-center">
    <h1>学習日報</h1>
</div>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
            {!! Form::open(['route'=>'report.store']) !!}
            <div class="form-group">
                {!! Form::label('time','学習時間(分)',['class'=>'h5']) !!}
                {!! Form::number('time',old('time'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title','タイトル',['class'=>'h5']) !!}
                {!! Form::text('title',old('title'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','学習の詳細',['class'=>'h5']) !!}
                {!! Form::textarea('content',old('content'),['class'=>'form-control']) !!}
            </div>
             {!! Form::submit('作成！',['class'=>'btn btn-block btn-outline-light btn-lg mt-4']) !!}
            {!! Form::close() !!}
    </div>
</div>

@endsection