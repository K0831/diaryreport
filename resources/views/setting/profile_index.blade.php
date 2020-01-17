@extends('setting.main')

@section('profile')

    <h2>プロフィール</h2>
    @if(isset($profiles))
    <div class="row mt-4">
        <div class="col-3">
            <img src="/storage/profile_images/{{ Auth::id() }}.jpg" height="150px" width="150px">
        </div>
        <div class="offfset-1 col-3">
            <p class="col-3 text-center">{{ $profiles->name }}</p>
            <p class="col-3 text-center">{{ $profiles->content }}</p>
        </div>
        <div class="col-5"></div>
    </div>
        <!--<p class="ml-4"><img src="/storage/profile_images/{{ Auth::id() }}.jpg" height="150px" width="150px"></p>-->
        <!--<div class="row"><p class="col-3 text-center">{{ $profiles->name }}</p></div>-->
        <!--<div class="row"><p class="col-3 text-center">{{ $profiles->content }}</p></div>-->
        <p>{!! link_to_route('profile.edit','編集',['id'=>$profiles->id],['class'=>'btn btn-block btn-outline-light mt-5']) !!}</p>
    @else
        <p>{!! link_to_route('profile.create','設定',[],['class'=>'btn btn-block btn-outline-light mt-5']) !!}</p>
    @endif

@endsection

        <!--@if(isset($profiles->image_url))-->
        <!--    <p><img src="/storage/profile_images/{{ Auth::id() }}.jpg" height="150px"; width="150px"></p>-->
        <!--@else-->
        <!--    <p>アイコンが登録されていません。</p>-->
        <!--@endif-->
        
        <!--@if(isset($profiles->name))-->
        <!--    <p>{{ $profiles->name }}</p>-->
        <!--@else-->
        <!--    <p>名前が登録されていません。</p>-->
        <!--@endif-->
        
        <!--@if(isset($profiles->content))-->
        <!--    <p>{{ $profiles->content }}</p>-->
        <!--@else-->
        <!--    <p>自己紹介が登録されていません。</p>-->
        <!--@endif   -->
