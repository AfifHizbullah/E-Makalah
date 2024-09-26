<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f2f5;
    }

    .container {
      width: 400px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.4s;
    }

    .form-container {
      display: flex;
      width: 200%;
      transition: transform 0.4s ease-in-out;
    }

    form {
      padding: 50px;
      width: 50%;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      font-weight: 600;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 16px;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 20px;
    }

    button:hover {
      background-color: #45a049;
    }

    .toggle-btns {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      margin-top: 10px;
      font-size: 14px;
      text-align: center;
    }

    .toggle-btns a {
      cursor: pointer;
      color: #4CAF50;
      text-decoration: none;
      font-weight: 600;
    }

    .toggle-btns a:hover {
      color: #45a049;
    }

  </style>
</head>
<body>
  <div class="container" id="container">
    <div class="form-container" id="form-container">
      <!-- Login Form -->
      <form id="loginForm">
        <h2>Login</h2>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <div class="toggle-btns">
          <span>Don't have an account? <a onclick="showRegister()">Register</a></span>
        </div>
      </form>

      <!-- Register Form -->
      <form id="registerForm">
        <h2>Register</h2>
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <div class="toggle-btns">
          <span>Already have an account? <a onclick="showLogin()">Login</a></span>
        </div>
      </form>
    </div>
  </div>

  <script>
    const container = document.getElementById('container');
    const formContainer = document.getElementById('form-container');

    function showLogin() {
      formContainer.style.transform = 'translateX(0%)';
    }

    function showRegister() {
      formContainer.style.transform = 'translateX(-50%)';
    }
  </script>
</body>
</html>
