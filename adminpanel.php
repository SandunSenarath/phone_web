<!--<?php
require_once 'dbconnect.php';

// Add product
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $details = $_POST['details'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (product_name, details, price) VALUES ('$product_name', '$details', '$price')";
    $conn->query($sql);
}

// Delete product
if (isset($_GET['delete_product'])) {
    $id = $_GET['delete_product'];
    $conn->query("DELETE FROM products WHERE id=$id");
}

// Fetch products
$products = $conn->query("SELECT * FROM products");

// Fetch orders
$orders = $conn->query("SELECT * FROM orders");
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpanel.css">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Admin Panel</h1>

    <h2>Manage Products</h2>
    <div class="form-container">
        <form method="POST">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="text" name="details" placeholder="Details" required>
            <input type="number" name="price" placeholder="Price" required>
            <button type="submit" name="add_product">Add Product</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $products->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['category'] ?></td>
                    <td>$<?= $row['price'] ?></td>
                    <td>
                        <a href="?delete_product=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Manage Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $orders->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['customer'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>$<?= $row['total'] ?></td>
                    <td>
                        <a href="#">View</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>