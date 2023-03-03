<!DOCTYPE html>
<?php

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
        <?php include 'topnav.php'; ?>
        <?php include 'header.php'; ?>
        <div class="content">
            <main>
            <h2>Error</h2>
            <?php echo "<p>$error_msg</p>\n"; ?>
            <p><a href="index.php?action=signIn">Back</a> to the sign in page.</p>
            </main>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>







