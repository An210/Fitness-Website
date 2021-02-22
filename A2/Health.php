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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>


    <div class="grid-container">
        <?php require_once("includes/header.php"); ?>
        <?php require_once("includes/nav.php"); ?>
        <!--Linking header and navigation bar-->
        <section class="grid-item item3 ">
        <ol id="breadcrumbs"></ol>
        <!--Breadcrumbs displaying-->
        <div class="clear"></div>
            <h2>Health tracker page</h2>
            <article class="mainContent locationBox">
                <button class="button healthButton" onclick="firstStep()" autofocus style="background-color: #004d4d;" id="healthButton1">General health information <span class="next">></span></button>
                <button class="button healthButton" onclick="checkStep1()" id="healthButton2">Dietary information <span class="next">></span></button>
                <button class="button healthButton" onclick="checkFinal()" id="healthButton3">Current exercise routine
                    <span class="next">></span></button>


                <div id="generalHealthFinal">
                    <h3>General health advices</h3>
                    <div id="chart">
                        <!-------------------------------------------------------------------------------------------------->
                    </div>
                    <div id="chart1">

                        <ul>
                            <li id="stat" class="hiddenAdvice"></li>
                            <div id="space" class="clear spaceLine">spaceline</div>
                            <li id="stat1" class="hiddenAdvice"></li>
                            <div id="space1" class="clear spaceLine">spaceline</div>
                            <li id="stat2" class="hiddenAdvice"></li>
                            <div id="space2" class="clear spaceLine">spaceline</div>
                            <li id="stat3" class="hiddenAdvice"></li>
                            <div id="space3" class="clear spaceLine">spaceline</div>
                            <li id="stat4" class="hiddenAdvice"></li>
                        </ul>

                    </div>
                </div>
                <!-------------------------------------------------------------------------------------------------->


                <div class="healthContainer" id="generalHealth1">
                    <div class="clear spaceLine">space</div>


                    <h3>Tell us more about you</h3>
                    <div class="boxHealth"><img src="assets/images/health.jpg" class="imgUnset" alt="Gym image">
                        <!--free image obtained from https://unsplash.com/-->
                    </div>
                    <div class="boxHealth">


                        <div>
                            <div class="title">Your age:</div>
                            <input type="radio" id="adolescent" class="healthInput" name="age" value="adolescent">
                            <label for="adolescent" class="healthLabel">16 - 19</label><br>
                            <input type="radio" id="adult" class="healthInput" name="age" value="adult">
                            <label for="adult" class="healthLabel">20 - 59</label><br>
                            <input type="radio" id="elderly" class="healthInput" name="age" value="elderly">
                            <label for="elderly" class="healthLabel">60 or over</label><br>
                            <div class="error1" id="ageSelectError">Required: Please select an option</div>
                        </div>

                        <div class="clear"></div>

                        <div class="title">Your height: <input style=" float:none" type="number" id="height" name="height" value="">
                            cm</div>
                        <div class="error1" id="heightError">Required: Please enter a valid number</div>

                        <div class="title">Your weight:<input style=" float:none" type="number" id="weight" name="weight" value="">
                            kg</div>
                        <div class="error1" id="weightError">Required: Please enter a valid number</div>

                    </div>
                    <div class="healthContainer">
                        <div class=" rightText">
                            <div class="boxAilment">
                                <div class="title">Do you have any ailments?</div>
                                <input type="radio" id="none" class="healthInput" name="gender" value="none">
                                <label for="none" class="healthLabel">None</label><br>

                                <input type="radio" id="asthma" class="healthInput" name="gender" value="asthma">
                                <label for="asthma" class="healthLabel">Asthma</label><br>

                                <input type="radio" id="disabilities" class="healthInput" name="gender" value="disabilities">
                                <label for="disabilities" class="healthLabel">Physical disabilities</label><br>
                            </div>
                        </div>

                        <div class="boxAilment" style="padding-left: 0;">
                            <div class="clear spaceLine">spaceline</div>
                            <div class="clear spaceLine">spaceline</div>

                            <input type="radio" id="allergies" class="healthInput" name="gender" value="allergies">
                            <label for="allergies" class="healthLabel">Heart disease</label><br>

                            <input id="ageSelected" class="nonDisplay">
                            <input id="ailmentSelected" class="nonDisplay">

                            <input type="radio" id="other" class="healthInput" name="gender" value="other">
                            <label for="other" class="healthLabel">Orthers</label><br>
                            <div class="error1" id="ailmentsError">Required: Please select an option</div>

                            <button class="button button1" type="button" onclick="checkStep1()" style="float: right;">Next step
                                ></button>
                        </div>


                    </div>
                </div>
                <div class="clear"></div>

                <div class="healthContainer" id="generalHealth2">
                    <aside class="mainContent box3"> </aside>
                    <div class="mainContent box3 boxRegoForm" style="padding-bottom: 8%;">
                        <h3>Your current diet</h3>
                        <div> <label class="register">Main dishes per day: </label> <input type="number" name="oil" value="" id="oil"> </div>
                        <div class="clear"></div>
                        <div class="error1 error2" id="oilError">Required: Please enter a valid number</div>
                        <div class="clear"></div>

                        <div> <label class="register">Veggie percentage per dish: </label> <input type="number" name="veggie" value="" id="veggie">
                        </div>
                        <div class="clear"></div>
                        <div class="error1 error2" id="veggieError"> Required: Please enter a valid percentage (%)</div>
                        <div class="clear"></div>
                        <div><label class="register">Alcohol consumption:</label>
                            <select class="myImageLeft" name="alcohol" id="alcohol">
                                <option selected="selected" value="good">0 - 200mL</option>
                                <option value="individual" value="bad">More than 200mL</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <div><label class="register">Smoker:</label>
                            <input class="myImageLeft" type="checkbox" name="smoke" id="smoke" value="" style="width: unset">
                        </div>
                        <div class="clear"></div>

                        <button class="button button1" type="button" onclick="checkStep2()" style="float: right;">Next
                            step ></button>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="healthContainer" style="padding-top: 10%;" id="generalHealth3">
                    <div class="box2 timetableBox" style="border-top: none;">
                        <h3>Current exercise routine</h3>
                        <div class="box3 box4Tiny invisible"></div>
                        <div class="box3 box4Tiny invisible"></div>
                        <div class="box3 box4Tiny box4Text">Monday</div>
                        <div class="box3 box4Tiny box4Text">Tuesday</div>
                        <div class="box3 box4Tiny box4Text">Wednesday</div>
                        <div class="box3 box4Tiny box4Text">Thursday</div>
                        <div class="box3 box4Tiny box4Text">Friday</div>
                        <div class="box3 box4Tiny box4Text">Saturday</div>
                        <div class="box3 box4Tiny box4Text">Sunday</div>
                        <div class="box3 box4Tiny invisible"></div>

                        <div class="box3 box4Tiny invisible">Classes</div>
                        <div class="box3 box4Tiny">Type</div>

                        <div class="box3 box4Tiny">
                            <select name="duration" id="type1">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select>
                        </div>

                        <div class="box3 box4Tiny">
                            <select name="duration" id="type2">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select>
                        </div>

                        <div class="box3 box4Tiny"><select name="duration" id="type3">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration" id="type4">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration" id="type5">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration" id="type6">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration" id="type7">
                                <option selected="selected" value="none">None</option>
                                <option value="mild">Mild</option>
                                <option value="intensive">Intensive</option>
                            </select></div>

                        <div class="box3 box4Tiny invisible"></div>
                        <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="box3 box4Tiny invisible"></div>
                        <div class="box3 box4Tiny">Duration (hours)</div>

                        <div class="box3 box4Tiny"><select name="duration1" id="duration1">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration2" id="duration2">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration3" id="duration3">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration4" id="duration4">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration5" id="duration5">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select></div>

                        <div class="box3 box4Tiny"><select name="duration6" id="duration6">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select></div>

                        <div class="box3 box4Tiny">
                            <select name="duration7" id="duration7">
                                <option selected="selected" value=1>1 or less </option>
                                <option value=2>1 - 3</option>
                                <option value=3>3 or more</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <!------------------------------------------------------------------------------------------------------------------->
                        <ul style="text-align: left;">*Note:
                            <li><u>Intensive</u> includes activities being quite physical-demand such as sports.
                            </li>
                            <li><u>Mild</u> refers to light activities like jogging.</li>
                        </ul>
                        <div class="clear"></div>

                        <input id="noneStat" class="nonDisplay">
                        <input id="mildStat" class="nonDisplay">
                        <input id="intenseStat" class="nonDisplay">

                        <div class="clear"></div>
                        <button class="button button1" type="button" onclick="store()">Calculate stat</button>
                    </div>

                </div>






            </article>

        </section>
        <div class="clear"></div>
        <?php require_once("includes/footer.php"); ?>

    </div>


</body>

</html>
<!----Reference: W3schools.com. 2020. HTML Canvas Beziercurveto() Method. [online] Available at: <https://www.w3schools.com/tags/canvas_beziercurveto.asp> [Accessed 15 August 2020].-->