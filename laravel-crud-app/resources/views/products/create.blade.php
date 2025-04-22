<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

<h1>Create Product</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label>Name:</label><br>
    <input type="text" name="name" placeholder="Product Name" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('products.index') }}">Back to List</a>

</body>
</html>
rm>
