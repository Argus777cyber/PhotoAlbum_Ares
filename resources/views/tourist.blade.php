<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Tourist Spots Gallery</title>

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
  color: #f00;
  text-decoration: none;
  font-size: 20px;
  padding: 12px 22px;
  border: 2px solid #f00;
  border-radius: 10px;
  box-shadow: 0 0 15px #f00;
  animation: neonPulse 1.5s infinite alternate;
  transition: 0.3s;
}
nav a:hover {
  background: rgba(255,0,0,0.2);
  transform: scale(1.1);
}
@keyframes neonPulse {
  0% { box-shadow: 0 0 5px #f00, 0 0 10px #f00; }
  100% { box-shadow: 0 0 15px #f00, 0 0 30px #f00; }
}

.glow-red {
  color: #ff4500;
  animation: bounce 2s infinite;
  text-shadow:
    0 0 5px #ff4500,
    0 0 10px #ff6347,
    0 0 15px #ff0000;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-15px); }
  60% { transform: translateY(-7px); }
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
  transition: transform 0.5s ease, width 0.5s ease, height 0.5s ease;
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
  color: #ff4500;
  animation: bounce 2s infinite;
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
  border: 2px solid #f00;
  background: transparent;
  color: #f00;
  cursor: pointer;
  transition: 0.3s;
  box-shadow: 0 0 10px #f00;
}
.pagination button:hover {
  background: rgba(255,0,0,0.2);
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
<h1 class="glow-red">🌍 Tourist Spots Gallery</h1>
<h3 class="glow-red">Explore the world's most famous landmarks and destinations.</h3>

<div class="gallery" id="gallery">
  <!-- Page 1 -->
  <div class="page">
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/03/10/23/00/egypt-2133951_1280.jpg"><div class="description">Pyramids of Giza, Egypt</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2022/10/22/13/41/paris-7539257_1280.jpg"><div class="description">Eiffel Tower, France</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2013/06/02/08/49/new-york-115626_1280.jpg"><div class="description">Statue of Liberty, USA</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2025/03/31/21/30/italy-9505450_1280.jpg"><div class="description">Colosseum, Italy</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2013/11/24/15/45/england-217395_1280.jpg"><div class="description">Big Ben, UK</div></div>
  </div>

  <!-- Page 2 -->
  <div class="page">
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2019/12/16/05/08/opera-house-4698516_1280.jpg"><div class="description">Sydney Opera House, Australia</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2018/12/22/15/48/machu-pichu-3889867_1280.jpg"><div class="description">Machu Picchu, Peru</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2022/11/19/11/54/angkor-wat-7601878_1280.jpg"><div class="description">Angkor Wat, Cambodia</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2015/09/16/01/38/christ-942048_1280.jpg"><div class="description">Christ the Redeemer, Brazil</div></div>
    <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/06/05/21/09/cultural-tourism-5264542_1280.jpg"><div class="description">Taj Mahal, India</div></div>
  </div>

  <!-- Page 3 -->
<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/03/26/22/15/petra-4971956_1280.jpg"><div class="description">Petra, Jordan</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2015/11/05/23/02/chichen-itza-1025099_1280.jpg"><div class="description">Chichen Itza, Mexico</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/11/22/19/19/louvre-5767708_1280.jpg"><div class="description">Louvre Museum, France</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/05/21/09/43/australia-5200007_1280.jpg"><div class="description">Uluru, Australia</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/05/31/15/14/icehotel-2360708_1280.jpg"><div class="description">Icehotel, Sweden</div></div>
</div>

<!-- Page 4 -->
<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2014/11/30/20/46/sagrada-familia-552084_1280.jpg"><div class="description">Sagrada Familia, Spain</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2019/11/22/12/02/china-4644682_1280.jpg"><div class="description">Forbidden City, China</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/06/13/17/42/burj-khalifa-5295131_1280.jpg"><div class="description">Burj Khalifa, UAE</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/03/18/14/56/panorama-2154194_1280.jpg"><div class="description">Golden Gate Bridge, USA</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/10/06/11/50/italy-2822840_1280.jpg"><div class="description">Leaning Tower of Pisa, Italy</div></div>
</div>

</div>

<div class="pagination">
  <button onclick="prevPage()">Back</button>
  <button onclick="nextPage()">Forward</button>
</div>

<div id="worm-container" style="position: fixed; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:9999;"></div>

<script>
// Starfield
const starsContainer = document.getElementById('stars-container');
for (let i = 0; i < 120; i++) {
  let star = document.createElement("div");
  star.className = "star";
  star.style.left = Math.random() * 100 + "vw";
  star.style.animationDuration = 2 + Math.random() * 4 + "s";
  star.style.opacity = Math.random();
  starsContainer.appendChild(star);
}

// Gallery pagination
const gallery = document.getElementById('gallery');
const pages = document.querySelectorAll('.gallery .page');
let currentPage = 0;
function showPage(page) { gallery.style.transform = `translateX(-${page * 100}%)`; }
function nextPage() { if(currentPage < pages.length - 1) { currentPage++; showPage(currentPage); } }
function prevPage() { if(currentPage > 0) { currentPage--; showPage(currentPage); } }
showPage(currentPage);

// Dragon trail
const wormContainer = document.getElementById('worm-container');
const trailLength = 20;
const trail = [];
const head = document.createElement('img');
head.src = "https://png.pngtree.com/png-vector/20240131/ourmid/pngtree-dragon-head-isolated-on-white-transparent-background-png-image_11627519.png";
head.style.width = "30px"; head.style.height = "30px"; head.style.position = "absolute";
head.style.pointerEvents = "none"; head.style.transform = "translate(-50%, -50%)";
wormContainer.appendChild(head);

for (let i = 0; i < trailLength; i++) {
  const dot = document.createElement('div');
  dot.className = 'worm-trail';
  dot.style.width = i === 0 ? '20px' : '15px';
  dot.style.height = i === 0 ? '20px' : '15px';
  dot.style.background = i === 0 ? 'transparent' : 'linear-gradient(45deg, #ff0000, #ffa500, #1e90ff)';
  wormContainer.appendChild(dot);
  trail.push({el: dot, x: window.innerWidth/2, y: window.innerHeight/2});
}

let mouseX = window.innerWidth/2; let mouseY = window.innerHeight/2;
document.addEventListener('mousemove', e => { mouseX = e.clientX; mouseY = e.clientY; });

function animateTrail() {
  trail[0].x += (mouseX - trail[0].x) * 0.2;
  trail[0].y += (mouseY - trail[0].y) * 0.2;
  head.style.left = trail[0].x + 'px'; head.style.top = trail[0].y + 'px';
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

// Hover zoom-out for images
const photoCards = document.querySelectorAll('.photo-card');
photoCards.forEach(card => {
  card.addEventListener('mouseenter', () => { card.classList.add('full'); });
  card.addEventListener('mouseleave', () => { card.classList.remove('full'); });
});
</script>

</body>
</html>
