<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../resources/css/app.css">
    <title>Реєстрація</title>
</head>

<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        min-height: 400px;
    }

    .register-form {
        background-color: #ffffff;
        min-width: 300px;
        margin: 120px 0 50px 0;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .register-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .register-form input,
    .register-form select {
        width: 100%;
        padding: 10px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 20px;
    }

    .register-form input[type="checkbox"] {
        margin-top: 5px;
        margin-right: 5px;
    }

    .register-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #ffffff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .register-form .checkbox-group {
        display: flex;
        align-items: self-start;
        justify-content: space-between;
        padding: 5px 0;
    }

    .register-form button:hover {
        background-color: #45a049;
    }
</style>


<body>
<?php require_once('./resources/views/main/header.php') ?>

<div class="wrapper">
    <div class="register-form">
        <form action="/sign-up" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="role">Role:</label>
            <div class="checkbox-group">
                <label for="role-worker">Worker</label>
                <input type="radio" id="role-worker" name="role" value="worker" required>
            </div>

            <div class="checkbox-group">
                <label for="role-customer">Customer</label>
                <input type="radio" id="role-customer" name="role" value="customer" required>
            </div>

            <button type="submit">Register</button>
        </form>
    </div>
</div>
</body>
</html>