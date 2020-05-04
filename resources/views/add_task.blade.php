<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{ route('createTask')  }}" method="get">
        <div id="myDIV" class="header">
            <h2>Add/Edit to my TODO list</h2>
            <input type="text" name="title" placeholder="Title...">
            <button type="submit" class="addBtn">ADD/EDIT</button>
        </div>
    </form>
</body>
</html>
