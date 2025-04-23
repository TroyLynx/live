<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--LIVE{p4g3_50rc3_15_7h3_b357}-->
    <title>live</title>
    <style>
        .msg{
            color:red;
            z-index: 1;
        }
    </style>
</head>
<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <?php if(isset($_GET['error'])){?>
                <p class="msg"><?php echo $_GET['error'];?></p>
                <?php }?>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                <form action="login.php" method="POST">
                    <input type="text" placeholder="USERNAME" name="username"/>
                    <input type="password" placeholder="PASSWORD" name="password"/>
                    <button class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="register.php">REGISTER</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
    <script src="script.js"></script>
</body>
</body>
</html>