<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Practica 3 Guerra Erick</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product {
            border: 1px solid #ddd;
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            text-align: center;
            max-width: 200px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .product:hover {
            transform: scale(1.05);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        h3 {
            color: #333;
            margin-top: 10px;
            font-size: 1.2em;
        }

        p {
            color: #666;
            margin: 10px 0;
            font-size: 0.9em;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 0.9em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <h1>Lista de Productos</h1>
</header>

<?php

include 'productos.php';

foreach ($products as $product) {
    echo '<div class="product">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    echo '<h3>' . $product['name'] . '</h3>';
    echo '<p>' . $product['description'] . '</p>';
    echo '<p>Precio: $' . $product['price'] . '</p>';
    echo '<button onclick="addToCart(' . $product['id'] . ')">Agregar al carrito</button>';
    echo '</div>';
}
?>

<script>
    function addToCart(productId) {

        alert('Producto agregado al carrito.');
    }
</script>

</body>
</html>
