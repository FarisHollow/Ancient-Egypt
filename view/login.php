<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" href="../asset/style.css">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl text-center my-8 font-semibold" id="head">Ancient Egypt</h1>
    <div class="flex justify-center">
        <form method="post" action="../controller/loginCheck.php" name="myform"  class="bg-white shadow-lg rounded-lg p-8">
            <div class="mb-4">
                <label for="lname" class="block text-gray-600 font-bold">Email:</label>
                <input id="lname" type="text" name="email" value="" placeholder="Enter email" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <div class="mb-4">
                <label for="lpass" class="block text-gray-600 font-bold">Password:</label>
                <input id="lpass" type="password" name="password" value="" placeholder="Enter Password" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <button type="submit" id="click" name="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">LogIn</button>
        </form>
    </div>
    <div class="text-center mt-4">
        <a href="../view/signup.php" class="text-blue-500 hover:underline">Sign up</a>
    </div>
    <p id="show" class="text-center mt-4"></p>
</body>
</html>
