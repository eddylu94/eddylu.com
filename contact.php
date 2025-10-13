<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/contact.css">
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