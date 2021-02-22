function checkForm() {
    firstname = document.getElementById("firstname").value;
    secondname = document.getElementById("secondname").value;
    email = document.getElementById("email").value;
    address = document.getElementById("address").value;

    membership = document.getElementById("membership").value;
    age = document.getElementById("age").value;
    duration = document.getElementById("duration").value;
    let errorName = "";
    if (firstname == "") {
        errorName = "firstname";
        hideErrors();
        document.getElementById(errorName).select();
        displayErrors(errorName);
        return false;
    } else if (secondname == "") {
        errorName = "secondname";
        hideErrors();
        document.getElementById(errorName).select();
        displayErrors(errorName);
        return false;
    } else if ((email == "") || (checkEMail(email) == false)) {
        errorName = "email";
        hideErrors();
        document.getElementById(errorName).select();
        displayErrors(errorName);
        return false;
    } else if (membership == "") {
        errorName = "membership";
        hideErrors();
        displayErrors(errorName);
        return false;
    } else if (duration == "") {
        errorName = "duration";
        hideErrors();
        displayErrors(errorName);
        return false;
    } else if (document.getElementById("membership").value == "individual") {
        if ((age == "") || (age < 16)) {
            errorName = "age";
            hideErrors();
            displayErrors(errorName);
            return false;
        }
    } else if (doubleCheckAge() == false) {
        return false;
    }
    return true;
}




function checkEMail(enteredEmail) {
    if (/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/.test(enteredEmail)) {
        return true;
    } else return false;
}

function checkedBox() {
    referrel = document.getElementById("referrel").checked;
    if (referrel) {
        document.getElementById("referrel").value = "Yes";
    } else if (referrel == false) {
        document.getElementById("referrel").value = "No";
    }

}

function ageVal(val) {
    document.getElementById("ageValue").value = val;
    document.getElementById("ageError").style.display = "none";
}

function displayErrors(errorName) {
    document.getElementById(errorName + "Error").style.display = "inline";
    document.getElementById(errorName).focus();
}
function hideErrors() {
    document.getElementById("firstnameError").style.display = "none";
    document.getElementById("secondnameError").style.display = "none";
    document.getElementById("emailError").style.display = "none";
    document.getElementById("membershipError").style.display = "none";
    document.getElementById("durationError").style.display = "none";
    document.getElementById("ageError").style.display = "none";
}

