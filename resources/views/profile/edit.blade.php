@extends('setting.main')
@section('profile')

<h2>プロフィール</h2>
{!! Form::model($profiles,['route'=>['profile.update',$profiles->id],'enctype'=>"multipart/form-data",'method'=>'put']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        <p><img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="150px" height="150px"></p>
        {!! Form::file('image_url',old('image_url'),['class'=>'form-control']) !!}
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