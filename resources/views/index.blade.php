<x-layout.main>
    <x-slot name="title"> Index </x-slot>

<!--this is the top part of the page-->
<h2 id="welcome-header"> Welcome </h2>
<h1 id="hello-header">Hello!</h1>
<p id="introduction-paragraph">
    Hello, I am Elena Petkova, this is my portfolio website. I'm happy to see you are visitting it. Here you can find a
    lot about me, my
    motivation to continue studying after high school, some more details about my interests and more.
    <br>
    Let's start with who I am and what my opinion about the program is, click the button to find out! <br><br><br>
</p>
<img id="me-photo" src="{{ asset('images/picture_of_me.jpg') }}" alt="elena-petkova" title="elena-petkova">
<a href="#line">
    <button id="ict-button" type="button">ABOUT ME</button>
</a>
<hr id="line">

<!--the main content of the page-->
<h2 id="int-qna-header">Interesting questions :)</h2>
<main>
    <!--images-->
    <img id="netherlands-photo" src="{{ asset('images/netherlands.jpg') }}" alt="The Netherlands" title="The Netherlands">
    <a href="https://hz.nl/" target="_blank">
        <img id="hz-logo-app-sciences" src="{{ asset('images/hz-university-of-applied-sciences.png')}}"
             alt="HZ University of Applied Sciences" title="HZ University of Applied Sciences">
    </a>
    <img id="digital-picture" src="{{ asset('images/digital-index-pic.jpg') }}" alt="ICT" title="ICT">

    <!--the main text in on the page-->
    <section class="section-main-content">
        <ul>
            <h3>
                <li>Who am I?</li>
            </h3>
            <p>
                So, a few months ago I just graduaded highschool and decided to continue my study path with taking higher
                education
                at the HZ University of Applied Sciences. So, now I'm taking the challenge of living abroad and studying in a
                language different than mine. But why did I choose it to be like that? Because why not trying taking diverse
                opportunities around the world :)
            </p>
            <h3>
                <li>Why exactly the HZ University?</li>
            </h3>
            <p>
                The main reason for my choice for me to have my studies in the Netherlands is the educational system which
                gives numerous opportunities for the students. For instance, the international experience and all the practice
                that is put into the process
                of learning. Also, I like getting out of my comfort zone and the challenge of moving to another country seemed
                to be a big step in my life, so I decided to make it.
            </p>
            <h3>
                <li>Why is ICT for me?</li>
            </h3>
            <p>
                Firstly, I've always been interested in computers in some way. At first I wasn't really sure what exatly
                attracted me to them, but a few years ago I descovered my desire to create things like apps, presentations,
                designs, games, etc. And for a creative and logical thinking person like me, the program would definitely help
                to me improve my creative talents, and it could also help me with the deeper understanging of computer
                science. So,
                in that way I will have the right knowledge which will give me the possibility make projects from which I am
                going to benefit from. But it's not going to be only me who's going to benefit from it, but the world as well.
            </p>
        </ul>
    </section>
</main>
</x-layout.main>