function feeCalc() {
    let fee = 0;
    let discount = [0, 0, 0];
    let individualDiscount = [0, 0];
    let totalFee = 0;

    if (document.getElementById("membership").value == "individual") {
        fee = 50;
        // if mebership type is individal, initial fee is invoked as 50 dollars.
        for (sequenceIndi = 0; sequenceIndi < 3; sequenceIndi++) {
            if (sequenceIndi == 1) {
                if (document.getElementById("referrel").value == "Yes") {
                    individualDiscount[0] = ((fee * 5) / 100);
                    // This discount is 5% of total fee
                }
            } else if (sequenceIndi == 2) {
                if (document.getElementById("age").value > 15 && document.getElementById("age").value < 20) {
                    individualDiscount[1] = (((fee - individualDiscount[0]) * 10) / 100);
                    // This discount is 10% of total fee
                } else if (document.getElementById("age").value < 16) {
                    document.getElementById("ageError").style.display = "inline";
                    document.getElementById("age").focus();
                    return false;
                }
            }
        }// Discounts are caculated by checking possibilitis of fee reduction such as reffered by an existing gum member, or in range of 16-19.
        totalFee = fee - individualDiscount[0] - individualDiscount[1];
        // Total fee is subtraction of initial fee and discount array variables. Henceforth, the presentation is etablished based on the caculation.
        let field = document.getElementById("newField");
        let feeDisplay = document.createElement("div");
        let para2 = document.createElement("p")
        feeDisplay.innerHTML = "Your membership fee: " + totalFee + " AUD";

        feeDisplay.setAttribute("class", "error");
        feeDisplay.setAttribute("id", "feeDisplay");
        para2.setAttribute("id", "para2");
        para2.appendChild(feeDisplay);
        field.appendChild(para2);
        document.getElementById("feeDisplay").style.display = "inline";
    } else if (document.getElementById("membership").value == "family") {
        fee = 40;
        for (sequence = 0; sequence < 4; sequence++) {
            if (sequence == 1) {
                if (document.getElementById("memNum").value > 2 && document.getElementById("memNum").value < 6) {
                    discount[0] = (((fee * 2.5) / 100) * (document.getElementById("memNum").value - 2));
                } else if (document.getElementById("memNum").value > 5) {
                    discount[0] = (((fee * 2.5) / 100) * 3);
                }
                // These used to count the discount for the members enterred. For instance, the threshold of 5 members discount is applied
            } else if (sequence == 2) {
                if (document.getElementById("referrel").value == "Yes") {
                    discount[1] = (((fee - discount[0]) * 5) / 100);
                }
            } else if (sequence == 3) {
                if (checkAge() > 0 && checkAge() < 6) {
                    discount[2] = ((((fee - discount[0] - discount[1]) * 10) / 100) * checkAge());
                } else if (checkAge() > 5) {
                    discount[2] = ((((fee - discount[0] - discount[1]) * 10) / 100) * 5);
                }
                // checkAge() method is called here to retrieved number of members in age range 16-19, hence the appropriate discount is caculated.
            }
        }
        /* This if statement is quite similar to the one of "individual". However, the for loop is used to loop through all 
        the members, and the initial fee of these members are 40$ for each */

        totalFee = (fee * document.getElementById("memNum").value) - (discount[0] + discount[1] + discount[2]);
        let field = document.getElementById("para1");
        let feeDisplay = document.createElement("div");
        feeDisplay.innerHTML = "Total membership fee: " + totalFee + " AUD";
        feeDisplay.setAttribute("class", "error");
        feeDisplay.setAttribute("id", "feeDisplay");
        field.appendChild(feeDisplay);
        document.getElementById("feeDisplay").style.display = "inline";

    }
    // After all field creation, validation, etc., this function retrieve data from user's input in order to apply for caculating process.
}

function newField() {
    if (document.getElementById("membership").value == "family") {
        removeFeeDisplay();
        document.getElementById("ageError").style.display = "none";
        document.getElementById("individualAge").style.display = "none";
        document.getElementById("individualFeeButton").style.display = "none";
        // If membership type is family then fields related to individual membership such as error, button, etc. are removed.
        let field = document.getElementById("newField");
        let p = document.createElement("p");
        let memNum = document.createElement("input");
        let c = document.createElement("div");
        let label0 = document.createTextNode("Number of members:")
        let error = document.createElement("div");
        error.innerHTML = "Please enter a valid number";
        memNum.setAttribute("type", "number");
        memNum.setAttribute("class", "field");
        memNum.setAttribute("value", 0);
        memNum.setAttribute("id", "memNum");
        memNum.setAttribute("onchange", "checkNum()");
        memNum.setAttribute("oninput", "reMove()");
        error.setAttribute("class", "error");
        error.setAttribute("id", "memNumError");
        p.setAttribute("id", "para");
        p.appendChild(label0);
        p.appendChild(memNum);
        p.appendChild(c)
        p.appendChild(error)
        field.appendChild(p);
        /* Afterward, neccesary variables are created and set attributes such as class, idm etc. And eventually is 
        added to "newField" with appendChild method.*/
    } else if (document.getElementById("membership").value == "individual" || document.getElementById("membership").value == "") {
        document.getElementById("individualAge").style.display = "inline";
        if (document.getElementById("membership").value == "individual") {
            document.getElementById("individualFeeButton").style.display = "inline";
        } else if (document.getElementById("membership").value == "") {
            document.getElementById("individualFeeButton").style.display = "none";
        }
        if (document.getElementById("newField") != null) {
            if (document.getElementById("para") != null) {
                document.getElementById("para").remove();
                if (document.getElementById("para1") != null) {
                    document.getElementById("para1").remove();
                }
            }
        }// In case the user changed type of membership to individual or "", previously created variables are removed or set to none display
    }
    /* newField() function is primarily responsible for creating fields regarding the family membership type.More specifically, this 
    is mainly targetted to get the quantity of total members joining. Hence, value of the number of members can be achieved and pass down 
    to checkNum() to generate the corresponding number of fields to get each member's age.
    */
}

