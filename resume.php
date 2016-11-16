<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        #printableView {
            opacity: 0.8;
        }
        #printableView:hover {
            opacity: 1.0;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div id="container" style="text-align: center;">
        <div style="display: inline-block; width: 850px;">
            <div style="float: right;">
                <a id="printableView" target="_blank" href="resume.pdf" style="text-decoration: none;">
                    <img src="pdf-icon.png" style="height: 30px; vertical-align: middle;" /><span style="margin-left: 5px; font-weight: bold;">Printable View</span>
                </a>
            </div>
            <br />
            <embed src="Resume.pdf" style="width: 850px; height: 1150px; margin-top: 20px;" />
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>