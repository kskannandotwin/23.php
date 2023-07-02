<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Array functions</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Array functions</h1>
       <div>
        <?php
        $shoppingBasket1 = array('bread', 'milk', 'eggs', 'bread');
        $shoppingBasket2 = array('apple', 'banana', 'orange');
        $shoppingBasket = array_merge($shoppingBasket1, $shoppingBasket2);
        echo '<p>Shopping Basket:</p>';
        print_r($shoppingBasket);
        echo '<p>Number of items in shopping Basket: </p>' . count($shoppingBasket);

        $count = array_count_values($shoppingBasket);
        echo '<p>Basket Count</p>';
        print_r($count);
        echo '<p>Number of bread items in Basket:</p>' . $count['bread'];

        if(in_array('bread', $shoppingBasket)) {
            echo '<p>There is bread in the basket.</p>';
        } else {
            echo '<p>There is no bread in the basket.</p>';
        }

        array_push($shoppingBasket, 'yogurt');
        echo '<p>Shopping basket after adding yogurt:</p>';
        print_r($shoppingBasket);

        if($_GET['submit']) {
            if($_GET['item']) {
                array_push($shoppingBasket, $_GET['item']); 
            }
        }
        print_r($shoppingBasket);
        ?>
        <form action="" method='get'>
            <label for="item">Add item to shopping basket:</label>
            <input type="text" name="item" id="item">
            <input type="submit" name="submit" value="Submit">
        </form>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>