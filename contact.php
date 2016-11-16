<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        #contactForm_button {
            height: 50px;
            width: 710px;
            margin: 30px 0px 10px 0px;
            padding: 10px;
            border-radius: 5px;
            border: none;   
    
            display: inline-block;
            vertical-align: middle;
            font-size: large;
            text-align: center;

            background-color: #585858;
            color: #FFFFFF;

            cursor: pointer;
        }

        #contactForm_button:hover {
            background-color: #686868;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div id="container" style="text-align: center;">
        <h2 style="color: #333333;">Have a question or comment? Feel free to shoot me a message!</h2>
        <form action="contactForm.php" method="post" style="display: inline-block; background-color: #CCCCCC; border-radius: 5px; margin-top: 20px; padding: 20px;">
            <input type="text" name="firstName" placeholder="First Name" autofocus style="border-radius: 5px; border: 0; width: 240px; margin: 0px 5px 0px 0px; padding: 5px; font-size: x-large; font-family: Calibri;" />
            <input type="text" name="lastName" placeholder="Last Name" style="border-radius: 5px; border: 0; width: 440px; margin: 0px 0px 0px 0px; padding: 5px; font-size: x-large; font-family: Calibri;" />
            <br />
            <input type="text" name="email" placeholder="Your Email" style="border-radius: 5px; border: 0; width: 700px; margin: 10px 0px 0px 0px; font-size: x-large; padding: 5px; font-family: Calibri;" />
            <br />
            <textarea rows="6" name="message" placeholder="Your message here!"  style="border-radius: 5px; border: 0; width: 700px; margin: 30px 0px 0px 0px; font-size: x-large; padding: 5px; font-family: Calibri;"></textarea>
            <br>
            <input id="contactForm_button" type="submit" name="submit" value="Submit" />
        </form>
    </div>
    <?php include 'footer.php';?>
    </body>
</html>