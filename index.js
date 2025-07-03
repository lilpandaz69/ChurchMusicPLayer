const audio = document.getElementById('globalPlayer');
const audioSource = document.getElementById('audioSource');
const progress = document.getElementById('progress');
const progressContainer = document.getElementById('progress-container');
const playPauseBtn = document.getElementById('playPauseBtn');
const songTitle = document.getElementById('song-title');
const volumeUpBtn = document.getElementById('volume-up');
const volumeDownBtn = document.getElementById('volume-down');

let isPlaying = false;

function playSong(path, title = '') {
  audioSource.src = path;
  audio.load();
  audio.play();
  isPlaying = true;
  playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
  songTitle.innerText = title;
}

playPauseBtn.addEventListener('click', () => {
  if (isPlaying) {
    audio.pause();
    playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
  } else {
    audio.play();
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
  }
  isPlaying = !isPlaying;
});

audio.addEventListener('timeupdate', () => {
  if (audio.duration) {
    const percent = (audio.currentTime / audio.duration) * 100;
    progress.style.width = `${percent}%`;
  }
});

progressContainer.addEventListener('click', (e) => {
  const width = progressContainer.clientWidth;
  const clickX = e.offsetX;
  const duration = audio.duration;
  audio.currentTime = (clickX / width) * duration;
});

volumeUpBtn.addEventListener('click', () => {
  audio.volume = Math.min(1, audio.volume + 0.1);
});

volumeDownBtn.addEventListener('click', () => {
  audio.volume = Math.max(0, audio.volume - 0.1);
});
    