<?php
const USER_PATH = "data/users.json";
const USER_SESSION_KEY = "user";
session_start();
function registerUser()
{
    $error = [];
    //Declare error messages
    
    $passwordRegex = "/^[A-Z](?=.{5,})(?=.*[\^\!\@]).*\d$/";
    //Defining regex for password
    $correctInput = true;
    if (empty($_POST["firstname"])) {
        $error["firstNameError"] = "Required: Please enter your first name";
        $correctInput = false;
    }
    if (empty($_POST["secondname"])) {
        $error["secondNameError"] = "Required: Please enter your second name";
        $correctInput = false;
    }
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error["emailError"] = "Required: Please enter a valid email";
        $correctInput = false;
    }
    if ($_POST["membership"] == "") {
        $error["membershipError"]   = "Required: Please choose an option";
        $correctInput = false;
    }
    if ($_POST["age"] < 16) {
        $error["ageError"] = "Required: Please enter your age - must be more than 15";
        $correctInput = false;
    }
    if ($_POST["duration"] == "") {
        $error["durationError"] = "Required: Please choose an option";
        $correctInput = false;
    }
    if (!preg_match($passwordRegex, $_POST["password"])) {
        $error["passwordError"] = "Required: Please choose a valid password";
        $correctInput = false;
    }
    if ($correctInput == true) {
        $user = [
            "firstname" =>  htmlspecialchars(trim($_POST["firstname"])),
            "secondname" => htmlspecialchars(trim($_POST["secondname"])),
            "email" => htmlspecialchars(trim($_POST["email"])),
            "address" => htmlspecialchars(trim($_POST["address"])),
            "membership" => htmlspecialchars(trim($_POST["membership"])),
            "age" => htmlspecialchars(trim($_POST["age"])),
            "duration" => htmlspecialchars(trim($_POST["duration"])),
            "password" => htmlspecialchars($_POST["password"]),
            // Sanitize possible malicious inputs
        ];
        if (isset($_POST["referrel"])) {
            $user["referrel"] = "yes";
        }
        //Defining an user's infor in an array

        $users = readUsers();
        $users[$user["email"]] = $user;
        //Assigning previous array to a dimensional array in json file

        $json = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents(USER_PATH, $json);
        //Encoding information and push into the json file

        loginUser($user);
        //Automatically log user in upon successfully registered 
    }
    return $error;
}

function readUsers()
{
    $json = file_get_contents(USER_PATH);
    return json_decode($json, true);
}
//Retrieve data storedin the jason file

function loginUser($form)
{
    $loginError = [];
    $form["email"] = htmlspecialchars($form["email"]);
    $form["password"] = htmlspecialchars($form["password"]);
    if (!isset($form["email"]) || !filter_var($form["email"], FILTER_VALIDATE_EMAIL)) {
        $loginError["emailError"] = "Required: Please enter a valid email";
    }
    if (!preg_match("/^[A-Z](?=.{5,})(?=.*[\^\!\@]).*\d$/", $form["password"])) {
        $loginError["passwordError"] = "Required: Please choose a valid password";
    }
    if (count($loginError) === 0) {
        $user = getUserByEmail($form["email"]);
        if ($user !== null && $user['password'] === $form['password']) {
            $_SESSION[USER_SESSION_KEY] = $user;
        } else
            $loginError["passwordError"] = 'Login failed, email and / or password incorrect. Please try again.';
    }
    return  $loginError;
}
// Checking login inputs and user existence in the json file

function getUserByEmail($email)
{
    $user = readUsers();
    return isset($user[$email]) ? $user[$email] : null;
}
// Get the user using email address

function loggedIn()
{
    return isset($_SESSION[USER_SESSION_KEY]);
}
//Check whether the user logged in

function displayError($error, $name)
{
    if (isset($error[$name]))
        echo $error[$name];
}
//Error displaying

function logOut()
{
    session_unset();
    header('Location: Login.php');
    exit();
}
//End session and redirect user to login page

/*References:
Rmit.instructure.com. 2020. Myapps Portal. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-03-learning-materials-slash-activities?module_item_id=2542850> [Accessed 16 August 2020].
Rmit.instructure.com. 2020. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-8-learning-materials-slash-activities?module_item_id=2542859> [Accessed 16 September 2020].
*/