function checkNum() {
    let field = document.getElementById("newField");
    let p = document.createElement("p");
    p.setAttribute("id", "para1");
    if (document.getElementById("memNum").value > 1) {
        document.getElementById("memNumError").style.display = "none";
        for (x = 0; x < document.getElementById("memNum").value; x++) {
            let a = document.createTextNode("Member age " + (x + 1));
            let b = document.createElement("input");
            let c = document.createElement("div");
            let error = document.createElement("div");
            error.innerHTML = "Please enter a valid age more than 15";
            b.setAttribute("type", "number");
            b.setAttribute("class", "field");
            b.setAttribute("id", x);
            b.setAttribute("value", 0);
            b.setAttribute("onchange", "checkAge()")
            b.setAttribute("onchange", "removeFeeDisplay()")
            error.setAttribute("class", "error");
            error.setAttribute("id", "error" + x);
            p.appendChild(a);
            p.appendChild(b);
            p.appendChild(c);
            p.appendChild(error);
            field.appendChild(p);
        }/* By checking whether the number of members enterred by the user is valid, the new fields are built 
        through a loop. And each field is equipped with distinct id, by which data enterred can be derived to faciliate fee calculation.
        */
        let feeButton = document.createElement("button");
        feeButton.setAttribute("id", "feeButton");
        feeButton.setAttribute("type", "button");
        feeButton.setAttribute("onclick", "doubleCheckAge()");
        feeButton.innerHTML = "Caculate membership fee";
        p.appendChild(feeButton);
    }
    // The machenism of field creation in this method is quite similar to newField(), perhap the use of for loop is the different point between those two methods.
}
function doubleCheckAge() {
    var validAge = true;
    if (document.getElementById("memNum").value < 2) {
        document.getElementById("memNum").focus;
        document.getElementById("memNumError").style.display = "inline";
        validAge = false;
    }
    for (z = 0; z < document.getElementById("memNum").value; z++) {
        if (document.getElementById(z).value < 16) {
            document.getElementById("error" + z).style.display = "inline";
            validAge = false;
        } else if (document.getElementById(z).value > 15) {
            document.getElementById("error" + z).style.display = "none";
        }
    }
    if (validAge == true) {
        feeCalc();
    }
    return validAge;
}


function checkAge() {
    let ageDiscount = 0;
    for (z = 0; z < document.getElementById("memNum").value; z++) {
        if (document.getElementById(z).value < 16) {
            document.getElementById("error" + z).style.display = "inline";
        } else if (document.getElementById(z).value > 15) {
            document.getElementById("error" + z).style.display = "none";
            if (document.getElementById(z).value > 15 && document.getElementById(z).value < 20) {
                ageDiscount++;
            }

        }
    }

    return ageDiscount;
}
/* Both checkAge() and doubleCheckAge() are utilised to validate the inputs of user, i.e. if an user the invalid data, they won't be able
to proceed further while receiving error messages. These features help to enhance usability by assisting the user with neccesary information.
*/
function reMove() {
    if (document.getElementById("para1") != null) {
        document.getElementById("para1").remove();
    } if (document.getElementById("memNum").value < 1) {
        document.getElementById("memNumError").style.display = "inline";
        return false;
    }
}

