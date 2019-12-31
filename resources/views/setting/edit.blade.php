@extends('setting.main')
    
    @section('profile')            
            
            <h2>プロフィール</h2>
                {!! Form::model($profiles,['route'=>['profile.update',$profiles->id,'files'=>true, 'enctype'=>'multipart/form-data'],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('image_url','アイコン',['class'=>'h5']) !!}
                <img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px" height="100px">
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