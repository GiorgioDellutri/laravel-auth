@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $post->author }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>

                <div class="card-image text-center">
                    @if (str_starts_with($post->image, 'http'))
                        <img src="{{ $post->image }}" class="img-fluid" alt="{{ $post->title }}">
                    @else
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    @endif
                </div>

                <p class="card-text">{{ $post->content }}</p>
                <div class="button">
                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-sm btn-success ">Edit</a>
                    <form class="d-inline" action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
                <div class="card-footer text-muted">{{ $post->post_date }}</div>
            </div>
        </div>
    </div>
@endsection