function removeFeeDisplay() {
    if (document.getElementById("feeDisplay") != null) {
        document.getElementById("feeDisplay").remove();
    }

}
/* remove() and removeFeeDisplay() are used to delete fields according to "order", i.e. they won't be executed by themselves but mainly called by 
other methods after validations were proceeded.
*/
function addVid() {
    document.getElementById("additionalVid").style.display = "inline";
}






function firstStep() {
    document.getElementById("generalHealth1").style.display = "inline";
    document.getElementById("generalHealth2").style.display = "none";
    document.getElementById("generalHealth3").style.display = "none";
    document.getElementById("generalHealthFinal").style.display = "none";
    document.getElementById("healthButton1").focus();
    document.getElementById("healthButton2").style.background = "#009999";
    document.getElementById("healthButton1").style.background = "#004d4d";
    document.getElementById("healthButton3").style.background = "#009999";
}
function nextStep1() {
    document.getElementById("generalHealth1").style.display = "none";
    document.getElementById("generalHealth2").style.display = "inline";
    document.getElementById("generalHealth3").style.display = "none";
    document.getElementById("generalHealthFinal").style.display = "none";
    document.getElementById("healthButton2").focus();
    document.getElementById("healthButton2").style.background = "#004d4d";
    document.getElementById("healthButton1").style.background = "#009999";
    document.getElementById("healthButton3").style.background = "#009999";
}
function finalStep() {
    document.getElementById("generalHealth1").style.display = "none";
    document.getElementById("generalHealth2").style.display = "none";
    document.getElementById("generalHealth3").style.display = "inline";
    document.getElementById("generalHealthFinal").style.display = "none";
    document.getElementById("healthButton3").focus();
    document.getElementById("healthButton2").style.background = "#009999";
    document.getElementById("healthButton1").style.background = "#009999";
    document.getElementById("healthButton3").style.background = "#004d4d";
}
function calcStat() {
    let BMI = parseInt(localStorage.getItem("weight")) / ((parseInt(localStorage.getItem("height")) / 100) * (parseInt(localStorage.getItem("height")) / 100));
    drawChart(BMI);
    statDisplay(BMI);
    document.getElementById("generalHealth1").style.display = "none";
    document.getElementById("generalHealth2").style.display = "none";
    document.getElementById("generalHealth3").style.display = "none";
    document.getElementById("generalHealthFinal").style.display = "inline";
    document.getElementById("healthButton3").focus();
    document.getElementById("healthButton2").style.background = "#009999";
    document.getElementById("healthButton1").style.background = "#009999";
    document.getElementById("healthButton3").style.background = "#004d4d";
}
function hideAllErrors1() {
    document.getElementById("ageSelectError").style.display = "none";
    document.getElementById("heightError").style.display = "none";
    document.getElementById("weightError").style.display = "none";
    document.getElementById("ailmentsError").style.display = "none";
    document.getElementById("oilError").style.display = "none";
    document.getElementById("veggieError").style.display = "none";
}


