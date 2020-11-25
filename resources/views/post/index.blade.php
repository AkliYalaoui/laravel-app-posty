@extends('layouts.app')

@section('content')

    @auth
        <div class="container form-container">
            <form action="{{route('post')}}" method="post">
                @csrf
                <label for="body">Body :</label>
                <textarea name="body" id="body" placeholder="Post Something ..."></textarea>

                @error('body')
                <div class="error">
                    {{$message}}
                </div>
                @enderror
                <input type="submit" value="post">
            </form>
        </div>
    @endauth

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
