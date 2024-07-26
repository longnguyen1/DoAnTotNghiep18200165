<?php
session_start();
session_destroy();

header('locaction: login.php');
?>