<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <center>
    <h1>Register</h1>
    <form action="register" method="post">
        @csrf
        <label for="">Nama:
            <input type="text" name="name" id="">
        </label>
        <label for="">Email:
            <input type="email" name="email" id="">
        </label>
        <label for="">Password:
            <input type="password" name="password" required>
        </label>
        <br><br><input type="submit" name="submit" value="Submit">
    </form>
    </center>
</body>
</html>
