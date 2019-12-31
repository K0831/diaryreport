@extends('setting.main')
    
    @section('profile')            
            
            <h2>プロフィール</h2>
            {!! Form::open(['route'=>'profile.post','files'=>true, 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::label('image_url','アイコン',['class'=>'h5']) !!}
                <br>
                {!! Form::file('image_url',old('image_url'),['id'=>'image_url']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name','名前',['class'=>'h5']) !!}
                {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','自己紹介',['class'=>'h5']) !!}
                {!! Form::textarea('content',old('content'),['class'=>'form-control']) !!}
            </div>
             {!! Form::submit('設定',['class'=>'btn btn-block btn-outline-light mt-4']) !!}
            {!! Form::close() !!}
            

    @endsection