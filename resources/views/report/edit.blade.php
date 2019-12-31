@extends('layouts.app')

@section('content')
            <h2>学習日報</h2>
            {!! Form::model($reports,['route'=>['report.update',$reports->id],'method'=>'put']) !!}
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
             {!! Form::submit('更新！',['class'=>'btn btn-block btn-outline-light mt-4']) !!}
            {!! Form::close() !!}
            
@endsection