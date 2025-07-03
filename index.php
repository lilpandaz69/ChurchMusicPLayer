<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/all.min.css">
    <link rel="stylesheet" href="src/assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
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
      <input type="text" placeholder="عايز تسمع ترنيمة اية؟" />
    </div>

    <!-- Right side: icons -->
    <div class="d-flex align-items-center text-white">
      
      <button type="button" class="btn btn-outline-primary ms-2">Log in</button>
      <button type="button" class="btn btn-outline-secondary ms-2 me-2">Sign up</button>
      <!-- <img src="pics/600x600bf-60.jpg" alt="avatar" width="32"> -->
  </div>
</nav>
<!-- Nav -->
<div class="landin">
      <div class="text">
              <h1>Hello There</h1>
        <p>We are The First Website For Listening To Hymns</p>
       </div>
   </div>
<!-- Tranem -->
<div class="cardat">
  <div class="container mt-5 text-center" >
      <h2 class="text-white mb-4 fw-bold">Available Tranem</h2>
  </div>
  <div class="container">
    <div class="card1">
      <img src="pics/download (1).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>اسومين</h3>
      <p>فريق صدي صوت</p>
    </div>
    <div class="card1">
      <img src="pics/download.jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>اصليله</h3>
      <p>فريق قلب داود</p>
    </div>
    <div class="card1">
      <img src="pics/download (2).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>ستر العلي</h3>
      <p>ابونا موسي رشدي</p>
    </div>
    <div class="card1">
      <img src="pics/download (3).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>ثبت انظارك فيه</h3>
      <p>فريق المس ايدينا</p>
    </div>
    <div class="card1">
      <img src="pics/download (4).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>مهتمة بالتعليم</h3>
      <p>خورس إكليريكية دير المُحرق العامر</p>
    </div>
  </div>
</div>
<!-- Artist -->
<div class="cardat2">
  <div class="container mt-5">
      <h2 class="text-white mb-4 fw-bold">Top Arstist</h2>
  </div>
  <div class="container">
    <div class="card2">
      <img src="pics/download (1).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>اسومين</h3>
      <p>فريق صدي صوت</p>
    </div>
    <div class="card2">
      <img src="pics/download.jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>اصليله</h3>
      <p>فريق قلب داود</p>
    </div>
    <div class="card2">
      <img src="pics/download (2).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>ستر العلي</h3>
      <p>ابونا موسي رشدي</p>
    </div>
    <div class="card2">
      <img src="pics/download (3).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>ثبت انظارك فيه</h3>
      <p>فريق المس ايدينا</p>
    </div>
    <div class="card2">
      <img src="pics/download (4).jpg" alt="" width="100%" height="100%">
      <div class="bav">
         <span><i class="fa-solid fa-play"></i></span> 
      </div>
      <h3>مهتمة بالتعليم</h3>
      <p>خورس إكليريكية دير المُحرق العامر</p>
    </div>

  </div>
</div>
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