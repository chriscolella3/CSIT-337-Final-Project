<?php
// Written by Chris Colella, Renato Vilchez, Christian Gelin
// Internet Computing
// Dec 13 2022
session_start();
session_destroy();
// Redirect to the login page:
header('Location: FoodTropolis_login.html');
?>