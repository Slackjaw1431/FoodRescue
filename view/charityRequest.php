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
                <div class="container">
                    <h1>Charity Request</h1>
                    <p>Request Today!</p>
                    <hr>
                    <div id="demo" style="border:1px solid black;">
                        <label for="food"><b>Food Type</b></label>
                        <input type="text" placeholder="Food Type" name="food" required ><select name="cars" id="cars">
                            <option value="type">Type of food</option>
                            <option value="type">Option</option>
                            <option value="type">Option</option>
                            <option value="type">Option</option></select>
                        <label for="food"><b>Food Type</b></label>
                        <input type="text" placeholder="Food Type" name="food" required>
                        <label for="amount"><b>Amount</b></label>
                        <input type="text" placeholder="Enter Amount" name="amount" required>
                        <input type="radio" id="size" name="size">
                        <label for="age1">lb</label>
                        <input type="radio" id="size" name="size">
                        <label for="age1">cups</label>
                        <input type="radio" id="size" name="size">
                        <label for="age1">gal</label>
                        <input type="radio" id="size" name="size">
                        <label for="age1">oz</label><br><br>
                        <label for="experation"><b>Experation</b></label>
                        <input type="date" name="experation" required>
                        <label for="volunteer"><b># of volunteers</b></label>
                        <input type="text" placeholder="#" name="volunteer" required>

                    </div>
                </div>
                <button onclick="myFunction()">Add</button>
                <button type="submit" class="submitbtn">Submit</button>
            </main>
        </div>
            <?php 
                echo '<script type="text/JavaScript"> 
                function myFunction() {
                const node = document.getElementById("demo");
                const clone = node.cloneNode(true);
                document.body.appendChild(clone);
                }
                </script>'
            ;
            ?>
        <br><br><br>
        <?php include 'footer.php'; ?>
    </body>
</html>
