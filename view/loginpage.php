<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login page</title>
</head>
<body>
    <form method="post">
        <label for="inputUsername">Username:</label>
        <input type="text" id="inputUsername" name="inputUsername" required>
        <label for="inputPassword">Password:</label>
        <input type="password" id="inputPassword" name="inputPassword" required>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>
</html>