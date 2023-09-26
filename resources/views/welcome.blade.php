<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/post.css">
</head>
<body>
    <form action="{{ route('postBlog') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="date" value="<? echo date("Y.m.d"); ?>">
        <input type="text" name="title"><br>
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <input type="file" name="file"><br>
        <input type="submit" value="Paylas">
    </form>
</body>
</html>