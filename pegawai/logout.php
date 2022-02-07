<?php
// Deleting a cookie

    setcookie('user', '', time() - (60 * 60 * 24 * 5), '/');
    setcookie('pass', '', time() - (60 * 60 * 24 * 5), '/');

header("location:../index.php");
?>