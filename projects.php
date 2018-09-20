<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            #projectListing {
                margin-bottom: 100px;
                overflow: auto;
            }

            #projectListingText {
                float: left;
            }

            #projectListingDescription {
                margin-top: 20px;
            }

            #projectListingText h1 {
                margin: 0px 0px 2px 0px;
            }

            #projectListingText h3 {
                margin: 0px;
                font-weight: 100;
            }

            #projectListingImage {
                float: right;
            }

            .project_tags_container {
                margin-top: 5px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
            }

            .project_tag {
                background-color: #585858;
                color: #FFCC00;
                padding: 5px 8px 5px 8px;
                border-radius: 3px;
                margin-right: 12px;
                margin-bottom: 8px;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>
        <div id="subheader">
            <h1>Projects</h1>
            <div id="subheader_title">Some of my personal projects, as well as Electrical Engineering and Computer Science projects at McGill</div>
            <input id="subheader_button" type="button" onclick="location.href = 'projects.php';" value="Personal Projects" />
            <input id="subheader_button" type="button" onclick="location.href = 'schoolprojects.php';" value="School Projects" />
        </div>
        <div id="container">
            <div style="display: table; margin: 0 auto; width: 80%;">
                
                <div id="projectListing">
                    <div id="projectListingText" style="width: 40%;">
                        <h1>Open-Source Mental Health Forum</h1>
                        <h3>Jan. 2018 - Present</h3>
                        <div id="projectListingDescription">
                            I am currently leading the development of an online open-source mental health forum so people who are experiencing crises can seek immediate help without judgement.
                            <br />
                            <br />The project was later entered in the 2018 Microsoft One Week Hackathon to expand the development team and increase awareness.
                            <br />
                            <br />The project is currently on GitHub:
                            <br />
                            <a href="https://github.com/MentalHealthForum" target="_blank">github.com/MentalHealthForum</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">React</div>
                                <div class="project_tag">MongoDB</div>
                                <div class="project_tag">Express</div>
                                <div class="project_tag">Node.js</div>
                                <div class="project_tag">JavaScript</div>
                                <div class="project_tag">HTML</div>
                                <div class="project_tag">CSS</div>
                                <div class="project_tag">Azure</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="mental_health.png" style="width: 55%;" />
                </div>

                <div id="projectListing">
                    <div id="projectListingText" style="width: 45%;">
                        <h1>Bouncing DVD Logo</h1>
                        <h3>Aug. 2018</h3>
                        <div id="projectListingDescription">
                            This is my greatest contribution to mankind.
                            <br />
                            <br />I recreated the bouncing DVD logo from the TV show, <a href="https://www.nbc.com/the-office" target="_blank">The Office (U.S.)</a>:
                            <br />
                            <a href="https://www.youtube.com/watch?v=QOtuX0jL85Y" target="_blank">https://www.youtube.com/watch?v=QOtuX0jL85Y</a>
                            <br />
                            <br />This masterpiece is on GitHub:
                            <br />
                            <a href="https://github.com/eddylu94/BouncingDvdLogo" target="_blank">github.com/eddylu94/BouncingDvdLogo</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">Vue.js</div>
                                <div class="project_tag">JavaScript</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="bouncing_dvd_logo.gif" style="width: 50%;" />
                </div>

                <div id="projectListing">
                    <div id="projectListingText" style="width: 45%;">
                        <h1>Data Structures and Algorithms Website</h1>
                        <h3>Sept. 2015 - Present</h3>
                        <div id="projectListingDescription">
                            Created website to store source code for implementations of common data structures and algorithms so that friends can refer to them when needed.
                            <br />
                            <br />The website is currently located at:
                            <br />
                            <a href="http://eddylu.com/notes" target="_blank">eddylu.com/notes</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">HTML</div>
                                <div class="project_tag">CSS</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="notesSite.png" style="width: 50%;" />
                </div>

				<div id="projectListing">
                    <div id="projectListingText" style="width: 40%;">
                        <h1>CodeJam 2016 - TV Show Recommender</h1>
                        <h3>Nov. 2016</h3>
                        <div id="projectListingDescription">
                            For the 2016 McGill CodeJam hackathon, the objective was to create a TV show recommendation application based on any given input.
							For this project, Charles Liu and I created a website that provided TV recommendations after a user rated TV a list of given shows.
							<br />
							<br />The source code can be found on GitHub:
                            <a href="http://github.com/chubchubcharles/CodeJam2016" target="_blank">github.com/chubchubcharles/CodeJam2016</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">Javascript</div>
                                <div class="project_tag">jQuery</div>
                                <div class="project_tag">RequireJS</div>
                                <div class="project_tag">HTML</div>
                                <div class="project_tag">CSS</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="codejam16.png" style="width: 55%;" />
                </div>

                <div id="projectListing">
                    <div id="projectListingText" style="width: 55%;">
                        <h1>Music Player Visualizer</h1>
                        <h3>Dec. 2015 - Jan. 2016</h3>
                        <div id="projectListingDescription">
                            I created music player visualizations for .mp3 audio data using Javascript, HTML5, CSS3 based on the
                            visualizations of <a target="_blank" href="https://www.youtube.com/user/AllTrapNation">Trap Nation</a>.
                            <br />
                            <br />A demo of the music player visualizer (music plays when page loads):
                            <br /><a href="http://eddylu.com/music" target="_blank">eddylu.com/music</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">Javascript</div>
                                <div class="project_tag">HTML5</div>
                                <div class="project_tag">CSS3</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="visualizer.png" style="width: 40%;" />
                </div>
				
                <div id="projectListing">
                    <div id="projectListingText" style="width: 60%;">
                        <h1>CodeJam 2015 - Bioinformatics Classifier</h1>
                        <h3>Nov. 2015</h3>
                        <div id="projectListingDescription">
                            For the 2015 McGill CodeJam hackathon, the objective was to implement a classifier that analyzed patient data to predict diagnoses.
                            For this project, I implemented decision trees that were capable of predicting the diagnoses at an accuracy of 50 to 75 %.
							<br />
							<br />The source code can be found on GitHub:
                            <br />
                            <a href="http://github.com/eddylu94/CodeJam2015/" target="_blank">http://github.com/eddylu94/CodeJam2015/</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">Java</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="codejam15.png" style="width: 35%;" />
                </div>

                <div id="projectListing">
                    <div id="projectListingText" style="width: 60%;">
                        <h1>Chess Game</h1>
                        <h3>June 2015 - Aug. 2015</h3>
                        <div id="projectListingDescription">
                            I created the classic chess game in C++ using Qt.
                            <br />
                            <br />The entire game was created from scratch except for the chess piece icons which were retrieved from:
                            <br /><a target="_blank" href="https://openclipart.org/detail/24125/chess-symbols-set">https://openclipart.org/detail/24125/chess-symbols-set</a>
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">C++</div>
                                <div class="project_tag">Qt</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="chessGame.png" style="width: 35%;" />
                </div>

                <div id="projectListing">
                    <div id="projectListingText" style="width: 60%;">
                        <h1>Concentration Game</h1>
                        <h3>June 2015</h3>
                        <div id="projectListingDescription">
                            Using Java Swing, I created the classic Concentration game.
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">Java</div>
                                <div class="project_tag">Swing</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="concentrationGame.png" style="width: 35%;" />
                </div>

                <div id="projectListing">
                    <div id="projectListingText" style="width: 45%;">
                        <h1>ECSESS Robotics</h1>
                        <h3>Jan. 2014 - Apr. 2014</h3>
                        <div id="projectListingDescription">
                            For four months, I worked in a team of three electrical engineering students to build a robot that navigates on an obstacle course.
                            During this period, I learned how to solder different components including microchip, H-bridge, and infrared sensors onto breadboards.
                            Furthermore, I programmed a microchip in C on MPLAB IDE in order to allow robot to navigate automatically.
                            <br />
                            <br />
                            <div class="project_tags_container">
                                <div class="project_tag">C</div>
                                <div class="project_tag">MPLAB</div>
                            </div>
                        </div>
                    </div>
                    <img id="projectListingImage" src="ecsessRobot.jpg" style="width: 50%;" />
                </div>

            </div>
        </div>               
        <?php include 'footer.php';?>
    </body>
</html>