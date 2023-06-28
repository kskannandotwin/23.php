<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Variables</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Variables:</h1>
       <p>
       <?php 
        $name = 'John';
        $age = 33;
        echo "My name is " . $name . ". I am " . $age . " years old."
       ?>
       </p>
       <p>
       <?php 
        define('COUNTRY', 'ENGLAND');
        echo "Flight destination: " . COUNTRY;
       ?>
       </p>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>