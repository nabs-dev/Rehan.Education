<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum - Rehan.Education</title>
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
        
        /* Curriculum Section */
        .curriculum {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .curriculum-intro {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .curriculum-intro h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .curriculum-intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        /* Curriculum Modules */
        .modules {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        
        .module {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .module:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .module-header {
            background-color: #0066cc;
            color: #fff;
            padding: 20px 30px;
        }
        
        .module-header h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }
        
        .module-header p {
            font-size: 0.95rem;
            opacity: 0.9;
        }
        
        .module-content {
            padding: 30px;
        }
        
        .module-content ul {
            list-style-position: inside;
            margin-bottom: 20px;
        }
        
        .module-content ul li {
            margin-bottom: 10px;
            color: #555;
        }
        
        .module-content p {
            color: #555;
            line-height: 1.8;
        }
        
        /* Learning Outcomes */
        .outcomes {
            margin-top: 80px;
            background-color: #f9f9f9;
            padding: 60px;
            border-radius: 8px;
        }
        
        .outcomes h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            color: #222;
        }
        
        .outcomes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .outcome {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .outcome h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: #222;
        }
        
        .outcome p {
            color: #555;
            line-height: 1.7;
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
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #fff;
            color: #0066cc;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
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
            
            .curriculum-intro h2, .outcomes h2, .cta h2 {
                font-size: 1.8rem;
            }
            
            .outcomes {
                padding: 30px;
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
        <h1>Our Innovative Curriculum</h1>
        <p>Empowering teens with digital skills, AI proficiency, and online teaching methodologies</p>
    </section>

    <section class="curriculum">
        <div class="curriculum-intro">
            <h2>Digital Mastery for a Connected World</h2>
            <p>Our curriculum is designed to equip students with the skills, knowledge, and mindset needed to thrive in the digital age. Through a blend of theoretical learning and practical application, students will develop expertise in digital technologies, AI tools, and effective online teaching methods.</p>
        </div>

        <div class="modules">
            <div class="module">
                <div class="module-header">
                    <h3>Module 1: Digital Foundations</h3>
                    <p>Building the essential digital skills for success</p>
                </div>
                <div class="module-content">
                    <ul>
                        <li>Digital literacy and critical thinking in the online world</li>
                        <li>Content creation fundamentals (text, image, audio, video)</li>
                        <li>Digital collaboration tools and methodologies</li>
                        <li>Online research and information evaluation</li>
                        <li>Digital identity and personal branding</li>
                    </ul>
                    <p>This module establishes the core digital competencies that serve as the foundation for all future learning. Students will gain confidence in navigating digital environments and creating meaningful content.</p>
                </div>
            </div>

            <div class="module">
                <div class="module-header">
                    <h3>Module 2: AI Tools and Applications</h3>
                    <p>Harnessing artificial intelligence for learning and creation</p>
                </div>
                <div class="module-content">
                    <ul>
                        <li>Introduction to AI concepts and capabilities</li>
                        <li>Prompt engineering for effective AI interaction</li>
                        <li>AI-assisted research and content creation</li>
                        <li>Data analysis and visualization with AI tools</li>
                        <li>Ethical considerations in AI usage</li>
                    </ul>
                    <p>Students will learn to leverage AI as a powerful tool for enhancing their learning and creative processes. This module demystifies AI and teaches practical applications that amplify human capabilities.</p>
                </div>
            </div>

            <div class="module">
                <div class="module-header">
                    <h3>Module 3: Online Teaching Methodologies</h3>
                    <p>Developing skills to effectively share knowledge online</p>
                </div>
                <div class="module-content">
                    <ul>
                        <li>Principles of effective online instruction</li>
                        <li>Creating engaging educational content</li>
                        <li>Building and managing online learning communities</li>
                        <li>Assessment strategies for online learning</li>
                        <li>Monetization models for educational content</li>
                    </ul>
                    <p>This module prepares students to become effective online educators, capable of sharing their knowledge and skills with global audiences. Students will learn how to create impactful learning experiences in digital environments.</p>
                </div>
            </div>

            <div class="module">
                <div class="module-header">
                    <h3>Module 4: Impact Project</h3>
                    <p>Applying skills to create positive change</p>
                </div>
                <div class="module-content">
                    <ul>
                        <li>Project planning and management</li>
                        <li>Identifying opportunities for digital impact</li>
                        <li>Designing solutions for real-world problems</li>
                        <li>Implementation and iteration</li>
                        <li>Measuring and communicating impact</li>
                    </ul>
                    <p>In this capstone module, students will apply their digital skills, AI knowledge, and teaching abilities to create a project that addresses a real-world challenge. This hands-on experience consolidates learning and demonstrates the potential for positive impact.</p>
                </div>
            </div>
        </div>

        <div class="outcomes">
            <h2>Learning Outcomes</h2>
            <div class="outcomes-grid">
                <div class="outcome">
                    <h3>Digital Fluency</h3>
                    <p>Confidently navigate digital environments and utilize a wide range of digital tools for communication, collaboration, and creation.</p>
                </div>
                <div class="outcome">
                    <h3>AI Literacy</h3>
                    <p>Understand AI capabilities and limitations, and effectively leverage AI tools to enhance learning, problem-solving, and creative processes.</p>
                </div>
                <div class="outcome">
                    <h3>Teaching Proficiency</h3>
                    <p>Design and deliver engaging online learning experiences that effectively transfer knowledge and skills to diverse audiences.</p>
                </div>
                <div class="outcome">
                    <h3>Impact Mindset</h3>
                    <p>Identify opportunities to apply digital skills for positive social impact and develop solutions that address real-world challenges.</p>
                </div>
                <div class="outcome">
                    <h3>Financial Independence</h3>
                    <p>Understand and apply strategies for monetizing digital skills and knowledge, creating pathways to financial independence.</p>
                </div>
                <div class="outcome">
                    <h3>Lifelong Learning</h3>
                    <p>Develop habits and strategies for continuous learning in a rapidly evolving digital landscape.</p>
                </div>
            </div>
        </div>

        <div class="cta">
            <h2>Ready to Begin Your Digital Mastery Journey?</h2>
            <p>Join our innovative program and develop the skills you need to make a positive impact in the digital world.</p>
            <a href="contact.php" class="btn">Contact Us Today</a>
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
