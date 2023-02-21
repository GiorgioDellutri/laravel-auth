<form action="{{ route($routeName, $post) }}" method="POST">
    @csrf
    @method('POST')

    <h2 class="mb-3 fw-bold">
        {{ Auth::user()->name }}
    </h2>

    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $post->title) }}">
        </div>

        <div class="mb-3">
            <label for="post_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" id="post_date" name="post_date"
                value="{{ old('post_date', $post->post_date) }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto del post</label>
            <textarea type="text" class="form-control" id="content" name="content">{{ old('content', $post->content) }} </textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Crea Post</button>
        </div>
    </form>
</form>
