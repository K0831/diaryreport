@extends('layouts.app')


@section('content')


<div class="text-center">
    <h1>Sign Up</h1>
</div>

<div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route'=>'login.post']) !!}
             {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', old('email'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
                {!! Form::submit('SignUp',['class'=>'btn btn-block btn-outline-light mt-5']) !!}
            {!! Form::close() !!} 
            
            <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>

@endsection