<?php include 'db.php';
session_start();
$search = "";
if (isset($_GET['query'])) {
  $search = trim($_GET['query']);
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>رنملي</title>
  <link rel="stylesheet" href="src/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="src/assets/css/all.min.css" />
  <link rel="stylesheet" href="main.css" />
  <link href="https:
  <link rel=" icon" href="pics/600x600bf-60-removebg-preview.png">
</head>

<body>
  <nav class="navbar navbar-expand-lg px-3">
    <div class="container-fluid align-items-center d-flex justify-content-between">
      <div class="d-flex align-items-center">
        <img src="pics/600x600bf-60-removebg-preview.png" alt="logo" width="32" class="me-3">
        <button class="icon-btn border-0 text-white"><i class="fas fa-home"></i></button>
      </div>
      <form action="php/search.php" method="GET" class="search-wrapper mx-3 d-flex align-items-center">
        <i class="fas fa-search me-2"></i>
        <input type="text" name="query" placeholder="عايز تسمع ترنيمة ايه؟" required />
      </form>
      <div class="d-flex align-items-center text-white">
        <?php if (isset($_SESSION['username'])): ?>
          <span class="me-3 fw-bold"><?= htmlspecialchars($_SESSION['username']) ?></span>
          <a href="php/logout.php" class="btn btn-outline-danger">Logout</a>
        <?php else: ?>
          <a href="php/login.php" class="btn btn-outline-primary ms-2">Login</a>
          <a href="php/signup.php" class="btn btn-outline-secondary ms-2 me-2">Sign up</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <div class="landin">
    <div class="text">
      <h1>Hello There</h1>
      <p>We are The First Website For Listening To Hymns</p>
    </div>
  </div>


  <div class="cardat">
    <div class="container mt-5 text-center">
      <h2 class="text-white mb-4 fw-bold">Available Tranem</h2>
    </div>
    <div class="container">
      <?php
      $result = $conn->query("SELECT * FROM songs");
      while ($row = $result->fetch_assoc()) {
        $songPath = 'uploads/' . htmlspecialchars($row['file_path']);
        $imagePath = 'pics_song/' . htmlspecialchars($row['file_Pathp']);

        echo '<div class="card1" onclick="playSong(\'' . $songPath . '\', \'' . htmlspecialchars($row['title']) . '\')">';
        echo '<img src="' . $imagePath . '" alt="song image" width="100%" height="100%">';
        echo '<div class="bav"><span><i class="fa-solid fa-play"></i></span></div>';
        echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
        echo '<p>' . htmlspecialchars($row['artist']) . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>

  <audio id="globalPlayer" class="d-none">
    <source id="audioSource" src="" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <div class="audio-player-container">
    <div class="song-info">
      <div id="song-title" class="text-white">No Song Playing</div>
    </div>
    <div class="controls">
      <button id="playPauseBtn"><i class="fas fa-play"></i></button>
    </div>
    <div class="progress-container" id="progress-container">
      <div class="progress" id="progress"></div>
    </div>
  </div>


  <script src="src/assets/Js/bootstrap.bundle.min.js"></script>
  <script src="src/assets/Js/all.min.js"></script>
  <script src="index.js"></script>

</body>

</html>