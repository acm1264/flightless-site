@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Dev Blog Posts</h1>

    <ul>
        @forelse ($posts->sortBy('date', [], true) as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
