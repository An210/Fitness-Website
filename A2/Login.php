<!doctype html>
<html>
<?php require_once("includes/validation.php") ?>
<?php
$error = [];
if (isset($_POST["Login"])) {
    $error = loginUser($_POST);
    if (count($error) === 0) {
        header('Location: myFitness.php');
        exit();
    }
}
//Authorising user's account
?>

<head>
    <title>Fitness Webiste</title>
    <meta name="keywords" content="HTML, fitness web page">
    <meta name="author" content="An Le">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/breadcrumbs.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="javascripts/form-validation.js"></script>
    <script src="plugins/jquery.validate.js"></script>
</head>

<body>


    <div class="grid-container">
        <?php require_once("includes/header.php"); ?>
        <?php require_once("includes/nav.php"); ?>
        <!---Linking header and navigation bar--->
        <section class="grid-item item3 ">
            <ol id="breadcrumbs"></ol>
            <div class="clear"></div>
            <div class="mainContent formBox">
                <aside class="box3"></aside>
                <article class="box3">
                    <h2>Login page</h2>
                    <form id="login_form" name="login_form" method="post">
                        <div class="login"> <label class="contact">Username: </label> <input type="text" name="email" id="email" type="text" value=""> </div>
                        <div class="newError" style="width: 290px"><?php displayError($error, "emailError") ?></div>
                        <div class="spaceLine">spaceLine</div>
                        <div> <label class="contact">Password: </label> <input type="password" name="password" id="password" type="text" value="" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"> </div>
                        <div class="newError" style="width: 290px"><?php displayError($error, "passwordError") ?></div>
                        <div class="spaceLine">spaceLine</div>
                        <input id="contact_button" style="margin-left: 65px;" type="submit" name="Login" value="Login">
                    </form>
                </article>
                <div class="clear"></div>
                <aside class="box3"></aside>
            </div>


        </section>
        <?php require_once("includes/footer.php"); ?>
        <!---Linking footer--->
    </div>


</body>

</html>


<!----Reference:
    W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].
    Rmit.instructure.com. 2020. Myapps Portal. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-03-learning-materials-slash-activities?module_item_id=2542850> [Accessed 16 August 2020].-->