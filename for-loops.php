<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>for loop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>for loop</h1>
       <div>
        <?php
        for ($i = 1; $i <= 10; $i++) { 
            echo $i . '<br>';
        }

        $carmakes = array('BMW', 'Audi', 'Mercedes');
        foreach ($carmakes as $value) {
            echo $value . '<br>';
        }

        $shoppingBasket = array('a' => 'yogurt', 'b' => 'bread', 'c' => 'eggs');
        foreach ($shoppingBasket as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
        ?>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>