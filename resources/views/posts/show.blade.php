<x-layout.main>
    <x:slot:title>Post</x:slot:title>
    <h1 class="title is-4" id="form-header">{{ $post->title }}</h1>
    <div>
        <div class="form-main">
            {!! $post->body !!}
            <h6><i>Created at: {!! $post->created_at->format('d.m.Y, H:i') !!}</i></h6>
            <h6><i>Updated at: {!! $post->updated_at->format('d.m.Y, H:i') !!}</i></h6>
        </div>
    </div>
</x-layout.main>
