<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <title>FB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/bulma.min.css">

    </head>
    <body>
        <?php include 'topnav.php'; ?>
        <?php include 'header.php'; ?>
        <div class="content">
            <main>
                <form action="index.php" method="get">
                    <table id="create">
                        <tr>
                            <th colspan="4">Log In</th>
                        </tr>
                        <tr><td>Email address:</td>
                            <td><input type="email" name="email"></td></tr>
                        <tr><td>Password:</td>
                            <td><input type="password" name="password"></td></tr>
                        <br><br>
                        <tr><td><p><input type="submit" value="Sign In"></p></td>
                            <td><p><input type="reset" value="Reset"></p></td></tr>
                        <tr><td colspan="2">Not signed up yet?</td></tr>
                        <tr><td colspan="2"><a href="index.php?action=newUser">Create new Donor</a> or <a href="index.php?action=newCharity">Create new Charity</a><td></tr>
                        <td><input type="hidden" name="action" value="verifyUser"></td>
                </form>
                </table>
            </main>
        </div>
        <br><br><br>
        <?php include 'footer.php'; ?>
    </body>
</html>
