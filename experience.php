<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            #experienceListing {
                margin-bottom: 50px;
                overflow: auto;
            }

            #experienceListing_left {
                float: left;
                width: 150px;
                text-align: right;
            }

            #experienceListing_right {
                float: left;
                width: 80%;
                margin: 0px 0px 0px 35px;
                overflow: hidden;
            }

            #experienceListingDescription {
               margin-top: 20px;
            }

            #experienceListingHeader h1 {
                margin: 0px 0px 2px 0px;
            }

            #experienceListingHeader h2 {
                margin: 0px 0px 10px 0px;
                font-weight: 100;
            }

            #experienceListingHeader h3 {
                margin: 0px;
                font-weight: 100;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>
        <div id="subheader">
            <h1>Resume</h1>
            <input id="subheader_button" type="button" onclick="location.href = 'education.php';" value="Education" />
            <input id="subheader_button" type="button" onclick="location.href = 'experience.php';" value="Experience" />
        </div>
        <div id="container">
            <div style="display: table; margin: 0 auto; width: 80%;">
                <div id="experienceListing">
                    <div id="experienceListing_left">
                        <img src="microsoft-logo.png" style="height: 100px;" />
                    </div>
                    <div id="experienceListing_right">
                        <div id="experienceListingHeader">
                            <h1>Software Engineer</h1>
                            <h2>Microsoft</h2>
                            <h3>July 2016 - Present | Seattle, Washington</h3>
                        </div>
                        <div id="experienceListingDescription">
                        </div>
                    </div>
                </div>
                <div id="experienceListing">
                    <div id="experienceListing_left">
                        <img src="alu-logo.png" style="height: 100px;" />
                    </div>
                    <div id="experienceListing_right">
                        <div id="experienceListingHeader">
                            <h1>Software Development Intern</h1>
                            <h2>Alcatel-Lucent</h2>
                            <h3>May 2015 - Aug. 2015 | Ottawa, Ontario</h3>
                            <div id="experienceListingDescription">
                                Development of 4G LTE automation testing software tools for testers in Chicago and Beijing:
                                <ul style="margin: 10px 0px 0px 0px;">
                                    <li>Java application that implements ADB to allow users to control Android devices from Windows/Linux/Unix platforms</li>
                                    <li>Interface for simulating frequencies received by moving bodies near radio towers</li>
                                    <li>Android application for automation of TCP/UDP traffic between phones and servers</li>
                                    <li>Python GUI for accessing and communicating with Android device modems through serial COM ports</li>
                                </ul>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div id="experienceListing">
                    <div id="experienceListing_left">
                        <img src="mcgill-logo.png" style="height: 100px;" />
                    </div>
                    <div id="experienceListing_right">
                        <div id="experienceListingHeader">
                            <h1>Undergraduate Researcher </h1>
                            <h2>Reasoning and Learning Lab, McGill University </h2>
                            <h3>May 2014 - August 2014 | Montreal, Quebec</h3>
                        </div>
                        <div id="experienceListingDescription">
                            In the summer of 2014, I worked on a project about the Classification of Accelerometer Data under the supervision
                            of <a href="http://www.cs.mcgill.ca/~dprecup/" target="_blank">Professor Doina Precup</a> of the Reasoning and Learning Lab at McGill.
                            Professor Precup and her colleagues acquired accelerometer data that was retrieved from mobile phones carried by students
                            that recorded the phone's movements.
                            <br /><br />
                            My objective of the project was to determine the best set of parameters for a classifier that determines
                            the identity of the students carrying the phones.
                            Specifically, I focused on the tuning of parameters for Weka's built-in J48 and IBk classifiers.
                            I programmed in Java to preprocess raw mobile phone accelerometer  data to be formatted for Weka software.
                            Moreoever, I ran scripts through Weka on both Windows and Linux while tuning classifiers.
                            In addition to working on my project, I attended weekly lab meeting and listened to graduate student thesis defences.
                            On the final week of the summer, I presented my project in front of the other Reasoning and Learning Lab students.
                            <br /><br />
                            For more details about this project, read the summary at:
                            <br />
                            <a href="http://www.cs.mcgill.ca/~elu4/cadw.html" target="_blank">http://www.cs.mcgill.ca/~elu4/cadw.html</a>
                        </div>
                    </div>
                </div>
                <div id="experienceListing">
                    <div id="experienceListing_left">
                        <img src="princeton-logo.png" style="height: 100px;" />
                    </div>
                    <div id="experienceListing_right">
                        <div id="experienceListingHeader">
                            <h1>Research Assistant</h1>
                            <h2>Peyton Hall, Princeton University</h2>
                            <h3>July 2011 - Aug. 2011 | Princeton, New Jersey</h3>
                        </div>
                        <div id="experienceListingDescription">
                            In the summer of 2011, I assisted astrophysics doctoral candidate,
                            <a href="http://www.mpia-hd.mpg.de/homes/lee/" target="_blank">Khee-Gan Lee</a>, with Lyman-Alpha Forest research.
                            I learned how to program in Interactive Data Language (IDL) on Unix in order to analyze and calculate trends on absorption-emission graphs.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>