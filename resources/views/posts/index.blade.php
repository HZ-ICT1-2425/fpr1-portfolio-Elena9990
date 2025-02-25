<x-layout.main>
   <x-ui.notifications></x-ui.notifications>
    <center>
        <x-slot:title>Blog</x-slot:title>
        <h1 id="blog-header">Blog</h1>
        <!-- The main content of the page -->
        <main>
            <!-- Table with blog posts -->
            <table class="blog-table">
                <tr>
                    <th>
                        <h3>What's the blog about? </h3>
                    </th>
                    <th>
                        <h3>Blog pages</h3>
                    </th>
                </tr>
                <tr>
                    <td class="blog-td">
                        Hello, in this blog you're going to see more information about me. So, there are different topics which I
                        have talked about and on the right side you can see them. Enjoy reading :)
                        <br><br>
                        <img src="{{ asset('images/blog.jpeg') }}" alt="laptop-blog-picture" title="laptop-blog-picture">
                    </td>
                    <td>
                        @if($posts->isEmpty())
                            <article>
                                <h3 id="message-empty-posts">This blog is empty</h3>
                            </article>
                        @else
                        @foreach($posts as $post)
                            <article>
                                <details>
                                    <summary>
                                        <h3>{{ $post->title }}</h3>
                                    </summary>
                                    <p>
                                        <i>Created at: {{ $post->created_at->format('d.m.Y, H:i') }}</i>

                                        <p> {{ $post->summary }} <a href="{{ route('posts.show', $post) }}">Read more...</a></p>
                                        <br>
                                    </p>
                                    <button id="edit-post-button" onclick="window.location.href='{{ route('posts.edit', ['post' => $post->id]) }}'">Edit</button>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="delete-post-button">Delete</button>
                                    </form>
                                </details>
                            </article>
                        @endforeach
                        @endif
                        <br>
                            <a href="{{ route('posts.create') }}" id="create-post-button">Create new post</a>
                    </td>
                </tr>
            </table>
        </main>
    </center>
</x-layout.main>
