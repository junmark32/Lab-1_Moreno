<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>

    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Product</h1>
        <form method="post" action="<?= base_url('product/save'); ?>" class="mt-4">
            <input type="hidden" name="productID" value="<?= $product['ProductID']; ?>">
            
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name:</label>
                <input type="text" name="productName" id="productName" class="form-control" value="<?= $product['ProductName']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Description:</label>
                <input type="text" name="productDescription" id="productDescription" class="form-control" value="<?= $product['ProductDescription']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="productCategory" class="form-label">Product Category:</label>
                <input type="text" name="productCategory" id="productCategory" class="form-control" value="<?= $product['ProductCategory']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="productQuantity" class="form-label">Product Quantity:</label>
                <input type="number" name="productQuantity" id="productQuantity" class="form-control" value="<?= $product['ProductQuantity']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price:</label>
                <input type="number" name="productPrice" id="productPrice" step="0.01" class="form-control" value="<?= $product['ProductPrice']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

            <a href="/product/delete/<?= $product['ProductID'] ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</a>
        </form>
    </div>

    <!-- Add Bootstrap 5 JavaScript and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
