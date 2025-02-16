<x-layout.main>
    <x-slot name="title"> profile </x-slot>
    <!--main content of the page-->
    <h1 id="profile-header">Profile page</h1>
    <main class="profile-page-main">
        <div class="profile-info-div">
            <h3 id="what-is-more-header"> What's more? </h3>
            <ul>
                <b>Personal information</b>
                <li>I'm Elena Petkova</li>
                <li>From Bulgaria</li>
                <li>19-years-old</li>
                <b>Characteristics of mine</b>
                <li>I am a kind person</li>
                <li>I love being goofy when with friends</li>
                <li>I work hard and seriously</li>
                <li>I like helping other</li>
            </ul>
            <!--images-->
            <div class="profile-page-images">
                <img src="{{asset('images/photo_me.jpg')}}" alt="elena-petkova-picture" title="elena-petkova-picture">
                <img src="{{asset('images/seagul.jpg')}}" alt="seagul-picture" title="seagul-picture">
                <img src="{{asset('images/flower.jpg')}}" alt="flower-picture" title="flower-picture">
            </div>
            <h3 id="more-char-header"> More of my characteristics and extracurricular activities</h3>
            <p>
                You've likely come across some of the information about my studies on the other pages, but what about the
                inner me?
                I'm a person who loves socializing and hanging out with people and I love being the funny person in the
                friend's group. Another typical thing about me is that I spend quite a lot time watching different things
                like videos, series and movies, some of which you can check below in this page :)
            </p>
            <h3 id="hobbies-header">So, what about my hobbies?</h3>
            <p>
                There are several hobbies that I have and the one that I do almost every day is walking around the
                town. Sometimes I do it for 1 or 2 hours without stopping. This is the best way of relaxation for me,
                also it keeps me in a good shape. The other physical activity that I like is dancing. I do not
                practice it that often, but I enjoy it so much every single time I do it. Sport took a big part of my
                life, because I used to be a cheerleader for about 7 years and then I used to do karate for a year.
                And all those years of training have given me discipline and have toughen me up. Also, I have met a
                lot of people throughout those years and I have learned how to be a part of a team. When it comes to
                the competitions that I participated in, I understood that even there's a failure I shouldn't give up,
                then understand my mistakes and not repeat them again.
            </p>
            <hr id="profile-hr">
        </div>

        <!--those are the videos on the page-->
        <div class="div-videos">
            <h3 id="watch-videos-header"> Here you can see some of my favorite movies and shows.</h3>
            <section>
                <iframe width="500" height="230" src="https://www.youtube.com/embed/znmZoVkCjpI?si=Bvl8Km1OUtmQpH3w"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="500" height="230" src="https://www.youtube.com/embed/MFWF9dU5Zc0?si=ZhF9xUzzSgKGcLEo"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe width="500" height="230" src="https://www.youtube.com/embed/BmVmhjjkN4E?si=ElHvSu0mMfO9ESYC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe width="500" height="230" src="https://www.youtube.com/embed/QNwhAdrdwp0?si=L8oRwY8Eolwh_9Mu"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </section>

            <!--descriptions for each video-->
            <section class="descriptions-section">
                <h3 id="video-header">Seven</h3>
                <p>
                    Detectives Somerset and Mills, one a seasoned cop, the other a relatively new one, are paired up to
                    solve murders. Together they attempt to find a killer who is inspired by the seven deadly sins.
                </p>
                <hr id="profile-hr">
                <h3 id="video-header">Ocean's 8</h3>
                <p>
                    Debbie Ocean is released from jail after serving a prison sentence. She assembles a special crew of
                    seven women to steal a diamond necklace, worth 150 million dollars, from the Met Gala.
                </p>
                <hr id="profile-hr">

                <h3 id="video-header">The Vampire Diaries</h3>
                <p>
                    On her first day at high school, Elena meets Stefan and immediately feels a connection with him.
                    However, what she does not know is that Stefan and his brother, Damon, are in fact vampires.
                </p>
                <hr id="profile-hr">
                <h3 id="video-header">Elite</h3>
                <p>
                    When three working-class teens enroll in an exclusive private school in Spain, the clash between them
                    and the wealthy students leads to murder.
                </p>
            </section>
        </div>
    </main>
</x-layout.main>