function checkAge() {
    let ageSelected = false;

    if (document.getElementById("adolescent").checked) {
        document.getElementById("ageSelected").value = document.getElementById("adolescent").value;
        ageSelected = true;
    } else if (document.getElementById("adult").checked) {
        document.getElementById("ageSelected").value = document.getElementById("adult").value;
        ageSelected = true;
    } else if (document.getElementById("elderly").checked) {
        document.getElementById("ageSelected").value = document.getElementById("elderly").value;
        ageSelected = true;
    }
    return ageSelected;
}
function checkAilment() {
    let ailmentSelected = false;
    if (document.getElementById("none").checked) {
        document.getElementById("ailmentSelected").value = document.getElementById("none").value;
        ageSelected = true;
        ailmentSelected = true;
    } else if (document.getElementById("asthma").checked) {
        document.getElementById("ailmentSelected").value = document.getElementById("asthma").value;
        ailmentSelected = true;
    } else if (document.getElementById("disabilities").checked) {
        document.getElementById("ailmentSelected").value = document.getElementById("disabilities").value;
        ailmentSelected = true;
    } else if (document.getElementById("allergies").checked) {
        document.getElementById("ailmentSelected").value = document.getElementById("allergies").value;
        ailmentSelected = true;
    } else if (document.getElementById("other").checked) {
        document.getElementById("ailmentSelected").value = document.getElementById("other").value;
        ailmentSelected = true;
    }
    return ailmentSelected;
}
function checkStep1() {
    checkAge();
    checkAilment();
    if (checkAge() == false) {
        hideAllErrors1();
        document.getElementById("ageSelectError").style.display = "inline";
        return false;
    } else if (document.getElementById("height").value == "" || document.getElementById("height").value < 100 || document.getElementById("height").value > 300) {
        hideAllErrors1();
        document.getElementById("heightError").style.display = "inline";
        return false;
    } else if (document.getElementById("weight").value == "" || document.getElementById("weight").value < 10 || document.getElementById("weight").value > 500) {
        hideAllErrors1();
        document.getElementById("weightError").style.display = "inline";
        return false;
    } else if (checkAilment() == false) {
        hideAllErrors1();
        document.getElementById("ailmentsError").style.display = "inline";
        return false;
    }
    nextStep1();
    return true;
}

