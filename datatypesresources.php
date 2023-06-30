<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>data types: resources</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Resources</h1>
       <div>
        <?php
        $myFile = fopen('sometext.txt', 'r');
        var_dump($myFile);
        echo '<br>';
        echo fread($myFile, filesize('sometext.txt'));
        ?>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>