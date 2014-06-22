<?php
 /**
  * @author SIV.S
  *
  **/
session_start();

unset($_SESSION['facebook']);

header("Location:index.php");