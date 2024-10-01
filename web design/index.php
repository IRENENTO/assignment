 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="formstyle.css">
    <title>Register && Login</title>
 </head>
 <body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post"  action="connect.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="usname" placeholder="Enter Username  " required>
                <label for="usname">Username</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Sign up" name="signup" class="btn">


        </form>
        <div class="links">
            <p>Already have Account?</p>
            <button id="signinbutton">Sign In</button>
        </div>
    </div>



    <div class="container" id="signin">
        <h1 class="form-title">Sign In</h1>
        <form method="post"  action="login.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="usname" placeholder="Enter Username  " required>
                <label for="usname">Username</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="pass      word" placeholder="Enter Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Sign up" name="signup" class="btn">


        </form>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signupbutton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
 </body>
 </html>