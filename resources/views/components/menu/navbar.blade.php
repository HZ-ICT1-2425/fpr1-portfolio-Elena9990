<!--navigation bar-->
<nav class="navbar">
    <div class="navdiv">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('profile') }}" class="{{ Request::is('profile') ? 'active' : '' }}">My profile</a></li>
            <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
            <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                    <li> <a href="blog/ict-field-work.html">ICT field Work</a> </li>
                    <li> <a href="blog/first-feedback.html">First Feedback</a> </li>
                    <li> <a href="blog/programming-experience.html">Programming experience</a> </li>
                    <li> <a href="blog/personal-swot-analysis.html">Personal SWOT Analysis</a> </li>
                    <li> <a href="blog/study-choice-activities.html">Study choice</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
