
<article class="media">
    <div class="media-content">
        <div class="content">
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
            <br>
            <div class="is-size-7">
                {!! $post->summary !!}
            </div>
        </div>
    </div>
</article>
