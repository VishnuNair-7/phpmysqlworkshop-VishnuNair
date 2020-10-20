<?php
session_start();

session_unset();

?> <script>
alert("Logged out succesfully! Redirecting to Login page")
setTimeout(function(){
window.location.href = 'admin.php';
}, 10);</script>
