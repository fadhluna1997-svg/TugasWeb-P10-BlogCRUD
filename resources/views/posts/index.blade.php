@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <h1>Daftar Post</h1>

    <a href="{{ route('posts.create') }}" class="btn">
        + Tambah Post
    </a>

    <br><br>

    @forelse($posts as $post)

        <x-card>

            <h2>{{ $post->title }}</h2>

            <p>
                {{ Str::limit($post->content, 150) }}
            </p>

            <small>
                Dibuat: {{ $post->created_at->format('d M Y H:i') }}
            </small>

            <br><br>

            <a href="{{ route('posts.show', $post) }}" class="btn">
                Lihat
            </a>

            <a href="{{ route('posts.edit', $post) }}" class="btn">
                Edit
            </a>

            <form
                action="{{ route('posts.destroy', $post) }}"
                method="POST"
                style="display: inline;"
            >
                @csrf
                @method('DELETE')

                <button type="submit" class="btn"
                    onclick="return confirm('Yakin ingin menghapus post ini?')">
                    Hapus
                </button>
            </form>

        </x-card>

    @empty

        <x-card>
            <p>Belum ada post.</p>
        </x-card>

    @endforelse

    <div>
        {{ $posts->links() }}
    </div>

@endsection