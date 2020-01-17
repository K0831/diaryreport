@extends('setting.main')

@section('plan')

    <h2>週間学習計画</h2>

<div class="row text-center">
    <div class="offset-2 col-sm-3">学習目標時間</div>
    <div class="offset-1 col-sm-6">場所や内容など</div>
</div>
{!! Form::model($plan,['route'=>['plan.update',$plan->id],'method'=>'put']) !!}
 {{ csrf_field() }}
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('mon_t','月',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('mon_t',old('mon_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('mon_c',old('mon_c'),['class'=>'form-control col-sm-6']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('tue_t','火',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('tue_t',old('tue_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('tue_c',old('tue_c'),['class'=>'form-control col-sm-6']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('wed_t','水',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('wed_t',old('wed_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('wed_c',old('wed_c'),['class'=>'form-control col-sm-6']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('thu_t','木',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('thu_t',old('thu_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('thu_c',old('thu_c'),['class'=>'form-control col-sm-6']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('fri_t','金',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('mfrit',old('fri_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('fri_c',old('fri_c'),['class'=>'form-control col-sm-6']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('sat_t','土',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('sat_t',old('sat_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('sat_c',old('sat_c'),['class'=>'form-control col-sm-6']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::label('sun_t','日',['class'=>'h4 col-3 mt-1 text-center']) !!}
            {!! Form::number('sun_t',old('sun_t'),['class'=>'form-control offset-1 col-6']) !!}
            <h5 class="col-1 mt-1 text-center">分</h5>
        </div>
    </div>
    {!! Form::text('sun_c',old('sun_c'),['class'=>'form-control col-sm-6']) !!}
</div>

<div class="row">
{!! Form::submit('設定',['class'=>'btn btn-block btn-outline-light mt-4']) !!}
    
</div>

{!! Form::close() !!}

@endsection