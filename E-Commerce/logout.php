<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
session_start();
session_destroy();
// Redirect to the login page:
header('Location: fruit_login.html');
?>