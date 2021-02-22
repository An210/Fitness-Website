<!doctype html>
<html>

<head>
    <title>Fitness Webiste</title>
    <meta name="keywords" content="HTML, fitness web page">
    <meta name="author" content="An Le">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/breadcrumbs.css">
    <script type="text/javascript" src="javascripts/register.js"></script>
</head>

<body>


    <div class="grid-container">
        <?php require_once("includes/header.php"); ?>
        <?php require_once("includes/nav.php"); ?>
        <!--Linking header and navigation bar-->
        <section class="grid-item item3 ">
            <ol id="breadcrumbs"></ol>
            <div class="clear"></div>
            <article class="mainContent locationBox">
                <h2>Find your gym</h2><label>Your postcode: </label> <input type="text" style="float: none;"> <button class="button button1">Submit</button>
            </article>
            <div class="clear"></div>
            <section class="box2">
                <p class="virtualTraining">
                    <h2>Online personal training</h2>
                    Planning your own timetable to keep in fit while <br>
                    getting to know your coach in personal basis.<br>
                    <a href="#onlineTrainingVid"><button class="button button1" onclick="addVid()" type="button">Having a look</button></a>
                </p>

            </section>
            <section class="box2">
                <p class="virtualTraining">
                    <h2>Online group training</h2>
                    You have flexible schedule, you prefer training while <br>
                    being able to socialize. See our group session!<br>
                    <a href="#timeTable"><button class="button button1">See our timetable</button></a>

                </p>
            </section>
            <div id="additionalVid">
                <h2>Special virtual training</h2>
                <figure id="onlineTrainingVid"><video width="55%" controls>
                        <!--free video obtained from https://www.pexels.com/videos/-->
                        <source src="assets/videos/onlineTraining.mp4" type="video/mp4">
                        <source src="assets/videos/onlineTraining.ogg" type="video/ogg">
                        This browser does not support the video tag.</video></figure>
            </div>
            <div class="clear"></div>
            <div class="mainContentLeft">
                <section class="box3 padding_box3"><img src="assets/images/Yoga.jpg" alt="Yoga picture" class="myImageLeft" />
                    <!--free image obtained from https://unsplash.com/-->
                    <div class="clear"> Be fresh, be creative with our yoga classes. <a href="Contact.php"><button class="button button1">Book class</button></a></div>
                </section>
                <section class="box3 middleBox padding_box3"><img src="assets/images/Dance.jpg" alt="Dancing picture" class="myImageLeft" />
                    <!--free image obtained from https://unsplash.com/-->
                    <div class="clear"> Having fun while staying fit? Let's dance. <a href="Contact.php"><button class="button button1">Book class</button></a></div>
                </section>
                <section class="box3 padding_box3"><img src="assets/images/Diet.jpg" alt="Diet picture" class="myImageLeft" />
                    <!--free image obtained from https://unsplash.com/-->
                    <div class="clear"> Diet tracking form your healthy eating
                        style. <a href="Contact.php"><button class="button button1">Book class</button></a></div>
                </section>
            </div>
            <div class="clear"></div>
            <time class="box2 timetableBox">
                <div id="timeTable">
                    <h2>Class timetable</h2>
                    <aside class="box3 box4Small" style="height: 300px; border: none;"></aside>
                    <div class="box3 box4Small">Classes</div>
                    <div class="box3 box4Small">Time</div>
                    <div class="box3 box4Small">Teacher</div>
                    <div class="box1 box4 ">
                        <p class="textRelative">Yoga</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Friday: 1:30pm - 3:00pm</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Emily</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Dance</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Wednesday: 4:30pm - 6:00pm</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Maria</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Diet tracking</p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Tuesday: 3:00pm - 4:30pm </p>
                    </div>
                    <div class="box3 box4">
                        <p class="textRelative">Logan</p>
                    </div>
                </div>
            </time>
        </section>

        <?php require_once("includes/footer.php"); ?>
        <!--Linking footer-->

    </div>


</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].-->