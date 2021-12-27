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
        <form action="confirmMessage.php" method="POST">

            <div class="form-el">
            <label for="userName">UserName: </label>
            <input type="text" name="userName" required>
            </div>

            <div class="form-el">
            <label for="userEmail">Email: </label>
            <input type="email" name="userEmail" required>
            </div>

            <div class="form-el">
            <label for="issue">Select the Issue</label>
            <select name="issue" id="issue" required>
                <option value="Other" selected>Other</option>
                <option value="Query">Query</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
            </select>
            </div>

            <div class="form-el">
            <label for="message">Message</label>
                <textarea name="message"></textarea>
            </div>

            <div class="form-el">
            <button class="buttons" id="next">Next</button>
            </div>
        </form>
    </div>

</body>
</html>