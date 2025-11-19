<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Architecture Gallery</title>

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

.glow-grey {
  color: #ccc;
  animation: flip 2.5s ease-in-out infinite, greyPulse 2s infinite alternate;
  text-shadow:
    0 0 5px #ccc,
    0 0 10px #999,
    0 0 15px #777;
}

@keyframes flip {
  0% { transform: rotateY(0deg); }
  50% { transform: rotateY(180deg); }
  100% { transform: rotateY(360deg); }
}

@keyframes greyPulse {
  0% { text-shadow: 0 0 5px #ccc, 0 0 10px #999; }
  100% { text-shadow: 0 0 15px #fff, 0 0 25px #ccc; }
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
  color: #ccc;
  animation: flip 3s infinite, greyPulse 2s infinite alternate;
}
.photo-card.full .description {
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
<h1 class="glow-grey">🏛 Architecture Gallery</h1>
<h3 class="glow-grey">Explore iconic structures, modern designs, and human-engineered wonders.</h3>

<div class="gallery" id="gallery">

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/03/02/18/11/building-6063465_1280.jpg"><div class="description">Modern Glass Tower</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2022/01/04/19/25/building-6915781_1280.jpg"><div class="description">Urban Skyscraper</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/19/12/48/architecture-1839107_1280.jpg"><div class="description">Curved Stone Structure</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/19/14/44/buildings-1839647_1280.jpg"><div class="description">City Reflections</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/08/05/15/16/columns-8171283_1280.jpg"><div class="description">Symmetry Hall</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/03/11/12/26/gaiazoo-7844381_1280.jpg"><div class="description">Geometric Design</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2018/01/27/22/47/spiral-3112405_1280.jpg"><div class="description">Artistic Patterns</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/01/29/08/58/bridge-5960261_1280.jpg"><div class="description">Steel Walkway</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/01/29/20/24/building-4803602_1280.jpg"><div class="description">Corporate Towers</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/07/05/17/52/male-5373914_1280.jpg"><div class="description">Futuristic Office</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2014/09/08/19/17/church-439488_1280.jpg"><div class="description">Old Cathedral</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/07/15/17/55/fishermans-bastion-6469128_1280.jpg"><div class="description">Historic Castle</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2019/09/22/22/53/clock-4497144_1280.jpg"><div class="description">Stone Clock Tower</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/02/25/17/38/george-washington-bridge-2098351_1280.jpg"><div class="description">Architectural Bridge</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/04/02/22/39/statue-7895560_1280.jpg"><div class="description">Engraved Monument</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2022/10/03/19/03/building-7496662_1280.jpg"><div class="description">Steel & Glass Highrise</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2024/11/30/15/55/eiffel-tower-9235220_1280.jpg"><div class="description">Eiffel Structure Detail</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/01/02/10/21/building-5881123_1280.jpg"><div class="description">Urban Architecture Lines</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/01/18/13/10/galaxy-soho-1989816_1280.jpg"><div class="description">Modern Facade Pattern</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2024/06/01/12/35/ceiling-8802142_1280.jpg"><div class="description">Glass Curve Design</div></div>
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
  dot.style.background = i === 0 ? 'transparent' : 'linear-gradient(45deg, grey, white, black)';
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
