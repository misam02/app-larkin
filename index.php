<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beautiful Homepage</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#0f172a;
    color:white;
    overflow-x:hidden;
}

/* Background */
body::before{
    content:"";
    position:fixed;
    inset:0;
    background:
    radial-gradient(circle at top left,#4f46e5 0%,transparent 40%),
    radial-gradient(circle at bottom right,#06b6d4 0%,transparent 35%),
    linear-gradient(135deg,#0f172a,#111827,#020617);
    z-index:-2;
}

body::after{
    content:"";
    position:fixed;
    width:600px;
    height:600px;
    background:#8b5cf6;
    filter:blur(180px);
    opacity:.15;
    top:-250px;
    right:-250px;
    z-index:-1;
}

/* Navbar */

nav{
    width:100%;
    padding:20px 10%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:fixed;
    top:0;
    backdrop-filter:blur(15px);
    background:rgba(255,255,255,.05);
    border-bottom:1px solid rgba(255,255,255,.08);
}

.logo{
    font-size:28px;
    font-weight:bold;
    letter-spacing:2px;
}

nav ul{
    display:flex;
    gap:30px;
    list-style:none;
}

nav a{
    text-decoration:none;
    color:white;
    transition:.3s;
}

nav a:hover{
    color:#38bdf8;
}

/* Hero */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:120px 10%;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:60px;
    align-items:center;
}

h1{
    font-size:60px;
    line-height:1.1;
    margin-bottom:20px;
}

h1 span{
    color:#38bdf8;
}

p{
    font-size:18px;
    color:#cbd5e1;
    line-height:1.8;
    margin-bottom:35px;
}

.buttons{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.btn{
    padding:15px 35px;
    border-radius:50px;
    text-decoration:none;
    transition:.3s;
    font-weight:bold;
}

.primary{
    background:linear-gradient(135deg,#06b6d4,#3b82f6);
    color:white;
}

.primary:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(59,130,246,.4);
}

.secondary{
    border:2px solid rgba(255,255,255,.2);
    color:white;
}

.secondary:hover{
    background:white;
    color:#111827;
}

/* Card */

.hero-card{
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.08);
    backdrop-filter:blur(15px);
    border-radius:25px;
    padding:40px;
    box-shadow:0 20px 50px rgba(0,0,0,.3);
}

.hero-card h2{
    margin-bottom:25px;
}

.stats{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.box{
    background:rgba(255,255,255,.05);
    border-radius:15px;
    padding:20px;
    text-align:center;
}

.box h3{
    color:#38bdf8;
    font-size:32px;
}

.box p{
    margin:10px 0 0;
    font-size:15px;
}

/* Features */

.features{
    padding:80px 10%;
}

.features h2{
    text-align:center;
    font-size:40px;
    margin-bottom:50px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}

.card{
    background:rgba(255,255,255,.05);
    border-radius:20px;
    padding:35px;
    transition:.35s;
    border:1px solid rgba(255,255,255,.08);
}

.card:hover{
    transform:translateY(-10px);
    background:rgba(255,255,255,.08);
}

.icon{
    width:70px;
    height:70px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#06b6d4,#3b82f6);
    font-size:28px;
    margin-bottom:20px;
}

footer{
    text-align:center;
    padding:40px;
    color:#94a3b8;
    border-top:1px solid rgba(255,255,255,.08);
    margin-top:60px;
}

@media(max-width:768px){

h1{
    font-size:42px;
}

nav{
    padding:18px 6%;
}

nav ul{
    display:none;
}

}
</style>

</head>
<body>

<nav>
<div class="logo">Nova</div>

<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Features</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact Us Please</a></li>
</ul>

</nav>

<section class="hero">

<div class="container">

<div>

<h1>Build Something <span>Amazing</span></h1>

<p>
Create modern websites with elegant design, smooth layouts,
and responsive experiences that look great on every device.
</p>

<div class="buttons">
<a href="#" class="btn primary">Get Started</a>
<a href="#" class="btn secondary">Learn More</a>
</div>

</div>

<div class="hero-card">

<h2>Why Choose Us?</h2>

<div class="stats">

<div class="box">
<h3>500+</h3>
<p>Projects</p>
</div>

<div class="box">
<h3>98%</h3>
<p>Happy Clients</p>
</div>

<div class="box">
<h3>24/7</h3>
<p>Support</p>
</div>

<div class="box">
<h3>10+</h3>
<p>Years</p>
</div>

</div>

</div>

</div>

</section>

<section class="features">

<h2>Our Features</h2>

<div class="cards">

<div class="card">
<div class="icon">⚡</div>
<h3>Fast Performance</h3>
<p>Lightning-fast loading with optimized layouts and clean design.</p>
</div>

<div class="card">
<div class="icon">🎨</div>
<h3>Modern Design</h3>
<p>Beautiful gradients, glassmorphism, and responsive components.</p>
</div>

<div class="card">
<div class="icon">📱</div>
<h3>Responsive</h3>
<p>Perfectly optimized for desktops, tablets, and mobile devices.</p>
</div>

</div>

</section>

<footer>
© 2026 Nova. Crafted with ❤️ using only HTML & CSS & AI(GPT).
</footer>

</body>
</html>
