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
    <div id="container">
        <form action="" method="POST">

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
            <label for="comments">Comments</label>
            <textarea name="comments"  id="summernote"></textarea>
            </div>

            <div class="form-el">
            <button id="submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
</body>
</html>