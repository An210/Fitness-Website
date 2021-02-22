<nav class="navbar navbar-expand-md bg-info navbar-dark mb-3">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php if (loggedIn() && basename($_SERVER['PHP_SELF']) == "myFitness.php") { ?>
                <form id="ajax-form" class="form-inline my-2 ">
                    <input class="form-control mr-lg-2 " type="text" id="text" name="text" placeholder="Search activity">
                    <button type="submit" name="search" value="search" class="btn btn-outline-light">Search</button>
                </form>
                <div class="navbar-nav ml-auto">
                    <span class="nav-item nav-link text-dark">Welcome, <?php echo  $_SESSION[USER_SESSION_KEY]['firstname']; ?></span>
                    <a href="Result.php" class="nav-item nav-link text-light">Result</a>
                    <a href="logOut.php" class="nav-item nav-link text-light">Log out</a>
                </div>
                <!-- If user is still in the session -->
            <?php } else if (loggedIn() && basename($_SERVER['PHP_SELF']) == "Result.php") { ?>
                <h3 class="nav-item nav-link text-light">CALORIE EXPENDITURE</h3>
                <!-- If user logged out to access result page -->
            <?php } else { ?>
                <div class="navbar-nav ml-auto">
                    <span class="nav-item nav-link text-dark">Welcome, <?php echo  $_SESSION[USER_SESSION_KEY]['firstname']; ?></span>
                    <a href="Result.php" class="nav-item nav-link text-light">Result</a>
                    <a href="logOut.php" class="nav-item nav-link text-light">Log out</a>
                </div>
            <?php } ?>
        </div>
    </div>
</nav>




<!-- References:
[duplicate], H., Guy, R., Alien, M. and Burym, B., 2020. How To Get Current PHP Page Name. [online] Stack Overflow. Available at: <https://stackoverflow.com/questions/13032930/how-to-get-current-php-page-name> [Accessed 25 September 2020]. -->