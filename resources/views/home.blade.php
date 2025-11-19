<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Photo Album - Homepage</title>
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

    
    .intro {
      text-align: center;
      margin-top: 50px;
    }

    .intro h1 {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .intro p {
      font-size: 18px;
      opacity: 0.9;
      max-width: 800px;
      margin: 0 auto;
    }

    .slider {
      width: 80%;
      margin: 50px auto;
      position: relative;
      height: 400px;
      border-radius: 15px;
      overflow: hidden;
    }

    .slides img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      animation: fadeSlide 50s infinite;
    }

    .slides img:nth-child(1) { animation-delay: 0s; }
    .slides img:nth-child(2) { animation-delay: 10s; }
    .slides img:nth-child(3) { animation-delay: 20s; }
    .slides img:nth-child(4) { animation-delay: 30s; }
    .slides img:nth-child(5) { animation-delay: 40s; }

    @keyframes fadeSlide {
      0% { opacity: 0; transform: scale(1); }
      5% { opacity: 1; transform: scale(1.05); }
      20% { opacity: 1; transform: scale(1.05); }
      25% { opacity: 0; transform: scale(1); }
      100% { opacity: 0; transform: scale(1); }
    }

    
    .album-description {
      text-align: center;
      max-width: 800px;
      margin: 20px auto;
      font-size: 18px;
      opacity: 0.9;
    }

    
    .button-container {
      text-align: center;
      margin: 30px 0;
    }

    .button-container .album-button {
      margin: 5px;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 8px;
      border: 2px solid #0ff;
      background: transparent;
      color: #0ff;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 0 10px #0ff;
    }

    .button-container .album-button:hover {
      background: rgba(79,195,247,0.2);
      transform: scale(1.1);
    }

    
    footer {
      text-align: center;
      margin: 100px 0 50px 0;
      font-size: 16px;
      opacity: 0.7;
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

  
  <div class="intro">
    <h1>Welcome to My Photo Album</h1>
    <p>Explore stunning collections of nature, architecture, animals, people, and breathtaking tourist destinations.</p>
  </div>

 
  <div class="slider">
    <div class="slides">
      <img src="https://cdn.pixabay.com/photo/2022/08/23/17/47/forest-7406241_1280.jpg" alt="Nature">
      <img src="https://cdn.pixabay.com/photo/2025/09/11/06/16/architecture-9827472_1280.jpg" alt="Architecture">
      <img src="https://cdn.pixabay.com/photo/2024/05/26/16/49/dog-8789154_1280.jpg" alt="Animals">
      <img src="https://cdn.pixabay.com/photo/2025/06/05/09/22/people-9642583_1280.jpg" alt="People">
      <img src="https://cdn.pixabay.com/photo/2013/04/16/14/22/brooklyn-bridge-105079_1280.jpg" alt="Tourist Spot">
    </div>
  </div>

 
  <div class="album-description">
    This photo album captures the beauty of our world, from breathtaking landscapes and architectural wonders to fascinating wildlife and vibrant cultures. Browse through each collection to experience moments frozen in time, each telling its own unique story.
  </div>


  <div class="button-container">
    <button class="album-button" onclick="location.href='{{ route('nature') }}'">Nature</button>
    <button class="album-button" onclick="location.href='{{ route('architecture') }}'">Architecture</button>
    <button class="album-button" onclick="location.href='{{ route('animals') }}'">Animals</button>
    <button class="album-button" onclick="location.href='{{ route('people') }}'">People</button>
    <button class="album-button" onclick="location.href='{{ route('tourist') }}'">Tourist Spots</button>
  </div>
  </div>

  <footer>
    &copy; 2025 Ares My Photo Album
    eli
  </footer>

  
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

    
    const wormContainer = document.getElementById('worm-container');
    const trailLength = 20;
    const trail = [];

    
    const head = document.createElement('img');
    head.src = "https://png.pngtree.com/png-vector/20240131/ourmid/pngtree-dragon-head-isolated-on-white-transparent-background-png-image_11627519.png"; 
    head.style.width = "40px";
    head.style.height = "40px";
    head.style.position = "absolute";
    head.style.pointerEvents = "none";
    head.style.transform = "translate(-50%, -50%)";
    wormContainer.appendChild(head);

    for (let i = 0; i < trailLength; i++) {
      const dot = document.createElement('div');
      dot.className = 'worm-trail';
      dot.style.width = i === 0 ? '20px' : '15px';
      dot.style.height = i === 0 ? '20px' : '15px';
      dot.style.background = i === 0 ? 'transparent' : 'linear-gradient(45deg, #ff0000, #ff7f00, #1e90ff)';
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
      
      trail[0].x += (mouseX - trail[0].x) * 0.25;
      trail[0].y += (mouseY - trail[0].y) * 0.25;
      const dx = mouseX - trail[0].x;
      const dy = mouseY - trail[0].y;
      const angle = Math.atan2(dy, dx) * (180/Math.PI);
      head.style.left = trail[0].x + 'px';
      head.style.top = trail[0].y + 'px';
      head.style.transform = `translate(-50%, -50%) rotate(${angle}deg)`;

     
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
  </script>

</body>
</html>