function checkStep2() {
    if (document.getElementById("oil").value == "" || document.getElementById("oil").value < 0 || document.getElementById("oil").value > 30) {
        hideAllErrors1();
        document.getElementById("oilError").style.display = "inline";
        return false;
    } else if (document.getElementById("veggie").value == "" || document.getElementById("veggie").value < 0 || document.getElementById("veggie").value > 100) {
        hideAllErrors1();
        document.getElementById("veggieError").style.display = "inline";
        return false;
    }
    if (document.getElementById("smoke").checked) {
        document.getElementById("smoke").value = "yes";
    }
    finalStep();
    return true;
}
function checkFinal() {
    if (checkStep1() == false) {
        checkStep1();
        return false;
    } else if (checkStep2() == false) {
        checkStep2();
        return false;
    }
    return true;
}
function getExercise() {
    let type = "type";
    let duration = "duration";
    let mildDuration = 0;
    let intenseDuration = 0;
    let none = 0;
    for (x = 1; x < 8; x++) {
        let typeId = type + x;
        let durationId = duration + x;
        if (document.getElementById(typeId).value == "mild") {
            mildDuration = (mildDuration + parseInt(document.getElementById(durationId).value));
        } else if (document.getElementById(typeId).value == "intensive") {
            intenseDuration = (intenseDuration + parseInt(document.getElementById(durationId).value));
        } else if (document.getElementById(typeId).value == "none") {
            none++;
        }
    }
    document.getElementById("noneStat").value = none;
    document.getElementById("mildStat").value = mildDuration;
    document.getElementById("intenseStat").value = intenseDuration;
}
function store() {
    if (checkFinal()) {
        getExercise();
        localStorage.setItem("age", document.getElementById("ageSelected").value);
        localStorage.setItem("height", document.getElementById("height").value);
        localStorage.setItem("weight", document.getElementById("weight").value);
        localStorage.setItem("ailment", document.getElementById("ailmentSelected").value);
        localStorage.setItem("oil", document.getElementById("oil").value);
        localStorage.setItem("veggie", document.getElementById("veggie").value);
        localStorage.setItem("alcohol", document.getElementById("alcohol").value);
        localStorage.setItem("smoke", document.getElementById("smoke").value);
        localStorage.setItem("none", document.getElementById("noneStat").value);
        localStorage.setItem("mild", document.getElementById("mildStat").value);
        localStorage.setItem("intense", document.getElementById("intenseStat").value);
        calcStat();
    }
}
function statDisplay(yourBMI) {
    let vulnerableMember = false;
    if (localStorage.getItem("ailment") != "none" || localStorage.getItem("age") == "elderly") {
        vulnerableMember = true;
        document.getElementById("stat").innerHTML = "You should engage with light sport or  mild outdoor activities. How about our yoga class?";
        document.getElementById("stat").style.display = "inline";
        if (document.getElementById("space1") != null) {
            document.getElementById("space1").remove();
        }
    }
    else if (yourBMI > 25 || yourBMI < 18) {
        document.getElementById("stat").innerHTML = "You should participate in physical activities while managing your diet. Would you consider about personal online training?";
        document.getElementById("stat").style.display = "inline";
        if (parseInt(localStorage.getItem("oil")) > 5) {
            document.getElementById("stat1").innerHTML = "You should etablish more stable diet. We do offer classes regarding diet tracking.";
            document.getElementById("stat1").style.display = "inline";
        }
        if (parseInt(localStorage.getItem("veggie")) < 30) {
            document.getElementById("stat1").innerHTML = "You should etablish more stable diet, and don't forget to incorporate more veggie in your dishes. We do offer classes regarding diet tracking.";
            document.getElementById("stat1").style.display = "inline";
        }
    } else {
        if (document.getElementById("space") != null) {
            document.getElementById("space").remove();
        }
        if (document.getElementById("space1") != null) {
            document.getElementById("space1").remove();
        }
    }
    if (localStorage.getItem("alcohol") == "bad") {
        document.getElementById("stat2").innerHTML = "You might need to reduce the amount alcohol that you are currently consuming!";
        document.getElementById("stat2").style.display = "inline";
    } else {
        if (document.getElementById("space2") != null) {
            document.getElementById("space2").remove();
        }
    }
    if (localStorage.getItem("age") != "adult") {
        if (localStorage.getItem("smoke") == "yes") {
            document.getElementById("stat3").innerHTML = "Limitation of smoking is essential at your age!";
            document.getElementById("stat3").style.display = "inline";
        }
    } else {
        if (document.getElementById("space3") != null) {
            document.getElementById("space3").remove();
        }
    }
    if (parseInt(localStorage.getItem("none")) > 5) {
        document.getElementById("stat4").innerHTML = "You seem to need more exercises! Be one of our members for special offers.";
        document.getElementById("stat4").style.display = "inline";
    }
    else if (vulnerableMember == false) {
        if (parseInt(localStorage.getItem("intense")) > 8 && (parseInt(localStorage.getItem("intense")) - parseInt(localStorage.getItem("mild"))) > 5) {
            document.getElementById("stat4").innerHTML = "Good to see you work hard! But remember to balance your workout schedule between mild and intensive exercises.";
            document.getElementById("stat4").style.display = "inline";
        }
    }
}
//------------------------------------

function drawChart(yourBMI) {
    let data = google.visualization.arrayToDataTable([
        ['Task', 'BMI'],
        ['Low BMI', 18],
        ['Your BMI', yourBMI],
        ['High BMI', 25],
    ]);
    let options = { 'title': 'Body mass index (BMI) comparison', 'width': 450, 'height': 350 };
    let chart = new google.visualization.ColumnChart(document.getElementById("chart"));
    chart.draw(data, options);
}

/* Reference:
value, H., Chauhan, N., R., R. and Hakim, I., 2020. HTML5 Input Type Range Show Range Value. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/10004723/html5-input-type-range-show-range-value> [Accessed 10 August 2020].
Rmit.instructure.com. 2020. Myapps Portal. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-03-learning-materials-slash-activities?module_item_id=2542850> [Accessed 10 August 2020].
W3schools.com. 2020. How To Google Charts. [online] Available at: <https://www.w3schools.com/howto/howto_google_charts.asp> [Accessed 19 August 2020].
*/