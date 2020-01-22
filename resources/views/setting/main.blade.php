@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-3 mt-5">
        <div class="row">
            <div class="col-12">
                {!! link_to_route('profile.index','プロフィール',[],['class'=>'nav-link btn btn-lg btn-light p-4']) !!}
            </div>
            <div class="col-12 mt-4">
                {!! link_to_route('plan.index','週間学習計画',[],['class'=>'nav-link btn btn-lg btn-light p-4'])!!}
            </div>
            <div class="col-12 mt-4">
                {!! link_to_route('report.index','学習日報',[],['class'=>'nav-link btn btn-lg btn-light p-4']) !!}
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="main-1">
            @yield('profile')
        </div>
        <div class="main-2">
            @yield('plan')
        </div>
        <div class="main-3">
            @yield('report')
        </div>
    </div>
</div>


@endsection