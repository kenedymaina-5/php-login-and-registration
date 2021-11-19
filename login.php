
<!DOCTYPE html>

<html >
    <head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class ="header">
            <h2>LOGIN</h2>
        </div>
        <form method="post" action="auth.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="">
            </div>
            
            </div>
            <div class ="input-group">
                <label>Password</label>
                <input type="password" name="passwd">
            </div>
            <div class ="input-group">
                <button type="submit" class="btn" name="login">login</button>
            </div>
            <p>
                Already Register ? <a href="register.php">register</a>
            </p>

        </form>
    </body>
</html>