@extends('front.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3" style="text-align:center;"> {{ $post->title }} </h2>
            <p>By. <a href="#"> {{ $post->author }}</a></p>
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/blog">Back To Post</a>
        </div>
    </div>
</div>

@endsection


