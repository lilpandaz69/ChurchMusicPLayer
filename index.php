<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/all.min.css">
    <link rel="stylesheet" href="src/assets/css/main.css">
    <title>رنملي</title>
</head>
<body>
<nav class="navbar navbar-expand-lg px-3">
  <div class="container-fluid align-items-center d-flex justify-content-between">

    <!-- Left side: logo + home -->
    <div class="d-flex align-items-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="logo" width="32" class="me-3">
      <button class="icon-btn border-0 text-white">
        <i class="fas fa-home"></i>
      </button>
    </div>

    <!-- Center: search box -->
    <div class="search-wrapper mx-3">
      <i class="fas fa-search me-2"></i>
      <input type="text" placeholder="What do you want to play?" />
    </div>

    <!-- Right side: icons -->
    <div class="d-flex align-items-center text-white">
      <i class="fas fa-download me-3"></i> <span class="me-4">Install App</span>
      <i class="fas fa-bell me-4"></i>
      <i class="fas fa-users me-4"></i>
      <img src="pics/600x600bf-60.jpg" alt="avatar" width="32">
    </div>

  </div>
</nav>

<div class="container mt-5">
  <h2 class="text-white mb-4">Available Songs</h2>
  <div class="list-group">
    <?php
      $result = $conn->query("SELECT * FROM songs");
      while ($row = $result->fetch_assoc()) {
        echo '<div class="list-group-ixtem bg-secondary text-white mb-3 rounded">';
        echo '<strong>' . htmlspecialchars($row['title']) . '</strong> - ' . htmlspecialchars($row['artist']) . '<br>';
        echo '<audio controls class="w-100 mt-2">';
        echo '<source src="uploads/' . htmlspecialchars($row['file_path']) . '" type="audio/mpeg">';
        echo 'Your browser does not support the audio element.';
        echo '</audio>';
        echo '</div>';
      }
    ?>
  </div>
</div>
    <script src="src/assets/Js/all.min.js"></script>
    <script src="src/assets/Js/bootstrap.bundle.min.js"></script>
    <script src="src/assets/Js/bootstrap.bundle.min.js.map"></script>
    <script src="src/assets/Js/index.js"></script>
</body>
</html>