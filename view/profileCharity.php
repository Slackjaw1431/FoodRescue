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
                $id = Utility::getID($_SESSION['email']);

                $rows = Utility::getCharityDetails($id);

                echo "<table border=1 width=75%>\n";
                echo "<th>Name</th><th>Phone</th><th>Hours</th><th>Website</th><th>Volunteers</th><th>People Fed</th><th>Bank or Kitchen</th><th>lbs Served</th><th>Meals Served</th><th>Accepts Expired</th><th>Accepts Perishabels</th>\n";

                foreach ($rows as $row) {
                    $name = $row['CNAME'];
                    $phone = $row['PHONE'];
                    $hours = $row['HOURS'];
                    $link = $row['WEBSITE'];
                    $vol = $row['VOLUNTEERS'];
                    $fed = $row['PEOPLE_FED'];
                    $bk = $row['BANK_OR_KITCHEN'];
                    $lb = $row['POUNDS_SERVED'];
                    $meals = $row['MEALS_SERVED'];
                    $expired = $row['ACCEPT_EXPIRED'];
                    $perish = $row['ACCEPT_PERISHABLES'];

                    echo "<tr><td>$name</td><td>$phone</td><td>$hours</td><td>$link</td><td>$vol</td><td>$fed</td><td>$bk</td><td>$lb</td><td>$meals</td><td>$expired                                </td><td>$perish</td>";
                    echo "</table>\n";
                }
                ?>
                <?php
                echo "<table border=1>\n";
                echo "<th>Street</th><th>City</th><th>Suite</th><th>State</th><th>Zip Code</th>\n";

                $rows = Utility::getOneAddress($id);

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

                <table id="create">
                    <form action="index.php" method="get">
                        <tr>
                            <th colspan="4">Update your Account</th>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="newName" value="<?php echo $name ?>"></td>
                        </tr>
                        <tr><td>Phone:</td>
                            <td><input type="text" name="newPhone" value="<?php echo $phone ?>"></td>
                        </tr>
                        <tr>
                            <td>Hours:</td>
                            <td><input type="text" name="newHours" value="<?php echo $hours ?>"></td>
                        </tr>
                        <tr>
                            <td>Link to Website:</td>
                            <td><input type="text" name="newLink" value="<?php echo $link ?>"></td>
                        </tr>
                        <tr>
                            <td>Bank or Kitchen:</td>
                            <td><input type="text" name="newLink" value="<?php echo $bk ?>"></td>
                        </tr>
                        <tr>
                            <td>People Fed:</td>
                            <td><input type="text" name="newLink" value="<?php echo $fed ?>"></td>
                        </tr>
                        <tr>
                            <td>Meals Served:</td>
                            <td><input type="text" name="newLink" value="<?php echo $meals ?>"></td>
                        </tr>
                        <tr>
                            <td>Volunteers:</td>
                            <td><input type="text" name="newVol" value="<?php echo $vol ?>"></td>
                        </tr>
                        <tr>
                            <td>Accepts Expired:</td>
                            <td><input type="text" name="newVol" value="<?php
                                if ($expired == '1') {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>"></td>
                        </tr>
                        <tr>
                            <td>Accepts Perishables:</td>
                            <td><input type="text" name="newVol" value="<?php
                                if ($perish == '1') {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Update Charity"></td>
                            <td><input type="reset" value="Reset"></td>
                        </tr>
                        <td><input type="hidden" name="action" value="updateCharity"></td>
                    </form>
                </table>
                <table id="create">
                    <form action="index.php" method="get">
                        <tr>
                            <td>Street:</td>
                            <td><input type="text" name="newStreet" value="<?php echo $street ?>"></td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td><input type="text" name="newCity" value="<?php echo $city ?>"></td>
                        </tr>
                        <tr>
                            <td>Suite:</td>
                            <td><input type="text" name="newSuite" value="<?php echo $suite ?>"></td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td><input type="text" name="newState" value="<?php echo $state ?>"></td>
                        </tr>
                        <tr>
                            <td>Zip:</td>
                            <td><input type="text" name="newZip" value="<?php echo $zip ?>"></td>
                        </tr>
                        <input type="hidden" name="id" value="<?php echo $id ?>"> 
                        <tr>
                            <td><input type="submit" value="Update Address"></td>
                            <td><input type="reset" value="Reset"></td>
                        </tr>
                        <td><input type="hidden" name="action" value="updateAddress"></td>
                    </form>
                </table>

            </main>
            <?php include'footer.php';
            ?>


    </body>
</html>
