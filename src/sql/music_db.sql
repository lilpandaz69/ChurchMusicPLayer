CREATE DATABASE IF NOT EXISTS music_db;

USE music_db;

CREATE TABLE IF NOT EXISTS songs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  artist VARCHAR(255),
  file_path VARCHAR(255),
  file_Pathp VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO songs (title, artist, file_path , file_Pathp) VALUES
('احفظ حياتي', 'منال متري', 'احفظ حياتي .mp3','download (7).jpg'),
('احلي حبيب', 'ابونا يوسف اسعد', 'احلى حبيب.MP3', 'download.jpg'),
('ارض افرحي', 'فريق المس ايدينا', 'ارض افرحي.mp3', 'download(1).jpg'),
('اسألوني عن يسوع', 'ابونا يوسف اسعد', 'اسآلونى عن يسوع.MP3', 'download(2).jpg');
('استيقظي', 'تاسوني / ماري عزيز', 'استيقظي.mp3', 'download(3).jpg');
