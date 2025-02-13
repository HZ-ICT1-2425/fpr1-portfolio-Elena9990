<x-layout.main>
    <x-slot name="title"> Dashboard </x-slot>
    <center>
    <h1 id="blog-header">Blog</h1>
    <!--the main content of the page-->
    <main>
        <!--table with blog posts in the page-->
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
                    <article>
                        <details>
                            <summary>
                                <h3>ICT field of work</h3>
                            </summary>
                            <p>
                                <i>24.09.2024</i>
                                <br>
                                The future is probably one of the most interesting topics for people in general. And one of their
                                questions for it is "What's the future job you'd like to have?". And know you have the answer for my
                                future. <a href="{{ route('post', ['slug' => 'ict-work']) }}">Read more...</a>
                            </p>
                        </details>
                    </article>

                    <article>
                        <details>
                            <summary>
                                <h3>My fisrt Feedback</h3>
                            </summary>
                            <p>
                                <i>20.08.2024</i>
                                <br>
                                Here you can check my first feedback for my answers in the 'Who am
                                I?' assignment and my website. <a href="{{ route('post', ['slug' => 'feedback']) }}">Read more...</a>
                            </p>
                        </details>
                    </article>

                    <article>
                        <details>
                            <summary>
                                <h3>Programming experience</h3>
                            </summary>
                            <p>
                                <i>16.07.2024</i>
                                <br>
                                One of the most important things in someone's IT career is the programming experience you have. <a
                                    href="{{ route('post', ['slug' => 'experience']) }}">Read more...</a>
                            </p>
                        </details>
                    </article>

                    <article>
                        <details>
                            <summary>
                                <h3>Personal SWOT analysis</h3>
                            </summary>
                            <p>
                                <i>18.06.2024</i>
                                <br>
                                Discovering someone's strength and threats is one of the most inetersting things about poeple, so
                                here you are able to see mine. <a href="{{ route('post', ['slug' => 'swot']) }}">Read more</a>
                            </p>
                        </details>
                    </article>

                    <article>
                        <details>
                            <summary>
                                <h3>My study choice</h3>
                            </summary>
                            <p>
                                <i>19.05.2024</i>
                                <br>
                                Here you can see the reasons behind my choice to study
                                in the HBO-ICT programme. <a href="{{ route('post', ['slug' => 'study-choice']) }}">Read more...</a>
                            </p>
                        </details>
                    </article>
                </td>
            </tr>
        </table>
    </main>
    </center>
</x-layout.main>
