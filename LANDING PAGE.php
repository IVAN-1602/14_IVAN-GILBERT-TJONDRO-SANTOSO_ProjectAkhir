<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub - Landing Page</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #ffffff, #f0f0f5);
            color: #333;
            line-height: 1.6;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ff6b6b;
        }

        .btn-login {
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            color: #fff;
            padding: 10px 25px;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(255, 107, 107, 0.5);
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 50px;
            min-height: calc(100vh - 80px);
            gap: 50px;
        }

        .hero-left h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-left p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
        }

        .btn-explore {
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            color: #fff;
            padding: 12px 40px;
            border-radius: 30px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 0 20px rgba(255, 107, 107, 0.4);
        }

        .btn-explore:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 30px rgba(255, 107, 107, 0.7);
        }

        .hero-right img {
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(255, 107, 107, 0.3);
            transition: 0.3s;
        }

        .hero-right img:hover {
            transform: scale(1.05);
        }

        /* Events Section */
        .events {
            padding: 80px 50px;
            text-align: center;
            background: rgba(255, 255, 255, 0.5);
        }

        .events h2 {
            font-size: 2.8rem;
            margin-bottom: 40px;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            cursor: pointer;
            height: 300px;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 107, 107, 0.3);
        }

        .card:hover img {
            transform: scale(1.1);
        }

        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px 50px;
            text-align: center;
            border-top: 1px solid rgba(255, 107, 107, 0.3);
            color: #666;
        }

        @media (max-width: 768px) {
            .hero { flex-direction: column; padding: 40px 20px; }
            .hero-left h1 { font-size: 2rem; }
            nav { padding: 15px 20px; flex-direction: column; gap: 15px; }
            .nav-links { gap: 15px; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="logo.jpg" alt="Logo" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
            <div class="logo">EventHub</div>
        </div>
        <ul class="nav-links">
            <li><a href="about us.php">About Us</a></li>
            <li><a href="login.php" class="btn-login">Log In</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <h1>Welcome to EventHub</h1>
            <p>Temukan dan bagikan momen terbaik Anda. Jelajahi acara-acara eksklusif, pameran seni, konser musik, dan perayaan spesial yang tak terlupakan.</p>
            <a href="about us.php" class="btn-explore">Explore Now →</a>
        </div>
        <div class="hero-right">
            <img src="konser.jpeg" alt="Hero Image">
        </div>
    </section>

    <!-- Events Section -->
    <section class="events">
        <h2>Featured Events</h2>
        <div class="cards">
            <div class="card"><img src="wedding hall 1.jpg" alt="Wedding"></div>
            <div class="card"><img src="grand opening.jpg" alt="Grand Opening"></div>
            <div class="card"><img src="birthday.jpeg" alt="Birthday"></div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 EventHub. All rights reserved. | Capturing Moments, Creating Memories</p>
    </footer>
</body>
</html>