<?php
$title = "Gaudio";
include_once("./layouts/header.php");
?>

<!-- Navbar -->
<nav class=" inset-x-0 top-0 z-10 absolute">
  <div class="w-full h-24 border-b flex items-center px-8 justify-between">
    <h2 class="text-3xl font-bold text-blue-950">GAUDIO</h2>
    <div class="flex gap-2">
      <a href="menu-register.php" class="px-4 py-2 bg-blue-950 text-white rounded font-medium">Register</a>
      <a href="menu-login.php" class="px-4 py-2 bg-blue-950 text-white rounded font-medium">Login</a>
    </div>
  </div>
</nav>
<!-- Navbar -->

<div class="w-full h-screen max-w-7xl relative mx-auto">

  <div class="flex justify-center items-center w-full h-screen">
    <h1 class="">SELAMAT DATANG</h1>
  </div>

</div>

<?php
include_once("./layouts/footer.php");
?>