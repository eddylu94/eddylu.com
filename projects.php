﻿<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            body {
                background-color: #E8E8E8;
            }

            #projectListing {
                overflow: auto;
                background-color: #FFFFFF;
                box-shadow: 0 0 10px #CCCCCC;
                box-sizing: border-box;
                border-radius: 12px;
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
                background-color: #ddd;
                color: #333;
								font-weight: 500;
                padding: 5px 8px 5px 8px;
                border-radius: 3px;
                margin-right: 12px;
                margin-bottom: 8px;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>
				<div id="body_wrapper">
				<div id="subheader">
							<h1>Projects</h1>
							<div id="subheader_title">Some of my personal projects and Electrical Engineering projects at McGill</div>
							<input id="subheader_button" type="button" onclick="location.href = 'projects.php';" value="Personal Projects" />
							<input id="subheader_button" type="button" onclick="location.href = 'schoolprojects.php';" value="School Projects" />
					</div>				
					<div id="container">
							<div class="projects_container">

									<div id="projectListing" class="project_listing">
											<div class="project_description" id="projectListingText">
													<h1>CodeJam 2016 - TV Show Recommender</h1>
													<h3>Nov. 2016</h3>
													
													<img class="project_image_small" src="codejam16.png" />
													
													<div id="projectListingDescription">
															For the 2016 McGill CodeJam hackathon, the objective was to create a TV show recommendation application based on any given input.
								For this project, Charles Liu and I created a website that provided TV recommendations after a user rated TV a list of given shows.
								<br />
								<br />The source code can be found on GitHub:
															<a href="http://github.com/chubchubcharles/CodeJam2016" class="project_link" target="_blank">github.com/chubchubcharles/CodeJam2016</a>
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
											<img class="project_image_large" id="projectListingImage" src="codejam16.png" style="width: 50%;" />
									</div>

									<div id="projectListing" class="project_listing">
											<div class="project_description" id="projectListingText">
													<h1>Music Player Visualizer</h1>
													<h3>Dec. 2015 - Jan. 2016</h3>
													
													<img class="project_image_small" src="visualizer.png" />

													<div id="projectListingDescription">
															I created music player visualizations for .mp3 audio data using Javascript, HTML5, CSS3 based on the
															visualizations of <a target="_blank" href="https://www.youtube.com/user/AllTrapNation">Trap Nation</a>.
															<br />
															<br />A demo of the music player visualizer (music plays when page loads):
															<br /><a href="http://eddylu.com/music" class="project_link" target="_blank">eddylu.com/music</a>
															<br />
															<br />
															<div class="project_tags_container">
																	<div class="project_tag">Javascript</div>
																	<div class="project_tag">HTML5</div>
																	<div class="project_tag">CSS3</div>
															</div>
													</div>
											</div>
											<img class="project_image_large" id="projectListingImage" src="visualizer.png" style="width: 50%;" />
									</div>
					
									<div id="projectListing" class="project_listing">
											<div class="project_description" id="projectListingText">
													<h1>CodeJam 2015 - Bioinformatics Classifier</h1>
													<h3>Nov. 2015</h3>
													
													<img class="project_image_small" src="codejam15.png" />

													<div id="projectListingDescription">
															For the 2015 McGill CodeJam hackathon, the objective was to implement a classifier that analyzed patient data to predict diagnoses.
															For this project, I implemented decision trees that were capable of predicting the diagnoses at an accuracy of 50 to 75 %.
								<br />
								<br />The source code can be found on GitHub:
															<br />
															<a href="http://github.com/eddylu94/CodeJam2015/" class="project_link" target="_blank">http://github.com/eddylu94/CodeJam2015/</a>
															<br />
															<br />
															<div class="project_tags_container">
																	<div class="project_tag">Java</div>
															</div>
													</div>
											</div>
											<img class="project_image_large" id="projectListingImage" src="codejam15.png" style="width: 50%;" />
									</div>

									<div id="projectListing" class="project_listing">
											<div class="project_description" id="projectListingText">
													<h1>Chess Game</h1>
													<h3>June 2015 - Aug. 2015</h3>
													
													<img class="project_image_small" src="chessGame.png" />

													<div id="projectListingDescription">
															I created the classic chess game in C++ using Qt.
															<br />
															<br />The entire game was created from scratch except for the chess piece icons which were retrieved from:
															<br /><a target="_blank" class="project_link" href="https://openclipart.org/detail/24125/chess-symbols-set">https://openclipart.org/detail/24125/chess-symbols-set</a>
															<br />
															<br />
															<div class="project_tags_container">
																	<div class="project_tag">C++</div>
																	<div class="project_tag">Qt</div>
															</div>
													</div>
											</div>
											<img class="project_image_large" id="projectListingImage" src="chessGame.png" style="width: 50%;" />
									</div>

									<div id="projectListing" class="project_listing">
											<div class="project_description" id="projectListingText">
													<h1>Concentration Game</h1>
													<h3>June 2015</h3>
													
													<img class="project_image_small" src="concentrationGame.png" />

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
											<img class="project_image_large" id="projectListingImage" src="concentrationGame.png" style="width: 50%;" />
									</div>

							</div>
					</div>               
					<?php include 'footer.php';?>
				</div>
    </body>
</html>
