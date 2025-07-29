<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards & Recognition - Rehan.Education</title>
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
        
        /* Awards Section */
        .awards-section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .awards-intro {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .awards-intro h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .awards-intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        /* Award Categories */
        .award-categories {
            margin-bottom: 80px;
        }
        
        .category {
            margin-bottom: 60px;
        }
        
        .category-title {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }
        
        .category-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #0066cc;
        }
        
        /* Award Cards */
        .awards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }
        
        .award-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .award-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .award-image {
            width: 100%;
            height: 200px;
            background-color: #f0f0f0;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .award-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .award-card:hover .award-image img {
            transform: scale(1.05);
        }
        
        .award-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #0066cc;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .award-content {
            padding: 25px;
        }
        
        .award-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .award-date {
            font-size: 0.9rem;
            color: #0066cc;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .award-description {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .award-presenter {
            font-style: italic;
            color: #666;
            font-size: 0.95rem;
        }
        
        /* Recognition Section */
        .recognition-section {
            margin-top: 80px;
            padding: 60px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        
        .recognition-section h2 {
            font-size: 2rem;
            margin-bottom: 40px;
            color: #222;
            text-align: center;
        }
        
        .recognition-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .recognition-item {
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .recognition-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .recognition-logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            background-color: #f0f0f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #0066cc;
        }
        
        .recognition-item h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .recognition-item p {
            color: #555;
            line-height: 1.7;
        }
        
        /* Student Achievements */
        .student-achievements {
            margin-top: 80px;
        }
        
        .student-achievements h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .achievement-card {
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .achievement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .achievement-icon {
            font-size: 2.5rem;
            color: #0066cc;
            margin-bottom: 20px;
        }
        
        .achievement-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .achievement-card p {
            color: #555;
            margin-bottom: 15px;
        }
        
        .achievement-count {
            font-size: 2rem;
            font-weight: 700;
            color: #0066cc;
        }
        
        /* CTA Section */
        .cta {
            text-align: center;
            margin-top: 80px;
            padding: 60px;
            background-color: #0066cc;
            border-radius: 8px;
            color: #fff;
        }
        
        .cta h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .cta-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #fff;
            color: #0066cc;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .cta-btn:hover {
            background-color: #f0f0f0;
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
            
            .awards-intro h2, .category-title, .recognition-section h2, .student-achievements h2, .cta h2 {
                font-size: 1.8rem;
            }
            
            .awards-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
            
            .recognition-section, .cta {
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
                <li><a href="awards.php">Awards</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="parents-waiver.php">Parents Waiver Agreement</a></li>
            </ul>
        </nav>
    </header>

    <section class="page-header">
        <h1>Awards & Recognition</h1>
        <p>Celebrating excellence in digital education and student achievements</p>
    </section>

    <section class="awards-section">
        <div class="awards-intro">
            <h2>Our Achievements</h2>
            <p>At Rehan.Education, we're proud of the recognition our innovative approach to digital education has received. These awards reflect our commitment to excellence and the positive impact our programs have on students' lives.</p>
        </div>

        <div class="award-categories">
            <div class="category">
                <h2 class="category-title">Educational Excellence Awards</h2>
                <div class="awards-grid">
                    <div class="award-card">
                        <div class="award-image">
                            <img src="/placeholder.svg?height=200&width=350" alt="Digital Innovation in Education Award">
                            <div class="award-badge">2023</div>
                        </div>
                        <div class="award-content">
                            <h3>Digital Innovation in Education Award</h3>
                            <p class="award-date">November 2023</p>
                            <p class="award-description">Recognized for our pioneering approach to integrating AI tools into educational programs for teenagers, creating a new paradigm in digital skills education.</p>
                            <p class="award-presenter">Presented by the International Digital Education Alliance</p>
                        </div>
                    </div>

                    <div class="award-card">
                        <div class="award-image">
                            <img src="/placeholder.svg?height=200&width=350" alt="Excellence in Online Teaching Award">
                            <div class="award-badge">2022</div>
                        </div>
                        <div class="award-content">
                            <h3>Excellence in Online Teaching Award</h3>
                            <p class="award-date">September 2022</p>
                            <p class="award-description">Awarded for our comprehensive methodology for teaching online teaching skills to students, enabling them to effectively share knowledge in digital environments.</p>
                            <p class="award-presenter">Presented by the Global Education Forum</p>
                        </div>
                    </div>

                    <div class="award-card">
                        <div class="award-image">
                            <img src="/placeholder.svg?height=200&width=350" alt="Youth Empowerment Through Technology Award">
                            <div class="award-badge">2022</div>
                        </div>
                        <div class="award-content">
                            <h3>Youth Empowerment Through Technology Award</h3>
                            <p class="award-date">May 2022</p>
                            <p class="award-description">Recognized for our success in empowering young people with digital skills that enable financial independence and positive social impact.</p>
                            <p class="award-presenter">Presented by the Technology for Good Foundation</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category">
                <h2 class="category-title">Innovation & Impact Awards</h2>
                <div class="awards-grid">
                    <div class="award-card">
                        <div class="award-image">
                            <img src="/placeholder.svg?height=200&width=350" alt="Educational Program of the Year">
                            <div class="award-badge">2023</div>
                        </div>
                        <div class="award-content">
                            <h3>Educational Program of the Year</h3>
                            <p class="award-date">July 2023</p>
                            <p class="award-description">Our "Digital Mastery for a Connected World" program was recognized as the most innovative and effective educational initiative for teenagers.</p>
                            <p class="award-presenter">Presented by the Education Innovation Summit</p>
                        </div>
                    </div>

                    <div class="award-card">
                        <div class="award-image">
                            <img src="/placeholder.svg?height=200&width=350" alt="Social Impact Through Education Award">
                            <div class="award-badge">2023</div>
                        </div>
                        <div class="award-content">
                            <h3>Social Impact Through Education Award</h3>
                            <p class="award-date">March 2023</p>
                            <p class="award-description">Awarded for our success in helping students create positive social change through the application of digital skills and knowledge sharing.</p>
                            <p class="award-presenter">Presented by the Social Innovation Network</p>
                        </div>
                    </div>

                    <div class="award-card">
                        <div class="award-image">
                            <img src="/placeholder.svg?height=200&width=350" alt="AI in Education Excellence Award">
                            <div class="award-badge">2022</div>
                        </div>
                        <div class="award-content">
                            <h3>AI in Education Excellence Award</h3>
                            <p class="award-date">October 2022</p>
                            <p class="award-description">Recognized for our ethical and effective approach to teaching AI concepts and applications to young learners.</p>
                            <p class="award-presenter">Presented by the AI for Education Consortium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="recognition-section">
            <h2>Industry Recognition</h2>
            <div class="recognition-list">
                <div class="recognition-item">
                    <div class="recognition-logo">🏆</div>
                    <h3>Top 10 EdTech Innovators</h3>
                    <p>Named one of the top 10 educational technology innovators by EdTech Magazine for our pioneering approach to digital skills education.</p>
                </div>
                <div class="recognition-item">
                    <div class="recognition-logo">🌟</div>
                    <h3>5-Star Program Rating</h3>
                    <p>Received a perfect 5-star rating from the Educational Program Review Board for curriculum quality and student outcomes.</p>
                </div>
                <div class="recognition-item">
                    <div class="recognition-logo">🔍</div>
                    <h3>Featured Case Study</h3>
                    <p>Our approach to digital education was featured as a case study in the Journal of Educational Innovation for its effectiveness and scalability.</p>
                </div>
            </div>
        </div>

        <div class="student-achievements">
            <h2>Student Success Metrics</h2>
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="achievement-icon">👨‍🎓</div>
                    <h3>Program Graduates</h3>
                    <p>Students who have successfully completed our Digital Mastery program</p>
                    <div class="achievement-count">1,200+</div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">💼</div>
                    <h3>Student Businesses</h3>
                    <p>Online businesses launched by our students using their digital skills</p>
                    <div class="achievement-count">350+</div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">🌍</div>
                    <h3>Lives Impacted</h3>
                    <p>People positively impacted by our students' digital initiatives</p>
                    <div class="achievement-count">2.5M+</div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">💰</div>
                    <h3>Student Earnings</h3>
                    <p>Average annual income for graduates from their digital skills</p>
                    <div class="achievement-count">£25K+</div>
                </div>
            </div>
        </div>

        <div class="cta">
            <h2>Join Our Award-Winning Programs</h2>
            <p>Become part of our community of digital innovators and develop the skills you need to make a positive impact and achieve financial independence.</p>
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
