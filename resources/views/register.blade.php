<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="{{route('register')}}">
        @csrf
        <p>Name</p>
        <input type="text" name="name">
        <p>Email</p>
        <input type="email" name="email">
        <p>Password</p>
        <input type="password" name="password">
        <input type="submit" name="submit">
   </form>
</body>
</html>
