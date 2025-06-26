CREATE DATABASE IF NOT EXISTS music_db;

USE music_db;

CREATE TABLE IF NOT EXISTS songs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  artist VARCHAR(255),
  file_path VARCHAR(255)
);

-- أمثلة (اختياري لو عايز تملا شوية بيانات مؤقتًا)
INSERT INTO songs (title, artist, file_path) VALUES
('kalmeny belel', 'marwan mousa', 'Marwaa.mp3'),
('Graceful Light', 'Choir B', 'song2.mp3');


