<x-layout.main>
    <x-slot name="title">first-feedback</x-slot>
    <h1 id="feedback-header">My first feedback</h1>
    <!--the main content of the page-->
    <main class="feedback-main">
        <section>
            <h4>
                This feedback is from Paula Tavares Leitao Waaijenberg (ICT lecturer) for my "Who am I?" assignment
            </h4>
            <p>
                "Reading your motivation, I noticed you are already familiar with some aspects of software development and even
                has a
                preference for front end. Our program for the first year focuses mostly on programming (HTML, JavaScript,
                TypeScript, Laravel Framework) and that will give you the base to become a developer. Besides coding, we also
                work
                on your professional development exploring 4 main competences: 'Interact purposefully', 'Research-oriented
                problem-solving', 'Future-oriented organizing' and 'Personal leadership'. It is also good that you are already
                thinking about Software Engineering. During the second year you will get better acquainted with Business IT
                Consultancy and Data Science and will have the chance to make a definitive choice.
            <p>
                From your SWOT analysis: you mention you are a good communicator, this will come handy when working with the
                various
                team project assignments. Perfectionism can be positive thing when your invest in going for the best results.
                But
                experience will teach that sometime you don’t have the means or the time to do it all and will need to make
                choices
                and prioritise. It is not that you are delivering a bad product, but a leaner one. Maybe it can help to give
                yourself a timebox when you really want to work further on an improvement. You can plan one or two hours of work
                in
                advance, but stick to it: done is done, even if it could have been better."
            </p>
            <h4>My feedback from students</h4>
            <p>There was a feedback that I also received from students. What they said was that maybe changing the design of
                my home page would be better, as well as that they stated that I should change some of the links put on the
                pages and make them open in a different window and not in the one that my site is on, so the visitor of the site
                stays focused on my site. Also some of them suggested that changing some of my design elements would make the
                site a better. </p>
            <p>
            <h4>My thoughts about the feedbacks</h4>
            <p>
                When it comes to the first feedback, I think that prioritizing things works way more than being indecisive about
                whether I should spend more time on the details or continue with the more important stuff. And about the feedback
                from the students, I think that what they suggested me to do is vital and I took it into account. The only thing
                that I took into account, but didn't really change is the design elements. But they were right about changing
                the home page;
            </p>
            <a href="{{ route('blog') }}">
                <button id="back-button-feedback" type="button">BACK</button>
            </a>
        </section>
    </main>
</x-layout.main>
