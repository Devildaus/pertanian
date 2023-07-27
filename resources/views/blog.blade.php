@extends('front.main')
@section('container')
<style>
    .button {
    display: inline-block;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: rgb(74, 193, 98);
    background-color: #ffffff;
    border: none;
    border-radius: 15px;
}

.button:hover {
    background-color: rgb(74, 193, 98);
    color: rgb(255, 255, 255);
}

.button:active {
    background-color: rgb(74, 193, 98);
    color: rgb(255, 255, 255);
    transform: translateY(4px);}

.containerblog {
    width: 500px;
    height: 500px;
    }

.containerblog img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    }
</style>
<h1 align=center>{{ $title }}</h1></br>
@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 500px; overflow: hidden;">
    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="/posts?category={{ $posts[0]->category->slug }}" style="max-width: 100%;">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name ?? 'unknown' }}" class="card-img-top" alt="{{ $posts[0]->category ?? 'unknown' }}" style="width: 100%; margin: auto;">
    @endif


    <div class=" card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-muted">
                By.<a href="/posts?author={{ $posts[0]->author }}">{{ $posts[0]->author }}</a> in <a href="/posts?category={{ $posts[0]->category->slug ?? 'unknown' }}" class="text-decoration-none"> {{ $posts[0]->category->name  ?? 'unknown' }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a></br></br>

    </div>
</div>

<div class="containerblog" style="width: 500px; height: 500px;">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-4" style="width: 20rem;">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 20px;"><a href="/posts?category={{ $post->category->slug ?? 'unknown' }}" class="text-decoration-none text-white"> {{ $post->category->name  ?? 'unknown' }}</a></div>
                @if ($post->image)
                <div style="max-height: 300px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="/posts?category={{ $post->category->slug }}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x500?{{ $post->category->name ?? 'unknown' }}" style="width:300px; height: 300px; margin:2px auto;" class="card-img-top" alt="{{ $post->category ?? 'unknown'  }}">

                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/post?author={{ $post->author }}">{{ $post->author }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">Not Found</p>
@endif
<div class="d-flex justify-content-end">

</div>
@endsection