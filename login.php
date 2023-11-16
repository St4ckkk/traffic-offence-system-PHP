<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="favicon/t.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page | Trafity</title>
</head>

<body>

    <div class="container" id="container">
        
        <div class="form-container sign-in">
            <form action="login2.php" method="POST">
                <h1>Sign In</h1>
                <input type="text" placeholder="Email" name="username" required>
                <input type="password" placeholder="Password" name="pass" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Trafity</h1>
                    <p>Stay ahead of traffic with real-time updates.Register with your personal details to use all of site features</p>
                </div>
            </div>  
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>