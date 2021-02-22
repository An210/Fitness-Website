<?php require_once("includes/authorise.php") ?>
<?php require_once("includes/validation.php") ?>
<?php require_once("includes/myFitnessValidation.php") ?>
<?php
$exercises = ["walk", "run", "dance", "yoga", "lift"];
$userActivities = readActivity();
//Read user's stat and assigning exercises as an array
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
    <section class="jumbotron">
        <h3 class="text-center">Current weekly Result</h3>
        <div class="row seven-cols">
            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('monday this week'))); ?>;">Monday <br>
                    <tinme>(<?php echo date('d-m-Y', strtotime('monday this week')); ?>)</tinme>
                </p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('monday this week')), $exercises) ?>%">
                        <!-- Call back eachDay() taking assigned date for calories caculation  -->
                    </div>
                </div>
            </div>

            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('tuesday this week'))); ?>;">Tuesday <br> <time>(<?php echo date('d-m-Y', strtotime('tuesday this week')); ?>)</time></p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('tuesday this week')), $exercises) ?>%">

                    </div>
                </div>
            </div>

            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('wednesday this week'))); ?>;">Wednesday <br> <time>(<?php echo date('d-m-Y', strtotime('wednesday this week')); ?>)</time></p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('wednesday this week')), $exercises) ?>%">

                    </div>
                </div>
            </div>

            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('thursday this week'))); ?>;" >Thursday <br> <time> (<?php echo date('d-m-Y', strtotime('thursday this week')); ?>) </time></p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('thursday this week')), $exercises) ?>%">

                    </div>
                </div>
            </div>

            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('friday this week'))); ?>;"> Friday <br> <time>(<?php echo date('d-m-Y', strtotime('friday this week')); ?>)</time></p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('friday this week')), $exercises) ?>%">

                    </div>
                </div>
            </div>

            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('saturday this week'))); ?>;">Saturday <br> <time>(<?php echo date('d-m-Y', strtotime('saturday this week')); ?>)</time></p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('saturday this week')), $exercises) ?>%">

                    </div>
                </div>
            </div>

            <div class="col-md-1 addingBorder">
                <p class="card-header text-center text-dark" style="background-color: <?php highlight(date('d-m-Y', strtotime('sunday this week'))); ?>;">Sunday <br> <time> (<?php echo date('d-m-Y', strtotime('sunday this week')); ?>)</time></p>
                <div class="card-text" style="position : relative; height: 500px">
                    <div class="card-text" style="background-color: #00b3b3; position: absolute; bottom: 0; width:100%; height: <?php echo eachDay($userActivities, date('d-m-Y', strtotime('sunday this week')), $exercises) ?>%">

                    </div>
                </div>
            </div>
            <span class="badge badge-pill badge-info my-2 py-3"> calories expenditure</span>
            <div class="col-md-12 text-center">
                <a href="myFitness.php" class="btn btn-danger">Back to myFitness</a>
            </div>
    </section>


    </div>


    <?php require_once("includes/stickyFooter.php") ?>

</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].-->