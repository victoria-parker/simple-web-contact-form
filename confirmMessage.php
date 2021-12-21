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

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Simple Web Contact Form</h1>
<h2>Please confirm this is the message you want to send</h2>
<div id="container">
    <form action="sendMessage.php" method="POST">

        <div class="form-el">
            <p class="labels">UserName: </p>
            <p><?=$userName;?></p>
        </div>

        <div class="form-el">
            <p class="labels">Email: </p>
            <p><?=$userEmail?></p>
        </div>

        <div class="form-el">
            <p class="labels">Your Issue: </p>
            <p><?=$issue?></p>
        </div>

        <div class="form-el">
            <p class="labels">Message: </p>
            <p><?=$message?></p>
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
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
