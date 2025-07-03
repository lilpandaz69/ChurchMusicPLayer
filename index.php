<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>رنملي</title>
  <link rel="stylesheet" href="src/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="src/assets/css/all.min.css" />
  <link rel="stylesheet" href="main.css" />
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-3">
  <div class="container-fluid align-items-center d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="logo" width="32" class="me-3" />
      <button class="icon-btn border-0 text-white"><i class="fas fa-home"></i></button>
    </div>
    <div class="search-wrapper mx-3">
      <i class="fas fa-search me-2"></i>
      <input type="text" placeholder="عايز تسمع ترنيمة اية؟" />
    </div>
    <div class="d-flex align-items-center text-white">
      <button type="button" class="btn btn-outline-primary ms-2">Log in</button>
      <button type="button" class="btn btn-outline-secondary ms-2 me-2">Sign up</button>
    </div>
  </div>
</nav>

<!-- Landing -->
<div class="landin">
  <div class="text">
    <h1>Hello There</h1>
    <p>We are The First Website For Listening To Hymns</p>
  </div>
</div>

<!-- Songs Cards -->
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

<!-- Global Audio Player -->
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

<!-- Scripts -->
<script src="src/assets/Js/bootstrap.bundle.min.js"></script>
<script src="src/assets/Js/all.min.js"></script>
<script src="index.js"></script>

</body>
</html>
