<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta property="og:title" content="Readings - eddylu.com" />
    <meta property="og:description" content="Books and articles that I find interesting" />
    <meta property="og:image" content="https://eddylu.com/assets/images/propic.jpg" />
    <meta property="og:url" content="https://eddylu.com/readings.php" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="eddylu.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Readings - eddylu.com" />
    <meta name="twitter:description" content="Books and articles that I find interesting" />
    <meta name="twitter:image" content="https://eddylu.com/assets/images/propic.jpg" />
    <meta name="twitter:image:alt" content="Readings - eddylu.com" />
    <meta name="twitter:card" content="summary" />

    <title>Readings - Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/readings.css">
  </head>
  <body>
    <div id="page_wrapper">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
      <div id="body_wrapper">
        <div id="subheader">
          <h1>Readings</h1>
          <div id="subheader_title">Books I found interesting and worth sharing</div>
        </div>
        <div id="container">

          <div class="section-spacing">  
            <h2>Technical Books</h2>
            <p>Technical books and resources for software engineering and computer science.</p>
            
            <div class="books-container">
              <div class="book-entry">
                <div class="book-cover">
                  <img src="/assets/images/books/designing-data-intensive-applications.jpg" alt="Designing Data-Intensive Applications" class="book-image" />
                </div>
                <div class="book-content">
                  <h4>Designing Data-Intensive Applications</h4>
                  <p class="book-author">by Martin Kleppmann</p>
                  <p class="book-description">An essential guide to building reliable, scalable, and maintainable data systems. Covers the principles behind modern data storage and processing systems used by internet-scale applications.</p>
                  <a href="https://www.amazon.com/dp/1491973897/" target="_blank" class="book-link">View on Amazon</a>
                </div>
              </div>

              <div class="book-entry">
                <div class="book-cover">
                  <img src="/assets/images/books/the-managers-path.jpg" alt="The Manager's Path" class="book-image" />
                </div>
                <div class="book-content">
                  <h4>The Manager's Path</h4>
                  <p class="book-author">by Camille Fournier</p>
                  <p class="book-description">A practical guide for engineering managers and technical leaders navigating career growth. Covers the journey from individual contributor to CTO, with actionable advice for each stage of management.</p>
                  <a href="https://www.amazon.com/Managers-Path-Leaders-Navigating-Growth/dp/1491973897/" target="_blank" class="book-link">View on Amazon</a>
                </div>
              </div>

              <div class="book-entry">
                <div class="book-cover">
                  <img src="/assets/images/books/staff-engineer.jpg" alt="Staff Engineer: Leadership beyond the management track" class="book-image" />
                </div>
                <div class="book-content">
                  <h4>Staff Engineer: Leadership beyond the management track</h4>
                  <p class="book-author">by Will Larson</p>
                  <p class="book-description">A comprehensive guide for senior engineers looking to advance their careers through technical leadership rather than management. Covers archetypes, scope, and real-world experiences from staff engineers across different companies.</p>
                  <a href="https://www.amazon.com/dp/1736417916/" target="_blank" class="book-link">View on Amazon</a>
                </div>
              </div>

              <div class="book-entry">
                <div class="book-cover">
                  <img src="/assets/images/books/the-lean-startup.jpg" alt="The Lean Startup" class="book-image" />
                </div>
                <div class="book-content">
                  <h4>The Lean Startup</h4>
                  <p class="book-author">by Eric Ries</p>
                  <p class="book-description">A methodology for developing businesses and products that aims to shorten product development cycles and rapidly discover if a proposed business model is viable. Focuses on validated learning, experimentation, and iterative product releases.</p>
                  <a href="https://www.amazon.com/Lean-Startup-Entrepreneurs-Continuous-Innovation/dp/0307887898/" target="_blank" class="book-link">View on Amazon</a>
                </div>
              </div>
            </div>
            
            <h2>Leisure Books</h2>
            <p>Non-technical books I've enjoyed reading.</p>
            
            <div class="books-container">
              <div class="book-entry">
                <div class="book-cover">
                  <img src="/assets/images/books/three-body-problem.jpg" alt="The Three-Body Problem" class="book-image" />
                </div>
                <div class="book-content">
                  <h4>The Three-Body Problem</h4>
                  <p class="book-author">by Cixin Liu</p>
                  <p class="book-description">The first book in the Remembrance of Earth's Past trilogy, this Hugo Award-winning novel explores humanity's first contact with an alien civilization and the complex consequences that follow.</p>
                  <a href="https://www.amazon.com/Three-Body-Problem-Cixin-Liu/dp/0765382032/" target="_blank" class="book-link">View on Amazon</a>
                </div>
              </div>

              <div class="book-entry">
                <div class="book-cover">
                  <img src="/assets/images/books/project-hail-mary.jpg" alt="Project Hail Mary" class="book-image" />
                </div>
                <div class="book-content">
                  <h4>Project Hail Mary</h4>
                  <p class="book-author">by Andy Weir</p>
                  <p class="book-description">A thrilling science fiction novel about a lone astronaut who must save humanity from extinction. Filled with scientific accuracy, humor, and an unforgettable alien friendship.</p>
                  <a href="https://www.amazon.com/Project-Hail-Mary-Andy-Weir/dp/0593135229/" target="_blank" class="book-link">View on Amazon</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
      </div>
    </div>
  </body>
</html>
