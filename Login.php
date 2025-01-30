<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .signup-container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .signup-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Signup</h2>
        <form action="Happ.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"  name="fname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="emaili" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" required>
            </div>
            <button type="submit" class="submit-btn">Sign Up</button>
        </form>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-header {
            text-align: center;
            padding: 20px;
            background-color: #4f46e5;
            color: white;
        }

        .form-header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .form-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
        }

        .form-group input:focus {
            border-color: #4f46e5;
            outline: none;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-actions a {
            font-size: 0.9rem;
            color: #4f46e5;
            text-decoration: none;
        }

        .form-actions a:hover {
            text-decoration: underline;
        }

        .form-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4f46e5;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }

        .form-button:hover {
            background-color: #4338ca;
        }

        .toggle-link {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .toggle-link a {
            color: #4f46e5;
            text-decoration: none;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container" id="login-container">
        <div class="form-header">
            <h1>Login</h1>
        </div>
        <div class="form-body">
        <form action="Happ.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="emaili" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="pass"  placeholder="Enter your password" required>
                </div>
                <div class="form-actions">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="form-button">Login</button>
            </form>
            <div class="toggle-link">
                Don't have an account? <a href="#" onclick="toggleForms('signup')">Sign Up</a>
            </div>
        </div>
    </div>

    <div class="container" id="signup-container" style="display: none;">
        <div class="form-header">
            <h1>Sign Up</h1>
        </div>
        <div class="form-body">
        <form action="Happ.php" method="POST">
                <div class="form-group">
                    <label for="signup-name">Name</label>
                    <input type="text" id="signup-name" name="fname" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" name="emaili"  placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" name="pass"  placeholder="Enter your password" required>
                </div>
                <button type="submit" class="form-button">Sign Up</button>
            </form>
            <div class="toggle-link">
                Already have an account? <a href="#" onclick="toggleForms('login')">Login</a>
            </div>
        </div>
    </div>

    <script>
        function toggleForms(form) {
            const loginContainer = document.getElementById('login-container');
            const signupContainer = document.getElementById('signup-container');

            if (form === 'signup') {
                loginContainer.style.display = 'none';
                signupContainer.style.display = 'block';
            } else {
                signupContainer.style.display = 'none';
                loginContainer.style.display = 'block';
            }
        }
    </script>
</body>
</html>