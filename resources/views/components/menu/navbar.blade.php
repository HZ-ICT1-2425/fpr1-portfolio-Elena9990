<!--navigation bar-->
<nav class="navbar">
    <div class="navdiv">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('profile') }}" class="{{ Request::is('profile') ? 'active' : '' }}">My profile</a></li>
            <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
            <li>
                <a href="{{ route('blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a>
                <ul class="dropdown">
                    <li> <a href="{{ route('post', ['slug' => 'ict-work']) }}">ICT field Work</a> </li>
                    <li> <a href="{{ route('post', ['slug' => 'feedback']) }}">First Feedback</a> </li>
                    <li> <a href="{{ route('post', ['slug' => 'experience']) }}">Programming experience</a> </li>
                    <li> <a href="{{ route('post', ['slug' => 'swot']) }}">Personal SWOT Analysis</a> </li>
                    <li> <a href="{{ route('post', ['slug' => 'study-choice']) }}">Study choice</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
