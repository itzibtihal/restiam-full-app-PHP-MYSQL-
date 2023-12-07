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
    <?php include "../../Controllers/register/register.php"; ?>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="register.php" method="post" class="sign-in-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon name='user'></box-icon>
                        <input type="text" name="first_name" placeholder="first Name" />
                    </div>
                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon name='user'></box-icon>
                        <input type="text" name="last_name" placeholder="last Name" />
                    </div>
                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon name='envelope'></box-icon>
                        <input type="email" name="email" placeholder="Email" />
                    </div>

                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon name='current-location' ></box-icon>
                        <input type="text" name="address" placeholder="Address" />
                    </div>

                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon name='phone-call' type='solid' ></box-icon>
                        <input type="text" name="phone" placeholder="phone Number" />
                    </div>
                   
                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon name='user'></box-icon>
                        <input type="text" name="username" placeholder="usename" />
                    </div>

                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon type='solid' name='key'></box-icon>
                        <input type="password" name="password" placeholder="password" />
                    </div>


                    <div class="input-field">
                    &nbsp;&nbsp;&nbsp;
                    <box-icon type='solid' name='key'></box-icon>
                        <input type="password" name="confirmPassword" placeholder="confirm your password" />
                    </div>
                    <button type="submit" class="btn solid" name="submit">save</button>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome to  Restiam</h3>
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam a culpa veritatis modi dolore delectus doloribus.
                    </p>
                    <a style="padding: 10px; text-decoration:none;" href="log.php" class="btn transparent" id="sign-up-btn">
                        Login
                        </a>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>

        </div>
    </div>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>

</html>