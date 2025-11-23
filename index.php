<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Girdhar Goyal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hero.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  </head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/hero.jpg" alt="" class="img-fluid  rounded">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
    
      <h1 class="sitename">Girdhar Goyal</h1>
    </a>

    <div class="social-links text-center">
      <a href="https://www.instagram.com/girdhargoyal__07?igsh=MTlnbGJ3bXIwMzRmcg==" target="_blank" class="mx-2 text-light fs-5"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/girdhar-goyal-1376b5332?utm_source=share_via&utm_content=profile&utm_medium=member_android" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    
    <!-- Hero Section -->
<section id="hero" class="hero section dark-background position-relative d-flex align-items-center justify-content-center text-center">

  <!-- Background Image -->
  <!-- <img src="assets/img/hero.jpg" alt="Hero Background" class="hero-bg"> -->
  

  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Hero Content -->
  <div class="container hero-content">
    <h2 class="hero-name">Girdhar Goyal</h2>
    <h1 class="hero-tagline">
       <span class="text-gradient">Techie by Passion</span>, Developer by Vision.”
    </h1>
    <p class="hero-typed">I'm 
      <span class="typed" data-typed-items="Full Stack Developer, UI/UX Designer, Frontend Devloper, Backend Devloper"></span>
    </p>

    <div class="mt-4 hero-buttons">
      <a href="#portfolio" class="btn btn-primary btn-glow me-2">View Projects</a>
      <a href="#contact" class="btn btn-outline-light btn-glow">Hire Me</a>
    </div>
  </div>
   <script type="module" src="https://unpkg.com/@splinetool/viewer@1.12.0/build/spline-viewer.js"></script>
<spline-viewer url="https://prod.spline.design/OqUkSe2mYsMfLwnm/scene.splinecode" ></spline-viewer>
</section>

<style>
  /* ===== Hero Section Styling ===== */
  .hero {
    height: 100vh;
    position: relative;
    overflow: hidden;
    color: #fff;
  }

  /* .hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(55%) saturate(120%);
    animation: zoomParallax 15s ease-in-out infinite alternate;
    z-index: 1;
  } 

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    backdrop-filter: blur(4px);
    z-index: 2;
  }

  .hero-content {
    position: relative;
    z-index: 3;
    max-width: 800px;
    text-align: center;
    animation: fadeInMain 1.2s ease-out forwards;
  }

  /* ===== Text Animations ===== */
  .hero-name {
    font-size: 3.2rem;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 1rem;
    text-transform: uppercase;
    opacity: 0;
    animation: slideUp 1s ease-out 0.5s forwards, glowPulse 3s ease-in-out infinite alternate;
  }

  .hero-tagline {
    font-size: 1.3rem;
    font-weight: 400;
    color: #d3d3d3;
    margin-bottom: 1.5rem;
    opacity: 0;
    animation: fadeIn 1.5s ease-out 1s forwards;
  }

  .hero-typed {
    font-size: 1.2rem;
    font-weight: 500;
    opacity: 0;
    animation: fadeInUp 1.8s ease-out 1.5s forwards;
  }

  /* ===== Gradient Text Effect ===== */
  .text-gradient {
    background: linear-gradient(90deg, #00c6ff, #0072ff, #9b59b6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 600;
  }

  /* ===== Buttons ===== */
  .btn-glow {
    border-radius: 50px;
    padding: 10px 25px;
    font-weight: 500;
    transition: all 0.4s ease;
    opacity: 0;
  }

  .btn-primary.btn-glow {
    background: linear-gradient(90deg, #0072ff, #00c6ff);
    border: none;
    color: #fff;
    animation: fadeInUp 2s ease-out 2.2s forwards;
  }

  .btn-outline-light.btn-glow {
    border: 1px solid rgba(255, 255, 255, 0.6);
    color: #fff;
    animation: fadeInUp 2.2s ease-out 2.4s forwards;
  }

  .btn-glow:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 0 25px rgba(0, 198, 255, 0.7);
  }

  /* ===== Keyframes ===== */
  @keyframes zoomParallax {
    from { transform: scale(1); }
    to { transform: scale(1.12); }
  }

  @keyframes slideUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }

  @keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  @keyframes glowPulse {
    0% { text-shadow: 0 0 5px #00c6ff, 0 0 10px #0072ff; }
    100% { text-shadow: 0 0 20px #00c6ff, 0 0 40px #0072ff; }
  }

  @keyframes fadeInMain {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 768px) {
    .hero-name {
      font-size: 2.2rem;
    }
    .hero-tagline {
      font-size: 1rem;
      padding: 0 10px;
    }
  }
</style>
<!-- =========================
  INTENSE HACKED TRANSITION for "Hire Me"
  Targets: a[href="#contact"]
  Paste before </body>
  ========================= -->

<style>
/* Overlay */
#hack-intense {
  position: fixed; inset: 0; display: none; z-index: 1000000;
  background: radial-gradient(circle at 20% 20%, rgba(8,8,10,0.95), rgba(0,0,0,0.98));
  color: #fff; font-family: ui-monospace, "Roboto Mono", SFMono-Regular, Menlo, Monaco, monospace;
  align-items: center; justify-content: center; overflow: hidden;
}

/* full-screen glitch canvas */
#hack-canvas { position:absolute; inset:0; width:100%; height:100%; z-index:1000001; pointer-events:none; }

/* central display */
#hack-intense-card {
  position: relative; z-index:1000002;
  width: min(900px, 92%); padding: 26px; border-radius: 12px;
  background: linear-gradient(180deg, rgba(2,6,10,0.45), rgba(6,10,16,0.55));
  border: 1px solid rgba(255,40,40,0.06);
  box-shadow: 0 30px 80px rgba(0,0,0,0.7), 0 0 60px rgba(255,40,40,0.03) inset;
  display:flex; gap:18px; align-items:center;
}

/* left: big status */
#hack-left { flex:1; min-height:120px; }
.hi-line { color: #ffdddd; font-size:14px; line-height:1.5; white-space:pre-wrap; letter-spacing:0.2px; opacity:0.98; }

/* red headline */
#hi-head {
  font-size:20px; font-weight:700; color:#ff5b5b; letter-spacing:0.6px; margin-bottom:8px;
  text-shadow: 0 6px 18px rgba(255,60,60,0.07);
}

/* danger badge */
#danger { display:inline-block; padding:6px 10px; border-radius:8px; background: rgba(255,40,40,0.08); border:1px solid rgba(255,40,40,0.12); color:#ff9b9b; font-weight:600; margin-bottom:8px; }

/* right side: countdown + progress */
#hack-right { width:240px; display:flex; flex-direction:column; gap:12px; align-items:center; }
#hi-count { font-size:42px; font-weight:800; color:#ff6b6b; letter-spacing:1px; text-shadow: 0 6px 30px rgba(255,80,80,0.08); }
#hi-sub { font-size:12px; color: rgba(255,200,200,0.9); }
#hi-progress { width:100%; height:12px; background: rgba(255,255,255,0.04); border-radius:10px; overflow:hidden; box-shadow: inset 0 1px 8px rgba(0,0,0,0.6); }
#hi-progress .bar { height:100%; width:0%; background: linear-gradient(90deg,#ff6b6b,#ff9b6b); transition: width 120ms linear; box-shadow: 0 0 18px rgba(255,100,100,0.08); }

