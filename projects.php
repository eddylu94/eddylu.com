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
							<div id="subheader_title">Current side projects</div>
					</div>				
					<div id="container">
							<div class="projects_container">

								<div id="projectListing" class="project_listing">
										<div class="project_description" id="projectListingText">
													<h1>PlanShare.io</h1>
													<h3>Dec. 2023 - Present</h3>

													<img class="project_image_small" src="planshare.png" />

													<div id="projectListingDescription">
															Developed a website where users can find people to share subscriptions, group orders, and referrals.
															<br />
															<br />
															<a href="https://planshare.io" class="project_link" target="_blank">https://planshare.io</a>
															<br />
															<br />
															<div class="project_tags_container">
																	<div class="project_tag">React</div>
																	<div class="project_tag">TypeScript</div>
																	<div class="project_tag">MongoDB</div>
																	<div class="project_tag">Express</div>
																	<div class="project_tag">Node.js</div>
																	<div class="project_tag">Socket.io</div>
															</div>
													</div>
											</div>
											<img class="project_image_large" id="projectListingImage" src="planshare.png" style="width: 50%;" />
									</div>

							</div>
					</div>               
					<?php include 'footer.php';?>
				</div>
    </body>
</html>
