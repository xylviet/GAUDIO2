<?php
$title = "Login";
include_once("./layouts/header.php");
?>

<!-- Navbar -->
<nav class=" inset-x-0 top-0 z-10 absolute">
    <div class="w-full h-24 border-b flex items-center px-8 justify-between">
        <h2 class="text-3xl font-bold text-blue-950">GAUDIO</h2>
        <div class="flex gap-2">
        <a href="index.php" class="px-4 py-2 bg-blue-950 text-white rounded font-medium">Back</a>
        <a href="menu-register.php" class="px-4 py-2 bg-blue-950 text-white rounded font-medium">Register</a>
        </div>
    </div>
</nav>
<!-- Navbar -->

<div class="flex justify-center items-center w-full h-screen relative">

    <div class="w-full max-w-sm container mx-auto">

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="login.php" method="post">
            <h2 class="text-center font-bold text-2xl mb-4">LOGIN</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password">
            </div>
            <div class="flex justify-center">
                <input type="submit" class="bg-blue-950 hover:bg-[#959A9D] text-white font-bold py-2 px-4 rounded cursor-pointer" value="Login">
                </input>
            </div>
        </form>

    </div>


</div>

<?php
include_once("./layouts/footer.php");
?>