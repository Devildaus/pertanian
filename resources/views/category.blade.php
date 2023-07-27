@extends('front.main')
@section('container')
    
<h1 class="mb-5">Rekap Kegiatan: {{ $category }}</h1>
@foreach ($posts as $post)
    <article>
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <p>{{ $post->excerpt }}</p>
    </artic1e>
@endforeach
        
@endsection