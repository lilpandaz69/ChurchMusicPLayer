CREATE DATABASE IF NOT EXISTS music_db;

USE music_db;

CREATE TABLE IF NOT EXISTS songs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  artist VARCHAR(255),
  file_path VARCHAR(255)
);

INSERT INTO songs (title, artist, file_path) VALUES
('kalmeny belel', 'marwan mousa', 'Marwaa.mp3'),
('kalmeny belel', 'marwan mousa', 'Lege-Cy - Elwa2t Eldaye3  ليجي سي - الوقت الضايع (Official Audio).mp3'),
('kalmeny belel', 'marwan mousa', 'Lella Fadda x @Abyusif - ATTA3 للا فضة و ابيوسف - قطع.mp3'),
('Graceful Light', 'Choir B', 'Lege-Cy - El Neyya  ليجي-سي - النيه (Official Audio).mp3');


