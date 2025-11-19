<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Nature Gallery</title>
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

.glow-green {
  color: #00ff00;
  animation: glowPulse 2s infinite alternate, swing 2s ease-in-out infinite;
  text-shadow: 
    0 0 5px #00ff00,
    0 0 10px #00ff00,
    0 0 15px #00ff00,
    0 0 25px #00ff00;
}

@keyframes glowPulse {
  0% { text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00; }
  100% { text-shadow: 0 0 10px #00ff00, 0 0 25px #00ff00, 0 0 40px #00ff00; }
}

@keyframes swing {
  0% { transform: rotate(0deg); }
  25% { transform: rotate(2deg); }
  50% { transform: rotate(-2deg); }
  75% { transform: rotate(2deg); }
  100% { transform: rotate(0deg); }
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
  color: #00ff00;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.4s ease, transform 0.4s ease;
  text-align: center;
  text-shadow: 
    0 0 5px #00ff00,
    0 0 10px #00ff00,
    0 0 20px #00ff00,
    0 0 35px #00ff00;
  animation: glowPulse 2.5s infinite alternate, swing 2.5s infinite ease-in-out;
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
<h1 class="glow-green">🌿 Nature Gallery</h1>
<h3 class="glow-green">Discover the beauty of nature through stunning landscapes and vibrant wildlife.</h3>

<div class="gallery" id="gallery">

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/07/31/23/46/trees-2562083_1280.jpg"><div class="description">Sunrise in Forest</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/09/25/10/46/water-8274680_1280.jpg"><div class="description">River Landscape</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2013/10/02/23/03/mountains-190055_1280.jpg"><div class="description">Mountain Peaks</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_1280.jpg"><div class="description">Calm Lake</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2018/10/05/14/39/sunset-3726030_1280.jpg"><div class="description">Beach Sunset</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/11/12/13/37/forest-2942477_1280.jpg"><div class="description">Green Forest Trail</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2023/05/08/17/20/waterfall-7979339_1280.jpg"><div class="description">Waterfall Paradise</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/03/05/14/56/snow-6071475_1280.jpg"><div class="description">Snowy Mountain</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2014/12/08/02/59/benches-560435_1280.jpg"><div class="description">Autumn Leaves</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/02/16/07/55/beach-4852830_1280.jpg"><div class="description">Sunny Beach</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/08/27/19/55/boat-6579441_1280.jpg"><div class="description">Foggy River</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/03/24/20/42/namibia-4965457_1280.jpg"><div class="description">Desert Dunes</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2015/06/19/20/13/sunset-815270_1280.jpg"><div class="description">Flower Field</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/22/21/43/cliffs-1850715_1280.jpg"><div class="description">Canyon View</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/08/30/12/08/horseshoe-bend-1630528_1280.jpg"><div class="description">River Bend</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/08/30/12/08/horseshoe-bend-1630528_1280.jpg"><div class="description">Tropical Island</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/08/06/12/06/people-2591874_1280.jpg"><div class="description">Sunset Cliffs</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/01/22/34/dirt-road-1789903_1280.jpg"><div class="description">Misty Forest</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/09/19/22/46/lake-1681485_1280.jpg"><div class="description">Mountain Lake</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/09/19/22/46/lake-1681485_1280.jpg"><div class="description">Open Meadow</div></div>
</div>

</div>

<div class="pagination">
  <button onclick="prevPage()">Back</button>
  <button onclick="nextPage()">Forward</button>
</div>
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
  dot.style.background = i === 0 ? 'transparent' : 'linear-gradient(45deg, yellow, green, blue)';
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
