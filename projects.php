<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/projects.css">
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
    <div id="body_wrapper">
      <div id="subheader">
        <h1>Projects</h1>
        <div id="subheader_title">Some of my personal projects and Electrical Engineering projects at McGill</div>
        <input id="subheader_button" type="button" onclick="location.href = '/projects.php';" value="Personal Projects" />
        <input id="subheader_button" type="button" onclick="location.href = '/schoolprojects.php';" value="School Projects" />
      </div>
      <div id="container">
        <div class="projects_container">

          <div id="projectListing" class="project_listing">
            <div class="project_description" id="projectListingText">
              <h1>CodeJam 2016 - TV Show Recommender</h1>
              <h3>Nov. 2016</h3>
              
              <img class="project_image_small" src="/assets/images/projects/codejam16.png" />
              
              <div id="projectListingDescription">
                For the 2016 McGill CodeJam hackathon, the objective was to create a TV show recommendation application based on any given input.
                For this project, Charles Liu and I created a website that provided TV recommendations after a user rated TV a list of given shows.
                <br />
                <br />
                <div class="project_tags_container">
                  <div class="project_tag">Javascript</div>
                  <div class="project_tag">jQuery</div>
                  <div class="project_tag">RequireJS</div>
                  <div class="project_tag">HTML</div>
                  <div class="project_tag">CSS</div>
                </div>
              </div>
            </div>
            <img class="project_image_large" id="projectListingImage" src="/assets/images/projects/codejam16.png" style="width: 50%;" />
          </div>

          <div id="projectListing" class="project_listing">
            <div class="project_description" id="projectListingText">
              <h1>Music Player Visualizer</h1>
              <h3>Dec. 2015 - Jan. 2016</h3>
              
              <img class="project_image_small" src="/assets/images/projects/visualizer.png" />

              <div id="projectListingDescription">
                I created music player visualizations for .mp3 audio data using Javascript, HTML5, CSS3 based on the
                visualizations of <a target="_blank" href="https://www.youtube.com/user/AllTrapNation">Trap Nation</a>.
                <br />
                <br />
                <div class="project_tags_container">
                  <div class="project_tag">Javascript</div>
                  <div class="project_tag">HTML5</div>
                  <div class="project_tag">CSS3</div>
                </div>
              </div>
            </div>
            <img class="project_image_large" id="projectListingImage" src="/assets/images/projects/visualizer.png" style="width: 50%;" />
          </div>

          <div id="projectListing" class="project_listing">
            <div class="project_description" id="projectListingText">
              <h1>Chess Game</h1>
              <h3>June 2015 - Aug. 2015</h3>
              
              <img class="project_image_small" src="/assets/images/projects/chessGame.png" />

              <div id="projectListingDescription">
                I created the classic chess game in C++ using Qt.
                <br />
                <br />
                <div class="project_tags_container">
                  <div class="project_tag">C++</div>
                  <div class="project_tag">Qt</div>
                </div>
              </div>
            </div>
            <img class="project_image_large" id="projectListingImage" src="/assets/images/projects/chessGame.png" style="width: 50%;" />
          </div>

        </div>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
    </div>
  </body>
</html>
