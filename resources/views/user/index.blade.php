@extends('layouts.app')

@section('content')
    <div class="container user-container">
        <h1>{{$user->username}}</h1>
        <p>Posted : {{$posts->count()}}  {{ Str::plural('Post',$posts->count()) }}</p>
        <p>Received : {{$user->receivedLikes->count()}} {{ Str::plural('Like',$user->receivedLikes->count())}}</p>
    </div>
    <div class="container posts-container">
        @if($posts->count())
            @foreach($posts as $post)
                <x-post :post="$post"/>
            @endforeach
            {{$posts->links()}}
        @else
            <div class="info">
                There Are No Posts To Show
            </div>
        @endif
    </div>
@endsection
