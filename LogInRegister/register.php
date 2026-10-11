<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="container">

        <section class="register-box">

            <div class="logo">
                Dayne Website
            </div>

            <h1>Create Account</h1>

            <p class="description">
                Register a new account
            </p>

            <form action="#" method="post">

                <div class="input-group">

                    <label for="fullname">Full Name</label>

                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        required
                    >

                </div>

                <div class="input-group">

                    <label for="register-email">Email</label>

                    <input
                        type="email"
                        id="register-email"
                        name="email"
                        placeholder="Enter your email"
                        autocomplete="email"
                        required
                    >

                </div>

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

                    <label for="new-password">Password</label>

                    <input
                        type="password"
                        id="new-password"
                        name="password"
                        placeholder="Create a password"
                        autocomplete="new-password"
                        minlength="8"
                        required
                    >

                </div>

                <div class="input-group">

                    <label for="confirm-password">Confirm Password</label>

                    <span class="password-validation">
                        Passwords do not match.
                    </span>

                    <input
                        type="password"
                        id="confirm-password"
                        name="confirm-password"
                        placeholder="Confirm your password"
                        autocomplete="new-password"
                        minlength="8"
                        required
                    >

                </div>

                <button type="submit">
                    Register
                </button>

            </form>

            <p class="register-text">
                Already have an account?
                <a href="index.php">Login</a>
            </p>

        </section>

    </main>

    <script>

        const password = document.getElementById("new-password");
        const confirmPassword = document.getElementById("confirm-password");
        const validationMessage = document.querySelector(".password-validation");

        confirmPassword.addEventListener("input", function () {

            if (confirmPassword.value !== password.value) {
                validationMessage.style.display = "block";
                confirmPassword.setCustomValidity("Passwords do not match.");
            } else {
                validationMessage.style.display = "none";
                confirmPassword.setCustomValidity("");
            }

        });

    </script>

</body>
</html>