<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            .schoolDescription h1 {
                margin: 0px 0px 2px 0px;
            }

            .schoolDescription h2 {
                margin: 0px 0px 15px 0px;
                font-weight: 100;
            }

            .schoolDescription h3 {
                margin: 0px 0px 50px 0px;
                font-weight: 100;
            }

            #classCode {
                font-weight: bold;
                padding-right: 20px;
            }
        </style>
    </head>
    <body>
        <div id="page_wrapper">
            <?php include 'header.php';?>
            <div id="body_wrapper">
                <div id="subheader">
                    <h1>Education</h1>
                    <input id="subheader_button" type="button" onclick="location.href = 'education.php';" value="Education" />
                    <input id="subheader_button" type="button" onclick="location.href = 'experience.php';" value="Experience" />
                </div>
                <div id="container">
                    <div id="schools" style="display: flex;">
                        <div class="school" style="text-align: center;">
                            <div>
                                <div class="education_logo" style="float: left; width: 20%; max-width: 150px">
                                    <img src="mcgill-logo.png" style="width: 100%;" />
                                </div>
                                <div class="schoolDescription" style="float: left; margin-left: 5%; text-align: left; width: 70%;">
                                    <h1 class="education_h1">McGill University</h1>
                                    <h2 class="education_h2">Montreal, Quebec, 2012 - 2016</h2>
                                    <h3>Bachelor of Engineering,<br />Electrical and Computer Engineering</h3>
                                    <h4>Completed Courses:</h4>
                                    <table style="margin-top: 20px;">
                                        <tr><td id="classCode">COMP 424</td><td>Artificial Intelligence</td></tr>
                                        <tr><td id="classCode">COMP 310</td><td>Operating Systems</td></tr>
                                        <tr><td id="classCode">COMP 251</td><td>Algorithms and Data Structures</td></tr>
                                        <tr><td id="classCode">COMP 250</td><td>Introduction to Computer Science</td></tr>
                                        <tr><td id="classCode">COMP 202</td><td>Foundations of Programming</td></tr>
                                        <tr><td id="classCode">ECSE 457</td><td>ECSE Design Project 2</td></tr>
                                        <tr><td id="classCode">ECSE 456</td><td>ECSE Design Project 1</td></tr>
                                        <tr><td id="classCode">ECSE 434</td><td>Microelectronics Laboratory</td></tr>
                                        <tr><td id="classCode">ECSE 428</td><td>Software Engineering Practice</td></tr>
                                        <tr><td id="classCode">ECSE 426</td><td>Microprocessor Systems</td></tr>
                                        <tr><td id="classCode">ECSE 425</td><td>Computer Organization and Architecture</td></tr>
                                        <tr><td id="classCode">ECSE 421</td><td>Embedded Systems</td></tr>
                                        <tr><td id="classCode">ECSE 414</td><td>Introduction to Telecom Networks</td></tr>
                                        <tr><td id="classCode">ECSE 353</td><td>Electromagnetic Fields and Waves</td></tr>
                                        <tr><td id="classCode">ECSE 334</td><td>Introduction to Microelectronics</td></tr>
                                        <tr><td id="classCode">ECSE 330</td><td>Introduction to Electronics</td></tr>
                                        <tr><td id="classCode">ECSE 323</td><td>Digital Systems Design</td></tr>
                                        <tr><td id="classCode">ECSE 322</td><td>Computer Engineering</td></tr>
                                        <tr><td id="classCode">ECSE 321</td><td>Introduction to Software Engineering</td></tr>
                                        <tr><td id="classCode">ECSE 306</td><td>Fundumetals of Signals and Systems</td></tr>
                                        <tr><td id="classCode">ECSE 305</td><td>Probability and Random Signals</td></tr>
                                        <tr><td id="classCode">ECSE 291</td><td>Electrical Measurements Lab</td></tr>
                                        <tr><td id="classCode">ECSE 221</td><td>Introduction to Computer Engineering</td></tr>
                                        <tr><td id="classCode">ECSE 211</td><td>Design Principles and Methods</td></tr>
                                        <tr><td id="classCode">ECSE 210</td><td>Electric Circuits 2</td></tr>
                                        <tr><td id="classCode">ECSE 200</td><td>Electric Circuits 1</td></tr>
                                        <tr><td id="classCode">MATH 363</td><td>Discrete Mathematics</td></tr>
                                        <tr><td id="classCode">MATH 270</td><td>Applied Linear Algebra</td></tr>
                                        <tr><td id="classCode">MATH 264</td><td>Advanced Calculus for Engineers</td></tr>
                                        <tr><td id="classCode">MATH 263</td><td>Ordinary Differential Equations for Engineers</td></tr>
                                        <tr><td id="classCode">MATH 262</td><td>Intermediate Calculus</td></tr>
                                        <tr><td id="classCode">MATH 141</td><td>Calculus 2</td></tr>
                                        <tr><td id="classCode">MATH 140</td><td>Calculus 1</td></tr>
                                        <tr><td id="classCode">MATH 133</td><td>Linear Algebra and Geometry</td></tr>
                                        <tr><td id="classCode">FACC 400</td><td>Engineering Professional Practice</td></tr>
                                        <tr><td id="classCode">FACC 300</td><td>Engineering Economy</td></tr>
                                        <tr><td id="classCode">FACC 100</td><td>Introduction to the Engineering Profession</td></tr>
                                        <tr><td id="classCode">CCOM 206</td><td>Communication in Engineering</td></tr>
                                        <tr><td id="classCode">PHYS 142</td><td>Electromagnetics and Optics</td></tr>
                                        <tr><td id="classCode">CIVE 281</td><td>Analytical Mechanics</td></tr>
                                        <tr><td id="classCode">CHEM 120</td><td>General Chemistry 2</td></tr>
                                        <tr><td id="classCode">CHEM 110</td><td>General Chemistry 1</td></tr>
                                        <tr><td id="classCode">GEOG 205</td><td>Global Change</td></tr>
                                        <tr><td id="classCode">ECON 209</td><td>Macroeconomics Analysis and Applications</td></tr>
                                        <tr><td id="classCode">ECON 208</td><td>Microeconomics Analysis and Applications</td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="school" style="text-align: center;">
                            <div>
                                <div class="education_logo" style="float: left; width: 20%; max-width: 150px">
                                    <img src="whs-logo.png" style="width: 100%;" />
                                </div>
                                <div class="schoolDescription" style="float: left; margin-left: 5%; text-align: left; width: 70%;">
                                    <h1 class="education_h1">Westfield Senior High School</h1>
                                    <h2 class="education_h2">Westfield, New Jersey, 2008 - 2012</h2>
                                    <h3>US High School Diploma<br /></h3>
                                    <h4>Completed Courses:</h4>
                                    <table style="margin-top: 20px;">
                                        <tr><td>AP Physics C</td></tr>
                                        <tr><td>AP Calculus BC</td></tr>
                                        <tr><td>AP Statistics</td></tr>
                                        <tr><td>AP French</td></tr>
                                        <tr><td>AP Biology</td></tr>
                                        <tr><td>AP Chemistry</td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'footer.php';?>
            </div>
        </div>
    </body>
</html>