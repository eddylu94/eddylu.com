<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <style>
      #contactForm {
        margin: 20px auto 0px auto;

        display: flex;
        flex-direction: column;
        width: 70%;
        padding: 20px;
        border: 1px solid #CCCCCC;
        box-sizing: border-box;
      }

      .contactForm_textInput {
        margin-bottom: 10px;

        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        
        font-size: x-large;
        font-family: Calibri;
      }

      #contactForm_textArea {
        margin-top: 10px;
        margin-bottom: 20px;

        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        
        resize: vertical;
        font-size: x-large;
        font-family: Calibri;
      }

      #contactForm_button {
        height: 50px;
        width: 100%;
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
    <div id="page_wrapper">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
      <div id="body_wrapper">
        <div id="container" style="text-align: center;">
          <h2 style="color: #333333;">Have a question or comment? Feel free to shoot me a message!</h2>
          <form id="contactForm" action="contactForm.php" method="post">
            <input class="contactForm_textInput" type="text" name="firstName" placeholder="First Name" autofocus />
            <input class="contactForm_textInput" type="text" name="lastName" placeholder="Last Name" />
            <input class="contactForm_textInput" type="text" name="email" placeholder="Email Address" />
            <textarea id="contactForm_textArea" rows="6" name="message" placeholder="Your message here!"></textarea>                    
            <input id="contactForm_button" type="submit" name="submit" value="Submit" />
          </form>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
      </div>
    </div>
  </body>
</html>