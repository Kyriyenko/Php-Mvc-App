<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../resources/css/app.css">
    <title>Увійти</title>
</head>


<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        min-height: 400px;
    }

    .login-form {
        background-color: #ffffff;
        padding: 20px;
        margin: 0 auto;
        min-width: 300px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .login-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .login-form input {
        width: 100%;
        padding: 10px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 20px;
    }

    .login-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #ffffff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .login-form button:hover {
        background-color: #45a049;
    }
</style>


<body>
<?php require_once('./resources/views/main/header.php') ?>

<div class="wrapper">
    <div class="login-form">
        <form action="/sign-in" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
</body>
</html>

