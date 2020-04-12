<?php
    // Setup Error Reporting:
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start(); // Starts or maintains the session

    // Get basic session variables:
    if (isset($_SESSION["username"]))
    $username = $_SESSION["username"];
    if (isset($_SESSION["password"]))
    $password = $_SESSION["password"];
    
    // Redirect if on invalid page for role:
        
        /*
    if ($_SESSION[$role] != "student")
        header("Location: logout.php");
    elseif ($_SESSION[$role] != "instructor")
        header("Location: logout.php");
    
    die();
    */

function logout() 
{
    // if(session_status() != PHP_SESSION_NONE)
    session_unset();
    session_destroy();

    header("Location: .../logout.html");
    die();
}
?>