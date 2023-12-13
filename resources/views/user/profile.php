<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../resources/css/app.css">
    <title>Profile</title>
</head>


<style>
    .user-card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
    }

    .user-avatar img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto;
        display: block;
        margin-bottom: 10px;
    }

    .user-info h2 {
        text-align: center;
        margin-bottom: 10px;
    }

    .user-info label {
        display: block;
        margin-top: 10px;
    }

    .user-info input[type="text"],
    .user-info input[type="email"],
    .user-info input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 5px;
    }

    .card-actions {
        text-align: center;
        margin-top: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        font-size: 14px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary {
        background-color: #ccc;
        color: #fff;
        margin-left: 10px;
    }
</style>


<body>
<?php require_once('./resources/views/main/header.php') ?>

<div class="wrapper">
    <div class="user-card">
        <div class="user-avatar">
            <img src="avatar.jpg" alt="Аватар">
        </div>


        <div class="user-info">
            <h2>Профиль пользователя</h2>
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" value="<?php echo $user['first_name'] ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>">
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">Сохранить</button>
            <button class="btn btn-secondary">Отмена</button>
        </div>
    </div>
</div>
</body>
</html>