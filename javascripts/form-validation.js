// Wait for the DOM to be ready

function sanitize(){
  document.getElementById("address") = htmlspecialchars(document.getElementById("address"));
  document.getElementById("email") = htmlspecialchars(document.getElementById("email"));
  document.getElementById("userquery") = htmlspecialchars(document.getElementById("userquery"));
  document.getElementById("contact_method") = htmlspecialchars(document.getElementById("contact_method"));
  document.getElementById("comments") = htmlspecialchars(document.getElementById("comments"));
}

$(function () {
  
  $("form[name='contact_form']").validate({
    // Specify validation rules
    rules: {
      //address and user query are required fields
      address: "required",
      userquery: "required",
      email: {
        required: true,
        email: true
        //email needs to be the right format
      },
    },
    // Error messages
    messages: {
      address: "Please enter your address",
      userquery: "Please enter your query",
      email: "Please enter a valid email address"
    },
    //Customize error's style
    errorPlacement: function (jqError, element) {
      jqError.addClass('jqError');
      jqError.insertAfter(element);
    },
    submitHandler: function (form) {
      sanitize();
      form.submit();
    }
  });
});

/*Reference:
 Rmit.instructure.com. 2020. Myapps Portal. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-6-learning-materials-slash-activities?module_item_id=2542856> [Accessed 8 September 2020].
 checkbox, j., 2020. Jquery Validation Plugin Errorplacement For Checkbox. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/26041435/jquery-validation-plugin-errorplacement-for-checkbox> [Accessed 8 September 2020].
*/