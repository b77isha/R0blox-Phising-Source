<?php
session_start();
unset($_SESSION['Auth']);
die(header("Location: sign-in"));
?>