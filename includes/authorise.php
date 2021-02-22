<?php 
require_once("includes/validation.php");

if(!loggedIn()){
    header('Location: Login.php');
    exit();
}

//Ascertaining whether the user logged in or not, being called from secret pages (myFitness)