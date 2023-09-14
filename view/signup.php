<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

<div class="w-full max-w-md p-4 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-center mb-4">Welcome to Sign Up as Admin</h1>
    <h2 class="text-xl text-center mb-4">Please Sign Up</h2>

    <form action="../controller/signupCheck.php"  method="POST" class="space-y-4">
        <div class="flex justify-between items-center space-x-4">
            <div class="w-1/2">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input id="name" type="text" name="name" placeholder="Enter Your Name"
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="w-1/2">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input id="pass" type="password" name="password" placeholder="Enter Your Password"
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
        </div>

        <div class="w-full">
            <label for="cPassword" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
            <input id="cpass" type="password" name="cPassword" placeholder="Write your password again"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="w-full">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail:</label>
            <input id="mail" type="email" name="email" placeholder="Enter Your Email"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="w-full">
            <label for="phnNum" class="block text-sm font-medium text-gray-700">Phone Number:</label>
            <input id="phone" type="text" name="phnNum" placeholder="Enter Your Phone Number"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="w-full">
            <label for="DOB" class="block text-sm font-medium text-gray-700">Date of Birth:</label>
            <input id="dob" type="date" name="DOB"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="flex items-center space-x-4">
            <label class="block text-sm font-medium text-gray-700">Gender:</label>
            <div class="flex space-x-2">
                <input id="m" type="radio" name="gender" value="Male" class="form-radio">
                <label for="m">Male</label>
                <input id="fe" type="radio" name="gender" value="Female" class="form-radio">
                <label for="fe">Female</label>
                <input id="o" type="radio" name="gender" value="Other" class="form-radio">
                <label for="o">Other</label>
            </div>
        </div>

        <p id="inshow" class="text-red-600 text-center"></p>

        <div class="text-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Sign Up</button>
            <a href="adminlogin.html"
                class="text-blue-500 hover:underline block mt-2">Go Back</a>
            <button type="reset"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mt-2">Reset</button>
        </div>
    </form>
</div>

</body>
</html>
