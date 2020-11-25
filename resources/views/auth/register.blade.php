@extends('layouts.app')

@section('content')
    <div class="container form-container">
        <form action="{{route('register')}}" method="post">
            @csrf
            <label for="name">Name</label>
            <input id="name" name="name" type="text" autocomplete="off" value="{{old('name')}}">
                @error('name')
                    <div class="error">{{$message}}</div>
                @enderror
            <label for="username">Username</label>
            <input id="username" name="username" type="text" autocomplete="off" value="{{old('username')}}">
                @error('username')
                <div class="error">{{$message}}</div>
                @enderror
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="off" value="{{old('email')}}">
                @error('email')
                <div class="error">{{$message}}</div>
                @enderror
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
                @error('password')
                <div class="error">{{$message}}</div>
                @enderror
            <label for="password_confirmation">Repeat Your Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password">
                @error('password_confirmation')
                <div class="error">{{$message}}</div>
                @enderror
            <input type="submit" value="Register">
        </form>
    </div>
@endsection
