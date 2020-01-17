@extends('layouts.app')

@section('content')

@if(Auth::check())

         @include('layouts.mypage_profile')
         
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