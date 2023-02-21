@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $post->aithor }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <div class="button">
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
                <div class="card-footer text-muted">{{ $post->post_date }}</div>
            </div>
        </div>
    </div>
@endsection
