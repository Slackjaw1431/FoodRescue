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
                echo "<table border=1>\n";
                echo "<th>Street</th><th>City</th><th>Suite</th><th>State</th><th>Zip Code</th>\n";

                $id = 1;
                
                $rows = Utility::test($id);

                foreach ($rows as $row) {
                    $street = $row['STREET'];
                    $city = $row['CITY'];
                    $suite = $row['SUITE_APT'];
                    $state = $row['STATE'];
                    $zip = $row['ZIP'];

                    echo "<tr><td>$street</td><td>$city</td><td>$suite</td><td>$state</td><td>$zip</td>";
                }

                echo "</table>\n";
                ?>



            </main>
            <?php include'footer.php';
            ?>


    </body>
</html>
