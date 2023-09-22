<!-- app/Views/product/form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form method="post" action="<?= base_url('product/save'); ?>">
        <input type="hidden" name="productID" value="<?= $product['ProductID'] ?? ''; ?>">
        
        <label for="productName">Product Name:</label>
        <input type="text" name="productName" id="productName" value="<?= $product['ProductName'] ?? ''; ?>" required><br>

        <label for="productDescription">Product Description:</label>
        <input type="text" name="productDescription" id="productDescription" value="<?= $product['ProductDescription'] ?? ''; ?>" required><br>

        <label for="productCategory">Product Category:</label>
        <select name="productCategory" id="productCategory" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['ProductCategory']; ?>"><?= $category['ProductCategory']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="productQuantity">Product Quantity:</label>
        <input type="number" name="productQuantity" id="productQuantity" value="<?= $product['ProductQuantity'] ?? ''; ?>" required><br>

        <label for="productPrice">Product Price:</label>
        <input type="number" name="productPrice" id="productPrice" step="0.01" value="<?= $product['ProductPrice'] ?? ''; ?>" required><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
