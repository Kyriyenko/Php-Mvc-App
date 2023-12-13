<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../resources/css/app.css">
    <title>Profile</title>
</head>


<style>
    .add-product-card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
    }

    .add-product-card h2 {
        text-align: center;
        margin-bottom: 10px;
    }

    .product-info label {
        display: block;
        margin-top: 10px;
    }

    .product-info input[type="text"],
    .product-info textarea,
    .product-info input[type="number"],
    .product-info input[type="file"] {
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
    <div class="add-product-card">
        <h2>Добавить товар</h2>
        <div class="product-info">
            <label for="product-name">Название товара:</label>
            <input type="text" id="product-name" name="product-name" required>

            <label for="product-description">Описание товара:</label>
            <textarea id="product-description" name="product-description" required></textarea>

            <label for="product-price">Цена товара:</label>
            <input type="number" id="product-price" name="product-price" step="0.01" required>

            <label for="product-image">Изображение товара:</label>
            <input type="file" id="product-image" name="product-image" accept="image/jpeg, image/png" required>
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">Добавить</button>
            <button class="btn btn-secondary">Отмена</button>
        </div>
    </div>
</div>
</body>
</html>