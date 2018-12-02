<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a note</title>
</head>
<body>
    <h1>Create a note</h1>

    <form action="{{ url('notes') }}" method="POST">
        <textarea name="note" id="note" cols="30" rows="10"></textarea>
        <button type="submit">Create note</button>
    </form>
</body>
</html>