<!DOCTYPE html>
<?php
require_once 'model/PersonDB.php';
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/bulma.min.css">
    </head>
    <body>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?action=home">
            <img src="pictures/navbar-logo.png" width="30" height="50">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbardefaultt">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
        <div id="navbardefault" class="navbar-menu is-active">
            <div class="navbar-start">
                <a href="index.php?action=home" class="navbar-item">Home</a>
                <a href="index.php?action=searchCharity" class="navbar-item">Search for Food Banks</a>
                <a class="navbar-item"></a>
            </div>
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Signup</a>
                    <div class="navbar-dropdown">
                        <a href="index.php?action=newCharity" class="navbar-item">
                         Charity Signup
                        </a>
                        <a href="index.php?action=newUser" class="navbar-item">
                            Donor Signup
                        </a>
                    </div>
            </div>
            <a href="index.php?action=signIn" class="navbar-item">Login</a> 
        </div>
    </div>
    
</nav>
</body>
</html>