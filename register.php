
<!DOCTYPE html>

<html >
    <head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class ="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="registertest.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="">
            </div>
            <div class =" input-group">
                <label>Email</label>
                <input type ="email" name="email" value=" ">
            </div>
            <div class ="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class ="input-group">
                <label>Confirm password</label>
                <input type ="password" name="password_2">
            </div>
            <div class ="input-group">
                <button type="submit" class="btn" name="register_btn">Register</button>
            </div>
            <p>
                Already Register ? <a href="login.php">login</a>
            </p>

        </form>
    </body>
</html>