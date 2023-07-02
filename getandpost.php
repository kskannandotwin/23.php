<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Get and Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Get and Post</h1>
       <div>
        <?php
        echo '<h3>GET:</h3>';
        print_r($_GET);
        if($_GET['submit']){
            if($_GET['username']) {
                echo "<p>Hi " . $_GET['username']. " Welcome to my page.</p>";
            }
        }
        

        echo '<h3>POST:</h3>';
        print_r($_POST);
        if($_POST['submit']){
            if($_POST['country']) {
                echo "<p>Your country is " . $_POST['country']. " .</p>";
            }
        }
        ?>
        <form method="get" action="getandpost.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <input type="submit" name="submit" value="Submit">
        </form>

        <form method="post" action="getandpost.php">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country">
            <input type="submit" name="submit" value="Submit">
        </form>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>