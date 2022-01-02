<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
						.post {
							width: 100%;
							max-width: 800px;
							box-shadow: 0px 0px 20px #A8A8A8;
							display: table;
							margin: 0 auto;
							height: 350px;
							opacity: 1.0;
						}

            .post:hover {
                opacity: 0.7;
            }

            .post:not(:first-child) {
                margin-top: 30px;
            }

            .imgContainer {
                display: flex;
                flex-direction: column;
                flex: 1;
                justify-content: center;
            }

            .post img {
                max-width: 100%;
                margin-bottom: 12px;
            }

            .post a {
                text-decoration: none;
                display: flex;
                flex-direction: column;
                height: 100%;
						}
						
						.blogs-container {
							display: table;
							margin: 0 auto;
							width: 100%;						
						}
        </style>
    </head>
    <body>
        <?php include 'header.php';?>
				<div id="body_wrapper">
					<div id="subheader">
							<h1>Blog</h1>
							<div id="subheader_title">Random thoughts about technology</div>
					</div>
					<div id="container">
							<div class="blogs-container">
									<div class="post">
											<a href="blog20210214.php">
													<div class="imgContainer">
															<img src="blog20210214_map.png" />
													</div>
													<div style="padding: 18px">
															<div style="font-size: x-large; color: #333333;">Whether to relocate during the pandemic</div>
															<div style="font-size: large; color: #686868;">Sunday, February 14, 2021</div>
													</div>
											</a>
									</div>

									<div class="post">
											<a href="blog20191103.php">
													<div class="imgContainer">
															<img src="tc39.png" />
													</div>
													<div style="padding: 18px">
															<div style="font-size: x-large; color: #333333;">Upcoming Optional Chaining and Null Coalescing in JS/TS</div>
															<div style="font-size: large; color: #686868;">Thursday, November 3, 2019</div>
													</div>
											</a>
									</div>
									
									<div class="post">
											<a href="blog20190117.php">
													<div class="imgContainer">
															<img src="20190117_tabindex.png" />
													</div>
													<div style="padding: 18px">
															<div style="font-size: x-large; color: #333333;">The Tab Order vs. z-Order Paradox</div>
															<div style="font-size: large; color: #686868;">Thursday, January 17, 2019</div>
													</div>
											</a>
									</div>

									<div class="post">
											<a href="blog20181228.php">
													<div class="imgContainer">
															<img src="blog20181228_border.png" style="margin: 0 10px;" />
													</div>
													<div style="padding: 18px">
															<div style="font-size: x-large; color: #333333;">Circular profile pictures in Android are a pain…</div>
															<div style="font-size: large; color: #686868;">Friday, December 28, 2018</div>
													</div>
											</a>
									</div>

							</div>
					</div>               
					<?php include 'footer.php';?>
				</div>
    </body>
</html>