<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>
    <link rel="icon" href="/assets/img/" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/login.css">
</head>

<body>
    <div class="log-form">
        <center>
            <h2>Login Administrator SMAN 1 Stabat</h2>
        </center>
        
        <form action="#" method="POST">
            <input type="text" name="username" required placeholder="Username" /><br />
            <input type="password" name="password" required placeholder="Password" /><br />
            <input class="btn" type="submit" name="dologin" value="Login" />
        </form>
    </div>

</body>

</html>