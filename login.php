<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
            <div id="errorMessage" class="error"></div>
        </form>
    </div>

    <script>
        const form = document.getElementById('loginForm');
        const errorMessage = document.getElementById('errorMessage');
        
        // Hardcoded credentials for demonstration
        const validUsername = 'user';
        const validPassword = 'password123';

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Check if the entered credentials match the hardcoded ones
            if (username === validUsername && password === validPassword) {
                errorMessage.style.color = 'green';
                errorMessage.textContent = 'Login successful!';
            } else {
                errorMessage.style.color = 'red';
                errorMessage.textContent = 'Invalid username or password!';
            }
        });
    </script>
</body>
</html>
