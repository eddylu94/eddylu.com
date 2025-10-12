<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="header-S.css">
<link rel="stylesheet" type="text/css" href="header-M.css">
<link rel="stylesheet" type="text/css" href="header-L.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php include 'statRecorder.php'; ?>

<script>
  if (location.protocol != 'https:') {
    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
  }
</script>
<script src="reflow.js"></script>

<div id="menu_flyout_overlay" onclick="toggleFlyout()"></div>
<div id="menu_flyout">
  <ul>
    <li><a href="blog.php">Blog</a></li>
    <li>
      <a href="projects.php">Projects</a>
      <ul>
        <li><a href="projects.php">Personal Projects</a></li>
        <li><a href="schoolprojects.php">School Projects</a></li>
      </ul>
    </li>
    <li>
      <a href="./notes/Home.php">CompSci Notes</a>
      <ul>
        <li><a href="./notes/DataStructures.php">Data Structures</a></li>
        <li><a href="./notes/Algorithms.php">Algorithms</a></li>
        <li><a href="./notes/OOP.php">OOP</a></li>
        <li><a href="./notes/Practice.php">Practice Problems</a></li>
        <li><a href="./notes/ProjectEuler.php">Project Euler</a></li>
        <li><a href="./notes/LeetCode.php">LeetCode</a></li>
      </ul>
    </li>
    <li>
      <a href="https://www.notion.so/Random-Notes-b91efbf129b64a83b12c893211b4ef8c" target='_blank'>Misc Notes</a>
    </li>
    <li><a href="about.php">About</a></li>
  </ul>

  <div id="socialIcons">
    <a href="https://github.com/eddylu94" target="_blank">
      <img id="socialIcon" alt="GitHub" src="gh-icon_round.png" />
    </a>
    <a href="https://linkedin.com/in/lueddy" target="_blank">
      <img id="socialIcon" alt="LinkedIn" src="in-icon_round.png" />
    </a>
  </div>
</div>

<div id="header">
  <div id="header_bar">
    <div id="header_wrapper">
      <img id="menuIcon" alt="Menu" src="menu_icon.png" onclick="toggleFlyout()" />
      <a id="title_wrapper" href="index.php">
        <div id="title">
          <div id="title_left">Eddy&nbsp;</div><div id="title_right">Lu</div>
        </div>
      </a>
      <div id="menu">
        <div id="menu_left">
          <ul>
            <li><a href="blog.php">Blog</a></li>
            <li>
              <a href="projects.php">Projects</a>
              <ul>
                <li><a href="projects.php">Personal Projects</a></li>
                <li><a href="schoolprojects.php">School Projects</a></li>
              </ul>
            </li>
            <li>
              <a href="./notes/Home.php">CompSci Notes</a>
              <ul>
                <li><a href="./notes/DataStructures.php">Data Structures</a></li>
                <li><a href="./notes/Algorithms.php">Algorithms</a></li>
                <li><a href="./notes/OOP.php">OOP</a></li>
                <li><a href="./notes/Practice.php">Practice Problems</a></li>
                <li><a href="./notes/ProjectEuler.php">Project Euler</a></li>
                <li><a href="./notes/LeetCode.php">LeetCode</a></li>
              </ul>
            </li>
            <li>
              <a href="https://www.notion.so/Random-Notes-b91efbf129b64a83b12c893211b4ef8c" target='_blank'>Misc Notes</a>
            </li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div>
        <div id="socialIcons">
          <a href="https://github.com/eddylu94" target="_blank">
            <img id="socialIcon" alt="GitHub" src="gh-icon_round.png" />
          </a>
          <a href="https://linkedin.com/in/lueddy" target="_blank">
            <img id="socialIcon" alt="LinkedIn" src="in-icon_round.png" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>