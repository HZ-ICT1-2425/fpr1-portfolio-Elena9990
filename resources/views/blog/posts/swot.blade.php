<x-layout.main>
    <x-slot name="title">personal-swot-analysis</x-slot>
    <h1 id="swot-header">Personal SWOT Analysis</h1>
    <!--the main content of the page-->
    <main class="swot-main">
        <section>
            <h3 id="swot-subheader">What are your strengths?</h3>
            <p id="swot-para">
                The first thing that comes to my mind as a strength of mine is being a good communicator. This is the thing that
                has helped me a lot with my school projects, because I know how to make people give their own ideas and opinions
                about a project and not be passive when it comes to working on it. In this way everyone performs a required task
                and the work is separated equally. Also, this ability contributes to choosing the accurate teammates when
                forming a team.

                The other powerful strength I have is my creative and critical thinking. When I have an assignment, I always
                think of something original that can make my project different from the others. And this is not the only reason,
                I also look for the extravagant idea or detail which will make it intriguing to watch or check. Because it may
                be original, but not interesting. But if I want this task to be performed like that, I need to see whether it is
                possible to do it in that way. As well as this, I need to check if those ideas of mine match the true concept
                and to see if there's something to improve or fix. Therefore, the evaluation of all the ideas and work are
                really important, so that the job is done well.
            </p>
            <h3 id="swot-subheader"> What are your weaknesses? </h3>
            <p id="swot-para">
                The biggest obstacle for my work is being stressed over little and sometimes unimportant things. There are
                moments when I am stressed out because of my perfectionism for those details that probably only a few people
                would pay attention to. And this leads to thoughts which make me think if everything is fine and good enough, so
                that it is accepted well. Eventually, this ends when I get the final critics by those who are supposed to
                approve of it. So far, this has been changing in a good way and little by little these worries disappear and
                start being replaced by tranquility.

                The perfectionism mentioned above sometimes consumes a lot of time and energy. Losing track of time because of
                it has its cost, because all the extra things are done, but the main part needs to be done as well. That doesn't
                mean that there's no plan how things will be done or the main point and concepts are not clear. It means that I
                could do it a bit faster and prioritize the most important parts being done first. However, I manage to do the
                projects for the deadline given.
            </p>
            <h3 id="swot-subheader"> Which opportunities do you see? </h3>
            <p id="swot-para">
                The field of opportunities seems to be a huge one, because it is not only the knowledge I will gain in those
                four years, but also the skills I will obtain. Once I know how to use them practically, I will manage to work
                for bigger projects. They are those which will help me with adding experience to my CV and this is a huge chance
                for me to be chosen to work with really smart people around the world. And the good and challenging part of all
                this is that I will have the chance to do that during my internship while having my studies at the university.
                Having this in my CV even before finishing my studies is also a big plus for me, because I will be prepared in
                many ways for the following years.
            </p>
            <h3 id="swot-subheader"> Which threats do you see? </h3>
            <p id="swot-para">
                For now, I do not see any threats, but even if there are any, I believe I will find a way to make things work.
            </p>
        </section>

        <!--summary for the information on the page-->
        <div class="swot-bullet">
            <section>
                <h3 id="summary-swot-h">SUMMARY</h3>
                <h3>Strengths</h3>
                <ul>
                    <li>Good communicator</li>
                    <li>Creative thinking</li>
                    <li>Critical thinking</li>
                </ul>
            </section>

            <section>
                <h3>Weaknesses</h3>
                <ul>
                    <li>Stress</li>
                    <li>Perfectionism</li>
                    <li>Prioritizing</li>
                </ul>
            </section>

            <section>
                <h3>Opportunities</h3>
                <ul>
                    <li>New skills</li>
                    <li>Working on bigger projects</li>
                    <li>Getting to know more intelligent people</li>
                    <li>Internships</li>
                </ul>
            </section>

            <section>
                <h3>Threats</h3>
                <ul>
                    <li>No threats</li>
                </ul>
            </section>
        </div>
        <img id="personal-swot-analysis-img" src="{{asset('images/swot-analysis-picture.jpg')}}" alt="SWOT-Analysis-picture"
             title="SWOT-Analysis-picture">
        <a href="{{ route('blog') }}">
            <button id="back-button-swot" type="button">BACK</button>
        </a>
    </main>
</x-layout.main>
