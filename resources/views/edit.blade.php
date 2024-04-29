
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
@include('layouts.navbar')
<div class="flex justify-center items-center">
<div class="mx-20">
<h1 class="text-3xl font-bold mb-8">Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email:</label>
            <input type="email" id="email" name="email" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label for="mobile" class="block">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" value="{{ $user->email }}" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label for="image" class="block">Upload Image:</label>
            <input type="file" id="image" name="image" value="{{ $user->mobile }}" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label for="password" class="block">Password:</label>
            <input type="password" id="password" name="password" class="border rounded w-full p-2">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update User</button>


        <!-- <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $user->mobile }}">
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update User</button> -->
    </form>
</div>
</div>
</body>
</html>

