<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Rehan.Education</title>
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
        
        /* Courses Section */
        .courses-section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .courses-intro {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .courses-intro h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .courses-intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        /* Course Cards */
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }
        
        .course-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .course-image {
            width: 100%;
            height: 200px;
            background-color: #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        
        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .course-card:hover .course-image img {
            transform: scale(1.05);
        }
        
        .course-level {
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
        
        .course-content {
            padding: 25px;
        }
        
        .course-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .course-description {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .course-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .course-duration, .course-students {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .course-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 20px;
        }
        
        .course-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #0066cc;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        
        .course-btn:hover {
            background-color: #0055aa;
        }
        
        /* Course Categories */
        .course-categories {
            margin-top: 80px;
        }
        
        .course-categories h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .category-card {
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        
        .category-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .category-card p {
            color: #555;
            margin-bottom: 15px;
        }
        
        .category-link {
            color: #0066cc;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .category-link:hover {
            color: #0055aa;
        }
        
        /* Testimonials */
        .testimonials {
            margin-top: 80px;
            padding: 60px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        
        .testimonials h2 {
            font-size: 2rem;
            margin-bottom: 40px;
            color: #222;
            text-align: center;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .testimonial-text {
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            overflow: hidden;
        }
        
        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            font-size: 1.1rem;
            color: #222;
            margin-bottom: 5px;
        }
        
        .author-info p {
            font-size: 0.9rem;
            color: #666;
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
            
            .courses-intro h2, .course-categories h2, .testimonials h2, .cta h2 {
                font-size: 1.8rem;
            }
            
            .course-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
            
            .testimonials, .cta {
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
        <h1>Our Courses</h1>
        <p>Explore our range of courses designed to develop digital skills, AI proficiency, and online teaching abilities</p>
    </section>

    <section class="courses-section">
        <div class="courses-intro">
            <h2>Digital Mastery Courses</h2>
            <p>Our courses are designed to equip students with the practical skills and knowledge they need to thrive in the digital world. From foundational digital literacy to advanced AI applications, our curriculum covers a wide range of topics to help students achieve their goals.</p>
        </div>

        <div class="course-grid">
            <div class="course-card">
                <div class="course-image">
                    <img src="/placeholder.svg?height=200&width=350" alt="Digital Foundations Course">
                    <div class="course-level">Beginner</div>
                </div>
                <div class="course-content">
                    <h3>Digital Foundations</h3>
                    <p class="course-description">Build essential digital skills and develop confidence in navigating the online world. Learn content creation, digital collaboration, and online research techniques.</p>
                    <div class="course-details">
                        <div class="course-duration">Duration: 8 weeks</div>
                        <div class="course-students">Students: 250+</div>
                    </div>
                    <div class="course-price">£299</div>
                    <a href="#" class="course-btn">Learn More</a>
                </div>
            </div>

            <div class="course-card">
                <div class="course-image">
                    <img src="/placeholder.svg?height=200&width=350" alt="AI Tools Mastery Course">
                    <div class="course-level">Intermediate</div>
                </div>
                <div class="course-content">
                    <h3>AI Tools Mastery</h3>
                    <p class="course-description">Learn to leverage AI tools for learning, content creation, and problem-solving. Master prompt engineering and ethical AI usage for enhanced productivity.</p>
                    <div class="course-details">
                        <div class="course-duration">Duration: 10 weeks</div>
                        <div class="course-students">Students: 180+</div>
                    </div>
                    <div class="course-price">£349</div>
                    <a href="#" class="course-btn">Learn More</a>
                </div>
            </div>

            <div class="course-card">
                <div class="course-image">
                    <img src="/placeholder.svg?height=200&width=350" alt="Online Teaching Essentials Course">
                    <div class="course-level">Intermediate</div>
                </div>
                <div class="course-content">
                    <h3>Online Teaching Essentials</h3>
                    <p class="course-description">Develop the skills to effectively share knowledge online. Learn to create engaging educational content and build thriving learning communities.</p>
                    <div class="course-details">
                        <div class="course-duration">Duration: 12 weeks</div>
                        <div class="course-students">Students: 150+</div>
                    </div>
                    <div class="course-price">£399</div>
                    <a href="#" class="course-btn">Learn More</a>
                </div>
            </div>

            <div class="course-card">
                <div class="course-image">
                    <img src="/placeholder.svg?height=200&width=350" alt="Digital Content Creation Course">
                    <div class="course-level">All Levels</div>
                </div>
                <div class="course-content">
                    <h3>Digital Content Creation</h3>
                    <p class="course-description">Master the art of creating compelling digital content across multiple formats. Learn text, image, audio, and video production techniques.</p>
                    <div class="course-details">
                        <div class="course-duration">Duration: 8 weeks</div>
                        <div class="course-students">Students: 200+</div>
                    </div>
                    <div class="course-price">£299</div>
                    <a href="#" class="course-btn">Learn More</a>
                </div>
            </div>

            <div class="course-card">
                <div class="course-image">
                    <img src="/placeholder.svg?height=200&width=350" alt="Digital Entrepreneurship Course">
                    <div class="course-level">Advanced</div>
                </div>
                <div class="course-content">
                    <h3>Digital Entrepreneurship</h3>
                    <p class="course-description">Learn to monetize your digital skills and knowledge. Develop strategies for building sustainable online businesses and achieving financial independence.</p>
                    <div class="course-details">
                        <div class="course-duration">Duration: 12 weeks</div>
                        <div class="course-students">Students: 120+</div>
                    </div>
                    <div class="course-price">£449</div>
                    <a href="#" class="course-btn">Learn More</a>
                </div>
            </div>

            <div class="course-card">
                <div class="course-image">
                    <img src="/placeholder.svg?height=200&width=350" alt="Complete Digital Mastery Program">
                    <div class="course-level">Comprehensive</div>
                </div>
                <div class="course-content">
                    <h3>Complete Digital Mastery Program</h3>
                    <p class="course-description">Our flagship program covering all aspects of digital mastery. Includes all core courses plus mentorship and project support.</p>
                    <div class="course-details">
                        <div class="course-duration">Duration: 24 weeks</div>
                        <div class="course-students">Students: 100+</div>
                    </div>
                    <div class="course-price">£999</div>
                    <a href="#" class="course-btn">Learn More</a>
                </div>
            </div>
        </div>

        <div class="course-categories">
            <h2>Course Categories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <h3>Digital Skills</h3>
                    <p>Foundational and advanced digital literacy and skills courses.</p>
                    <a href="#" class="category-link">Explore Courses</a>
                </div>
                <div class="category-card">
                    <h3>AI & Technology</h3>
                    <p>Courses focused on AI tools, applications, and emerging technologies.</p>
                    <a href="#" class="category-link">Explore Courses</a>
                </div>
                <div class="category-card">
                    <h3>Online Teaching</h3>
                    <p>Learn effective methodologies for teaching and sharing knowledge online.</p>
                    <a href="#" class="category-link">Explore Courses</a>
                </div>
                <div class="category-card">
                    <h3>Content Creation</h3>
                    <p>Master the creation of engaging digital content across multiple formats.</p>
                    <a href="#" class="category-link">Explore Courses</a>
                </div>
            </div>
        </div>

        <div class="testimonials">
            <h2>What Our Students Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"The Digital Foundations course completely transformed my relationship with technology. I now feel confident creating and sharing content online, and I've even started my own blog!"</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/placeholder.svg?height=50&width=50" alt="Student">
                        </div>
                        <div class="author-info">
                            <h4>Sarah K.</h4>
                            <p>Digital Foundations Graduate</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Learning to use AI tools effectively has been a game-changer for my studies. I'm now able to research and create content much more efficiently, giving me more time to focus on creative aspects."</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/placeholder.svg?height=50&width=50" alt="Student">
                        </div>
                        <div class="author-info">
                            <h4>Michael T.</h4>
                            <p>AI Tools Mastery Graduate</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"The Complete Digital Mastery Program was worth every penny. I've now built an online teaching platform that reaches students across three continents and provides me with a sustainable income."</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/placeholder.svg?height=50&width=50" alt="Student">
                        </div>
                        <div class="author-info">
                            <h4>Aisha M.</h4>
                            <p>Digital Mastery Graduate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta">
            <h2>Ready to Begin Your Digital Mastery Journey?</h2>
            <p>Enroll in one of our courses today and take the first step toward developing the digital skills you need to make a positive impact and achieve financial independence.</p>
            <a href="contact.php" class="cta-btn">Contact Us to Enroll</a>
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
