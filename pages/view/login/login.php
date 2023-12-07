<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="assets/public.css">
    <!-- js link -->
    <script src="main.js" defer></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>

<body>


    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../../Controllers/login/login_check.php" method="POST" class="sign-in-form">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        &nbsp;&nbsp;&nbsp;
                        <box-icon name='user'></box-icon>
                        <input type="text" name="username" placeholder="username" />
                    </div>
                    <div class="input-field">
                        &nbsp;&nbsp;&nbsp;
                        <box-icon type='solid' name='key'></box-icon>
                        <input type="password" name="password" placeholder="password" />
                    </div>
                    <button type="submit" class="btn solid" name="submit">save</button>

                    <!-- <?php
                    // if (isset($_GET['erreur'])) {
                    //     $err = $_GET['erreur'];
                    //     if ($err == 1 || $err == 2)
                    //         echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    // }
                    ?> -->

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome to Restiam</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt aliquam quisquam magni quod vero atque quidem.

                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                       <a href="register.php">Register</a> 
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>

        </div>
    </div>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>

</html>