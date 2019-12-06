@extends('layouts.app')

@section('content')

<div class="center">
    <div class="text-center">
        <h1 class="welcome-h1">DiaryReport</h1>
        <p>Make learning a habit</p>
        <h2>{!! link_to_route('signup.get','SignUp',[],['class'=>'btn btn-lg ']) !!}</h2>
    </div>
</div>


@endsection