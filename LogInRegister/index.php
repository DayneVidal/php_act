<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'neww/header.php'?>
</head>

<body>

    <main class="container">

        <section class="login-box">

            <div class="logo">
                LogIn
            </div>

            <h1>Welcome Back</h1>

            <p class="description">
                Please login to your account
            </p>

            <form action="landing.php" method="get">

                <div class="input-group">

                    <label for="username">Username</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                        autocomplete="username"
                        required
                    >

                </div>

                <div class="input-group">

                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        minlength="8"
                        required
                    >

                </div>

                <div class="login-options">

                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="#">Forgot Password?</a>

                </div>

                <button type="submit">
                    Login
                </button>

            </form>

            <p class="register-text">
                Don't have an account?
                <a href="register.php">Register</a>
            </p>

        </section>

    </main>

</body>
</html>