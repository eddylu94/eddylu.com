<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="header-S.css">
<link rel="stylesheet" type="text/css" href="header-M.css">
<link rel="stylesheet" type="text/css" href="header-L.css">

<?php include 'statRecorder.php';?>

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
        <li><a href="./notes/Home.php">Notes</a></li>
        <li>
            <a href="projects.php">Projects</a>
            <ul>
                <li><a href="projects.php">Personal Projects</a></li>
                <li><a href="schoolprojects.php">School Projects</a></li>
            </ul>
        </li>
        <li>
            <a href="experience.php">Resume</a>
            <ul>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="education.php">Education</a></li>
            </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

    <div id="socialIcons">
        <a href="https://facebook.com/eddylu94" target="_blank">
            <img id="socialIcon" alt="Facebook" src="fb-icon_round.png" />
        </a>
        <a href="https://twitter.com/eddylu94" target="_blank">
            <img id="socialIcon" alt="Twitter" src="tw-icon_round.png" />
        </a>
        <a href="https://instagram.com/eddylu94" target="_blank">
            <img id="socialIcon" alt="Instagram" src="ig-icon_round.png" />
        </a>                    
        <a href="https://linkedin.com/in/lueddy" target="_blank">
            <img id="socialIcon" alt="LinkedIn" src="in-icon_round.png" />
        </a>
        <a href="https://github.com/eddylu94" target="_blank">
            <img id="socialIcon" alt="GitHub" src="gh-icon_round.png" />
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
                        <li><a href="./notes/Home.php">Notes</a></li>
                        <li>
                            <a href="projects.php">Projects</a>
                            <ul>
                                <li><a href="projects.php">Personal Projects</a></li>
                                <li><a href="schoolprojects.php">School Projects</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="experience.php">Resume</a>
                            <ul>
                                <li><a href="experience.php">Experience</a></li>
                                <li><a href="education.php">Education</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div id="socialIcons">
                    <a href="https://facebook.com/eddylu94" target="_blank">
                        <img id="socialIcon" alt="Facebook" src="fb-icon_round.png" />
                    </a>
                    <a href="https://twitter.com/eddylu94" target="_blank">
                        <img id="socialIcon" alt="Twitter" src="tw-icon_round.png" />
                    </a>
                    <a href="https://instagram.com/eddylu94" target="_blank">
                        <img id="socialIcon" alt="Instagram" src="ig-icon_round.png" />
                    </a>                    
                    <a href="https://linkedin.com/in/lueddy" target="_blank">
                        <img id="socialIcon" alt="LinkedIn" src="in-icon_round.png" />
                    </a>
                    <a href="https://github.com/eddylu94" target="_blank">
                        <img id="socialIcon" alt="GitHub" src="gh-icon_round.png" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header_placeholder"></div>