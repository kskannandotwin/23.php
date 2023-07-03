<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Filters</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
       h1 {
           color: purple;
       }

       h3 {
           color: green;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <h1>Filters</h1>
       <h3>Clean user inpus</h3>
       <div>
        <?php
        // user name example
        $myUsername = '<script>window.alert("Hi")</script>';
        $myUsername = filter_var($myUsername, FILTER_SANITIZE_STRING);
        echo $myUsername;

        // email example
       $myEmail = 'sam@     completeweb   developm\\\\\  entcour    se.co.uk';
       $myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
       echo '<br>' . $myEmail;

        // URL example
       $myURL = 'http://$$www.   google.com';
       // not working this
       $myURL = filter_var($myURL, FILTER_SANITIZE_URL);
       echo '<br>' . $myURL;

        ?>
       </div>
       <h3>Validate user inputs</h3>
       <div>
        <?php
        // email validation
        $myEmail = 'sam     completeweb   developm\\\\\  entcour    se.co.uk';
        $myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
        echo "<p>Cleaned email: $myEmail</p>";
        echo "<p>Email validation: " . filter_var($myEmail, FILTER_VALIDATE_EMAIL) . " </p>";
        if(filter_var($myEmail, FILTER_VALIDATE_EMAIL)) {
            echo '<p>Valid email.</p>';
        } else {
            echo '<p>Invalid email.</p>';
        }

        // URL validation
        $myURL = 'http://$$www.   google.com';
        // not working correctly below code
        $myURL = filter_var($myURL, FILTER_SANITIZE_URL);
        echo "<p>Cleaned URL: $myURL</p>";
        // not working correctly below code
        echo "<p>URL Validation: " . filter_var($myURL, FILTER_VALIDATE_URL) . "</p>";

        ?>
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>