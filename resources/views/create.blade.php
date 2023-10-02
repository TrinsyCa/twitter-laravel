<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
</head>
<body>
    <form action="{{ route('create_acc') }}" method="POST">
        @csrf
        <label for="username">Kullanıcı Adı : </label>
        <input type="text" name="username">

        <br>

        <label for="name_surname">Ad Soyad : </label>
        <input type="text" name="name_surname">

        <br>

        <label for="password">Şifre : </label>
        <input type="password" name="password">
        
        <br>

        <input type="submit" value="Create Account">
    </form>
</body>
</html>