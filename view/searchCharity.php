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
    
    <main>
    <div class="content">
    <div class="field is-horizontal"></div>
    <div class="field is-horizontal"></div>

    <div class="center">
        <h2 class="title is-3">Search for a food bank near you!</h2></div>
            <div class="field is-horizontal"></div>
            <div class="field is-horizontal"></div>
            <div class="field is-horizontal"></div>

    <div class="columns">
        <div class="column is-half is-offset-one-quarter">          
            <div class="box">
                <label class="label">Search by Zipcode</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="5 digit number" />
                    </div>
                <div class="field is-horizontal"></div>
                    <button class="button is-link is-outlined">Search</button>
            </div>
        </div>
    </div>

    <div class="field is-horizontal"></div>
    <div class="field is-horizontal"></div>
    <div class="field is-horizontal"></div>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">    
            <div class="box">
                <label class="label">... Miles Away</label>
                <div class="field is-horizontal"></div>
                <p>Charity Name:</p>
                <div class="field is-horizontal"></div>
                <p>Address:</p>
                <div class="field is-horizontal"></div>
                <p># of Volunteers needed:</p>
                <div class="field is-horizontal"></div>
                <button onclick="location.href = '" id>Link to site</button>
            </div>
        </div>
    </div>
</div>
    <br><br><br>
    <?php include 'footer.php'; ?>
</body>
</html>