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
            <div class="mainContent">
                <aside class="box1"></aside>
                <article class="box1">
                    <p><video width="100%" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/gym.mp4" type="video/mp4">
                            <source src="assets/videos/gym.ogg" type="video/ogg">
                            This browser does not support the video tag.</video>
                        <h1>Welcome to ABC</h1>
                        <dl class="textSize ">
                            <dt>Be healthy</dt>
                            <dt>Stay motivated</dt>
                            <dt>We can and so do you</dt>
                        </dl>

                    </p>

                </article>
                <aside class="box1"></aside>


            </div>
            <div class="box2">
                <img src="assets/images/discount.jpg" alt="Discounting picture" class="roundedImage" />
                <!--free image obtained from https://unsplash.com/-->
                <article>
                    Customers enjoy our special 50% off. <a href="Services.php"><button class="button button1">Learn more</button></a>
                </article>

            </div>
            <div class=" box2">
                <img src="assets/images/onlinetraining.jpg" alt="Online training picture" class="roundedImage" />
                <!--free image obtained from https://unsplash.com/-->
                <article>
                    Stay safe and strong with our virtual training. <a href="Services.php"><button class="button button1">Learn more</button></a>
                </article>


            </div>

            <div class=" mainContentLeft">
                <section class="box3 padding_box3"><img src="assets/images/Emily.jpg" alt="Emily" class="myImageLeft" />
                    <!--free image obtained from https://unsplash.com/-->Emily, a former
                    firefighter having 10-year
                    experience in personal training.</section>
                <section class="box3 middleBox padding_box3"><img src="assets/images/Maria.jpg" alt="John" class="myImageLeft" />
                    <!--free image obtained from https://unsplash.com/-->
                    "I am enthusiatic about dancing. Oh! Rose and jasmine are my favorite" said
                    Maria, professional dancer.
                </section>
                <section class="box3 padding_box3"><img src="assets/images/Logan.jpg" alt="Logan" class="myImageLeft" />
                    <!--free image obtained from https://unsplash.com/-->Logan is a diet
                    specilist enjoying camping and
                    physical education.</section>
            </div>
        </section>
        <div class="clear"></div>
        <?php require_once("includes/footer.php"); ?>
        <!--Linking footer-->

    </div>


</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].-->