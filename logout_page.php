<?php
session_start();
//destroy session here
session_destroy();
header("location:index.php ")
?>