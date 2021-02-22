<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>jquery.breadcrumbs-generator</title>

<!-- CSS for breadcrumbs -->
<link rel="stylesheet" href="../styles/breadcrumbs.css">

<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Source: https://github.com/sutara79/jquery.breadcrumbs-generator -->
<!-- include the jQuery breadcrumbs plugin -->
<script src="plugins/jquery.breadcrumbs-generator.js"></script>
<script src="plugins/jquery.validate.js"></script>
<!-- you will need to write this to invoke/use the plugin -->
<script>
  $(function() {
    $('#breadcrumbs').breadcrumbsGenerator(); //will be displayed in <ol> element
  });
</script>



<footer class="grid-item item4">
  <nav id="sitemaps">
    <ul>
      <li>
        <a href="index.php">Homepage</a>
        <ul>

          <li>
            <div style="float: left; color: #000000"> Company </div>
            <ul>
              <li><a href="Services.php">Services</a></li>
              <li><a href="Contact.php">Contact us</a></li>
            </ul>
          </li>

          <li>
            <div style="float: left; color: #000000"> Members </div>
            <ul>
              <li><a href="Register.php">Registration</a></li>
              <li><a href="Login.php">Login</a></li>
              <li><a href="Health.php">Health tracker</a></li>
              <li><a href="myFitness.php">myFitness</a></li>
            </ul>
          </li>



        </ul>
      </li>
    </ul>
  </nav>
  <div class="clear"></div>
  <nav>
    <a href="" class="relative">Privacy</a><br>
    <span class="relative">©&ltyear&gt &ltname&gt.</span>
  </nav>

</footer>
<!-- Reducing code repetition with a separate footer fragment -->