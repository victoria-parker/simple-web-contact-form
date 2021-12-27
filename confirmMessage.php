<?php
    $userName=$_POST['userName'];
    $userEmail=$_POST['userEmail'];
    $issue=$_POST['issue'];
    $message=$_POST['message'];
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
<h2>Please confirm this is the message you want to send</h2>
<div id="container">
    <form action="sendMessage.php" method="POST">

        <div class="form-elConfirm">
            <p class="content">UserName:
            <br><?=$userName;?></p>
        </div>

        <div class="form-elConfirm">
            <p class="content">Email:
            <br><?=$userEmail?></p>
        </div>

        <div class="form-elConfirm">
            <p class="content">Your Issue:
            <br> <?=$issue?></p>
        </div>

        <div class="form-elConfirm">
            <p class="content">Message:
            <br>
            <?=$message?>
            </p>
        </div>

        <input type="hidden" name="userName" value="<?=$userName?>">
        <input type="hidden" name="userEmail" value="<?=$userEmail?>">
        <input type="hidden" name="issue" value="<?=$issue?>">
        <input type="hidden" name="message" value="<?=$message?>">
        <div class="form-el" id="buttons">
            <input type="button" class="buttons" id="goBack" value="Go Back" onclick="history.back(-1)" />
            <button class="buttons" id="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
