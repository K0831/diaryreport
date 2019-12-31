@extends('layouts.app')

@section('content')

@if(Auth::check())
    <div class="row">
        <div class="col-sm-8 offset-sm-2 mypage">
               @include('layouts.mypage_profile')
               @include('setting.report')
        </div>
    </div>
@else
<div class="center">
    <div class="text-center">
        <h1 class="welcome-h1">DiaryReport</h1>
        <p>Make learning a habit</p>
        <h2>{!! link_to_route('signup.get','SignUp',[],['class'=>'btn btn-outline-light btn-lg ']) !!}</h2>
    </div>
</div>

@endif

@endsection