<ul id="nav">
    <li id="left">

        <?php
        echo '<a href="index.php?action=home"><img src="pictures/navbar-logo.png" width="35" height="35" class="centre"/></a>';
        if (isset($_SESSION['email']) && Utility::charityExists(Utility::getID($_SESSION['email']))) {
            echo "<li><a href='index.php?action=home'>Home</a></li>";
            echo "<li><a href='index.php?action=searchCharity'>Search for Charities</a></li>";
            echo "<li><a href='index.php?action=charityRequest'>Request Donations</a></li>";
            echo "<li><a href='index.php?action=viewCharityRequests'>View Submitted Requests</a></li>";
            echo "<li><a href='index.php?action=viewDonor'>View Potential Donors</a></li>";
        } elseif (isset($_SESSION['email']) && Utility::userExists(Utility::getID($_SESSION['email']))) {
            echo "<li><a href='index.php?action=home'>Home</a></li>";
            echo "<li><a href='index.php?action=searchCharity'>Search for Charities</a></li>";
            echo "<li><a href='index.php?action=submitDonation'>Submit Donations</a></li>";
        } else {
            echo "<li><a href='index.php?action=home'>Home</a></li>";
            echo "<li><a href='index.php?action=test'>Test</a></li>";
            echo "<li><a href='index.php?action=searchCharity'>Search for Charities</a></li>";
        }
        ?>
    </li>
    <div id="right">
        <?php
        if (!isset($_SESSION['email'])) {
            echo "<li><a href='index.php?action=signIn'>Log In</a></li>";
            echo "<li><a href='#'>Sign Up</a>";
            echo "<ul>";
            echo "<li><a href='index.php?action=newUser'>Donor Sign Up</a></li>";
            echo "<li><a href='index.php?action=newCharity'>Charity Sign Up</a></li>";
            echo "</ul>";
            echo "</li>";
        } else {
            $email = $_SESSION['email'];
            echo "<li><a href='index.php?action=logout'>Log Out</a></li>";
            echo "<li><a href='index.php?action=profile'>$email</a></li>";
        }
        ?>
    </div>
</ul>





