<!DOCTYPE html>

<?php
require_once 'model/PersonDB.php';
?>
<html>
    <head>
        <title>Create a Donor Account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/bulma.min.css">
    </head>
    <body>
        <?php include 'topnav.php'; ?>
        <?php include 'header.php'; ?>
        <main>
            <div class="content">
                <table id="create">
                    <form action="index.php" method="get">
                        <tr>
                            <th colspan="4">Create a Charity Account</th>
                        </tr>
                        <tr>
                            <td>Name: </td>
                            <td><input type="text" name="newName"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="newAddress"></td>
                        </tr>
                        <tr>
                            <td>Public Phone #:</td>
                            <td><input type="text" name="newPhone"><br></td>
                        </tr>
                        <tr>
                            <td>Email address:</td>
                            <td><input type="email" name="newEmail"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="newPass"></td>
                        </tr>
                        <tr>
                            <td>Hours of Operation:</td>
                            <td><input type="text" name="newHours"></td>
                        </tr>
                        <tr>
                            <td>How many volunteers do you have on a weekly basis?</td>
                            <td><input type="text" name="newVolunteers"></td>
                        </tr>
                        <tr>
                            <td>How many people do you feed on a weekly basis?</td>
                            <td><input type="text" name="newFeed"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Create Account"></td>
                            <td><input type="reset" value="Reset"></td>
                        </tr>
                        <td><input type="hidden" name="action" value="createCharity"></td>
                    </form>
                </table>
        </main>
        </div>
        <?php include 'footer.php'; ?>

        </body>
        </html>
