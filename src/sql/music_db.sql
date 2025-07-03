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
('kalmeny belel', 'marwan mousa', 'Marwaa.mp3','download(2).jpg'),
('el wa2t el daye3', 'marwan mousa', 'Lege-Cy - Elwa2t Eldaye3  ليجي سي - الوقت الضايع (Official Audio).mp3', 'download(3).jpg'),
('kalmeny belel', 'marwan mousa', 'Lella Fadda x @Abyusif - ATTA3 للا فضة و ابيوسف - قطع.mp3', 'download(4).jpg'),
('Graceful Light', 'Choir B', 'Lege-Cy - El Neyya  ليجي-سي - النيه (Official Audio).mp3', 'download(5).jpg');
