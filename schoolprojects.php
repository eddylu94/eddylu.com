<!DOCTYPE html>

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
            border-radius: 5px;
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
            color: #FFFFFF;
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
        <div class="projects_container">

						<div id="projectListing" class="project_listing">
								<div class="project_description" id="projectListingText">
                    <h1>Embedded Systems Indoor Positioning System</h1>
										<h3>Sept. 2015 - Dec. 2015</h3>
										
										<img class="project_image_small" src="microprocessors.png" />

                    <div id="projectListingDescription">
                        Programmed ARM Cortex M processors in Assembly and embedded C to track the navigation of moving bodies by analyzing accelerometer
                        and gyroscope data using the Viterbi algorithm hidden Markov model
                        <br />
                        <br />
                        <div class="project_tags_container">
                            <div class="project_tag">Embedded C</div>
                            <div class="project_tag">Assembly</div>
                            <div class="project_tag">Keil</div>
                        </div>
                    </div>
                </div>
								<img class="project_image_large" id="projectListingImage" src="microprocessors.png" style="width: 50%;" />
            </div>

            <div id="projectListing" class="project_listing">
								<div class="project_description" id="projectListingText">
                    <h1>Digital System Design FPGA Music Box</h1>
										<h3>Jan. 2015 - Apr. 2015</h3>
										
										<img class="project_image_small" src="dsdSchematic.jpg" />

                    <div id="projectListingDescription">
                        For my Digital System Design project, I programmed Altera FPGA board in VHDL to play musical pieces and display information using LEDs.
                        During this process, I created multiple-level logic schematics using Altera Quartus logic design software.
                        Furthermore, I executed numerous component timing simulations and internal logic signal analysis tests.
                        <br />
                        <br />
                        <div class="project_tags_container">
                            <div class="project_tag">VHDL</div>
                            <div class="project_tag">Altera Quartus</div>
                        </div>
                    </div>
                </div>
								<img class="project_image_large" id="projectListingImage" src="dsdSchematic.jpg" style="width: 50%;" />
            </div>

            <div id="projectListing" class="project_listing">
								<div class="project_description" id="projectListingText">
                    <h1>NXT Robot</h1>
										<h3>Sept. 2014 - Dec. 2014</h3>
										
										<img class="project_image_small" src="robot.jpg" />

                    <div id="projectListingDescription">
                        In my Design Principles and Methods class, ECSE 211, I worked on building an autonomous robot along with six electrical, computer,
                        and software engineering students. The objective was to allow the robot to determine its location in a random map, navigate to a certain location,
                        pick up a Styrofoam block, and drop off the block at a specified zone.
                        The robot was programmed in Java using leJOS NXT. Odometry, navigation, and localization algorithms were implemented
                        in order for the robot to determine its initial position and orientation as well as calculate the shortest path to its destination.
                        <br />
                        <br />
                        <div class="project_tags_container">
                            <div class="project_tag">Java</div>
                            <div class="project_tag">leJos NXT</div>
                        </div>
                    </div>
                </div>
								<img class="project_image_large" id="projectListingImage" src="robot.jpg" style="width: 50%;" />
            </div>

            <div id="projectListing" class="project_listing">
								<div class="project_description" id="projectListingText">
                    <h1>Bomberman Project Game</h1>
										<h3>Jan. 2014 - Apr. 2014</h3>
										
										<img class="project_image_small" src="magibomb.png" />

                    <div id="projectListingDescription">
                        For my 2014 Winter semester Software Engineering class, ECSE 321, I worked in a team of six software engineering students to develop the classic Bomberman game in Java.
                        During this time, I documented sequence, activity, and state UML diagrams for the overall game system.
                        In addition, I also documented software requirements specification and software architecture based on IEEE standards.
                        It was also my role to comment the code using Javadoc.
                        <br />
                        <br />
                        <div class="project_tags_container">
                            <div class="project_tag">Java</div>                            
                        </div>
                    </div>
                </div>
								<img class="project_image_large" id="projectListingImage" src="magibomb.png" style="width: 50%;" />
            </div>

        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>