<?php
session_start();

session_unset();

?> <script>
alert("Logged out succesfully! Redirecting to Login page in 3 second")
setTimeout(function(){
window.location.href = 'login.php';
}, 10);</script>
