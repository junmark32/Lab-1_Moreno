<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product CRUD</title>

    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Product List</h1>
        <a href="<?= base_url('product/add'); ?>" class="btn btn-primary mt-3 mb-3">Add Product</a>
        <ul class="list-group">
            <?php foreach ($products as $product): ?>
                <li class="list-group-item">
                    <a href="<?= base_url('product/edit/' . $product['ProductID']); ?>" class="text-decoration-none">
                        <strong><?= $product['ProductName']; ?></strong>
                    </a> 
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Add Bootstrap 5 JavaScript and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
