@props(['post'])
<div class="post">
    <div class="poster-info">
        <a href="{{route('user',$post->user)}}">{{$post->user->username}}</a>
        <time datetime="{{$post->created_at}}">{{$post->created_at->diffForHumans()}}</time>
    </div>
    <div class="post-body">
        {{$post->body}}
        <span class="post-likes-count">{{$post->likes->count()}} {{ Str::plural('like',$post->likes->count()) }}</span>
    </div>
    @auth
        <div class="post-controls">
            @if(!$post->likedBy(auth()->user()))
                <form action="{{route('post.like',$post)}}" method="post">
                    @csrf
                    <input type="submit" value="Like" class="like">
                </form>
            @else
                <form action="{{route('post.like',$post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Unlike" class="unlike">
                </form>
            @endif
            @can('delete',$post)
                <form action="{{route('post.destroy',$post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            @endcan

        </div>
    @endauth
</div>
