<?php

    require 'classes/Message.php';
    require 'classes/vendor/autoload.php';

    $Message=new Message();
    $check=$Message->sendMessage();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Simple web contact form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Simple Web Contact Form</h1>
    <div id="container">
        <?php
        if($check == 'success'){
        ?>
            <div>
                <p>Message sent successfully</p>
            </div>
        <?php
        }else{
        ?>
            <div>
                <p>Sorry, we couldn't send your message, please try again later</p>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>



