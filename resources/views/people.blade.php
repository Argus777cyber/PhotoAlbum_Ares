<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>People Gallery</title>
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
.glow-orange {
  color: orange;
  animation: fadeIn 2s ease-in-out infinite alternate;
  text-shadow: 
    0 0 5px orange,
    0 0 10px orange,
    0 0 15px orange,
    0 0 25px orange;
}
@keyframes fadeIn {
  0% { opacity: 0; }
  50% { opacity: 1; }
  100% { opacity: 0; }
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
  color: orange;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.4s ease, transform 0.4s ease;
  text-align: center;
  text-shadow:
    0 0 5px orange,
    0 0 10px orange,
    0 0 20px orange,
    0 0 35px orange;
  animation: fadeIn 2s ease-in-out infinite alternate;
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
<h1 class="glow-orange">👥 People Gallery</h1>
<h3 class="glow-orange">Explore portraits, candid moments, and human stories from around the world.</h3>

<div class="gallery" id="gallery">

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2012/12/21/10/06/girl-71493_1280.jpg"><div class="description">Smiling Woman</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2022/07/22/23/53/little-girl-7339106_1280.jpg"><div class="description">Thoughtful Girl</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/01/22/09/38/meeting-4784909_1280.jpg"><div class="description">Group Discussion</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/06/14/19/19/girl-5299081_1280.jpg"><div class="description">Curious Child</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2018/04/27/03/50/portrait-3353699_1280.jpg"><div class="description">Young Man Portrait</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/12/20/09/08/girl-5846483_1280.jpg"><div class="description">Happy Girl</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/05/22/21/31/man-6274646_1280.jpg"><div class="description">Smiling Man</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/11/20/17/50/children-6812513_1280.jpg"><div class="description">Friends Laughing</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/01/08/17/02/old-man-5900410_1280.jpg"><div class="description">Elderly Smile</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/12/16/17/26/man-6874914_1280.jpg"><div class="description">Businessman</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/21/17/36/boy-1846704_1280.jpg"><div class="description">Teenager</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2022/08/24/12/25/thinking-7407597_1280.jpg"><div class="description">Man Thinking</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2019/06/06/18/43/girl-4256555_1280.jpg"><div class="description">Friends Chatting</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/11/19/07/30/girl-2961959_1280.jpg"><div class="description">Woman Portrait</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2020/08/12/23/00/man-5483771_1280.jpg"><div class="description">Man in Crowd</div></div>
</div>

<div class="page">
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2021/03/14/10/13/girl-6093779_1280.jpg"><div class="description">Woman Smiling</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg"><div class="description">Man Portrait</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2013/05/18/17/34/maracaibo-112036_1280.jpg"><div class="description">Older Man</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2016/02/23/04/52/model-1216916_1280.jpg"><div class="description">Young Girl</div></div>
  <div class="photo-card"><img src="https://cdn.pixabay.com/photo/2017/08/06/18/05/people-2594745_1280.jpg"><div class="description">Happy Woman</div></div>
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
  if(currentPage < pages.length - 1) currentPage++;
  showPage(currentPage);
}
function prevPage() {
  if(currentPage > 0) currentPage--;
  showPage(currentPage);
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
  dot.style.background = i === 0 ? 'transparent' : 'linear-gradient(45deg, #ff7f00, #ff8c00, #ffa500)';
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
