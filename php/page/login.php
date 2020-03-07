<?php
require_once 'php/lib/utils.php';

// If a user is already logged in, redirect
if (isset($_SESSION['loggedin'])) {
    redirect_back();
}

include 'html/login-form.html';
set_previous_page();