/* glitch text flicker */
.glitch {
  position: relative;
  color: #ffecec;
  mix-blend-mode: screen;
}
.glitch::before, .glitch::after{
  content: attr(data-text);
  position: absolute; left:0; top:0;
  clip: rect(0,900px,0,0);
}
.glitch::before { left:2px; text-shadow:-2px 0 #ff6b6b; animation: glitch-anim-1 1s infinite linear; }
.glitch::after  { left:-2px; text-shadow:2px 0 #6bffdb; animation: glitch-anim-2 1.2s infinite linear; }
@keyframes glitch-anim-1 { 0%{clip:rect(0,900px,0,0)} 20%{clip:rect(10px,900px,60px,0)} 40%{clip:rect(0,900px,0,0)} 60%{clip:rect(50px,900px,90px,0)} 80%{clip:rect(0,900px,0,0)} 100%{clip:rect(10px,900px,40px,0)}}
@keyframes glitch-anim-2 { 0%{clip:rect(0,900px,0,0)} 25%{clip:rect(30px,900px,80px,0)} 50%{clip:rect(0,900px,0,0)} 75%{clip:rect(12px,900px,46px,0)} 100%{clip:rect(0,900px,0,0)}}

/* shake effect */
@keyframes shake { 0%{transform:translateX(0)} 20%{transform:translateX(-6px)} 40%{transform:translateX(6px)} 60%{transform:translateX(-3px)} 80%{transform:translateX(3px)} 100%{transform:translateX(0)} }

/* small footer note */
#hi-note { font-size:12px; color: rgba(255,200,200,0.8); margin-top:6px; }

/* responsive */
@media (max-width:820px) {
  #hack-intense-card { flex-direction:column; gap:12px; padding:16px; }
  #hack-right { width:100%; flex-direction:row; justify-content:space-between; gap:16px; }
  #hi-count { font-size:34px; }
}
</style>

<!-- DOM -->
<canvas id="hack-canvas" aria-hidden="true"></canvas>

<div id="hack-intense" role="dialog" aria-modal="true" aria-hidden="true">
  <div id="hack-intense-card" role="document" aria-label="Hacking display">
    <div id="hack-left">
      <div id="danger">BREACH SIMULATION</div>
      <div id="hi-head" class="glitch" data-text="SECURITY BREACHED">SECURITY BREACHED</div>
      <div class="hi-line" id="hi-line-1"></div>
      <div class="hi-line" id="hi-line-2"></div>
      <div class="hi-line" id="hi-line-3"></div>
    </div>

    <div id="hack-right">
      <div id="hi-count">3</div>
      <div id="hi-sub">Auto-redirect in</div>
      <div id="hi-progress" aria-hidden="true"><div class="bar" id="hi-bar"></div></div>
      <div id="hi-note">Press <kbd>Escape</kbd> to skip</div>
    </div>
  </div>
</div>

<script>
(function(){
  const SELECTOR = 'a[href="#contact"]';
  const OVERLAY = document.getElementById('hack-intense');
  const CANVAS = document.getElementById('hack-canvas');
  const ctx = CANVAS.getContext && CANVAS.getContext('2d');

  // elements
  const L1 = document.getElementById('hi-line-1');
  const L2 = document.getElementById('hi-line-2');
  const L3 = document.getElementById('hi-line-3');
  const COUNT = document.getElementById('hi-count');
  const BAR = document.getElementById('hi-bar');

  // Canvas size
  function resizeCanvas(){ CANVAS.width = window.innerWidth; CANVAS.height = window.innerHeight; }
  window.addEventListener('resize', resizeCanvas);
  resizeCanvas();

  // Matrix rain particles
  const cols = Math.floor(window.innerWidth / 16);
  let drops = Array(cols).fill(0);
  function drawMatrix(){
    if(!ctx) return;
    // fade the canvas slightly to create trailing
    ctx.fillStyle = 'rgba(0,0,0,0.12)';
    ctx.fillRect(0,0,CANVAS.width,CANVAS.height);
    ctx.fillStyle = 'rgba(0,255,150,0.16)';
    ctx.font = '14px monospace';
    for(let i=0;i<drops.length;i++){
      const char = String.fromCharCode(33 + Math.random()*90);
      ctx.fillText(char, i*16, drops[i]*16);
      if(drops[i]*16 > CANVAS.height && Math.random() > 0.975) drops[i]=0;
      drops[i]++;
    }
  }

  // small screen shake function
  function shakeCard(times=6, dur=500){
    const card = document.getElementById('hack-intense-card');
    if(!card) return;
    card.style.animation = `shake ${dur}ms`;
    setTimeout(()=> card.style.animation = '', dur + 20);
  }

  // run intense sequence
  async function runIntense(target){
    if(!OVERLAY) return;
    if(OVERLAY.dataset.running === '1') return;
    OVERLAY.dataset.running = '1';
    OVERLAY.style.display = 'flex';
    OVERLAY.setAttribute('aria-hidden','false');

    // prepare lines and progress
    L1.textContent = '';
    L2.textContent = '';
    L3.textContent = '';

    let seq = [
      '>> Verifying identity token...',
      '>> Breaking local firewall (simulation)...',
      '>> Escalating privileges...',
      '>> Extracting contact endpoint...',
      '>> Preparing redirect payload...'
    ];

    // fast typed lines with short delays
    for(let i=0;i<seq.length;i++){
      await typeLine([L1,L2,L3][i%3], seq[i], 22); // fast typing
      // flash progress
      BAR.style.width = Math.round(((i+1)/seq.length)*80) + '%';
      shakeCard();
      await wait(120);
    }

    // final burst
    BAR.style.width = '100%';
    // show countdown 3..2..1
    for(let c=3;c>=1;c--){
      COUNT.textContent = c;
      // brief brighter canvas
      flashCanvas();
      await wait(400);
    }

    // final visual: quick matrix run for short time
    let frames = 18;
    for(let f=0; f<frames; f++){
      drawMatrix();
      await wait(40);
    }

    // hide and scroll
    setTimeout(()=> {
      OVERLAY.style.display = 'none';
      OVERLAY.setAttribute('aria-hidden','true');
      OVERLAY.dataset.running = '0';
      const contact = document.querySelector('#contact');
      if(contact){
        contact.scrollIntoView({behavior: 'smooth', block: 'start'});
        history.replaceState(null, '', '#contact');
      }
    }, 120);
  }

  // little helpers
  function wait(ms){ return new Promise(res => setTimeout(res, ms)); }
  async function typeLine(el, text, interval){
    if(!el) return;
    el.textContent = '';
    for(let i=0;i<text.length;i++){
      el.textContent += text[i];
      await wait(interval);
    }
  }

  // canvas flash
  function flashCanvas(){
    if(!ctx) return;
    ctx.fillStyle = 'rgba(255,40,40,0.06)';
    ctx.fillRect(0,0,CANVAS.width,CANVAS.height);
  }

  // attach handlers to Hire Me links
  function attach(){
    const links = document.querySelectorAll(SELECTOR);
    links.forEach(link => {
      if(link.dataset.hackIntense === '1') return;
      link.dataset.hackIntense = '1';
      link.addEventListener('click', function(e){
        if (e.ctrlKey || e.metaKey || e.button === 1) return; // allow open in new tab
        e.preventDefault();
        runIntense(link);
      });
    });
  }

  // Escape to cancel
  window.addEventListener('keydown', function(e){
    if(e.key === 'Escape' && OVERLAY && OVERLAY.style.display === 'flex'){
      OVERLAY.style.display = 'none';
      OVERLAY.setAttribute('aria-hidden','true');
      OVERLAY.dataset.running = '0';
    }
  });

  // init and observe
  attach();
  new MutationObserver(attach).observe(document.body, {childList:true, subtree:true});

})();
</script>
<!-- QUICK HACKED-STYLE TRANSITION — faster + updated messages -->
<style>
/* (keep same styles as before if already present) */
/* Overlay container */
#hack-overlay { position: fixed; inset: 0; display: none; z-index: 999999; background: radial-gradient(ellipse at center, rgba(2,6,23,0.95) 0%, rgba(0,0,0,0.98) 60%); color: #c8f7ff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, "Roboto Mono", "Courier New", monospace; align-items: center; justify-content: center; overflow: hidden; }
#hack-card { width: min(1000px, 92%); max-width: 1100px; padding: 20px; border-radius: 12px; background: linear-gradient(180deg, rgba(0,0,0,0.35), rgba(8,12,18,0.6)); box-shadow: 0 10px 60px rgba(0,0,0,0.6), 0 0 90px rgba(0,150,200,0.08) inset; border: 1px solid rgba(100,255,220,0.06); position: relative; transform: translateY(-6px); display: grid; grid-template-columns: 1fr 240px; gap: 16px; }
#hack-terminal { min-height: 120px; max-height: 420px; overflow: hidden; padding-right: 8px; }
#hack-side { display:flex; flex-direction:column; gap:12px; align-items:center; justify-content:center; padding-left:8px; }
.hack-line { color:#b9f0ff; opacity:0.98; font-size:13px; line-height:1.45; white-space:pre-wrap; letter-spacing:0.2px; }
.hack-caret { display:inline-block; width:8px; height:16px; background:#b9f0ff; margin-left:6px; animation:blink 1s steps(2,start) infinite; vertical-align:middle; } @keyframes blink{50%{opacity:0}}
#scan-bar { position:absolute; left:-30%; top:-6%; width:160%; height:1px; background:linear-gradient(90deg, transparent, rgba(0,220,255,0.06), transparent); transform:rotate(-1deg); animation:scan 3s linear infinite; filter:blur(1px);} @keyframes scan{0%{left:-30%}100%{left:130%}}
.matrix { position:absolute; inset:0; background-image: linear-gradient(180deg, rgba(0,255,200,0.02), transparent 20%); mix-blend-mode:screen; pointer-events:none; opacity:0.6; }
#hack-progress{ width:100%; background: rgba(255,255,255,0.04); border-radius:10px; overflow:hidden; height:12px; box-shadow: inset 0 1px 8px rgba(0,0,0,0.6); } 
#hack-progress .bar{ height:100%; width:0%; background: linear-gradient(90deg, rgba(255,255,255,0.06), rgba(0,200,255,0.18)); transition: width 250ms linear; box-shadow: 0 0 18px rgba(0,200,255,0.08); }
#grant{ padding:10px 16px; border-radius:8px; background: rgba(0,255,180,0.06); border:1px solid rgba(0,255,180,0.08); color: rgba(160,255,220,0.95); font-weight:600; opacity:0; transform:translateY(6px); transition: opacity 180ms ease, transform 180ms ease; }
#hack-footer{ margin-top:10px; font-size:12px; color: rgba(200,230,240,0.75); opacity:0.95; }
@media (max-width:880px){ #hack-card{grid-template-columns:1fr; padding:14px; gap:10px;} #hack-side{flex-direction:row; gap:8px;} }
</style>

<div id="hack-overlay" role="dialog" aria-modal="true" aria-hidden="true">
  <div id="scan-bar" aria-hidden="true"></div>
  <div class="matrix" aria-hidden="true"></div>

  <div id="hack-card" role="document" aria-label="Hacking animation">
    <div id="hack-terminal" aria-hidden="true">
      <div class="hack-line" id="line-1"></div>
      <div class="hack-line" id="line-2"></div>
      <div class="hack-line" id="line-3"></div>
      <div class="hack-line" id="line-4"></div>
      <div class="hack-line" id="line-5"></div>
    </div>

    <div id="hack-side" aria-hidden="true">
      <div id="hack-progress" aria-hidden="true"><div class="bar" id="bar"></div></div>
      <div id="grant">ACCESS GRANTED</div>
      <div id="hack-footer">Press <kbd>Escape</kbd> to skip</div>
    </div>
  </div>
</div>

<script>
(function(){
  const SELECTOR = 'a[href="#portfolio"]';
  const OVERLAY = document.getElementById('hack-overlay');
  const LINES = [
    document.getElementById('line-1'),
    document.getElementById('line-2'),
    document.getElementById('line-3'),
    document.getElementById('line-4'),
    document.getElementById('line-5'),
  ];
  const PROG = document.getElementById('bar');
  const GRANT = document.getElementById('grant');

  // Updated messages per request (short & clear)
  const messages = [
    'Verifying user...',
    'System verification...',
    'Checking permissions...',
    'Loading projects...',
    'Finalizing access...'
  ];

  // FAST timings
  const TYPING_INTERVAL = 18; // ms per character (fast)
  const PAUSE_BETWEEN_LINES = 110; // ms (short)
  const END_PAUSE = 160; // ms before hiding overlay

  function wait(ms){ return new Promise(res=>setTimeout(res, ms)); }

  async function typeLine(el, text, interval) {
    el.textContent = '';
    for (let i=0;i<text.length;i++){
      el.textContent += text[i];
      await wait(interval);
    }
  }

  async function runSequence(targetElement) {
    if (!OVERLAY) return;
    if (OVERLAY.dataset.running === '1') return;
    OVERLAY.dataset.running = '1';
    OVERLAY.style.display = 'flex';
    OVERLAY.setAttribute('aria-hidden','false');

    GRANT.style.opacity = 0; GRANT.style.transform = 'translateY(6px)';
    PROG.style.width = '0%';
    LINES.forEach(l => l.textContent = '');

    for (let i=0;i<messages.length;i++){
      const message = messages[i];
      const lineEl = LINES[i];
      await typeLine(lineEl, '> ' + message, TYPING_INTERVAL);
      const percent = Math.round(((i+1)/messages.length)*98);
      PROG.style.width = percent + '%';
      await wait(PAUSE_BETWEEN_LINES);
    }

    await wait(END_PAUSE);
    PROG.style.width = '100%';
    GRANT.style.opacity = 1;
    GRANT.style.transform = 'translateY(0)';

    // short delay then scroll
    setTimeout(() => {
      OVERLAY.style.display = 'none';
      OVERLAY.setAttribute('aria-hidden','true');
      OVERLAY.dataset.running = '0';
      const portfolio = document.querySelector('#portfolio');
      if (portfolio) {
        portfolio.scrollIntoView({ behavior: 'smooth', block: 'start' });
        history.replaceState(null,'','#portfolio');
      }
    }, 120);
  }

  function attachHandlers(){
    const links = document.querySelectorAll(SELECTOR);
    links.forEach(link => {
      if (link.dataset.hackAttached === '1') return;
      link.dataset.hackAttached = '1';
      link.addEventListener('click', function(e){
        if (e.ctrlKey || e.metaKey || e.button === 1) return;
        e.preventDefault();
        runSequence(link);
      });
    });
  }

  window.addEventListener('keydown', function(e){
    if (e.key === 'Escape' && OVERLAY && OVERLAY.style.display === 'flex') {
      OVERLAY.style.display = 'none';
      OVERLAY.setAttribute('aria-hidden','true');
      OVERLAY.dataset.running = '0';
    }
  });

  attachHandlers();
  new MutationObserver(attachHandlers).observe(document.body, {childList:true, subtree:true});
})();
</script>


   <!-- About Section -->
<section id="about" class="about section py-5 position-relative" style="background: linear-gradient(135deg, #f8f9fc 0%, #e9efff 100%); color:#222;">

  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold" style="color:#0072ff;">About Me</h2>
      <p class="mt-3 mx-auto" style="max-width:800px; color:#555;">
        Hi! I’m <strong>GIRDHAR GOYAL</strong> — a <b>Bachelor of Computer Applications (BCA) — Pursuing</b> turned <>Full-Stack Web Developer (MERN)</b>.  
        With <b>50+ stock market certifications</b> and <b>Microsoft expertise</b>, I love bridging technology, and creativity into powerful solutions.
      </p>
    </div>

    <!-- Content -->
    <div class="row gy-4 align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="100">

      <!-- Profile -->
      <div class="col-lg-4 text-center">
        <div class="profile-card p-3 rounded-4 shadow-lg bg-white">
          <img src="assets/img/hero.jpg" alt="GirdharGoyal" class="img-fluid rounded-4 shadow-sm" style="border:4px solid #0072ff;">
        </div>
      </div>

      <!-- Info -->
      <div class="col-lg-8 content">
        <h2 class="fw-bold mb-3" style="color:#0072ff;">Web Developer • Designer </h2>
        <p class="fst-italic mb-4" style="color:#666;">
          “Turning ideas into scalable web experiences that inspire and perform.”
        </p>

        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled about-list">
              <li><i class="bi bi-cake2 text-primary"></i> <strong>DOB:</strong> <span>3 jan 2006</span></li>
              <li><i class="bi bi-phone text-primary"></i> <strong>Phone:</strong> <span>+91 6367335145</span></li>
              <li><i class="bi bi-geo-alt text-primary"></i> <strong>City:</strong> <span>Jodhpur, Rajasthan</span></li>
            </ul>
          </div>

          <div class="col-lg-6">
            <ul class="list-unstyled about-list">
              <li><i class="bi bi-mortarboard text-primary"></i> <strong>Degree:</strong> <span>BCA — Pursuing</span></li>
              <li><i class="bi bi-envelope text-primary"></i> <strong>Email:</strong> <span>goyalgirdhar153@gmail.com</span></li>
            </ul>
          </div>
        </div>

        <p class="mt-4" style="color:#555;">
          Girdhar is a versatile professional blending creativity, code, and analytics. 
          He builds impactful digital products, explores innovative ideas, and believes in continuous learning to stay ahead in tech.
        </p>
      </div>
    </div>
 <script>
document.addEventListener('DOMContentLoaded', function() {
  const hero = document.getElementById('hero');
  const about = document.getElementById('about');

  // Function to trigger hero -> about animation
  function animateToAbout() {
    if (!hero || !about) return;

    // 1. Hero overlay / fade effect
    const heroOverlay = document.createElement('div');
    heroOverlay.style.position = 'fixed';
    heroOverlay.style.top = '0';
    heroOverlay.style.left = '0';
    heroOverlay.style.width = '100%';
    heroOverlay.style.height = '100%';
    heroOverlay.style.background = 'rgba(0,0,0,0.85)';
    heroOverlay.style.backdropFilter = 'blur(4px)';
    heroOverlay.style.zIndex = '9999';
    heroOverlay.style.pointerEvents = 'none';
    heroOverlay.style.opacity = '0';
    heroOverlay.style.transition = 'opacity 0.4s ease-in-out';
    document.body.appendChild(heroOverlay);

    // Fade in overlay
    requestAnimationFrame(() => { heroOverlay.style.opacity = '1'; });

    // Glitchy scanlines effect (optional)
    heroOverlay.classList.add('tech-glitch');

    // 2. After short delay, scroll to about
    setTimeout(() => {
      about.scrollIntoView({ behavior: 'smooth' });
    }, 350);

    // 3. Remove overlay gradually
    setTimeout(() => {
      heroOverlay.style.opacity = '0';
      setTimeout(() => heroOverlay.remove(), 400);
    }, 900);
  }

  // Trigger when View Projects clicked (or hero → about navigation)
  const viewProjectsBtn = document.querySelector('a[href="#portfolio"]');
  const hireMeBtn = document.querySelector('a[href="#contact"]');

  // Optional: About Section link
  const aboutLink = document.querySelector('a[href="#about"]');
  if (aboutLink) aboutLink.addEventListener('click', e => { e.preventDefault(); animateToAbout(); });

  // Example: you can call this function whenever you scroll / navigate hero → about
  // For demonstration, let's auto trigger if hero scrolls into view of about (IntersectionObserver)
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        // Already visible? You can optionally trigger effect here
      }
    });
  }, { threshold: 0.1 });
  observer.observe(about);

  window.animateToAbout = animateToAbout; // expose for manual trigger
});
</script>

