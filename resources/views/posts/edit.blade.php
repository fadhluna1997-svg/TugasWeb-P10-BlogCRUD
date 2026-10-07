@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h1>Edit Post</h1>

    <x-card>

        <form action="{{ route('posts.update', $post) }}" method="POST">

            @csrf
            @method('PUT')

            <div>
                <label for="title">Judul</label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $post->title) }}"
                    placeholder="Masukkan judul post"
                >

                @error('title')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="content">Isi Post</label>

                <textarea
                    id="content"
                    name="content"
                    rows="8"
                    placeholder="Masukkan isi post"
                >{{ old('content', $post->content) }}</textarea>

                @error('content')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn">
                Update Post
            </button>

            <a href="{{ route('posts.index') }}" class="btn">
                Batal
            </a>

        </form>

    </x-card>

@endsection