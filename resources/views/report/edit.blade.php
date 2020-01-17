@extends('setting.main')

@section('report')
            <h2 class="text-center">学習日報</h2>
            {!! Form::model($reports,['route'=>['report.update',$reports->id],'method'=>'put']) !!}
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
             {!! Form::submit('更新！',['class'=>'btn btn-block btn-outline-light mt-4']) !!}
            {!! Form::close() !!}
            
@endsection