<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

            Post::create([
                'title' => 'ICT field of work',
                'slug' => 'ict-field-of-work',
                'body' => '<p>So, I mentioned that I would like to do diverse projects and improve them more and more.
                 Yeah, I always wanted to create games and apps, but there is also something that I have always desired to do.
                 And it is working in some of the biggest companies in the world.</p>
                <p>Why exactly those ones? Why not some companies connected with creating games and apps? Well, I will give only one reason
                for now, because the rest is for you down below in the page. So, those companies use so much user data and it is amazing how
                it all works for the companies and the users.</p>
                <h3 id="ict-subheader">Facebook:</h3> <p>Facebook is a social media and social networking service owned by American technology conglomerate Meta.
                Created in 2004 by Mark Zuckerberg with four other Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz,
                and Chris Hughes, its name derives from the face book directories often given to American university students. Membership was initially limited to Harvard students,
                gradually expanding to other North American universities. Since 2006, Facebook allows everyone to register from 13 years old, except in the case of a
                handful of nations, where the age limit is 14 years.
                As of December 2022, Facebook claimed almost 3 billion monthly active users. As of October 2023, Facebook ranked as the third-most-visited website in the world, with 22.56% of its traffic coming from the United States.
                It was the most downloaded mobile app of the 2010s.</p>
                <p>Facebook has been a big part of my life, because I have had a profile there since I was a child and I have been so curious how everything in the app is just made. For instance,
                the fact that you can find so many people and see everything about them is quite interesting to see how it is done. The other reason that I would like to work in the company would be that it
                could give me a lot of marketing and coding experience. Another opportunity that I would add is that I can improve the system as well and be a part of that large team. Also, I would like to see how all the
                information about all the users has been used and where exactly it goes.</p>
                <h3 id="ict-subheader">YouTube:</h3> YouTube is an American online video sharing platform owned by Google. Accessible worldwide, YouTube was launched on February 14, 2005, by Steve Chen, Chad Hurley, and Jawed Karim,
                three former employees of PayPal. Headquartered in San Bruno, California, United States, it is the second-most visited website in the world, after Google Search. In January 2024, YouTube had more than 2.7 billion monthly
                active users, who collectively watched more than one billion hours of videos every day. As of May 2019, videos were being uploaded to the platform at a rate of more than 500 hours of content per minute, and as of 2021, there
                were approximately 14 billion videos in total.</p>
                <p>There are several reasons because of which I would like to work for YouTube. Firstly, it has been improving all the time and I as a user can say that it has always been intriguing to see the changes and actually think of a way to make some on my own. I would like to try to improve the design and to add more options to the platform. Also, I would like to see the whole process "behind the scenes", for example, how they make the mechanism of approving the videos and how the regulations are being implemented.</p>
                <h3 id="ict-subheader">Spotify:</h3> Spotify’s platform revolutionized music listening forever when we launched in 2008. Our move into podcasting brought innovation and a new generation of listeners to the medium, and in 2022 we entered the next audio market primed for growth with the addition of audiobooks.</p>
                <p>Today, more listeners than ever can discover, manage and enjoy more than 100 million tracks, 6 million podcasts titles, and 350,000 audiobooks a la carte on Spotify. We are the world’s most popular audio streaming subscription service with more than 626 million users, including 246 million subscribers in more than 180 markets. Joining Spotify as an IT specialist would be great not only because I would upgrade my coding skills, but also I would see some part of the music industry or at least in the technical part. Working there would give me the bigger perspective for working in a completely different technical field which is great because when you have more experience with diverse apps like this one you can start combining all of your skills and make something greater as a product. Also, who is not curious about music in general?</p>
                <p>This is also a way to see new artists appearing in the music industry and having the opportunity to be part of the first ones who discovered them. And actually not only new artists but motivators who give motivational podcasts and help others to keep up with their success. So, that is how you start knowing more and more talents and some day you might even work with them, who knows?</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'summary' => 'The future is probably one of the most interesting topics for people in general. And one of their questions for it is "What is the future job you would like to have?". And now you have the answer for my future.'
            ]);

        Post::create([
                'title' => 'My first feedback',
                'slug' => 'my-first-feedback',
                'body' => '<h3>This feedback is from Paula Tavares Leitao Waaijenberg (ICT lecturer) for my "Who am I?" assignment:</h3>
                <p>"Reading your motivation, I noticed you are already familiar with some aspects of software development and even have a preference for front-end. Our program for the first year focuses mostly on programming (HTML, JavaScript, TypeScript, Laravel Framework) and that will give you the base to become a developer. Besides coding, we also work on your professional development exploring 4 main competences: "Interact purposefully", "Research-oriented problem-solving", "Future-oriented organizing", and "Personal leadership". It is also good that you are already thinking about Software Engineering. During the second year, you will get better acquainted with Business IT Consultancy and Data Science and will have the chance to make a definitive choice.</p>
                <p>From your SWOT analysis: you mention you are a good communicator, this will come in handy when working with the various team project assignments. Perfectionism can be a positive thing when you invest in going for the best results. But experience will teach that sometimes you don’t have the means or the time to do it all and will need to make choices and prioritize. It is not that you are delivering a bad product, but a leaner one. Maybe it can help to give yourself a timebox when you really want to work further on an improvement. You can plan one or two hours of work in advance, but stick to it: done is done, even if it could have been better."</p>
                <h3>My feedback from students:</h3>
                <p>There was feedback that I also received from students. What they said was that maybe changing the design of my home page would be better, as well as they stated that I should change some of the links put on the pages and make them open in a different window and not in the one that my site is on, so the visitor of the site stays focused on my site. Also, some of them suggested that changing some of my design elements would make the site better.</p>
                <h3>My thoughts about the feedback:</h3>
                <p>When it comes to the first feedback, I think that prioritizing things works way more than being undecisive about whether I should spend more time on the details or continue with the more important stuff. And about the feedback from the students, I think that what they suggested I do is vital and I took it into account. The only thing that I took into account but did not really change is the design elements. But they were right about changing the home page.</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'summary' => 'Here you can check my first feedback for my answers in the "Who am I?" assignment and my website.'
            ]);

        Post::create([
                'title' => 'Programming experience',
                'slug' => 'programming-experience',
                'body' => '<h3 id="programming-subheader">Why did I choose to study programming!</h3>
                <p>From a young age I have always been curious about how those magical machines (computers) really work. And when I grew up and started doing projects
                at school on different topics in IT class I realized that I am creative and I like making design so much. So, I gained a lot of skills in it and then decided
                that completing my skills with something more complicated like programming would really help me in the future to do what I want and to create everything that I always wanted.</p>
                <h3 id="programming-subheader">What is my programming experience?</h3>
                <p>In the past, I did not really gain programming skills, so I just created things with online website builders. But later, when I studied more deeply I realized that it is necessary
                to understand more about it, so that I could create anything that I want. I have started to study HTML and CSS, and more recently JavaScript. I feel more confident with JavaScript than I do with HTML and CSS, but I am sure that I will improve myself with the help of learning the right way.</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'summary' => 'This article gives insight into why I chose programming and how I’m gaining experience.'
            ]);

        Post::create([
                'title' => 'Personal SWOT Analysis',
                'slug' => 'personal-work',
                'body' => '<h3 id="swot-subheader">What are your strengths?</h3>
        The first thing that comes to my mind as a strength of mine is being a good communicator. This is the thing that has helped me a lot with my
        school projects, because I know how to make people give their own ideas and opinions about a project and not be passive when it comes to working on it. In this way everyone performs a
        required task and the work is separated equally. Also, this ability contributes to choosing the accurate teammates when forming a team. The other powerful strength I have is my creative and critical thinking.
        When I have an assignment, I always think of something original that can make my project different from the others. And this is not the only reason, I also look for the extravagant idea or detail which will make it intriguing
        to watch or check. Because it may be original, but not interesting. But if I want this task to be performed like that, I need to see whether it is possible to do it in that way. As well as this, I need to check if those ideas of mine
        match the true concept and to see if there is something to improve or fix. Therefore, the evaluation of all the ideas and work are really important, so that the job is done well.<br><br>

        <h3 id="swot-subheader">What are your weaknesses?</h3>
        The biggest obstacle for my work is being stressed over little and sometimes unimportant things. There are moments when I am stressed out because of my perfectionism for those details that probably only a few people would pay attention to.
        And this leads to thoughts which make me think if everything is fine and good enough, so that it is accepted well. Eventually, this ends when I get the final critics by those who are supposed to approve of it. So far, this has been changing in a good way
        and little by little these worries disappear and start being replaced by tranquility. The perfectionism mentioned above sometimes consumes a lot of time and energy. Losing track of time because of it has its cost, because all the extra things are done, but
        the main part needs to be done as well. That does not mean that there is no plan how things will be done or the main point and concepts are not clear. It means that I could do it a bit faster and prioritize the most important parts being done first. However,
        I manage to do the projects for the deadline given.

        <h3 id="swot-subheader">Which opportunities do you see?</h3>
        The field of opportunities seems to be a huge one, because it is not only the knowledge I will gain in those four years, but also the skills I will obtain. Once I know how to use them practically, I will manage to work for bigger projects. They are those which
        will help me with adding experience to my CV and this is a huge chance for me to be chosen to work with really smart people around the world. And the good and challenging part of all this is that I will have the chance to do that during my internship while having
        my studies at the university. Having this in my CV even before finishing my studies is also a big plus for me, because I will be prepared in many ways for the following years.

        <h3 id="swot-subheader">Which threats do you see?</h3>
        For now, I do not see any threats, but even if there are any, I believe I will find a way to make things work.

        <h3 class="summary-swot-h">SUMMARY</h3>
        <ul>
        <h4 id="swot-subheader">Strengths</h4>
        <li>Good communicator</li>
        <li>Creative thinking</li>
        <li>Critical thinking</li>
        </ul>

        <ul>
        <h4 id="swot-subheader">Weaknesses</h4>
        <li>Stress</li>
        <li>Perfectionism</li>
        <li>Prioritizing</li>
        </ul>
        <ul>
        <h4 id="swot-subheader">Opportunities</h4>
        <li>New skills</li>
        <li>Working on bigger projects</li>
        <li>Getting to know more intelligent people</li>
        <li>Internships</li>
        </ul>
        <ul>
        <h4 id="swot-subheader">Threats</h4>
        <li>No threats</li>
        </ul>',
                'created_at' => now(),
                'updated_at' => now(),
                'summary' => 'Discovering someone\'s strengths and threats is one of the most interesting things about people, so here you are able to see mine.'
            ]);

        Post::create([
                'title' => 'My study choice',
                'slug' => 'my-study-choice',
                'body' => '<h3 id="my-choice-header">How did it all start?</h3>
        Everything started with me being curious about all the colorful stuff on the computers (games, sites, presentations, etc.). Since I was little, I have always wanted to create something interesting and big like a game, site or an app and that was one of the reasons for me to start thinking about what I should study. Then I decided to study in the IT class in my previous school, so there I did a lot of projects and I was so determined to make them interesting. All of my school work inspired me even more to continue with the subject of IT.<br><br>

        <h3 id="my-choice-header">Motivate your study choice</h3>
        <p>My decision for picking up the ICT program was taken, because of the knowledge given through it. With its power I can grow and develop in the IT sector pretty well and that means that the opportunities and the benefits from taking this particular program are large. Eventually, it gives the opportunity for the students to decide what their best side is – the technical or the business one. And this is a vital part of a student’s decision, because if it is not suitable for him, then he would have spent his time on something that is useless for him. So, this is a chance for me to see and decide what exactly from the three paths of the program (BIC, SE, DS) is most relevant to take. In addition, the skills that I would get from the programs are very important for working in the IT market, for example, solving a client’s problem fast, well improved interaction with a team or clients, learning what is most needed on the market, expanding your creativity and ideas for new projects, applications and products. All of those would help me not only with taking the best job for me, but also with improving myself as a person and as a character.</p>

        <h3 id="my-choice-header">After completing the study...</h3>
        <p>After completing the study I will have gained a lot of knowledge and skills which I will use in my future job or for my own projects which I will develop and make them useful for the rest of the world. Also, my future plans for a job are not so specific, but I think I will probably work something with UI/UX, game development or something like app development.</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'summary' => 'Here you can see the reasons behind my choice to study in the HBO-ICT programme.'
            ]);
    }
}
