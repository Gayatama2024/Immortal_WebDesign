<!DOCTYPE html>
<html lang="ind">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopi Keramat</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #FFF0D1;
            color: black;
        
        }

        nav {
            background-color: #795757;
            padding: 10px;
            text-align:left;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 1rem;
        }

        nav a:hover {
            color: #3B3030;
        }

        .hero {
            background-image: url('https://storage.googleapis.com/gcs-cockpit-prod/uploads/image/asset/530/1690728803.jpeg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero h2 {
            font-size: 2.5rem;
            color: white;
            padding: 20px;
        }

        .about-section, .menu-section, .order-section, .location-section, .contact-section {
            padding: 40px 20px;
            text-align: center;
        }

        .about-section h2, .menu-section h2, .order-section h2, .location-section h2, .contact-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .menu-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .menu-item {
            background-color: transparent;
            border: 1px solid white;
            border-radius: 5px;
            width: 25%;
            margin-bottom: 10px;
            padding: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            width: 100%;
            border-radius: 5px;
        }

        .menu-item h3 {
            font-size: 1.5rem;
            margin: 15px 0;
        }

        .menu-item p {
            font-size: 1rem;
            color: #555;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }

        footer {
            background-color: #4A3F35;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#order">Order Online</a>
        <a href="#location">Location</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Hero Section -->
    <div id="home" class="hero">
        <h2>Selamat Datang di Kopi Keramat</h2>
    </div>

    <!-- About Section -->
    <section id="about" class="about-section">
        <h2>About Kopi Keramat</h2>
        <p>Kopi Keramat hadir untuk memberikan pengalaman ngopi terbaik dengan suasana santai dan penuh semangat. Kami berkomitmen pada kualitas kopi terbaik dan pelayanan prima untuk setiap pelanggan kami.</p>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section">
        <h2>Our Menu</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="data:image/jpeg;base64,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" alt="Kopi Hitam">
                <h3>Kopi Hitam Keramat</h3>
                <p>Price: IDR 20,000</p>
            </div>

            <div class="menu-item">
                <img src="data:image/jpeg;base64,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" alt="Kopi Susu">
                <h3>Kopi Susu Keramat</h3>
                <p>Price: IDR 25,000</p>
            </div>

            <div class="menu-item">
                <img src="https://via.placeholder.com/300x200" alt="Kopi Santai">
                <h3>Kopi Pahit</h3>
                <p>Price: IDR 30,000</p>
            </div>

            <div class="menu-item">
              <img src="https://via.placeholder.com/300x200" alt="Kopi panas">
              <h3> Kopi Panas</h3>
              <p>Price: IDR 23,000</p>
            </div>

            <div class="menu-item">
              <img src="https://via.placeholder.com/300x200" alt="Kopi panas">
              <h3> Kopi Panas</h3>
              <p>Price: IDR 23,000</p>
            </div>

            <div class="menu-item">
              <img src="https://via.placeholder.com/300x200" alt="Kopi panas">
              <h3> Kopi Panas</h3>
              <p>Price: IDR 23,000</p>
            </div>

            <div class="menu-item">
              <img src="https://via.placeholder.com/300x200" alt="Kopi panas">
              <h3> Kopi Panas</h3>
              <p>Price: IDR 23,000</p>
            </div>

            <div class="menu-item">
              <img src="https://via.placeholder.com/300x200" alt="Kopi panas">
              <h3> Kopi Panas</h3>
              <p>Price: IDR 23,000</p>
            </div>

            </div>
        </div>
    </section>

    <!-- Order Online Section -->
    <section id="order" class="order-section">
        <h2>Order Online</h2>
        <p>Kopi Keramat sekarang bisa kamu pesan secara online! Kunjungi GoFood atau GrabFood untuk menikmati kopi favoritmu tanpa harus keluar rumah.</p>
    </section>

    <!-- Location Section -->
    <section id="location" class="location-section">
        <h2>Our Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317713.111957487!2d106.6894318!3d-6.2000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d607fca111%3A0xf4c2bdb1b2dca0b!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1637242789864!5m2!1sen!2sid" allowfullscreen=""></iframe>
        <p>Visit us at Kopi Keramat, Jl. Example, Jakarta</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <p>Have any questions? Reach out to us through our social media or fill the form below.</p>
        <form action="#">
            <input type="text" placeholder="Your Name" required><br>
            <input type="email" placeholder="Your Email" required><br>
            <textarea placeholder="Your Message" required></textarea><br>
            <button type="submit">Send</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Kopi Keramat. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // Add any interactive features here
        window.onload = function() {
            console.log('Website loaded');
        }
    </script>

</body>
</html>