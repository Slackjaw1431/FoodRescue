<!DOCTYPE html>
<?php
require_once 'model/PersonDB.php';
require_once 'model/Utility.php';
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/bulma.min.css">
    </head>
    <?php include 'topnav.php'; ?>
    <?php include 'header.php'; ?>

    <body>
        <div class="content">
            <main>

                <?php
                echo $id = Utility::getID($_SESSION['email']);

                if (!Utility::donorExists($id)) {
                    $rows = Utility::getCharityDetails($id);

                    foreach ($rows as $row) {
                        $name = $row['CNAME'];

                        echo $name;
                    }
                } else if (!Utility::charityExists($id)) {
                    $rows = Utility::getUserDetails($id);

                    foreach ($rows as $row) {
                        $name = $row['DNAME'];

                        echo $name;
                    }
                }
                ?>


            </main>
            <?php include'footer.php';
            ?>


    </body>
</html>
