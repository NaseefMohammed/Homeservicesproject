<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css\login1.css">

</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Login</h2>
        </div>
        <form id="form" class="form">
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="email" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Password" id="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button type="submit">Sign in</button>
        </form>
    </div>


<script src="js\login.js"></script>

</body>
</html>
