<!doctype html>
<html>

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
     <!-- Linking validation using Jquery plugin -->
</head>

<body>

    
    <div class="grid-container">
        <?php require_once("includes/header.php"); ?>
        <?php require_once("includes/nav.php"); ?>
        <section class="grid-item item3 ">
        <ol id="breadcrumbs"></ol>
        <!-- Breadcrumbs display -->
        <div class="clear"></div>
            <div class="mainContent formBox">
                <aside class="box3"></aside>
                <article class="box3">
                    <h2>Contact us page</h2>
                    <form id="contact_form" name="contact_form" method="post" action="mailto:admin@abcgym.com.au">
                        <div> <label class="contact">Address: </label> <input type="text" name="address" id="address" type="text" value=""> </div>
                
                        <div class="clear"></div>
                        <div> <label class="contact">Email: </label> <input type="text" name="email" id="email" type="text" value=""> </div>
                        <div class="clear"></div>
                        <div> <label class="contact">User query: </label> <textarea type="comments" name="userquery" id="userquery" rows="3" cols="34" class="myImageLeft" value=""></textarea>
                            <div class="clear"></div>
                            <div> <label class="contact">Contact method: </label>
                                <select class="myImageLeft" name="contact_method" id="contact_method">
                                    <option>Call</option>
                                    <option>Form enquiry</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                            <div> <label class="contact">Comments: </label>
                                <textarea class="myImageLeft" id="comments" name="comments" type="comments" rows="3" cols="34"></textarea>
                            </div>
                            <div class="clear"></div>
                            <div> <input id="contact_button" type="submit" value="Submit">
                               

                            </div>
                    </form>
                    <!-- Removed all user side validation, replaced by Jquery plugin validation -->
                </article>
                <div class="clear"></div>
                <aside class="box3"></aside>
            </div>


        </section>

        <?php require_once("includes/footer.php"); ?>

    </div>


</body>

</html>
<!----Reference:
    W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].
    Rmit.instructure.com. 2020. Myapps Portal. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-03-learning-materials-slash-activities?module_item_id=2542850> [Accessed 16 August 2020].-->