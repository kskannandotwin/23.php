<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed PHP in HTML</title>
</head>
<body>
   <h1>Embed PHP in HTML</h1>
   <p>
        <?php 
            echo "This is a paragraph.";
        ?>
   </p>
   <?php 
    echo "<p>This is another paragraph.</p>"
   ?> 
</body>
</html>