<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            .post {
                width: 50%;
                box-shadow: 0px 0px 20px #A8A8A8;
                display: table;
                margin: 0 auto;
            }

            .post img {
                max-width: 100%;
                margin-bottom: 12px;
            }

            .post a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>
        <div id="subheader">
            <h1>Blog</h1>
            <div id="subheader_title">Random thoughts about technology</div>
        </div>
        <div id="container">
            <div style="display: table; margin: 0 auto; width: 80%;">
                
                <div class="post">
                    <a href="blog20181228.php">
                        <img src="blog20181228_example.png" />
                        <div style="padding: 18px">
                            <div style="font-size: x-large; color: #333333;">Circular profile pictures in Android are a pain…</div>
                            <div style="font-size: large; color: #686868;">Friday, December 28, 2018</div>
                        </div>
                    </a>
                </div>

            </div>
        </div>               
        <?php include 'footer.php';?>
    </body>
</html>