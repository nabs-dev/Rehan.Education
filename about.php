<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Rehan.Education</title>
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
        
        /* Page Header */
        .page-header {
            background-color: #f9f9f9;
            padding: 80px 5%;
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .page-header p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
        }
        
        /* About Section */
        .about-section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .about-intro {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .about-intro h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .about-intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        /* Mission and Vision */
        .mission-vision {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 80px;
        }
        
        .mission, .vision {
            flex: 1;
            min-width: 300px;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .mission h3, .vision h3 {
            font-size: 1.6rem;
            margin-bottom: 20px;
            color: #222;
            text-align: center;
        }
        
        .mission p, .vision p {
            color: #555;
            line-height: 1.8;
        }
        
        /* Story Section */
        .story {
            margin-bottom: 80px;
        }
        
        .story h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .story-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 50px;
        }
        
        .story-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
        }
        
        .story-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .story-text {
            flex: 1;
            min-width: 300px;
        }
        
        .story-text p {
            margin-bottom: 20px;
            color: #555;
            line-height: 1.8;
        }
        
        /* Values Section */
        .values {
            margin-bottom: 80px;
        }
        
        .values h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .value-card {
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .value-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .value-card p {
            color: #555;
            line-height: 1.7;
        }
        
        /* Team Section */
        .team {
            margin-bottom: 80px;
        }
        
        .team h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .team p {
            max-width: 800px;
            margin: 0 auto 40px;
            text-align: center;
            color: #555;
            line-height: 1.8;
        }
        
        .team-btn {
            display: block;
            width: fit-content;
            margin: 0 auto;
            padding: 12px 30px;
            background-color: #0066cc;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .team-btn:hover {
            background-color: #0055aa;
            transform: translateY(-2px);
        }
        
        /* CTA Section */
        .cta {
            text-align: center;
            padding: 60px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        
        .cta h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        .cta-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #0066cc;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .cta-btn:hover {
            background-color: #0055aa;
            transform: translateY(-2px);
        }
        
        /* Footer */
        footer {
            padding: 40px 5%;
            background-color: #222;
            color: #fff;
            text-align: center;
            margin-top: 80px;
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
            .page-header h1 {
                font-size: 2rem;
            }
            
            .about-intro h2, .story h2, .values h2, .team h2, .cta h2 {
                font-size: 1.8rem;
            }
            
            .mission, .vision {
                padding: 30px 20px;
            }
            
            .cta {
                padding: 40px 20px;
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

    <section class="page-header">
        <h1>About Rehan.Education</h1>
        <p>Empowering students to positively impact 10 million lives and achieve financial independence</p>
    </section>

    <section class="about-section">
        <div class="about-intro">
            <h2>Digital Mastery for a Connected World</h2>
            <p>Rehan.Education is an AI-enabled educational platform designed to equip teens with the digital skills, AI proficiency, and online teaching methodologies they need to thrive in today's connected world. Our innovative approach combines cutting-edge technology with effective teaching strategies to create a transformative learning experience.</p>
        </div>

        <div class="mission-vision">
            <div class="mission">
                <h3>Our Mission</h3>
                <p>To empower students with the digital skills and knowledge they need to positively impact 10 million lives and achieve financial independence through online teaching and content creation.</p>
            </div>
            
            <div class="vision">
                <h3>Our Vision</h3>
                <p>A world where every student has the opportunity to master digital skills, harness the power of AI, and share their knowledge online, creating positive change and achieving personal success.</p>
            </div>
        </div>

        <div class="story">
            <h2>Our Story</h2>
            <div class="story-content">
                <div class="story-image">
                    <img src="https://sjc.microlink.io/IwagunaTk8ZqMO7FyCXHdPxyWWBymAcOc3J4wr-tov5WfUiSknCNUs4f71lT5lXIiajixNluLIC6CA5Vf6MdiQ.jpeg" alt="Rehan Education Story">
                </div>
                <div class="story-text">
                    <p>Rehan.Education was founded with a simple yet powerful vision: to help students develop the digital skills they need to make a positive impact in the world while achieving financial independence.</p>
                    <p>Our founder recognized that traditional education often fails to equip students with the practical digital skills needed in today's connected world. At the same time, the rise of AI tools presented both challenges and opportunities for the next generation.</p>
                    <p>Drawing on years of experience in education and technology, our team developed a comprehensive curriculum that combines digital skills training, AI proficiency, and online teaching methodologies. This unique approach empowers students to not only master digital tools but also share their knowledge effectively with others.</p>
                    <p>Today, Rehan.Education continues to evolve and grow, staying at the forefront of digital education and helping students unlock their full potential in the digital age.</p>
                </div>
            </div>
        </div>

        <div class="values">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <h3>Innovation</h3>
                    <p>We embrace new technologies and teaching methodologies to provide the most effective and relevant educational experience.</p>
                </div>
                <div class="value-card">
                    <h3>Empowerment</h3>
                    <p>We believe in equipping students with the skills and confidence they need to take control of their digital future.</p>
                </div>
                <div class="value-card">
                    <h3>Impact</h3>
                    <p>We are committed to helping students create positive change in the world through their digital skills and knowledge.</p>
                </div>
                <div class="value-card">
                    <h3>Accessibility</h3>
                    <p>We strive to make digital education accessible to students from diverse backgrounds and circumstances.</p>
                </div>
                <div class="value-card">
                    <h3>Community</h3>
                    <p>We foster a supportive learning community where students can collaborate, share ideas, and grow together.</p>
                </div>
                <div class="value-card">
                    <h3>Excellence</h3>
                    <p>We are dedicated to maintaining the highest standards of educational quality and student support.</p>
                </div>
            </div>
        </div>

        <div class="team">
            <h2>Our Team</h2>
            <p>Rehan.Education is powered by a team of passionate educators, technology experts, and learning specialists who are committed to helping students succeed in the digital world.</p>
            <a href="facilitators.php" class="team-btn">Meet Our Facilitators</a>
        </div>

        <div class="cta">
            <h2>Join Our Digital Mastery Program</h2>
            <p>Ready to develop the digital skills you need to make a positive impact and achieve financial independence? Join our innovative program today and begin your journey toward digital mastery.</p>
            <a href="contact.php" class="cta-btn">Contact Us to Learn More</a>
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
