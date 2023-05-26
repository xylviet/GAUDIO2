<?php
session_start();

if (isset($_SESSION['login'])) {
} else {
  header("Location: menu-login.php");
}

$title = "Menu Admin";
include_once("./layouts/header.php");
include_once("./config/connection.php");

$result =  mysqli_query($conn, "SELECT * FROM music");
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
        <a href="#" class="bg-blue-900 py-2 px-4 opacity-50">Settings</a>
        <a href="" class="bg-blue-900 py-2 px-4 opacity-50">Disable</a>
      </li>

    </ul>
  </div>

</nav>
<!-- Navbar End -->

<!-- Content -->
<div class="bg-blue-900/90 w-full h-screen relative text-white">
  <div class="ml-64 p-4">
    <h2 class="text-2xl">Menu Admin</h2>
    <a href="logout.php">Logout</a>

    <table class="min-w-full mt-8">
      <thead class="bg-blue-950">
        <tr>
          <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
            ID
          </th>
          <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
            Nama
          </th>
          <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
            Gambar
          </th>
          <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
            Musik
          </th>
          <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
            Action
          </th>
        </tr>
      </thead>
      <tbody class="bg-blue-950/80">

        <?php $i = 1;
        foreach ($data as $row) : ?>
          <tr class="border border-blue-950">
            <td class="px-4 py-2 whitespace-nowrap border border-blue-950">
              <div><?= $i++ ?></div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap border border-blue-950">
              <div><?= $row['name']; ?></div>
            </td>
            <td class="px-4 py-2 whitespace-nowrap border border-blue-950">
              <img src="../public/img/<?= $row['image']; ?>" alt="<?= $row['name']; ?>" class="h-16 w-16 rounded-full">
            </td>
            <td class="px-4 py-2 whitespace-nowrap border border-blue-950">
              <audio controls src="../public/music/<?= $row['song']; ?>"></audio>
            </td>
            <td class="px-4 py-2 whitespace-nowrap">
              <a href="menu-edit.php?id=<?= $row['id']; ?>" class="px-4 py-3 rounded bg-yellow-500 hover:bg-yellow-800 hover:text-yellow-200 transition duration-150 ease-linear">Edit</a>
              <a href="delete.php?id=<?= $row['id']; ?>" class="px-4 py-3 rounded bg-red-500 hover:bg-red-800 hover:text-red-200 transition duration-150 ease-linear">Delete</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>

    </table>



  </div>
</div>
<!-- Content End-->



<?php
include_once("./layouts/footer.php");
?>