<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <style>
       h1 {
           color: purple;
       }

       .contactForm {
           border: 1px solid #7c73f6;
           margin-top: 50px;
           border-radius: 15px;
       }
    </style>
</head>

<body>
    <div class="container-fluid">
       <div class="row">
            <div class="col-sm-offset-1 col-sm-10 contactForm">
                <h1>Contact Us:</h1>
                <?php
                // get user inputs
                $name = $_POST['name']; 
                $email = $_POST['email']; 
                $message = $_POST['message'];
                
                // error messages
                $missingName = '<p><strong>Please enter your name:</strong></p>';
                $invalidEmail = '<p><strong>Please enter valid email address!:</strong></p>';
                $missingMessage = '<p><strong>Please enter a message!:</strong></p>';

                 // if the user has submitted the form
                 if($_POST['submit']) {
                   //check for errors
                    if(!$name) {
                        $errors .= $missingName;
                    } else {
                        $name = filter_var($name, FILTER_SANITIZE_STRING);
                    }
                    if(!$email) {
                        $errors .= $invalidEmail;
                    } else {
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors .= $invalidEmail;
                        }
                    }
                    if(!$message) {
                        $errors .= $missingMessage;
                    } else {
                        $message = filter_var($message, FILTER_SANITIZE_STRING);
                    }

                    // if there are any errors
                    if($errors) {
                        // print error message
                        $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
                    } else {
                        // no errors
                        $to = 'kskannan.win@gmail.com';
                        $subject = 'Contact';
                        $message = "
                        <p>Name: $name.</p>
                        <p>Email: $email.</p>
                        <p>Message:</p>
                        <p><strong>$message.</strong></p>
                        ";
                        $headers = 'Content-type:text/html';
                        if(mail($to, $subject, $message, $headers)) {
                            // $resultMessage = '<div class="alert alert-success">Thanks for your message. We will get back to you as soon as possible!</div>';
                            header('Location:thanksforyourmessage.php');
                        } else {
                            $resultMessage = '<div class="alert alert-warning">Unable to send Email. Please try again later!</div>';
                        }
                    }
                     echo $resultMessage;
                 }          
                ?>
                <form action="contactform.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?php echo $_POST['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $_POST['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" rows="5" class="form-control"><?php echo $_POST['message']?></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send message">  
                </form>
            </div>
       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>