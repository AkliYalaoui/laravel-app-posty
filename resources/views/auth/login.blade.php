@extends('layouts.app')

@section('content')
    <div class="container form-container">
        <form action="{{route('login')}}" method="post">
            @if(session()->has('status'))
                <div class="error">{{session('status')}}</div>
            @endif
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="email">
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password">
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror

            <div class="remember-me">
                <label for="remember">Remember me</label>
                <input type="checkbox" id="remember" name="remember">
            </div>

            <input type="submit" value="Login">
        </form>
    </div>
@endsection
