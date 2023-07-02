<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Functions</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Functions</h1>
       <div>
        <?php
        function welcomeMe() {
            echo '<p>Welcome to my website!</p>';
        }

        function welcomeUser($name, $credit) {
            echo "<p>Hi $name. Welcome to my website!. Your credit score is $credit.</p>";
        }

        function sum($x, $y) {
            return $x + $y;
        }

        welcomeMe();
        welcomeUser('John', 100);
        $sum = sum(7, 5);
        echo "<p>The sum of 7 and 5 is $sum.</p>";
        ?>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>