<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>halaman login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>log-in</h1><br>
            <form class="form" action="oke.php" method="post">
                <input type="text" name="user" placeholder="username">
                <input type="password" name="pass" placeholder="password">
                <a href="oke.php">
                    <button>login</button>
                </a>
            </form>
            <div class="forgot">
                <a href="#">register</a> <a href="#">forgot password</a>
            </div>
        </div>
    </body>
</html>