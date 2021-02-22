

$(document).ready(function () {
    $("#walkContainer").click(function () {
        $(this).addClass("addingBorder");
        $("#walk").show();
    });
    $("#runContainer").click(function () {
        $(this).addClass("addingBorder");
        $("#run").show();
    });
    $("#danceContainer").click(function () {
        $(this).addClass("addingBorder");
        $("#dance").show();
    });
    $("#yogaContainer").click(function () {
        $(this).addClass("addingBorder");
        $("#yoga").show();
    });
    $("#liftContainer").click(function () {
        $(this).addClass("addingBorder");
        $("#lift").show();
    });
    //Focusing current chosen field with border
    $(document).click(function (event) {
        var $target = $(event.target);
        if (!$target.closest('#walkContainer').length &&
            $('#walk').is(":visible")) {
            $("#walkContainer").removeClass("addingBorder");
            $('#walk').hide();
        } if (!$target.closest('#runContainer').length &&
            $('#run').is(":visible")) {
            $("#runContainer").removeClass("addingBorder");
            $('#run').hide();
        } if (!$target.closest('#danceContainer').length &&
            $('#dance').is(":visible")) {
            $("#danceContainer").removeClass("addingBorder");
            $('#dance').hide();
        } if (!$target.closest('#yogaContainer').length &&
            $('#yoga').is(":visible")) {
            $("#yogaContainer").removeClass("addingBorder");
            $('#yoga').hide();
        } if (!$target.closest('#liftContainer').length &&
            $('#lift').is(":visible")) {
            $("#liftContainer").removeClass("addingBorder");
            $('#lift').hide();
        }

    });
});
//Implementing visibility of input fields depending on click events.

//References:
// element?, H., 2020. How Do I Detect A Click Outside An Element?. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/152975/how-do-i-detect-a-click-outside-an-element> [Accessed 13 September 2020].