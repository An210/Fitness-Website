


<?php require_once("includes/validation.php") ?>
<?php
$error = [];
if (isset($_POST["submit"])) {
    $error = registerUser();
    //Calling error checking method
    if (count($error) === 0) {
        header('Location: myFitness.php');
        exit();
    }
    //Redirect user to myFitness page upon successful validation
}
?>
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
    <?php ?>

    <div class="grid-container">
        <?php require_once("includes/header.php"); ?>
        <?php require_once("includes/nav.php"); ?>
        <!---Linking header and navigation bar--->
        <section class="grid-item item3 ">
            <ol id="breadcrumbs"></ol>
            <div class="clear"></div>
            <div class="formBox">
                <aside class="mainContent box3 "> </aside>
                <div class="mainContent box3 boxRegoForm">
                    <h2>Regitration page</h2>
                    <form id="registration_form" method="post" action="#">
                        <div> <label class="register">First name: </label> <input type="text" name="firstname" value="" id="firstname"> </div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "firstNameError"); ?></div>
                        <!-- Calling error displaying method with corresponding parameter -->
                        <div class="clear"></div>

                        <div> <label class="register">Second name: </label> <input type="text" name="secondname" value="" id="secondname"> </div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "secondNameError"); ?></div>
                        <div class="clear"></div>

                        <div> <label class="register">Email: </label> <input type="text" name="email" value="" id="email"> </div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "emailError"); ?></div>
                        <div class="clear"></div>

                        <div> <label class="register">Address:</label>
                            <textarea class="myImageLeft" id="address" name="address" rows="3" cols="34"></textarea>
                        </div>
                        <div class="clear"></div>

                        <div><label class="register">Referrel:</label>
                            <input class="myImageLeft" type="checkbox" name="referrel" id="referrel" value="no" style="
                                width: unset">
                        </div>
                        <div class="clear"></div>

                        <div><label class="register">Membership type:</label>
                            <select class="myImageLeft" name="membership" id="membership">
                                <option selected="selected"></option>
                                <option value="individual">Individual</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <div id="newField"></div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "membershipError"); ?></div>



                        <div id="individualAge"><label class="register">Age:</label> <input type="range" onchange="ageVal(this.value)" oninput="removeFeeDisplay()" name="age" id="age"> <output type="text" id="ageValue" value="">
                        </div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "ageError"); ?></div>
                        <div class="clear"></div>

                        <div><label class="register">Duration of membership:</label>
                            <select class="myImageLeft" name="duration" id="duration">
                                <option selected="selected"></option>
                                <option value="ongoing">Ongoing</option>
                                <option value="3months">3 months</option>
                                <option value="3months">6 months</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "durationError"); ?></div>
                        <div class="clear"></div>

                        <div> <label class="register">Password: </label> <input type="password" name="password" value="" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"> </div>
                        <div class="clear"></div>
                        <div class="newError"><?php displayError($error, "passwordError"); ?></div>
                        <div class="clear"></div>

                        <div> <input id="contact_button" type="submit" name="submit" value="Submit">
                        </div>

                    </form>
                    <div class="mainContent box3"></div>
                </div>

            </div>


        </section>
        <div class="clear"></div>
        <?php require_once("includes/footer.php"); ?>
        <!--Linking footer-->

    </div>


</body>

</html>
<!----Reference: 
    W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].
    Rmit.instructure.com. 2020. Myapps Portal. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-03-learning-materials-slash-activities?module_item_id=2542850> [Accessed 16 August 2020].
Rmit.instructure.com. 2020. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-8-learning-materials-slash-activities?module_item_id=2542859> [Accessed 16 September 2020].
-->