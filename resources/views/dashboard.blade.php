@extends('layouts.app')

@section('content')
    <div class="container card-container">
        <div class="card">
            {{$user_count}} Users
        </div>
        <div class="card">
            {{$post_count}} Posts
        </div>
    </div>
@endsection
