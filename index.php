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
        <form action="" method="POST">

            <label for="userName">UserName: </label>
            <input type="text" name="userName">

            <br>

            <label for="userEmail">Email: </label>
            <input type="email" name="userEmail">

            <br>

            <label for="issue">Select the issue</label>
            <select name="issue" id="issue">
                <option value="">Select issue</option>
                <option value="Query">Query</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
                <option value="Other">Other</option>
            </select>

            <br>

            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>

            <br>

            <button>Submit</button>
        </form>
    </div>
</body>
</html>