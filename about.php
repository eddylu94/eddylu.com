<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
				<meta property="og:title" content="eddylu.com" />
				<meta property="og:description" content="Eddy Lu" />
				<meta property="og:image" content="https://eddylu.com/propic.jpg" />
				<meta property="og:url" content="https://eddylu.com" />
				<meta property="og:type" content="website" />
				<meta property="og:site_name" content="eddylu.com" />
				<meta name="twitter:card" content="summary_large_image" />
				<meta name="twitter:title" content="eddylu.com" />
				<meta name="twitter:description" content="Eddy Lu" />
				<meta name="twitter:image" content="https://eddylu.com/propic.jpg" />
				<meta name="twitter:image:alt" content="eddylu.com" />
				<meta name="twitter:card" content="summary" />

        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            #propic {
                float: right;
                width: 45%;
                padding: 10px;
                box-shadow: 0px 0px 10px #CCCCCC;
            }
            #propic_mobile_container {
                display: flex;
                margin-bottom: 10px;
            }
            #propic_mobile {
                margin: auto;
                width: 100%;
                padding: 10px;
                box-shadow: 0px 0px 10px #CCCCCC;
            }
        </style>
    </head>
    <body>
        <div id="page_wrapper">
            <?php include 'header.php';?>
            <div id="body_wrapper">
                <div id="subheader">
                    <h1>Hello! I'm Eddy</h1>
                    <div id="subheader_title">I am a Software Engineer based in San Francisco, California</div>
                </div>
                <div id="container" style="display: inline-block;">
                    <div id="propic_mobile_container">
                        <img id="propic_mobile" alt="Profile Picture" src="propic.jpg" />
                    </div>
                    <div id="about" style="float: left;">
                        <h1>About Me</h1>
                        I enjoy working on different software projects during my free time.
                        When I'm not programming, I enjoy playing soccer and basketball as well as snowboarding and hiking.
                        <br /><br />
                        <i>This website was originally created without the use of any frameworks/templates/bootstraps when I was learning HTML/CSS; I have kept it this way eversince.</i>
                    </div>
                    <img id="propic" alt="Profile Picture" src="propic.jpg" />
                </div>
                <?php include 'footer.php';?>
            </div>    
        </div>    
    </body>
</html>
