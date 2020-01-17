@extends('layouts.app')


@section('content')


<div class="text-center">
    <h1>Sign Up</h1>
</div>

<div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route'=>'signup.post']) !!}
             {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', old('name'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', old('email'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
           <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirmation') !!}
                {!! Form::password(' password_confirmation', ['class'=>'form-control']) !!}
            </div>
                {!! Form::submit('SignUp',['class'=>'btn btn-block btn-outline-light mt-5']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection