<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Include files</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <style>
       h1 {
           color: purple;
       }

       .containingDiv {
           border: 1px solid #7c73f6;
           margin-top: 100px;
           border-radius: 15px;
       }
    </style>
</head> 

<body>
    <?php 
    include 'header.php';
    ?>
    <div class="container-fluid">
       <div class="row">
            <div class="col-sm-offset-1 col-sm-10 containingDiv">
                <h1>Include files</h1>

            </div>
       </div>
    </div>
    <?php 
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>