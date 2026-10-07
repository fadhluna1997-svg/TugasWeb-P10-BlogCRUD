@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')

    <h1>Detail Post</h1>

    <x-card>

        <h2>{{ $post->title }}</h2>

        <p>
            {{ $post->content }}
        </p>

        <hr>

        <small>
            Dibuat:
            {{ $post->created_at->format('d M Y H:i') }}
        </small>

        <br>

        <small>
            Diperbarui:
            {{ $post->updated_at->format('d M Y H:i') }}
        </small>

        <br><br>

        <a href="{{ route('posts.edit', $post) }}" class="btn">
            Edit
        </a>

        <a href="{{ route('posts.index') }}" class="btn">
            Kembali
        </a>

    </x-card>

@endsection