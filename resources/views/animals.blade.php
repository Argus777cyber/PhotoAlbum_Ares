<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Animals Gallery</title>

<style>
body {
  margin: 0;
  background: black;
  font-family: Arial, sans-serif;
  color: white;
  overflow-x: hidden;
}


#stars-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  z-index: -1;
}
.star {
  position: absolute;
  width: 2px;
  height: 2px;
  background: white;
  animation: fall linear infinite;
  opacity: 0.8;
}
@keyframes fall {
  0% { transform: translateY(-100vh); }
  100% { transform: translateY(100vh); }
}

nav.nav-centered {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin: 20px 0;
  z-index: 5;
}
nav a {
  color: #0ff;
  text-decoration: none;
  font-size: 20px;
  padding: 12px 22px;
  border: 2px solid #0ff;
  border-radius: 10px;
  box-shadow: 0 0 15px #0ff;
  animation: neonPulse 1.5s infinite alternate;
  transition: 0.3s;
}
nav a:hover {
  background: rgba(79,195,247,0.2);
  transform: scale(1.1);
}
@keyframes neonPulse {
  0% { box-shadow: 0 0 5px #4fc3f7, 0 0 10px #4fc3f7; }
  100% { box-shadow: 0 0 15px #4fc3f7, 0 0 30px #4fc3f7; }
}


.glow-blue {
  color: #9fe8ff;
  animation: heartbeat 1.8s infinite, bluePulse 2s infinite alternate;
  text-shadow:
    0 0 6px #5edbff,
    0 0 12px #3bcaff,
    0 0 18px #1ab8ff;
}


@keyframes heartbeat {
  0%   { transform: scale(1); }
  25%  { transform: scale(1.12); }
  40%  { transform: scale(0.95); }
  60%  { transform: scale(1.1); }
  100% { transform: scale(1); }
}


@keyframes bluePulse {
  0% { text-shadow: 0 0 6px #5edbff, 0 0 12px #3bcaff; }
  100% { text-shadow: 0 0 16px #aaf0ff, 0 0 28px #7adeff; }
}


.gallery-container {
  text-align: center;
  margin: 20px auto;
  max-width: 1200px;
  overflow: hidden;
}
h1 { font-size: 40px; margin-bottom: 5px; }
h3 { font-size: 18px; opacity: 0.9; margin-bottom: 20px; }


.gallery {
  display: flex;
  flex-wrap: nowrap;
  transition: transform 0.5s ease;
}

.page {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  min-width: 100%;
}


.photo-card {
  position: relative;
  border-radius: 15px;
  overflow: hidden;
  cursor: pointer;
  width: 300px;
  height: 200px;
  transition: transform 0.5s ease, opacity 0.5s ease;
}
.photo-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.photo-card.full img {
  width: auto;
  height: 100%;
  object-fit: contain;
  transform: scale(1);
}

.photo-card .description {
  position: absolute;
  bottom: 0;
  background: rgba(0,0,0,0.7);
  width: 100%;
  padding: 10px;
  font-size: 16px;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.4s ease, transform 0.4s ease;
  text-align: center;
  color: #9fe8ff;
  animation: heartbeat 2s infinite, bluePulse 2s infinite alternate;
}
.photo-card:hover .description {
  opacity: 1;
  transform: translateY(0);
}


.page .photo-card:nth-child(1),
.page .photo-card:nth-child(2),
.page .photo-card:nth-child(3) {
  flex: 0 0 calc(33.333% - 13.333px);
}
.page .photo-card:nth-child(4),
.page .photo-card:nth-child(5) {
  flex: 0 0 calc(50% - 10px);
}


.pagination {
  text-align: center;
  margin: 20px 0;
}
.pagination button {
  margin: 5px;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 8px;
  border: 2px solid #0ff;
  background: transparent;
  color: #0ff;
  cursor: pointer;
  transition: 0.3s;
  box-shadow: 0 0 10px #0ff;
}
.pagination button:hover {
  background: rgba(79,195,247,0.2);
  transform: scale(1.1);
}


.worm-trail {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}
</style>
</head>
<body>

<div id="stars-container"></div>

<nav class="nav-centered">
  <a href="{{ route('home') }}">Home</a>
  <a href="{{ route('nature') }}">Nature</a>
  <a href="{{ route('architecture') }}">Architecture</a>
  <a href="{{ route('animals') }}">Animals</a>
  <a href="{{ route('people') }}">People</a>
  <a href="{{ route('tourist') }}">Tourist Spots</a>
</nav>

<div class="gallery-container">
<h1 class="glow-blue">🐾 Animals Gallery</h1>
<h3 class="glow-blue">Discover the beauty and power of the animal kingdom.</h3>

<div class="gallery" id="gallery">


<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2015/04/07/03/44/fox-710454_1280.jpg"><div class="description">Red Fox in Snow</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2014/11/03/11/07/lion-515028_1280.jpg"><div class="description">Majestic Lion</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/14/03/46/girl-1822525_1280.jpg"><div class="description">Gentle Elephant</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/04/16/18/16/wolfdog-6184152_1280.jpg"><div class="description">Grey Wolf Stare</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/07/28/00/36/tiger-1546802_1280.jpg"><div class="description">Royal Tiger</div></div>
</div>


<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/01/12/14/55/hirsch-4760155_1280.jpg"><div class="description">Quiet Deer</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2024/09/27/22/44/owl-9079962_1280.jpg"><div class="description">Silent Owl</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/07/05/19/31/animal-2475743_1280.jpg"><div class="description">Curious Monkey</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/03/10/16/14/swan-7842666_1280.jpg"><div class="description">Graceful Swan</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/01/12/19/55/jellyfish-4760924_1280.jpg"><div class="description">Floating Jellyfish</div></div>
</div>


<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2024/09/19/07/30/wild-horse-9057944_1280.jpg"><div class="description">Wild Horse</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2018/10/13/05/40/chicken-3743561_1280.jpg"><div class="description">Little Duckling</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/10/23/16/14/bear-6735307_1280.jpg"><div class="description">Brown Bear</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2018/01/13/22/14/peacock-3080897_1280.jpg"><div class="description">Colorful Peacock</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/03/17/13/32/dolphin-2151575_1280.jpg"><div class="description">Playful Dolphins</div></div>
</div>


<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2014/10/29/03/34/penguin-507514_1280.jpg"><div class="description">Adorable Penguin</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2019/07/27/14/22/lion-4366887_1280.jpg"><div class="description">Lioness Resting</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/04/25/03/02/butterfly-7949342_1280.jpg"><div class="description">Colorful Butterfly</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2019/11/19/22/25/animal-4638681_1280.jpg"><div class="description">Tall Giraffe</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/06/10/22/43/jellyfish-6327182_1280.jpg"><div class="description">Jellyfish in Ocean</div></div>
</div>

</div>


<div class="pagination">
  <button onclick="prevPage()">Back</button>
  <button onclick="nextPage()">Forward</button>
</div>


<div id="worm-container" style="position: fixed; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:9999;"></div>

<script>

const starsContainer = document.getElementById('stars-container');
for (let i = 0; i < 120; i++) {
  let star = document.createElement("div");
  star.className = "star";
  star.style.left = Math.random() * 100 + "vw";
  star.style.animationDuration = 2 + Math.random() * 4 + "s";
  star.style.opacity = Math.random();
  starsContainer.appendChild(star);
}


const gallery = document.getElementById('gallery');
const pages = document.querySelectorAll('.gallery .page');
let currentPage = 0;

function showPage(page) {
  gallery.style.transform = `translateX(-${page * 100}%)`;
}
function nextPage() {
  if(currentPage < pages.length - 1) {
    currentPage++;
    showPage(currentPage);
  }
}
function prevPage() {
  if(currentPage > 0) {
    currentPage--;
    showPage(currentPage);
  }
}
showPage(currentPage);


const wormContainer = document.getElementById('worm-container');
const trailLength = 20;
const trail = [];

const head = document.createElement('img');
head.src = "https://png.pngtree.com/png-vector/20240131/ourmid/pngtree-dragon-head-isolated-on-white-transparent-background-png-image_11627519.png";
head.style.width = "30px";
head.style.height = "30px";
head.style.position = "absolute";
head.style.pointerEvents = "none";
head.style.transform = "translate(-50%, -50%)";
wormContainer.appendChild(head);

for (let i = 0; i < trailLength; i++) {
  const dot = document.createElement('div');
  dot.className = 'worm-trail';
  dot.style.width = i === 0 ? '20px' : '15px';
  dot.style.height = i === 0 ? '20px' : '15px';
  dot.style.background = i === 0 ? 'transparent' : 'linear-gradient(45deg, #00f, #1e90ff, #00bfff)';
  wormContainer.appendChild(dot);
  trail.push({el: dot, x: window.innerWidth/2, y: window.innerHeight/2});
}

let mouseX = window.innerWidth/2;
let mouseY = window.innerHeight/2;

document.addEventListener('mousemove', e => {  
  mouseX = e.clientX;  
  mouseY = e.clientY;  
});

function animateTrail() {
  trail[0].x += (mouseX - trail[0].x) * 0.2;
  trail[0].y += (mouseY - trail[0].y) * 0.2;

  head.style.left = trail[0].x + 'px';
  head.style.top = trail[0].y + 'px';
  head.style.transform = `translate(-50%, -50%) rotate(${Math.sin(Date.now()/100)*20}deg)`;

  for (let i = 1; i < trail.length; i++) {
    trail[i].x += (trail[i-1].x - trail[i].x) * 0.2;
    trail[i].y += (trail[i-1].y - trail[i].y) * 0.2;

    trail[i].el.style.left = trail[i].x + 'px';
    trail[i].el.style.top = trail[i].y + 'px';
    trail[i].el.style.transform = `translate(-50%, -50%) rotate(${Math.sin(Date.now()/100 + i)*20}deg)`;
  }

  requestAnimationFrame(animateTrail);
}
animateTrail();

const photoCards = document.querySelectorAll('.photo-card');
photoCards.forEach(card => {
  card.addEventListener('mouseenter', () => { card.classList.add('full'); });
  card.addEventListener('mouseleave', () => { card.classList.remove('full'); });
});

</script>
</body>
</html>
