<!--navigation bar-->
<nav class="navbar">
    <div class="navdiv">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('profile') }}" class="{{ Request::is('profile') ? 'active' : '' }}">My profile</a></li>
            <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ route('faqs.index') }}" class="{{ Request::is('faqs.index') ? 'active' : '' }}">FAQ</a></li>
            <li>
                <a href="{{ route('posts.index') }}" class="{{ Request::is('posts.index') ? 'active' : '' }}">Blog</a>
{{--                <ul class="dropdown">--}}
{{--                    <li> <a href="{{ route('posts.show', ['slug' => 'ict-work']) }}">ICT field Work</a> </li>--}}
{{--                    <li> <a href="{{ route('posts.show', ['slug' => 'feedback']) }}">First Feedback</a> </li>--}}
{{--                    <li> <a href="{{ route('posts.show', ['slug' => 'experience']) }}">Programming experience</a> </li>--}}
{{--                    <li> <a href="{{ route('posts.show', ['slug' => 'swot']) }}">Personal SWOT Analysis</a> </li>--}}
{{--                    <li> <a href="{{ route('posts.show', ['slug' => 'study-choice']) }}">Study choice</a> </li>--}}
{{--                </ul>--}}
            </li>
        </ul>
    </div>
</nav>
