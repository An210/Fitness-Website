<?php require_once("includes/authorise.php") ?>
<?php require_once("includes/myFitnessValidation.php") ?>
<?php
$userActivities = readActivity();
$sent = $_GET['category'];
$todady = date("d-m-Y");
$chosen = $userActivities[$_SESSION['user']['email']][$todady][$sent];

$weekdays = [date('d-m-Y', strtotime('monday this week')),  date('d-m-Y', strtotime('tuesday this week')),  date('d-m-Y', strtotime('wednesday this week')),  date('d-m-Y', strtotime('thursday this week')),  date('d-m-Y', strtotime('friday this week')),  date('d-m-Y', strtotime('saturday this week')),  date('d-m-Y', strtotime('sunday this week'))];
$exercises = ["walk", "run", "dance", "yoga", "lift"];
//All week and all activities as parameters for total()

$light =  ["walk", "yoga"];
$intense =  ["run", "dance", "lift"];
$moreLight = total($userActivities, $weekdays, $light) - total($userActivities, $weekdays, $intense);
//negative value if hours spent on light activities are less than intense ones (vice versa)
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
        <h2 class="text-center">My logbook</h2>

        <div class="col-sm-12 text-center border-top">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6 border-bottom border-info mb-2 text-left">
                    <div class="mr-10">
                        <img class="img-new rounded float-left mr-2" alt="<?php echo ucfirst($sent) ?> picture" src="assets/images/<?php echo ucfirst($sent) ?>.jpg">
                        <!--free images obtained from https://unsplash.com/-->
                        <h6><?php title($sent) ?></h6>
                        <div><?php echo $todady ?></div>
                        <div>You excersied for <?php echo $chosen[$sent . 'Hour'] ?> hours doing <?php echo $chosen[$sent . 'Amount'] ?> movements </div>
                        <!-- Display user's current commitments -->
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6 border-bottom border-info mb-2 text-left">
                    <div class="mr-10">
                        <img class="img-new rounded float-left mr-2" alt="health picture" src="assets/images/health.jpg">
                        <!--free images obtained from https://unsplash.com/-->
                        <h6>Weight</h6>
                        <div><?php echo $todady ?></div>
                        <div>Your new weight is: <?php echo $chosen[$sent . 'Weight'] ?> kg</div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6 border-bottom border-info mb-4 text-left">
                    <div class="mr-10">
                        <img class="img-new rounded float-left mr-2" alt="BMI picture" src="assets/images/BMI.jpg">
                        <!--free images obtained from https://unsplash.com/-->
                        <h6>BMI</h6>
                        <div><?php echo $todady ?></div>
                        <div>Your new BMI is: <?php echo $chosen[$sent . 'BMI']  ?></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center">
            <h3>Your current accomplishment</h3>
            <p>(Your weekly goal: <?php echo $chosen[$sent . 'Goal'] ?> hours of exercising)</p>
            <div class="progress mb-5">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow=<?php percentage(total($userActivities, $weekdays, $exercises), $chosen[$sent . 'Goal']) ?> aria-valuemin="0" aria-valuemax="100" style="width: <?php percentage(total($userActivities, $weekdays, $exercises), $chosen[$sent . 'Goal']) ?>%">
                    <?php percentage(total($userActivities, $weekdays, $exercises), $chosen[$sent . 'Goal']) ?>%</div>
            </div>
        </div>
        <!-- Display user's progress compared to weekly goal -->

        <div class="col-md-12 text-center">
            <a href="Recommend.php?BMI=<?= $chosen[$sent . 'BMI']; ?>&light=<?= $moreLight; ?>" class="btn btn-primary  mx-4">See recommendation</a>
            <a href="myFitness.php" class="btn btn-danger  my-4">Back to myFitness</a>
        </div>
        <!-- Return to myFitness page link -->

    </div>


    <?php require_once("includes/stickyFooter.php") ?>

</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].-->













<!-- // // echo $_GET['category'];
// $monday = date( 'd-m-Y', strtotime( 'monday this week' ) );
// echo $monday;
// // $friday = date( 'Y-m-d', strtotime( 'friday this week' ) );
// // $mydate = getdate(date("U"));
// // // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]"; 
<audio controls>
                            <source type="audio/ogg" src="assets/audios/<?php getImage("1.mp3") ?>">
                        </audio>-->