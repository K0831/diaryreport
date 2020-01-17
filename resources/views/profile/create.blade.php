@extends('setting.main')
    
    @section('profile')            
            
            <h2>プロフィール</h2>
            {!! Form::open(['route'=>['profile.store'],'enctype'=>'multipart/form-data']) !!}
             {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('image_url','アイコン',['class'=>'h5']) !!}
                <br>
                {!! Form::file('image_url',null,['id'=>'image_url']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name','名前',['class'=>'h5']) !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','自己紹介',['class'=>'h5']) !!}
                {!! Form::textarea('content',null,['class'=>'form-control']) !!}
            </div>
             {!! Form::submit('設定',['class'=>'btn btn-block btn-outline-light mt-4']) !!}
            {!! Form::close() !!}
            

    @endsection