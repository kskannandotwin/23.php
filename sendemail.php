<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Send Email</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>send email</h1>
       <div>
        <?php
        $to = 'kskannan.win@gmail.com';
        $subject = 'We are learning PHP';
        $message = '<html><body><h1 style="color:green">We are learning PHP!</h1><h3 style="color:orange">What are you waiting for?</h3><p>Join us and spread the word!</p></body></html>';
        $headers = 'Content-type:text/html;';
        mail($to, $subject, $message);
        echo mail($to, $subject, $message, $headers);
        ?>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>