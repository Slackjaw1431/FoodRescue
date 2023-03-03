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
    <?php include 'topnav.php'; ?>
    <?php include 'header.php'; ?>
    <body>
        <main>
            <div class="content">
                <table id="create">
                    <form action="index.php" method="get">
                        <tr>
                            <th colspan="4">Create a Donor Account</th>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="newName"></td>
                        </tr>
                        <tr><td>Address:</td>
                            <td><input type="text" name="newAddress"></td>
                        </tr>
                        <tr>
                            <td>Public Phone #:</td>
                            <td><input type="text" name="newPhone"></td>
                        </tr>
                        <tr>
                            <td>Link to Website:</td>
                            <td><input type="text" name="newLink"></td>
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
                            <td><input type="submit" value="Create User"></td>
                            <td><input type="reset" value="Reset"></td>
                        </tr>
                        <td><input type="hidden" name="action" value="createUser"></td>
                    </form>
                </table>
        </main>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
