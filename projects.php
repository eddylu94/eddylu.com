<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-includes.php'; ?>
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/projects.css">
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
    <div id="body_wrapper">
      <div id="subheader">
        <h1>Projects</h1>
        <div id="subheader_title">Some recent side projects</div>
      </div>
      <div id="container">
        <div class="projects_container">

          <div id="projectListing" class="project_listing">
            <div class="project_description" id="projectListingText">
              <h1>Sleeping with Friends</h1>
              <h3>Apr. 2025 - Present</h3>
              
              <img class="project_image_small" src="/assets/images/projects/sleeping-with-friends.png" />

              <div id="projectListingDescription">
                <a href="https://sleepingwithfriends.com" class="project_link" target="_blank">https://sleepingwithfriends.com</a>
                <br />
                <br />
                A few friends and I built a website, Sleeping with Friends, that gamifies sleep tracking by allowing users to compare their sleep statistics with friends through leaderboards and data visualization.
                Users can link their existing health devices and compete on metrics like total sleep hours and deep sleep.
                <br />
                <br />
                <strong>Frontend:</strong><br />
                • Next.js, React, TypeScript, Tailwind
                <br />
                <br />
                <strong>Backend:</strong><br />
                • FastAPI, Python, SQLAlchemy<br />
                • PostgreSQL, Pydantic
                <br />
                <br />
                <strong>Authentication:</strong><br />
                • Clerk, JWT<br />
                • Health device integrations (ex. Garmin, Oura, Fitbit, etc.)
                <br />
                <br />
                <strong>Deployment:</strong><br />
                • Vercel
                <br />
                <br />
                <div class="project_tags_container">
                  <div class="project_tag">Next.js</div>
                  <div class="project_tag">React</div>
                  <div class="project_tag">TypeScript</div>
                  <div class="project_tag">FastAPI</div>
                  <div class="project_tag">PostgreSQL</div>
                  <div class="project_tag">Tailwind CSS</div>
                </div>
              </div>
            </div>
            <img class="project_image_large" id="projectListingImage" src="/assets/images/projects/sleeping-with-friends.png" style="width: 50%;" />
          </div>

          <div id="projectListing" class="project_listing">
            <div class="project_description" id="projectListingText">
              <h1>PlanShare.io</h1>
              <h3>Mar. 2020 - May. 2020</h3>
              
              <img class="project_image_small" src="/assets/images/projects/planshare.png" />

              <div id="projectListingDescription">
                <a href="https://planshare.io" class="project_link" target="_blank">https://planshare.io</a>
                <br />
                <br />
                I developed a website where users can find people to share subscriptions, group orders, and referrals. The project was built using React, TypeScript, MongoDB, Express, and Node.js.
                <br />
                <br />
                <strong>Front end:</strong><br />
                • React, TypeScript<br />
                • Material UI for slider, radio, checkbox controls
                <br />
                <br />
                <strong>Back end:</strong><br />
                • Node, Express, TypeScript, Mongo
                <br />
                <br />
                <strong>Instant messaging:</strong><br />
                • Socket.IO
                <br />
                <br />
                <strong>Graphics:</strong><br />
                • Gimp, PowerPoint for creating icons, banners<br />
                • Material Design for icons
                <br />
                <br />
                <strong>Notifications:</strong><br />
                • Node for scheduled emails
                <br />
                <br />
                <div class="project_tags_container">
                  <div class="project_tag">React</div>
                  <div class="project_tag">TypeScript</div>
                  <div class="project_tag">MongoDB</div>
                  <div class="project_tag">Express</div>
                  <div class="project_tag">Node.js</div>
                  <div class="project_tag">Socket.io</div>
                </div>
              </div>
            </div>
            <img class="project_image_large" id="projectListingImage" src="/assets/images/projects/planshare.png" style="width: 50%;" />
          </div>

        </div>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
    </div>
  </body>
</html>
