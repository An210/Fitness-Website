<?php require_once("includes/authorise.php") ?>
<?php require_once("includes/myFitnessValidation.php") ?>
<?php
$errors = [];
$type = "";
if (isset($_POST['walkSubmit'])) {
    $type = "walk";
    $errors = validateField($type);
    redirect($errors,  $type);
} else if (isset($_POST['runSubmit'])) {
    $type = "run";
    $errors = validateField($type);
    redirect($errors,  $type);
} else if (isset($_POST['danceSubmit'])) {
    $type = "dance";
    $errors = validateField($type);
    redirect($errors,  $type);
} else if (isset($_POST['yogaSubmit'])) {
    $type = "yoga";
    $errors = validateField($type);
    redirect($errors,  $type);
} else if (isset($_POST['liftSubmit'])) {
    $type = "lift";
    $errors = validateField($type);
    redirect($errors,  $type);
}


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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascripts/myFitness.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Register ajax-form submit event.
            $("#ajax-form").submit(function(event) {
                // Do not submit the form (prevent page refresh).
                event.preventDefault();

                // Make AJAX call in the background to the server.
                $.get("search.php", $(this).serialize(), null, "html").
                done(function(html) {
                    // Display results (partial page refresh).
                    $("#ajax-result").html(html);
                }).
                fail(function() {
                    alert("An error has occurred, contact the site administrator!");
                });
            });
        });
    </script>


</head>

<body>

    <?php require_once("includes/myFitnessNav.php") ?>

    <div class="container">
        <section class="row" id="ajax-result">
        </section>
        <!-- Main page's content area -->

        <section class="row" id="error">
            <?php foreach (readCategories() as $key => $value) { ?>
                <?php fitnessError($errors, $value['hour']);   ?>
                <?php fitnessError($errors,  $value['amount']);   ?>
                <?php fitnessError($errors, $value['age']); ?>
                <?php fitnessError($errors,  $value['weight']);   ?>
                <?php fitnessError($errors, $value['height']);   ?>
                <?php fitnessError($errors, $value['goal']);   ?>
            <?php } ?>
        </section>
        <!-- Call back fitnessError() through a foreach loop and display errors being set -->
    </div>
    <div></div>

    <?php require_once("includes/stickyFooter.php") ?>

</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].
Rmit.instructure.com. 2020. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-10-learning-materials-slash-activities?module_item_id=2542864> [Accessed 30 September 2020].
-->