<style>
/* Optional: glitchy/scanline effect */
.tech-glitch {
  background-image:
    repeating-linear-gradient(
      0deg,
      rgba(255,255,255,0.02) 0,
      rgba(255,255,255,0.02) 1px,
      transparent 1px,
      transparent 3px
    );
  animation: scanlineShift 0.5s infinite linear;
}

@keyframes scanlineShift {
  0% { background-position-y: 0; }
  100% { background-position-y: 4px; }
}
</style>



<!-- Skills Section -->
<section id="skills" class="skills section" style="background: linear-gradient(135deg, #f8faff 0%, #e8f0ff 100%); padding: 80px 0;">

  <!-- Section Title -->
  <div class="container section-title text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold" style="color:#0072ff;">My Skills</h2>
    <p class="text-secondary">Technologies and tools I use to build powerful, scalable and creative web applications.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill d-flex align-items-center">
            <i class="bi bi-filetype-html text-danger me-2 fs-5"></i>
            <span>HTML</span> <i class="val ms-auto">100%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" style="background:linear-gradient(90deg,#ff512f,#dd2476);" role="progressbar" aria-valuenow="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill d-flex align-items-center">
            <i class="bi bi-filetype-css text-primary me-2 fs-5"></i>
            <span>CSS & Tailwind CSS</span> <i class="val ms-auto">90%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" style="background:linear-gradient(90deg,#0072ff,#00c6ff);" role="progressbar" aria-valuenow="90"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill d-flex align-items-center">
            <i class="bi bi-code-slash text-warning me-2 fs-5"></i>
            <span>JavaScript</span> <i class="val ms-auto">80%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" style="background:linear-gradient(90deg,#f7971e,#ffd200);" role="progressbar" aria-valuenow="80"></div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill d-flex align-items-center">
            <i class="bi bi-braces-asterisk text-purple me-2 fs-5"></i>
            <span>MongoDB</span> <i class="val ms-auto">80%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" style="background:linear-gradient(90deg,#8e2de2,#4a00e0);" role="progressbar" aria-valuenow="85"></div>
          </div>
        </div>
        <div class="progress">
          <span class="skill d-flex align-items-center">
            <i class="bi bi-braces-asterisk text-purple me-2 fs-5"></i>
            <span>PHP</span> <i class="val ms-auto">80%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" style="background:linear-gradient(90deg,#8e2de2,#4a00e0);" role="progressbar" aria-valuenow="85"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill d-flex align-items-center">
            <i class="bi bi-bootstrap text-indigo me-2 fs-5"></i>
            <span>Bootstrap</span> <i class="val ms-auto">100%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" style="background:linear-gradient(90deg,#563d7c,#9966ff);" role="progressbar" aria-valuenow="90"></div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <style>
    .progress {
      height: 50px;
      background: #fff;
      border-radius: 15px;
      padding: 10px 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      margin-bottom: 25px;
      transition: transform 0.3s ease;
    }

    .progress:hover {
      transform: translateY(-4px);
    }

    .progress-bar-wrap {
      height: 6px;
      background: #e9ecef;
      border-radius: 10px;
      overflow: hidden;
      margin-top: 8px;
    }

    .progress-bar {
      height: 6px;
      border-radius: 10px;
      animation: grow 1.8s ease forwards;
    }

    @keyframes grow {
      0% { width: 0%; }
      100% { width: var(--progress-value, 100%); }
    }

    .skill {
      font-weight: 600;
      color: #222;
      font-size: 0.95rem;
    }

    .skill i.val {
      font-style: normal;
      color: #0072ff;
      font-weight: 700;
    }

    .text-purple { color: #8e2de2; }
    .text-indigo { color: #563d7c; }
  </style>

</section>

<!-- Resume Section -->
<section id="resume" class="resume section bg-light">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2 class="fw-bold">Resume</h2>
    
  </div>
  <!-- End Section Title -->

  <div class="container">

    <div class="row g-4">

      <!-- Left Column -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <h3 class="resume-title text-primary border-bottom pb-2 mb-3">Summary</h3>
        <div class="resume-item pb-3">
          <h4 class="fw-semibold">GIRDHAR GOYAL</h4>
          <p class="fst-italic text-muted mb-2">
            I am a passionate and innovative professional dedicated to creating impactful digital experiences. With a strong focus on modern web design and development, I strive to deliver solutions that combine creativity, functionality, and user-centric design.
          </p>
          <ul class="list-unstyled small">
            <li>📍  18/104 C.H.B, Jodhpur, India</li>
            <li>📞 <a href="tel:+918233882481" class="text-decoration-none text-dark">+91 6367335145</a></li>
            <li>📧 <a href="mailto:jasveerbroo@gmail.com" class="text-decoration-none text-dark">goyalgirdhar153@gmail.com</a></li>
          </ul>
        </div>

        <h3 class="resume-title text-primary border-bottom pb-2 mb-3">Education</h3>
        <div class="resume-item mb-3">
          <h5 class="fw-semibold mb-1">Bachelor of Computer Applications (BCA)</h5>
          <small class="text-muted d-block mb-1">lucky institute of professional studies , Jodhpur</small>
          <span class="badge bg-primary text-white">2024 - 2027</span>
        </div>
        <div class="resume-item mb-3">
          <h5 class="fw-semibold mb-1">MERN Stack Course</h5>
          <small class="text-muted d-block mb-1">Osmosis Computer, Jodhpur</small>
          <span class="badge bg-primary text-white">2024</span>
        </div>

        <h3 class="resume-title text-primary border-bottom pb-2 mb-3">Technical Skills</h3>
        <div class="resume-item">
          <ul class="list-unstyled small">
            <li><strong>Frontend:</strong> HTML5, CSS,Tailwind CSS, JavaScript, React.js, Next.js, Frameworks</li>
            <li><strong>Backend:</strong>Express.js,Node.js, MongoDB</li>
            <!-- <li><strong>Database:</strong> MySQL</li> -->
            <li><strong>Design / Tools:</strong> UI/UX Design, Prototyping, Visual Studio Code, Bootstrap,  Cursor</li>
            <li><strong>Other Code lenguage:</strong>Python,C,C++ </li>
          </ul>
        </div>

      </div>

      <!-- Right Column -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

        
        <h3 class="resume-title text-primary border-bottom pb-2 mb-3">Languages</h3>
        <div class="resume-item mb-4">
          <p class="small mb-0">Hindi, English</p>
        </div>

        <h3 class="resume-title text-primary border-bottom pb-2 mb-3">Extracurricular</h3>
        <div class="resume-item mb-4">
          <ul class="small mb-0">
            <li>Attended <strong>GDG Event ,jaipur</strong> and <strong>AI Lab '25 Google Cloud, Jaipur</strong></li>
          </ul>
        </div>

        <h3 class="resume-title text-primary border-bottom pb-2 mb-3">Hobbies</h3>
        <div class="resume-item">
          <p class="small mb-0">Reading,Cricket, Web Development, Explore new places & meet new people</p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- /Resume Section -->
    
<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section bg-light">

  <!-- Portfolio Section -->
<section id="portfolio" class="portfolio section py-5">

  <!-- Section Title -->
  <div class="container text-center mb-5" data-aos="fade-up">
    <h2 class="mb-3">Portfolio</h2>
    <p class="text-muted">Some of my recent full-stack and web development projects. Each website is built with clean design, responsive layout, and strong backend logic.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="200">

    <!-- Portfolio Item -->
    <div class="row g-4 justify-content-center">

      <div class="col-12">
        <div class="portfolio-item position-relative rounded-4 overflow-hidden shadow-lg" style="height: 800px; background: url('assets/img/twt.png') center/cover no-repeat;">
          <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: rgba(0,0,0,0.5);">
            <h3 class="text-white mb-2">The Wooden Touch</h3>
            <a href="https://thewoodentouch.in/" target="_blank" class="btn btn-light btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> View Website
            </a>
          </div>
        </div>
      </div>
        <br/>
      <br/>


      <div class="col-12">
        <div class="portfolio-item position-relative rounded-4 overflow-hidden shadow-lg" style="height: 800px; background: url('assets/img/kap.png') center/cover no-repeat;">
          <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: rgba(0,0,0,0.5);">
            <h3 class="text-white mb-2">Kangsiya Art Palace</h3>
            <p class="text-white mb-2"></p>
            <a href="https://kangsiyaart.com/" target="_blank" class="btn btn-light btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> View Website
            </a>
          </div>
        </div>
      </div>

    </div>
      <br/>
      <br/>

    <div class="col-12">
        <div class="portfolio-item position-relative rounded-4 overflow-hidden shadow-lg" style="height: 800px; background: url('assets/img/osmo.png') center/cover no-repeat;">
          <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: rgba(0,0,0,0.5);">
            <h3 class="text-white mb-2">Osmosis Computer</h3>
            <p class="text-white mb-2"></p>
            <a href="https://osmosiscomputer.in/" target="_blank" class="btn btn-light btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> View Website
            </a>
          </div>
        </div>
      </div>
    

   <!-- Services Section -->
<section id="services" class="services section" style="background:#ffffff; padding:80px 0;">

  <!-- Section Title -->
  <div class="container text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold" style="color:#0f172a;">My Services</h2>
    <p class="text-secondary mx-auto" style="max-width:700px;">
      I build clean, fast, and modern full-stack web solutions — from creative UI to powerful backend systems.
    </p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <!-- Service Card -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded-4 text-center h-100" style="--color1:#00c6ff; --color2:#0072ff;">
          <div class="icon-box mb-3"><i class="bi bi-laptop"></i></div>
          <h4 class="fw-semibold mb-2">Full-Stack Web Development</h4>
          <p>Dynamic, responsive, and scalable web apps using MongoDB, React, and MySQL.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded-4 text-center h-100" style="--color1:#a855f7; --color2:#6366f1;">
          <div class="icon-box mb-3"><i class="bi bi-palette"></i></div>
          <h4 class="fw-semibold mb-2">UI / UX Design</h4>
          <p>Designing beautiful, user-friendly interfaces with clean, modern aesthetics.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card p-4 rounded-4 text-center h-100" style="--color1:#f59e0b; --color2:#ef4444;">
          <div class="icon-box mb-3"><i class="bi bi-speedometer2"></i></div>
          <h4 class="fw-semibold mb-2">Admin Dashboards</h4>
          <p>Powerful dashboards for sales, stock, enquiry, wallet & business automation.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-card p-4 rounded-4 text-center h-100" style="--color1:#0ea5e9; --color2:#06b6d4;">
          <div class="icon-box mb-3"><i class="bi bi-phone"></i></div>
          <h4 class="fw-semibold mb-2">Responsive Web Design</h4>
          <p>Mobile-friendly, pixel-perfect designs for all screens and devices.</p>
        </div>
      </div>


      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-card p-4 rounded-4 text-center h-100" style="--color1:#ec4899; --color2:#f472b6;">
          <div class="icon-box mb-3"><i class="bi bi-cloud-upload"></i></div>
          <h4 class="fw-semibold mb-2">Hosting & Deployment</h4>
          <p>One-click deployment, domain setup, and live hosting support with ease.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS -->
<style>
.service-card {
  background: #fff;
  border: 2px solid transparent;
  border-radius: 16px;
  transition: all 0.4s ease;
  box-shadow: 0 0 8px rgba(0,0,0,0.08);
  position: relative;
}
.service-card:hover {
  border-image: linear-gradient(135deg, var(--color1), var(--color2)) 1;
  transform: translateY(-8px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
.icon-box {
  width: 70px;
  height: 70px;
  margin: 0 auto;
  border-radius: 16px;
  background: linear-gradient(135deg, var(--color1), var(--color2));
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  color: #fff;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
  transition: all 0.4s ease;
}
.service-card:hover .icon-box {
  transform: rotate(5deg) scale(1.1);
  box-shadow: 0 0 25px var(--color2);
}
</style>
<!-- /Services Section -->


<section id="contact-section" class="position-relative py-5 bg-light">
  <div class="container">
    <div class="toggle-wrapper">
      <div class="toggle-buttons text-center mb-4">
        <button id="showInfo" class="btn btn-primary active"><i class="bi bi-geo-alt"></i> Contact Info</button>
        <button id="showForm" class="btn btn-outline-primary"><i class="bi bi-envelope"></i> Contact Form</button>
      </div>

      <div class="content-wrapper position-relative">
        <!-- Contact Info -->
        <div id="infoPanel" class="info-panel show">
          <div class="row gy-4 justify-content-center align-items-stretch">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
              <div class="contact-card text-center p-4 rounded-4 shadow-sm bg-white">
                <div class="icon mb-3 text-primary" style="font-size:2rem;">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h4 class="fw-bold">Address</h4>
                <p class="text-muted mb-0">18/104 Sector C.H.B<br>Jodhpur, India <br> <br></p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
              <div class="contact-card text-center p-4 rounded-4 shadow-sm bg-white">
                <div class="icon mb-3 text-primary" style="font-size:2rem;">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <h4 class="fw-bold">Call Me</h4>
                <p class="text-muted mb-1">6367335145</p>
                <a href="tel:6367335145" class="btn btn-outline-primary btn-sm mt-2"><i class="bi bi-telephone-outbound"></i> Call Now</a>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
              <div class="contact-card text-center p-4 rounded-4 shadow-sm bg-white">
                <div class="icon mb-3 text-primary" style="font-size:2rem;">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <h4 class="fw-bold">Email</h4>
                <p class="text-muted mb-1">goyalgirdhar153@gmail.com</p>
                <a href="mailto:goyalgirdhar153@gmail.com" class="btn btn-outline-primary btn-sm mt-2"><i class="bi bi-send"></i> Send Mail</a>
              </div>
            </div>

            <!-- Google Map -->
            <div class="col-lg-10 mt-5">
              <div class="rounded-4 overflow-hidden shadow-sm">
                <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe
                  src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114487.4478524405!2d72.94814153327465!3d26.2703358823881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c4eaa06ccb9%3A0x8114ea5b0ae1abb8!2sJodhpur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1763829973293!5m2!1sen!2sin"
                  style="border:0;width:100%;height:300px;"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Panel -->
        <div id="formPanel" class="form-panel">
          <div class="p-4 p-md-5 rounded-4 shadow-lg bg-white">
            <h3 class="fw-bold text-primary mb-4 text-center">Send a Message</h3>
            <form id="contactForm" action="contact.php" method="POST">
              <div class="row g-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="col-12">
                  <textarea name="message" rows="5" class="form-control" placeholder="Message" required></textarea>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill">
                    <i class="bi bi-send"></i> Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div><!-- content-wrapper -->
    </div><!-- toggle-wrapper -->
  </div>
</section>

<style>
/* ==== Base Section ==== */
#contact-section {
  overflow: hidden;
}

/* ==== Toggle Buttons ==== */
.toggle-buttons .btn {
  border-radius: 50px;
  margin: 0 8px;
  transition: all 0.3s ease;
}
.toggle-buttons .btn.active {
  background: linear-gradient(90deg, #0d6efd, #6610f2);
  color: #fff;
  box-shadow: 0 0 15px rgba(13,110,253,0.6);
}

/* ==== Panels ==== */
.content-wrapper {
  position: relative;
  min-height: 500px;
}
.info-panel, .form-panel {
  position: absolute;
  top: 0;
  width: 100%;
  transition: all 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
  opacity: 0;
  transform: scale(0.95) translateY(40px);
  pointer-events: none;
}
.info-panel.show,
.form-panel.show {
  opacity: 1;
  transform: scale(1) translateY(0);
  pointer-events: all;
}
.form-panel {
  background: #fff;
  border-radius: 1rem;
}
.form-control {
  border-radius: 10px;
  border: 1px solid #ccc;
  transition: 0.3s ease;
}
.form-control:focus {
  border-color: #0d6efd;
  box-shadow: 0 0 8px rgba(13,110,253,0.3);
}
</style>

<script>
const infoBtn = document.getElementById('showInfo');
const formBtn = document.getElementById('showForm');
const infoPanel = document.getElementById('infoPanel');
const formPanel = document.getElementById('formPanel');

formBtn.addEventListener('click', () => {
  infoPanel.classList.remove('show');
  formPanel.classList.add('show');
  formBtn.classList.add('active');
  infoBtn.classList.remove('active');
});

infoBtn.addEventListener('click', () => {
  formPanel.classList.remove('show');
  infoPanel.classList.add('show');
  infoBtn.classList.add('active');
  formBtn.classList.remove('active');
});
</script>

<!-- Add this custom CSS (in your main.css or inside <style> tag) -->
<style>
  .hover-shadow {
    transition: all 0.3s ease;
  }
  .hover-shadow:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }
</style>


  </main>
<!-- ======= Ultra Premium White Glow Footer ======= -->
<footer id="footer" class="footer text-light position-relative" 
  style="background: linear-gradient(145deg, #0a0a0a, #141414, #000); backdrop-filter: blur(10px); border-top: 1px solid rgba(255,255,255,0.1);">

  <div class="container py-5">

    <!-- Brand / Title -->
    <div class="text-center mb-4">
      <h2 class="fw-bold mb-2 footer-title">Girdhar Goyal</h2>
      <p class="footer-subtitle mb-0">Web Developer</p>
    </div>

    <!-- Glowing Divider -->
    <div class="divider mx-auto my-4"></div>

    <!-- Social Icons -->
    <div class="d-flex justify-content-center mb-4">
      <a href="https://www.instagram.com/girdhargoyal__07?igsh=MTlnbGJ3bXIwMzRmcg==" target="_blank" class="mx-3 social-link fs-4">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/girdhar-goyal-1376b5332?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="mx-3 social-link fs-4">
        <i class="bi bi-linkedin"></i>
      </a>
      <a href="https://wa.me/916367335145" target="_blank" class="mx-3 social-link fs-4">
        <i class="bi bi-whatsapp"></i>
      </a>
    </div>

    <!-- Extra Info -->
    <div class="text-center mb-3">
      <p class="footer-text mb-0">Let’s connect and build something extraordinary together ⚡</p>
    </div>

    <hr class="border-secondary" style="opacity:0.15;">

    <!-- Copyright -->
<div class="text-center mt-3">

  <p class="footer-copy mb-1">
    © <span id="year"></span> 
    <a href="https://www.linkedin.com/in/jasveer-borana-39878a373/" 
       target="_blank" 
       class="fw-bold text-decoration-none footer-link">
       GirdharGoyal
    </a> 
    | All Rights Reserved
  </p>

  <small class="footer-crafted">
    Crafted with 
    <i class="bi bi-heart-fill text-danger"></i> 
    by 
    <a href="https://www.linkedin.com/in/jasveer-borana-39878a373/" 
       target="_blank" 
       class="fw-bold text-decoration-none footer-link">
       Girdhar Goyal
    </a>
  </small>

</div>

<style>
  /* Footer links visible and clickable */
  .footer-link {
    color: white !important;
    text-decoration: none;
  }

  .footer-link:hover {
    color: #0a66c2 !important; /* LinkedIn blue on hover */
    text-decoration: underline;
  }

  .footer-crafted {
    color: white !important;
  }
</style>


  </div>
</footer>

<!-- ======= Footer Styling ======= -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Poppins:wght@400;500&display=swap');

  .footer {
    font-family: 'Poppins', sans-serif;
    position: relative;
    overflow: hidden;
  }

  /* Soft rotating ambient glow */
  .footer::before {
    content: '';
    position: absolute;
    top: -40%;
    left: -40%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at center, rgba(255,255,255,0.05), transparent 70%);
    animation: ambientRotate 12s infinite linear;
  }

  @keyframes ambientRotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  /* Title + Subtitle */
  .footer-title {
    font-family: 'Cinzel', serif;
    color: #fff;
    letter-spacing: 1.5px;
    font-size: 1.9rem;
    animation: fadeInDown 1.2s ease;
  }

  .footer-subtitle {
    color: #ccc;
    font-size: 15px;
    animation: fadeIn 1.5s ease;
  }

  /* Divider glow */
  .divider {
    width: 90px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #fff, transparent);
    animation: glowPulse 2s infinite ease-in-out;
  }

  @keyframes glowPulse {
    0%, 100% { opacity: 0.3; transform: scaleX(0.8); }
    50% { opacity: 1; transform: scaleX(1.1); }
  }

  /* Social Icons */
  .social-link {
    color: #ccc;
    transition: all 0.4s ease;
    position: relative;
  }

  .social-link:hover {
    color: #fff;
    transform: translateY(-6px) scale(1.2);
    text-shadow: 0 0 12px rgba(255,255,255,0.8);
  }

  /* Footer text + copyright */
  .footer-text {
    color: #bbb;
    font-size: 15px;
    animation: fadeInUp 1.5s ease;
  }

  .footer-copy {
    color: #aaa;
    font-size: 14px;
  }

  /* Animations */
  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-15px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  @media (max-width: 576px) {
    .footer-title { font-size: 1.5rem; }
    .social-link { font-size: 1.5rem; margin: 0 10px; }
  }
</style>

<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
  
<!-- /Footer -->

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center bg-primary text-white">
  <i class="bi bi-arrow-up-short fs-3"></i>
</a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Dynamic Year -->
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

<!-- Custom Footer Styles -->
<style>
  .footer {
    background: linear-gradient(135deg, #1a1a1a, #2c2c2c);
    color: #ddd;
  }
  .footer .social-links a {
    transition: 0.3s;
  }
  .footer .social-links a:hover {
    color: #0d6efd;
    transform: scale(1.2);
  }
  .scroll-top {
    bottom: 20px;
    right: 20px;
    border-radius: 50%;
    width: 45px;
    height: 45px;
    transition: all 0.3s ease;
  }
  .scroll-top:hover {
    background-color: #0b5ed7 !important;
  }
</style>
<style>
  /* Smooth glowing cursor */
  body {
    cursor: none;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  .cursor-dot, .cursor-outline {
    position: fixed;
    top: 0;
    left: 0;
    border-radius: 50%;
    pointer-events: none;
    z-index: 10000;
    transform: translate(-50%, -50%);
  }

  .cursor-dot {
    width: 8px;
    height: 8px;
    background: #21aa1c;
    box-shadow: 0 0 15px rgba(11, 185, 208, 0.8);
  }

  .cursor-outline {
    width: 35px;
    height: 35px;
    border: 2px solid rgba(181, 84, 84, 0.299);
    box-shadow: 0 0 25px rgba(0, 225, 255, 0.3);
    transition: all 0.15s ease-out;
  }

  /* Hide custom cursor over inputs, textareas */
  input, textarea, select, button {
    cursor: auto !important;
  }
</style>

<div class="cursor-dot"></div>
<div class="cursor-outline"></div>

<script>
  const cursorDot = document.querySelector(".cursor-dot");
  const cursorOutline = document.querySelector(".cursor-outline");

  window.addEventListener("mousemove", (e) => {
    const posX = e.clientX;
    const posY = e.clientY;

    cursorDot.style.left = `${posX}px`;
    cursorDot.style.top = `${posY}px`;

    cursorOutline.animate({
      left: `${posX}px`,
      top: `${posY}px`
    }, {
      duration: 300,
      fill: "forwards"
    });
  });

  // hover effect for links & buttons
  document.querySelectorAll("a, button").forEach(el => {
    el.addEventListener("mouseenter", () => {
      cursorOutline.style.transform = "translate(-50%, -50%) scale(1.6)";
      cursorOutline.style.borderColor = "rgba(0, 255, 180, 0.7)";
    });
    el.addEventListener("mouseleave", () => {
      cursorOutline.style.transform = "translate(-50%, -50%) scale(1)";
      cursorOutline.style.borderColor = "rgba(0, 225, 255, 0.5)";
    });
  });
</script>
<!-- =========================
     Frontend deterrents v1
     Paste before </body>
     ========================= -->
<style>
  /* disable selection & touch callout */
  * { -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
  html, body { -webkit-touch-callout: none; -webkit-user-drag: none; -ms-user-select: none; }
  /* overlay style for when devtools detected */
  #__dt_overlay {
    position: fixed;
    inset: 0;
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 999999;
    background: rgba(0,0,0,0.7);
    color: #fff;
    font-family: system-ui, Arial, sans-serif;
  }
  #__dt_overlay .box {
    background: rgba(255,255,255,0.06);
    border-radius: 12px;
    padding: 20px 26px;
    text-align: center;
    max-width: 90%;
    backdrop-filter: blur(6px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.5);
  }
  #__dt_overlay .box h3 { margin: 0 0 8px; font-size: 18px; }
  #__dt_overlay .box p { margin: 0; opacity: 0.95; font-size: 14px; }
</style>

<div id="__dt_overlay" aria-hidden="true">
  <div class="box">
    <h3>Action blocked</h3>
    <p>Developer tools or page inspection detected — content temporarily hidden.</p>
  </div>
</div>

<script>
(function() {
  'use strict';

  // --- Basic action blocks ---
  // disable right-click
  window.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  }, true);

  // disable selection start (drag selection)
  window.addEventListener('selectstart', function(e) {
    e.preventDefault();
  }, true);

  // disable copy & cut
  window.addEventListener('copy', function(e) {
    e.preventDefault();
  }, true);
  window.addEventListener('cut', function(e) {
    e.preventDefault();
  }, true);

  // optionally prevent drag images
  window.addEventListener('dragstart', function(e) {
    e.preventDefault();
  }, true);

  // --- Block common key combos ---
  window.addEventListener('keydown', function(e) {
    // key normalization
    const k = e.key || e.keyCode;

    // Block F12
    if (k === 'F12' || k === 123) {
      e.preventDefault(); e.stopPropagation(); return false;
    }

    // Block Ctrl+U, Ctrl+S, Ctrl+Shift+I/J, Ctrl+Shift+C, Ctrl+Shift+K
    if (e.ctrlKey) {
      const kl = (typeof k === 'string') ? k.toUpperCase() : k;
      if (kl === 'U' || kl === 'S' || kl === 'P') {
        e.preventDefault(); e.stopPropagation(); return false;
      }
      if (e.shiftKey) {
        if (kl === 'I' || kl === 'J' || kl === 'C' || kl === 'K') {
          e.preventDefault(); e.stopPropagation(); return false;
        }
      }
    }

    // Block Ctrl+Shift+I (some browsers report code differently)
    if (e.ctrlKey && e.shiftKey && (e.code === 'KeyI' || e.code === 'KeyJ')) {
      e.preventDefault(); e.stopPropagation(); return false;
    }
  }, true);

  // --- DevTools detection (heuristic) ---
  // Note: heuristics are not 100% reliable — false positives possible
  const overlay = document.getElementById('__dt_overlay');
  let devtoolsOpen = false;

  function showOverlay() {
    if (!overlay) return;
    overlay.style.display = 'flex';
    overlay.setAttribute('aria-hidden', 'false');
    document.documentElement.style.filter = 'blur(6px)';
    document.body.style.pointerEvents = 'none';
    devtoolsOpen = true;
  }
  function hideOverlay() {
    if (!overlay) return;
    overlay.style.display = 'none';
    overlay.setAttribute('aria-hidden', 'true');
    document.documentElement.style.filter = '';
    document.body.style.pointerEvents = '';
    devtoolsOpen = false;
  }

  // heuristic 1: measure window dimensions differences
  function checkSizes() {
    try {
      const threshold = 160; // px, tweak as needed
      const widthDiff = window.outerWidth - window.innerWidth;
      const heightDiff = window.outerHeight - window.innerHeight;
      if (widthDiff > threshold || heightDiff > threshold) {
        if (!devtoolsOpen) showOverlay();
      } else {
        if (devtoolsOpen) hideOverlay();
      }
    } catch (err) { /* ignore */ }
  }

  // heuristic 2: check console open by measuring toString length trick
  (function detectConsole() {
    // Some browsers allow this trick: override function toString to detect console open
    const element = new Image();
    Object.defineProperty(element, 'id', {
      get: function() {
        if (!devtoolsOpen) showOverlay();
        return '';
      }
    });
    // trigger getter when console tries to log this element
    setInterval(function() {
      console.log(element);
      // small cleanup to avoid spamming console
      try { /* no-op */ } catch (e) {}
    }, 1500);
  })();

  // run size check periodically
  setInterval(checkSizes, 900);

  // Hide overlay on user click (in case of false positive); also restore pointer events
  overlay && overlay.addEventListener('click', function() {
    hideOverlay();
  });

  // optional: show a brief toast when user tries blocked actions (uncomment if you want)
 
  function toast(msg) {
    const t = document.createElement('div');
    t.textContent = msg;
    Object.assign(t.style, {
      position: 'fixed', right: '20px', bottom: '20px', zIndex: 9999999,
      background: 'rgba(0,0,0,0.75)', color: '#fff', padding: '10px 12px', borderRadius: '8px'
    });
    document.body.appendChild(t);
    setTimeout(()=> t.remove(), 2200);
  }
  

})();
</script>
</body>


</html>