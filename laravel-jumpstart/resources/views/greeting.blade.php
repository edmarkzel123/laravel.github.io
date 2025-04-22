<!DOCTYPE html>
<html>
<head>
<title>Hello Page</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-center p-10">
<h1 class="text-3xl text-blue-600 font-bold">Hello, {{ $name
}}! Welcome to Laravel </h1>
<img src="{{ asset('images/Model X.jpg') }}" alt="Laravel Logo"
class="mx-auto mt-4 w-32">
</body>
</html>