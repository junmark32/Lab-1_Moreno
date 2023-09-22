<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category List</title>

    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Add Bootstrap 5 JavaScript and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Category List</h1>
        <ul class="list-group mt-4">
            <?php foreach ($categories as $category): ?>
                <li class="list-group-item">
                    <a href="<?= base_url('category/products/' . urlencode($category['ProductCategory'])); ?>" class="category-link">
                        <?= $category['ProductCategory']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
