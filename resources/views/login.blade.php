<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/3 p-6 bg-gray-200 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Sign In</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block mb-2">Email:</label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2">Password:</label>
                    <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded">
                </div>
                <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Login  to Clocking</button>
            </form>
        </div>
    </div>
</body>
</html>
