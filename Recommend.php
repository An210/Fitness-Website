<?php require_once("includes/authorise.php") ?>
<?php require_once("includes/myFitnessValidation.php") ?>
<?php
$BMI = $_GET['BMI'];
$_light = (int) $_GET['light'];
?>
<!doctype html>
<html>

<head>
    <title>Fitness Webiste</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style/myFitness.css">

    <!-- jQuery first, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascripts/myFitness.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>

<body>

    <?php require_once("includes/myFitnessNav.php") ?>

    <div class="container">
        <div class="col-md-12 text-center">
            <h2>Recommendation for your exercise routine</h2>
            <div class="row my-5">
                <aside class="col-sm-4"></aside>
                <section class="col-sm-4">
                    <h5>Your BMI</h5>
                    <div class="text-left"><?php BMI((int) $BMI); ?></div>
                </section>
            </div>

        </div>

        <?php if ($_light > 0) { ?>
            <div>
                <section class="col-sm-12 mb-2 text-center">
                    <h5>Suggested changes</h5>
                    <div>Since you did quite a lot cardio exercises this week. Let's take some intense workout:</div>
                </section>

                <div class="row">
                    <section class="col-sm-4">
                        <video class="img-fluid" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/Shoulder.mp4" type="video/mp4">
                            <source src="assets/videos/Shoulder.ogg" type="video/ogg">
                            This browser does not support the video tag.
                        </video>
                        <div>Get training with our shoulder sessions, and etablish appropriate reps.</div>
                    </section>
                    <section class="col-sm-4">
                        <video class="img-fluid" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/Chest.mp4" type="video/mp4">
                            <source src="assets/videos/Chest.ogg" type="video/ogg">
                            This browser does not support the video tag.
                        </video>
                        <div>It's chest time! Remember to exercise with proper position to avoid injuries.</div>
                    </section>
                    <section class="col-sm-4">
                        <video class="img-fluid" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/Full.mp4" type="video/mp4">
                            <source src="assets/videos/Full.ogg" type="video/ogg">
                            This browser does not support the video tag.
                        </video>
                        <div>Move on to full body segment in order to balance the exercise's effects.</div>
                    </section>
                </div>
            </div>

            <div class="my-5 text-center">

                <section class="col-sm-12 mb-2 ">
                    <h5>Top picked tracks for you</h5>
                    <div>Stay relaxing, motivating and energetic!</div>
                </section>
                <div class="row">
                    <section class="col-sm-4">
                        <audio controls>
                            <!--free audio obtained from https://www.Bensound.com/-->
                            <source src="assets/audios/Shoulder.ogg" type="audio/ogg">
                            <source src="assets/audios/Shoulder.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                    <section class="col-sm-4">
                        <audio controls>
                            <!--free audio obtained from https://www.Bensound.com/-->
                            <source src="assets/audios/Chest.ogg" type="audio/ogg">
                            <source src="assets/audios/Chest.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                    <section class="col-sm-4">
                        <audio controls>
                            <!--free audio obtained from https://www.Bensound.com/-->
                            <source src="assets/audios/Full.ogg" type="audio/ogg">
                            <source src="assets/audios/Full.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                </div>
            </div>

        <?php } else if ($_light <= 0) { ?>

            <div>
                <section class="col-sm-12 mb-2 text-center">
                    <h5>Suggested changes</h5>
                    <div>Since you did a lot intense exercises this week. It's a good idea to do some light activities:</div>
                </section>

                <div class="row mb-5">
                    <section class="col-sm-4">
                        <video class="img-fluid" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/Walk.mp4" type="video/mp4">
                            <source src="assets/videos/Walk.ogg" type="video/ogg">
                            This browser does not support the video tag.
                        </video>
                        <div>Start with walking to maintain your stamina and stability.</div>
                    </section>
                    <section class="col-sm-4">
                        <video class="img-fluid" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/Yoga.mp4" type="video/mp4">
                            <source src="assets/videos/Yoga.ogg" type="video/ogg">
                            This browser does not support the video tag.
                        </video>
                        <div>Refresh your mind with our yoga classes.</div>
                    </section>
                    <section class="col-sm-4">
                        <video class="img-fluid" controls class="myImageLeft">
                            <!--free video obtained from https://www.pexels.com/videos/-->
                            <source src="assets/videos/Food.mp4" type="video/mp4">
                            <source src="assets/videos/Food.ogg" type="video/ogg">
                            This browser does not support the video tag.
                        </video>
                        <div>Most importantly! Keep track of your diet by advices from our specialists.</div>
                    </section>
                </div>

            </div>

            <div class="my-5 text-center">

                <section class="col-sm-12 mb-2 ">
                    <h5>Top picked tracks for you</h5>
                    <div>Stay relaxing, motivating and energetic!</div>
                </section>
                <div class="row">
                    <section class="col-sm-4">
                        <audio controls>
                            <!--free audio obtained from https://www.Bensound.com/-->
                            <source src="assets/audios/Walk.ogg" type="audio/ogg">
                            <source src="assets/audios/Walk.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                    <section class="col-sm-4">
                        <audio controls>
                            <!--free audio obtained from https://www.Bensound.com/-->
                            <source src="assets/audios/Jazz.ogg" type="audio/ogg">
                            <source src="assets/audios/Jazz.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                    <section class="col-sm-4">
                        <audio controls>
                            <!--free audio obtained from https://www.Bensound.com/-->
                            <source src="assets/audios/Piano.ogg" type="audio/ogg">
                            <source src="assets/audios/Piano.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                </div>
            </div>

        <?php } ?>
        <div class="col-md-12 text-center my-4">
            <a href="myFitness.php" class="btn btn-danger">Back to myFitness</a>
        </div>
    </div>


    <?php require_once("includes/stickyFooter.php") ?>

</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].-->