<!-- resources/views/products/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h1>Edit Product</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $product->name }}" required><br><br>

    <label>Description:</label><br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('products.index') }}">Back to List</a>

</body>
</html>

