<?php 
require_once('Code/confHeader.inc');
$_SESSION["Me"]->invalidate();
unset($_SESSION["AskedYouToUpdateContactInfo"]);
unset($_SESSION["GradeSortKey"]);
if (isset($_SESSION["whichList"])) {
    unset($_SESSION[$_SESSION["whichList"] . "!"]);
    unset($_SESSION[$_SESSION["whichList"]]);
}
unset($_SESSION["whichList"]);
$Conf->confirmMsg("You have been logged out, but you can log in again if you'd like.");
go("login.php");
