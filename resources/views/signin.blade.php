@extends('layouts.main')

@section('title', '| Sign in')

@section('content')
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Sign in</h2>
            <hr>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="control-label" for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail"  value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary" value="Sign in">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection