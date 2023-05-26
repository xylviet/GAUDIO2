<?php
$title = "Menu Edit";
include_once("./layouts/header.php");
include_once("./config/connection.php");

$id = $_GET['id'];

$result =  mysqli_query($conn, "SELECT * FROM music WHERE id=$id");
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!-- Navbar -->
<nav class="absolute inset-y-0 left-0 bg-blue-950 w-64 h-screen text-white z-10">
    <!-- Logo -->
    <h2 class="text-center text-3xl font-bold py-6 tracking-wider">GAUDIO</h2>
    <hr class="opacity-50">

    <div>
        <ul>
            <li class="flex flex-col">
                <a href="menu-admin.php" class="bg-blue-800 py-2 px-4 hover:opacity-50 transition-all">Admin</a>
                <a href="menu-add.php" class="bg-blue-900 py-2 px-4 hover:opacity-50 transition-all">Add Music</a>
                <a href="#" class="bg-blue-900 py-2 px-4 opacity-50 ">Settings</a>
                <a href="" class="bg-blue-900 py-2 px-4 opacity-50">Disable</a>
            </li>

        </ul>
    </div>

</nav>
<!-- Navbar End -->

<!-- Content -->
<div class="bg-blue-900/90 w-full h-screen relative text-white">
    <div class="ml-64 p-4">
        <h2 class="text-2xl">Menu Edit</h2>

        <!-- Input -->
        <?php foreach ($data as $row) : ?>
            <form action="update.php" method="POST" enctype="multipart/form-data" class="mt-5 w-[350px]">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="mb-4">
                    <label for="name" class="block text-custom-120 font-bold mb-2">Nama Musik</label>
                    <input type="text" name="name" class="w-full bg-blue-950 rounded-lg py-3 px-4 text-white leading-tight outline-none focus:shadow-outline" value="<?= $row['name']; ?>">
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-custom-120 font-bold mb-2">Gambar</label>
                    <input type="file" name="image" class="w-full border rounded-lg py-2 px-3 text-white leading-tight outline-none focus:shadow-outline" accept=".jpg,.jpeg,.png">
                    <img src="../public/img/<?= $row['image']; ?>" alt="<?= $row['name']; ?>" width="250px" class="mt-2 rounded">
                </div>
                <div class="mb-4">
                    <label for="song" class="block text-custom-120 font-bold mb-2">File Musik</label>
                    <input type="file" name="song" class="w-full border rounded-lg py-2 px-3 text-white leading-tight outline-none focus:shadow-outline" accept=".mp3,.wav">
                    <audio controls class="mt-2" src="../public/music/<?= $row['song']; ?>" alt="<?= $row['name']; ?>"></audio>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="w-full px-4 py-3 rounded bg-blue-950 hover:bg-opacity-50 hover:text-custom-40 transition duration-150 ease-linear">
                        Update Music
                    </button>
                    <a href="menu-admin.php" class="px-4 py-3 rounded bg-blue-950 hover:bg-opacity-50 hover:text-custom-40 transition duration-150 ease-linear">Back</a>
                </div>
            </form>
        <?php endforeach ?>
        <!-- Input -->




    </div>
</div>
<!-- Content End-->



<?php
include_once("./layouts/footer.php");
?>