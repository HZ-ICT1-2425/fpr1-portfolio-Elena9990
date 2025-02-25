<x-layout.main>
    <x-slot name="title"> Dashboard </x-slot>
    <h1 id="dashboard-header">Dashboard</h1>
    <!--the main content of the page-->
    <main class="dashboard-main">
        <!--dashboard table-->
        <table class="dashboard-table">
            <thead id="dash-thead-1">
            <tr>
                <td>Quarter</td>
                <td>Course</td>
                <td>Assessment</td>
                <td>EC</td>
                <td>Grade</td>
            </tr>
            </thead>
            <tr>
                <td id="quartile-td" rowspan="3">1</td>
                <td>Program- & Career Orientation (PCO)</td>
                <td>Individual process assessment (Assessment website)</td>
                <td>2.5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>Written knowledge test</td>
                <td>5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>Case study exam</td>
                <td>5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td id="quartile-td" rowspan="2">2</td>
                <td rowspan="2">Object-Oriented Programming (OOP)</td>
                <td>Presentation</td>
                <td>5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>Study case exam</td>
                <td>5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td id="quartile-td" rowspan="4">3</td>
                <td rowspan="4">Framework Project 1</td>
                <td>On-site case study exam 5</td>
                <td>5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>Database exam</td>
                <td>1.25</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td> Group presentation on project result</td>
                <td>2.5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>Group portfolio with individual elements on requirements</td>
                <td>1.25</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td id="quartile-td" rowspan="3">4</td>
                <td rowspan="3">Framework Project 2</td>
                <td>Final delivery</td>
                <td>2.5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>Report of acceptance tests and optional assessments</td>
                <td>2.5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>IT Development portfolio</td>
                <td>5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
            <td>3rd and 4th quartile</td>
            <td>Business IT Consultancy Basics</td>
            <td>Video</td>
            <td>2.5</td>
            <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>The whole year</td>
                <td>Personal Professional Development Exploration</td>
                <td>Criterium focused interview</td>
                <td>12.5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
            <tr>
                <td>The whole year</td>
                <td>IT Personality</td>
                <td>Portfolio</td>
                <td>2.5</td>
                <td><input type="number" id="grade-input" name="grade" min="1" max="10"></td>
            </tr>
        </table>

        <h3>Study progress bar</h3>
        <!--progress study bar-->
        <div class="progress-bar">
            <div class="progress-bar"></div>
        </div>
        <p>
            In order to pass the first year, you need to take at least 45 ECs out of 60 ECs.
        </p>
        <br>
    </main>
</x-layout.main>
