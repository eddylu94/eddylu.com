<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            #schoolDescription h1 {
                margin: 0px 0px 2px 0px;
            }

            #schoolDescription h2 {
                margin: 0px 0px 15px 0px;
                font-weight: 100;
            }

            #schoolDescription h3 {
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
        <?php include 'header.php';?>
        <div id="subheader">
            <h1>Education</h1>
        </div>
        <div id="container">
            <div style="float: left; width: 50%; text-align: center;">
                <div style="display: inline-block;">
                    <div style="float: left; width: 110px;">
                        <img src="mcgill-logo.png" style="height: 100px;" />
                    </div>
                    <div id="schoolDescription" style="float: left; margin-left: 20px; text-align: left;">
                        <h1>McGill University</h1>
                        <h2>Montreal, Quebec, 2012 - 2016</h2>
                        <h3>Bachelor of Engineering,<br />Electrical and Computer Engineering</h3>
                    </div>
                </div>
            </div>
            <div style="float: right; width: 50%; text-align: center;">
                <div style="display: inline-block;">
                    <div style="float: left; width: 110px;">
                        <img src="whs-logo.png" style="height: 100px;" />
                    </div>
                    <div id="schoolDescription" style="float: left; margin-left: 30px; text-align: left;">
                        <h1>Westfield Senior High School</h1>
                        <h2>Westfield, New Jersey, 2008 - 2012</h2>
                        <h3>US High School Diploma<br /></h3>
                        <h4>Completed Courses:</h4>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>