<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founder's Message - Rehan.Education</title>
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
        
        /* Message Section */
        .message-section {
            padding: 80px 5%;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .founder-profile {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .founder-image {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
        }
        
        .founder-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .founder-info {
            flex: 2;
            min-width: 300px;
        }
        
        .founder-info h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .founder-position {
            font-size: 1.1rem;
            color: #0066cc;
            margin-bottom: 20px;
        }
        
        .founder-bio {
            color: #555;
            line-height: 1.8;
        }
        
        /* Message Content */
        .message-content {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .message-content h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .message-text {
            color: #555;
            line-height: 1.9;
            font-size: 1.05rem;
        }
        
        .message-text p {
            margin-bottom: 20px;
        }
        
        .message-signature {
            margin-top: 40px;
            text-align: right;
        }
        
        .signature-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #222;
        }
        
        .signature-title {
            font-size: 1rem;
            color: #555;
        }
        
        /* Vision Section */
        .vision-section {
            margin-top: 80px;
            padding: 60px;
            background-color: #f9f9f9;
            border-radius: 8px;
            text-align: center;
        }
        
        .vision-section h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
        }
        
        .vision-text {
            max-width: 800px;
            margin: 0 auto;
            color: #555;
            line-height: 1.8;
            font-size: 1.1rem;
        }
        
        /* CTA Section */
        .cta {
            margin-top: 80px;
            text-align: center;
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
            
            .founder-info h2, .message-content h3, .vision-section h2, .cta h2 {
                font-size: 1.8rem;
            }
            
            .message-content, .vision-section {
                padding: 30px 20px;
            }
            
            .founder-image {
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

    <section class="page-header">
        <h1>Founder's Message</h1>
        <p>A personal message from the founder of Rehan.Education</p>
    </section>

    <section class="message-section">
        <div class="founder-profile">
            <div class="founder-image">
                <img src="/placeholder.svg?height=300&width=250" alt="Founder of Rehan.Education">
            </div>
            <div class="founder-info">
                <h2>Rehan Ahmed</h2>
                <p class="founder-position">Founder & CEO, Rehan.Education</p>
                <p class="founder-bio">Rehan Ahmed is an educator, technologist, and entrepreneur with a passion for empowering young people through digital education. With over 15 years of experience in education and technology, Rehan founded Rehan.Education with the vision of helping students develop the digital skills they need to make a positive impact in the world while achieving financial independence.</p>
            </div>
        </div>

        <div class="message-content">
            <h3>A Message to Our Students and Parents</h3>
            <div class="message-text">
                <p>Dear Students, Parents, and Education Partners,</p>
                
                <p>Welcome to Rehan.Education, where we are committed to empowering the next generation with the digital skills, AI proficiency, and online teaching methodologies they need to thrive in our increasingly connected world.</p>
                
                <p>When I founded this organization, I was driven by a simple yet powerful vision: to help students develop the capabilities they need to positively impact 10 million lives and achieve financial independence. In today's rapidly evolving digital landscape, traditional education often falls short in preparing young people for the opportunities and challenges that lie ahead. That's where we come in.</p>
                
                <p>Our "Digital Mastery for a Connected World" program is designed specifically for teens who want to unleash their digital potential. We believe that by combining digital skills acquisition, AI-enabled education, and online teaching proficiency, we can equip students with a unique set of capabilities that will serve them well throughout their lives.</p>
                
                <p>What sets Rehan.Education apart is our holistic approach to digital education. We don't just teach technical skills; we foster creativity, critical thinking, and an entrepreneurial mindset. We help students understand how to leverage technology to solve real-world problems, share their knowledge effectively, and create value for themselves and others.</p>
                
                <p>As we navigate this journey together, I want to express my gratitude for your trust and support. Whether you're a student eager to develop your digital capabilities, a parent investing in your child's future, or an education partner collaborating with us, you are an essential part of our community.</p>
                
                <p>I invite you to explore our curriculum, meet our facilitators, and discover the transformative learning experiences we offer. Together, we can unlock the full potential of digital education and create a brighter future for all.</p>
                
                <div class="message-signature">
                    <p class="signature-name">Rehan Ahmed</p>
                    <p class="signature-title">Founder & CEO, Rehan.Education</p>
                </div>
            </div>
        </div>

        <div class="vision-section">
            <h2>Our Vision for the Future</h2>
            <div class="vision-text">
                <p>At Rehan.Education, we envision a world where every young person has the opportunity to develop digital mastery, harness the power of AI, and share their knowledge online. We believe that by empowering the next generation with these capabilities, we can help create a more connected, innovative, and equitable global community.</p>
            </div>
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
