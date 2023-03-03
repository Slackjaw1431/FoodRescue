<!DOCTYPE html>
<?php
require_once 'model/PersonDB.php';
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/bulma.min.css">
    </head>
    <?php include 'topnav.php'; ?>
    <body>
        <div class="content">
            <main>
            <?php
            echo '<img src="pictures/big-header.png" width="2000"" class="centre">';
            ?>
              <!--  <section class="hero is-medium is-link">
                    <div class="hero-body">
                        <div class="columns">
                            <div class="column is-half">
                                <p class="subtitle">
                                    Blurb about our project
                                </p>
                            </div>
                            <div class="column is-half">
                                <figure class="image is-128x128">
                                    <img src="pictures/pngfind.com-brown-paper-bag-png-5539350.png" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </section> -->
                <div class="columns">
                    <div class="column is-half">
                        <section class="section">
                            <h1 class="title">About Us:</h1>
                            <div class="field is-horizontal"></div>
                            <h5 class="subtitle is-5">
                            (Product Goal) <br> Charities registered on the website will be able to indicate a need for specific resources, and an algorithm that relies on factors such as relative need and proximity will match them with registered providers that have those resources available for donation, if any such providers are available. 
                            </h5>
                            <div class="field is-horizontal"></div>
                            <?php
                            echo '<img src="pictures/charity.jpeg" width="750" height="750" class="centre">';
                            ?>
                        </section>
                    </div>
                    <div class="column is-half">
                    <div class="field is-horizontal"></div>
                    <div class="field is-horizontal"></div>
                        <div class="box has-background-danger-light">
                            <div class="columns">
                                <div class="column is-7">
                                    
                                    <h1 class="title is-4">Add Your Charity</h1>
                                    <p>Does your charity need more food donations? Use our algorithm to find matching donors!</p>
                                    <a href="index.php?action=newCharity">
                                        <button class="button is-danger is-outlined">Add your charity here</button>
                                    </a>
                                </div>
                                <div class="column">
                                    <?php
                                    echo '<img src="pictures/heart.png" width="250" height="250" class="centre">';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box has-background-info-light">
                            <div class="columns">
                                <div class="column is-7">
                                    <h1 class="title is-4">Volunteer</h1>
                                    <p>Want to help out your community? Search for nearby food banks!</p>
                                    <a href="index.php?action=searchCharity">
                                        <button class="button is-info is-outlined">Volunteer here</button>
                                    </a>
                                </div>
                                <div class="column">
                                    <?php
                                    echo '<img src="pictures/volunteer.jpeg" width="250" height="250" class="centre">';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box has-background-primary-light">
                            <div class="columns">
                                <div class="column is-7">
                                    <h1 class="title is-4">Donate</h1>
                                    <p>Want to donate any extra food? Submit a donation slip!</p>
                                    <a href="index.php?action=newUser">
                                        <button class="button is-primary is-outlined">Donate here</button>
                                    </a>
                                </div>
                                <div class="column">
                                    <?php
                                    echo '<img src="pictures/food-pantry.jpeg" width="250" height="250" class="centre">';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <div class="slideshow">
        <img class="slides" src="pictures/slide1.png" width="2000" height="1000">
        <img class="slides" src="pictures/slide2.png" width="2000" height="1000">
        <img class="slides" src="pictures/slide3.png" width="2000" height="1000">
        <img class="slides" src="pictures/slide4.png" width="2000" height="1000"> 

        <a class="prev" onclick="slidenum(-1)">&#10510;</a>
        <a class="next" onclick="slidenum(1)">&#10511;</a>

    <?php
        echo '<script type="text/JavaScript"> 
        
        var index = 1;
        display(index);

        function slidenum(n) {
        display(index += n);
        }

        function display(n) {
            var i; 
            var j = document.getElementsByClassName("slides");
            var k;

        if (n > j.length) {
            index = 1
        }

        if (n < 1) {
            index = j.length
        }
        
        for (i = 0; i < j.length; i++) {
            j[i].style.display = "none";
        }
  
        j[index-1].style.display = "block";
        k[idex-1].className += "active";
        }
        </script>'
    ;
    ?>
    </div>
        <div class="field is-horizontal"></div>
        <div class="field is-horizontal"></div>
                <div class="columns">
                    <div class="column is-half">
                    <section class="section">
                            <?php
                            echo '<img src="pictures/algorithm-picture.jpeg" width="600" height="600" class="centre">';
                            ?>
                        </section>
                    </div>
                    <div class="column">
                            <section class="section">
                            <h1 class="title">About the Algorithm:</h1>
                            <div class="field is-horizontal"></div>
                            <h5 class="subtitle is-5">
                            With our algorithm, a charity will be matched to a specific donation from a donor. The algorithm takes into account factors such as type of food, amount of food, and distance.
                            </h5>
                        </section>
                    </div>

    </div>
        </div>
        <?php include'footer.php';
        ?>
                

    </body>
</html>
