@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        @include('admin.partials.editCreate', ['methods' => 'POST', 'routeName' => 'admin.post.store'])
    </div>
@endsection
