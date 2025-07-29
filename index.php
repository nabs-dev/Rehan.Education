<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Digital Mastery for a Connected World</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }
        
        /* Header Styles */
        header {
            padding: 20px 5%;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 15px;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }
        
        nav ul li a:hover {
            color: #0066cc;
        }
        
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 100px 5%;
            background-color: #f9f9f9;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #555;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background-color: #333;
            transform: translateY(-2px);
        }
        
        /* Features Section */
        .features {
            padding: 80px 5%;
            text-align: center;
        }
        
        .section-divider {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }
        
        .divider-icon {
            font-size: 1.5rem;
            color: #999;
        }
        
        .features h2 {
            font-size: 2.2rem;
            margin-bottom: 50px;
            color: #222;
        }
        
        .features-text {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        
        /* Feature Cards */
        .feature-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 60px;
        }
        
        .feature-card {
            flex: 1;
            min-width: 300px;
            max-width: 350px;
            padding: 30px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.7;
        }
        
        /* About Section */
        .about {
            padding: 80px 5%;
            background-color: #f9f9f9;
            text-align: center;
        }
        
        .about h2 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            color: #222;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
            text-align: left;
        }
        
        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 5%;
            text-align: center;
        }
        
        .contact h2 {
            font-size: 2.2rem;
            margin-bottom: 50px;
            color: #222;
        }
        
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .contact-item {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
        }
        
        .contact-item h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .contact-item p, .contact-item a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .contact-item a:hover {
            color: #0066cc;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        
        .social-link {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: #f5f5f5;
            border-radius: 50%;
            color: #555;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: #0066cc;
            color: #fff;
            transform: translateY(-3px);
        }
        
        /* Footer */
        footer {
            padding: 40px 5%;
            background-color: #222;
            color: #fff;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .copyright {
            font-size: 0.9rem;
            color: #aaa;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .feature-card {
                min-width: 100%;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-image, .about-text {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Rehan.Education</a>
        <nav>
            <ul>
                <li><a href="curriculum.php">Curriculum</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="founders-message.php">Founder's Message</a></li>
                <li><a href="waiting-list.php">Waiting List</a></li>
                <li><a href="press-release.php">Press Release</a></li>
                <li><a href="awards.php">Awards</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="parents-waiver.php">Parents Waiver Agreement</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome To Rehan.Education</h1>
        <p>Digital Mastery For A Connected World</p>
        <a href="about.php" class="btn">About us</a>
    </section>

    <div class="section-divider">
        <div class="divider-icon">✻</div>
    </div>

    <section class="features">
        <h2>A New Space to Explore</h2>
        <p class="features-text">
            Are you ready to unleash your inner digital superstar? Welcome to 'Digital Mastery for a Connected World,' an exciting program tailored for teens like you!
        </p>
        
        <div class="feature-cards">
            <div class="feature-card">
                <h3>AI-Enabled Education</h3>
                <p>Learn to harness the power of artificial intelligence tools to enhance your learning and create innovative solutions for real-world problems.</p>
            </div>
            
            <div class="feature-card">
                <h3>Digital Skills Acquisition</h3>
                <p>Master essential digital skills that will set you apart in today's connected world, from content creation to data analysis.</p>
            </div>
            
            <div class="feature-card">
                <h3>Online Teaching Proficiency</h3>
                <p>Develop the ability to effectively share your knowledge online, empowering you to positively impact millions of lives.</p>
            </div>
        </div>
    </section>

    <section class="about">
        <h2>Empowering Students to Make an Impact</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="https://sjc.microlink.io/IwagunaTk8ZqMO7FyCXHdPxyWWBymAcOc3J4wr-tov5WfUiSknCNUs4f71lT5lXIiajixNluLIC6CA5Vf6MdiQ.jpeg" alt="Rehan Education Students">
            </div>
            <div class="about-text">
                <p>At Rehan.Education, we believe in empowering students to positively impact 10 million lives and achieve financial independence through digital mastery.</p>
                <p>Our innovative program combines cutting-edge AI tools, practical digital skills, and effective online teaching methodologies to prepare teens for success in an increasingly connected world.</p>
                <p>Join us on this exciting journey and unlock your full digital potential!</p>
                <a href="curriculum.php" class="btn">Explore Our Curriculum</a>
            </div>
        </div>
    </section>

    <section class="contact">
        <h2>Get in Touch</h2>
        <div class="contact-info">
            <div class="contact-item">
                <h3>Contact Us</h3>
                <p>Call/WhatsApp: +44 7418 359852</p>
                <p>Email: info@rehan.education</p>
            </div>
            
            <div class="contact-item">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link">FB</a>
                    <a href="#" class="social-link">IG</a>
                    <a href="#" class="social-link">X</a>
                </div>
            </div>
            
            <div class="contact-item">
                <h3>Quick Links</h3>
                <p><a href="curriculum.php">Curriculum</a></p>
                <p><a href="facilitators.php">Facilitators</a></p>
                <p><a href="contact.php">Contact Form</a></p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-links">
            <a href="index.php">Home</a>
            <a href="curriculum.php">Curriculum</a>
            <a href="courses.php">Courses</a>
            <a href="facilitators.php">Facilitators</a>
            <a href="contact.php">Contact Us</a>
            <a href="about.php">About Us</a>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> Rehan.Education. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript for smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
