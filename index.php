<?php

session_start(); //starts the session
require ('model/Database.php'); //same thing as importing a class in java
require ('model/Utility.php'); //a lot of the functions are in this class
require ('model/PersonDB.php'); //some log in stuff

$action = filter_input(INPUT_GET, 'action'); //index is the map for the site all actions are passed through this page and this action variable during a session

$debug = $action;
$error_msg = "";

if ($action == NULL || $action == FALSE || $action == "") {
    include('view/mainpage.php');
}
if ($action == 'signIn') {
    include('view/signIn.php');
} else if ($action == 'newCharity') {
    include('view/newCharity.php');
} else if ($action == 'verifyUser') {
    $email = filter_input(INPUT_GET, 'email');
    $password = filter_input(INPUT_GET, 'password');
    if ($email == '') {
        $error_msg = "Please enter your information.";
        include('view/error.php');
    } else if (!Utility::userExists($email) && !Utility::charityExists($email)) {
        $error_msg = "User $email does not exist";
        include('view/error.php');
    } else if (Utility::userExists($email)) {
        if (!Utility::validPass($email, $password)) {
            $error_msg = "Password is not correct for this user.";
            include('view/error.php');
        } else {
            $_SESSION['email'] = $email;
            include('view/mainpage.php');
        }
    } else if (Utility::charityExists($email)) {
        if (!Utility::validPass($email, $password)) {
            $error_msg = "Password is not correct for this user.";
            include('view/error.php');
        } else {
            $_SESSION['email'] = $email;
            include('view/mainpage.php');
        }
    }
} else if ($action == 'explore') {
    include('view/explore.php');
} else if ($action == 'home') {
    include ('view/mainpage.php');
} else if ($action == 'newUser') {
    include 'view/newUser.php';
} else if ($action == 'main') {
    include 'view/mainpage.php';
} else if ($action == 'createUser') {
    $newName = filter_input(INPUT_GET, 'newName');//getting data from forms
    $newEmail = filter_input(INPUT_GET, 'newEmail');
    $newPhone = filter_input(INPUT_GET, 'newPhone');
    $newAddress = filter_input(INPUT_GET, 'newAddress');
    $newLink = filter_input(INPUT_GET, 'newLink');
    $newPass = filter_input(INPUT_GET, 'newPass');

    if ($newName == '' || $newEmail == '' || $newPhone == '' || $newAddress == '') {
        $error_msg = "Please enter your information.";
        include('view/error.php');
    } else if (Utility::userExists($newEmail)) {//order of parameters is very important
        $error_msg = "User $newEmail already exists.";
        include('view/error.php');
    } else if ($newPass == '') {
        $error_msg = "Please enter a password.";
        include('view/error.php');
    } else {
        $_SESSION['email'] = $newEmail;

        PersonDB::createUser($newName, $newEmail, $newPass, $newAddress, $newLink, $newPhone);//calling a function and order of parameters is very important
        include('view/mainpage.php');
    }
} else if ($action == 'createCharity') {
    $newName = filter_input(INPUT_GET, 'newName');
    $newEmail = filter_input(INPUT_GET, 'newEmail');
    $newPhone = filter_input(INPUT_GET, 'newPhone');
    $newAddress = filter_input(INPUT_GET, 'newAddress');
    $newHours = filter_input(INPUT_GET, 'newHours');
    $newPass = filter_input(INPUT_GET, 'newPass');
    $newVolunteers = filter_input(INPUT_GET, 'newVolunteers');
    $newFeed = filter_input(INPUT_GET, 'newFeed');

    if ($newName == '' || $newEmail == '' || $newPass == '' || $newPhone == '' || $newHours == '' || $newAddress == '' || $newVolunteers == '' || $newFeed == '') {
        $error_msg = "Please enter your information.";
        include('view/error.php');
    } else if (Utility::userExists($newEmail)) {
        $error_msg = "User $newEmail already exists.";
        include('view/error.php');
    } else if ($newPass == '') {
        $error_msg = "Please enter a password.";
        include('view/error.php');
    } else {
        $_SESSION['email'] = $newEmail;

        PersonDB::createCharity($newName, $newEmail, $newPass, $newAddress, $newPhone, $newHours, $newVolunteers, $newFeed);
        include('view/mainpage.php');
    }
} else if ($action == 'searchCharity') {
    include 'view/searchCharity.php';
} else if ($action == 'submitDonation') {
    include 'view/submitDonation.php';
} else if ($action == 'charityRequest') {
    include 'view/charityRequest.php';
} else if ($action == 'viewDonor') {
    include 'view/viewDonor.php';
} else if ($action == 'profile') {

    if (Utility::donorExists(Utility::getID($_SESSION['email']))) {
        include 'view/profileDonor.php';
    } else {
        include 'view/profileCharity.php';
    }
} else if ($action == 'updateDonor') {
    Utility::updateDonor();
} else if ($action == 'updateCharity') {
    Utility::updateDonor();
} else if ($action == 'updateAddress') {

    
    $id = filter_input(INPUT_GET, 'id');
    $street = filter_input(INPUT_GET, 'newStreet');
    $city = filter_input(INPUT_GET, 'newCity');
    $suite = filter_input(INPUT_GET, 'newSuite');
    $state = filter_input(INPUT_GET, 'newState');
    $zip = filter_input(INPUT_GET, 'newZip');

    Utility::updateAddress($id, $street, $city, $suite, $state, $zip);
    include 'view/mainpage.php';
    
} else if ($action == 'defaultnav') {
    include 'view/defaultnav.php';
} else if ($action == 'navDonor') {
    include 'view/navDonor.php';
} else if ($action == 'test') {
    include 'view/test.php';
} else if ($action == 'navCharity') {
    include 'view/navCharity.php';
} else if ($action == 'viewCharityRequests') {
    include 'view/viewCharityRequests.php';
} else if ($action == 'updateAccount') {

    $newName = filter_input(INPUT_GET, 'newName');
    $newAddress = filter_input(INPUT_GET, 'newAddress');
    $newPhone = filter_input(INPUT_GET, 'newPhone');
    $newLink = filter_input(INPUT_GET, 'newLink');
    $newPass = filter_input(INPUT_GET, 'newPass');

    $email = $_SESSION['email'];

    PersonDB::updateAccount($email, $newName, $newAddress, $newPhone, $newLink, $newPass);
    include 'view/profile.php';
} else if ($action == 'logout') {
    session_destroy();
    include 'view/mainpage.php';
}
?>



