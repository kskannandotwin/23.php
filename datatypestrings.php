<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>data types: strings</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Strings</h1>
       <div>
        <?php 
        $name = 'Peter';
        echo 'Name: ' . $name . '<br>';
        $string = 'Peter\'s nice'; 
        echo $string . '<br>';
        $string2 = "My friend $name is nice.";
        echo $string2;
        ?>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>