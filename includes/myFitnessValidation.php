<?php
const    USER_STATS = 'data/user_stats.json';
const    CATEGORIES_PATH = 'data/categories.json';
function validateField($form)
{
    $errors = [];
    if (empty($_POST[$form . "Hour"]) || $_POST[$form . "Hour"] > 100) {
        $errors[$form . "Hour"] = "Required: Please enter a valid amount of exercising hours";
    }
    if (empty($_POST[$form . "Amount"]) || $_POST[$form . "Amount"] < 0) {
        $errors[$form . "Amount"] = "Required: Please enter a valid amount of exercise taken";
    }

    if (empty($_POST[$form . "Age"]) || $_POST[$form . "Age"] < 16) {
        $errors[$form . "Age"] = "Required: Please enter your age - must be more than 15";
    }
    if ($_POST[$form . "Height"] < 0 || empty($_POST[$form . "Height"])) {
        $errors[$form . "Height"] = "Required: Please enter a valid height";
    }
    if ($_POST[$form . "Weight"] < 0 || empty($_POST[$form . "Weight"])) {
        $errors[$form . "Weight"] = "Required: Please enter a valid weight";
    }

    if ($_POST[$form . "Goal"] < 1 || empty($_POST[$form . "Goal"])) {
        $errors[$form . "Goal"] = "Required: Please enter a valid weekly goal";
    } else if ($_POST[$form . "Goal"] < $_POST[$form . "Hour"]) {
        $errors[$form . "Goal"] = "Your goal should be greater than the current commitment";
    }
    if (count($errors) === 0) {
        $BMI = $_POST[$form . "Weight"] / (($_POST[$form . "Height"] / 100) * ($_POST[$form . "Weight"] / 100));
        $activity = [
            $form . 'Hour' => htmlspecialchars(trim($_POST[$form . "Hour"])),
            $form . 'Amount' => htmlspecialchars(trim($_POST[$form . "Amount"])),
            $form . 'Age' => htmlspecialchars(trim($_POST[$form . "Age"])),
            $form . 'Weight' => htmlspecialchars(trim($_POST[$form . "Weight"])),
            $form . 'Height' => htmlspecialchars(trim($_POST[$form . "Height"])),
            $form . 'email' => htmlspecialchars(trim($_SESSION['user']['email'])),
            $form . 'BMI' => htmlspecialchars(trim($BMI)),
            $form . 'Goal' => htmlspecialchars(trim($_POST[$form . "Goal"])),
        ];
        $activities = readActivity();
        $activities[$_SESSION['user']['email']][date("d-m-Y")][$form] = $activity;

        $json = json_encode($activities, JSON_PRETTY_PRINT);
        file_put_contents(USER_STATS, $json, LOCK_EX);
    }


    return $errors;
}
//Error checking and pushing value to json file upon sucessful validation


function fitnessError($errors, $name)
{
    if (isset($errors[$name])) {
        echo "<div class='alert alert-info col-md-12 text-danger text-left'>{$errors[$name]}</div>";
    }
}
//Display error upon unsucessful validation

function readActivity()
{
    $json = file_get_contents(USER_STATS);
    return json_decode($json, true);
}
//Get user's statistic



//---------------------------------Categories--------------------------------------------------------
function readCategories()
{
    return readJsonFile(CATEGORIES_PATH);
}




//------------------------General-------------------------------------------------
function readJsonFile($path)
{
    $json = file_get_contents($path);
    return json_decode($json, true);
}


function redirect($errors, $type)
{
    if (count($errors) === 0) {
        header("Location: Logbook.php?category={$type}");
        exit();
    }
}
//Redirect user to logbook page

function total($userActivities, $weekdays, $exercises)
{
    $totalHour = 0;
    foreach ($weekdays as $day) {
        foreach ($exercises as $exercise) {
            if (isset($userActivities[$_SESSION['user']['email']][$day][$exercise][$exercise . "Hour"])) {
                $totalHour = $totalHour + (int) $userActivities[$_SESSION['user']['email']][$day][$exercise][$exercise . "Hour"];
            }
        }
    }
    return $totalHour;
}
//Calculate total hours spent of the whole week excercise

function eachDay($userActivities, $day, $exercises)
{
    $totalHour = 0;
    foreach ($exercises as $exercise) {
        if (isset($userActivities[$_SESSION['user']['email']][$day][$exercise][$exercise . "Hour"])) {
            $totalHour = $totalHour + (int) $userActivities[$_SESSION['user']['email']][$day][$exercise][$exercise . "Hour"];
        }
    }
    return ($totalHour < 10) ? ($totalHour * 10) : 99;
}
//Each week day's exercise hours

function highlight($date)
{
    if ($date == date("d-m-Y")) {
        echo "#b3b3b3";
    }
}

//---------------logbook display-----------------
function title($title)
{
    if ($title == "lift") {
        echo "Weight lifting";
    } else if ($title == "dance") {
        echo "Dancing";
    } else if ($title == "walk") {
        echo "Walking";
    } else if ($title == "yoga") {
        echo "Yoga";
    } else if ($title == "run") {
        echo "Running";
    }
}

function percentage($current, $goal)
{

    echo ($current / (int)$goal) * 100;
}


//-------------------Recommendation--------------
function BMI($BMI)
{
    if ($BMI < 18) {
        echo "Your BMI ($BMI) is a little bit low, so our suggestion is to pay more attention on your diet. We do offer courses involving diet tracking where you can get valuable advices from professionals!";
    } else if ($BMI < 25) {
        echo "You have a good BMI ($BMI), but don't forget to main tain your statistic. Join with us now and discover more appealing services.";
    } else {
        echo "Your BMI ($BMI) is quite high, stick with our offered classes to maintain your healthy diet while doing physcial activities.";
    }
}





// References: 
// Rmit.instructure.com. 2020. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-9-learning-materials-slash-activities?module_item_id=2542862> [Accessed 23 September 2020].