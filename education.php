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