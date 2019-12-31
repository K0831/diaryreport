@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-3 mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">{!! link_to_route('profile.get','プロフィール',[],['class'=>'nav-link']) !!}</li>
            <li class="nav-item mt-3"><a href="/" class="nav-link">習慣目標</a></li>
            <li class="nav-item mt-3">{!! link_to_route('report.index','学習日報',[],['class'=>'nav-link']) !!}</li>
            </ul>
    </div>
    <div class="col-9">
        <div class="main-1">
            @yield('profile')
        </div>
        <div class="main-2">
        </div>
        <div class="main-3">
            @yield('report')
        </div>
    </div>
</div>


@endsection