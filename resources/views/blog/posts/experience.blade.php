<x-layout.main>
    <x-slot name="title">programming-experience</x-slot>
    <h1 id="programming-header">Programming experience</h1>
    <!--the main content of the page-->
    <main class="programming-main">
        <section class="programming-section">
            <img id="img-coding" src="{{asset('images/coding_picture.jpg')}}" alt="coding-picture" title="coding-picture">
            <h3 id="programming-subheader">Why did I chose to study programming!</h3>
            <p>
                From a young age I've always been curious about how those magical machines (computers) really work. And when I
                grew up and started doing projects at school on different topics in IT class I realized that I am creative and I
                like making design so much. So, I gained a lot of skills in it and then decided that completing my skills
                with something more complicated like programing would really help me in the future to do what I want and to
                create everything that I always wanted.
            </p>
            <h3 id="programming-subheader">What's my programming experience?</h3>
            <p>In the past I didn't really gain programming skills, so I didn't have any programmings skills at all. But when
                I applied for the HZ University I took some of their recommended courses. You can see them below.</p>
            <h3 id="programming-subheader">Here they are:</h3>
            <ul id="programming-exp-ul">
                <li> <a href="https://www.codecademy.com/learn/introduction-to-javascript" target="_blank"
                        rel="noopener noreferrer">Learn JavaScript</a> </li>
                <li> <a href="https://www.codecademy.com/learn/learn-how-to-code" target="_blank"
                        rel="noopener noreferrer">Learn How to Code</a> </li>
                <li> <a href="https://www.codecademy.com/learn/make-a-website" target="_blank" rel="noopener noreferrer">How to
                        Make a Website with NameCheap</a> </li>
            </ul>
        </section>

        <!--back button-->
        <a href="{{ route('blog') }}">
            <button id="back-button-programming" type="button">BACK</button>
        </a>
    </main>
</x-layout.main>
