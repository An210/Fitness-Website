<?php require_once("includes/myFitnessValidation.php") ?>
<script type="text/javascript" src="javascripts/myFitness.js"></script>
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
<?php
if (!isset($_GET['text'])) {
    echo '<p class="alert alert-danger">The "text" variable is required.</p>';
    exit();
}
$text = $_GET['text'];

// Read file and remove all empty lines.
$lines = array_filter(file('data/data.txt'), function ($line) {
    return trim($line) !== "";
});

$matches = [];

if (strlen($text) === 0) {
    $matches = $lines;
    $matches[0] = "walk";
    $matches[1] = "run";
    $matches[2] = "dance";
    $matches[3] = "yoga";
    $matches[4] = "lift";
} else {
    // Search for lines containing the specified text.
    foreach ($lines as $line) {
        if (strpos($line, $text) !== false)
            if (strpos($line, "Weight lifting") !== false) {
                $matches[] = "lift";
            } else  if (strpos($line, "Walk") !== false) {
                $matches[] = "walk";
            } else  if (strpos($line, "Run") !== false) {
                $matches[] = "run";
            } else  if (strpos($line, "Dance") !== false) {
                $matches[] = "dance";
            } else  if (strpos($line, "Yoga") !== false) {
                $matches[] = "yoga";
            }
    }
}

if (count($matches) === 0) {
    echo "<p class='alert alert-info'>No matches found for '$text'.</p>";
    exit();
}
// Display error message upon invalid inputs in search box


?>

<?php foreach ($matches as $match) { ?>
    <?php foreach (readCategories() as $key => $value) { ?>
        <?php if ($match == $key) { ?>
        <!-- Nest through double foreach loop to compare values between $key and $match -->
            <div id=<?php echo $value['container']; ?> class="col-md-6 col-lg-4 col-xl-4">
                <!---Assign container value to div id---->
                <a href="#"><img class="img-fluid rounded float-left" alt="<?php echo $key; ?> picture" src="assets/images/<?php echo $value['image-name']; ?>"></a>
                <!--free images obtained from https://unsplash.com/-->
                <a href="#">
                    <p class="text-center text-dark"><?php echo $value['name']; ?></p>
                </a>

                <form id=<?php echo $key ?> class="noneDisplay" method="post">
                    <!---Assign key to form id---->
                    <h5>Step 1</h5>
                    <div class="form-group row">
                        <label for=<?php echo $value['hour']; ?> class="col-sm-5 col-form-label">Excercise taken:</label>
                        <input class="col-sm-6" id=<?php echo $value['hour']; ?> type="number" name=<?php echo $value['hour']; ?> placeholder="Hour(s)">

                    </div>

                    <div class="form-group row">
                        <label for=<?php echo $value['amount']; ?> class="col-sm-5 col-form-label">Amount taken:</label>
                        <input class="col-sm-6" id=<?php echo $value['amount']; ?> type="number" name=<?php echo $value['amount']; ?> placeholder="Movement(s)">

                    </div>


                    <h5>Step 2</h5>
                    <div class="form-group row">
                        <label for=<?php echo $value['age']; ?> class="col-sm-5 col-form-label">Age:</label>
                        <input class="col-sm-6" id=<?php echo $value['age']; ?> type="number" name=<?php echo $value['age']; ?>>

                    </div>

                    <div class="form-group row">
                        <label for=<?php echo $value['weight']; ?> class="col-sm-5 col-form-label">Weight:</label>
                        <input class="col-sm-6" id=<?php echo $value['weight']; ?> type="number" name=<?php echo $value['weight']; ?> placeholder="Kg">

                    </div>
                    <div class="form-group row">
                        <label for=<?php echo $value['height']; ?> class="col-sm-5 col-form-label">Height:</label>
                        <input class="col-sm-6" id=<?php echo $value['height']; ?> type="number" name=<?php echo $value['height']; ?> placeholder="Cm">

                    </div>

                    <h5>Step 3</h5>
                    <div class="form-group row">
                        <label for=<?php echo $value['goal']; ?> class="col-sm-5 col-form-label">Weekly goal:</label>
                        <input class="col-sm-6" id=<?php echo $value['goal']; ?> type="number" name=<?php echo $value['goal']; ?> placeholder="Hour(s)">


                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" value="submit" name="<?php echo $value['submit']; ?>" class="btn btn-primary">See logbook</button>
                    </div>

                </form>
            </div>
        <?php } ?>
    <?php } ?>
<?php } ?>




<!-- References:
Rmit.instructure.com. 2020. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-10-learning-materials-slash-activities?module_item_id=2542864> [Accessed 30 September 2020]. -->