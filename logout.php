<?php 
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    session_unset();
}
header("location: ./login.php");
?>