<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitators - Rehan.Education</title>
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
        
        /* Facilitators Section */
        .facilitators {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .facilitators-intro {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .facilitators-intro h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .facilitators-intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        /* Facilitator Cards */
        .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .facilitator-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .facilitator-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .facilitator-image {
            width: 100%;
            height: 250px;
            background-color: #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        
        .facilitator-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .facilitator-card:hover .facilitator-image img {
            transform: scale(1.05);
        }
        
        .facilitator-info {
            padding: 25px;
        }
        
        .facilitator-info h3 {
            font-size: 1.4rem;
            margin-bottom: 5px;
            color: #222;
        }
        
        .facilitator-position {
            font-size: 0.95rem;
            color: #0066cc;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .facilitator-bio {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-link {
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            background-color: #f5f5f5;
            border-radius: 50%;
            color: #555;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: #0066cc;
            color: #fff;
            transform: translateY(-3px);
        }
        
        /* Join Team Section */
        .join-team {
            margin-top: 80px;
            background-color: #f9f9f9;
            padding: 60px;
            border-radius: 8px;
            text-align: center;
        }
        
        .join-team h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .join-team p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #0066cc;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
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
            
            .facilitators-intro h2, .join-team h2 {
                font-size: 1.8rem;
            }
            
            .join-team {
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
        <h1>Meet Our Facilitators</h1>
        <p>The dedicated educators and team members guiding our students to success</p>
    </section>

    <section class="facilitators">
        <div class="facilitators-intro">
            <h2>Our Expert Team</h2>
            <p>At Rehan.Education, our facilitators are passionate educators with expertise in digital skills, AI technologies, and online teaching methodologies. They are committed to empowering students and helping them achieve their full potential in the digital world.</p>
        </div>

        <div class="facilitator-grid">
            <?php
            // Fetch facilitators from database
            $sql = "SELECT * FROM facilitators";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data from each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="facilitator-card">
                        <div class="facilitator-image">
                            <img src="/placeholder.svg?height=250&width=300" alt="' . $row["name"] . '">
                        </div>
                        <div class="facilitator-info">
                            <h3>' . $row["name"] . '</h3>
                            <p class="facilitator-position">' . $row["position"] . '</p>
                            <p class="facilitator-bio">' . $row["bio"] . '</p>
                            <div class="social-links">
                                <a href="' . ($row["facebook_url"] ?? "#") . '" class="social-link">FB</a>
                                <a href="' . ($row["instagram_url"] ?? "#") . '" class="social-link">IG</a>
                                <a href="' . ($row["twitter_url"] ?? "#") . '" class="social-link">X</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                // If no facilitators in database, show sample facilitators
            ?>
                <div class="facilitator-card">
                    <div class="facilitator-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Dr. Sarah Johnson">
                    </div>
                    <div class="facilitator-info">
                        <h3>Dr. Sarah Johnson</h3>
                        <p class="facilitator-position">Lead Educator</p>
                        <p class="facilitator-bio">Dr. Johnson specializes in digital education and has over 15 years of experience in teaching AI concepts to young learners. She is passionate about making technology accessible to all students.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">FB</a>
                            <a href="#" class="social-link">IG</a>
                            <a href="#" class="social-link">X</a>
                        </div>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Prof. Michael Chen">
                    </div>
                    <div class="facilitator-info">
                        <h3>Prof. Michael Chen</h3>
                        <p class="facilitator-position">AI Specialist</p>
                        <p class="facilitator-bio">Professor Chen is an expert in artificial intelligence with a focus on making complex concepts accessible to teenagers. He has developed several AI education programs for young learners.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">FB</a>
                            <a href="#" class="social-link">IG</a>
                            <a href="#" class="social-link">X</a>
                        </div>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Emma Rodriguez">
                    </div>
                    <div class="facilitator-info">
                        <h3>Emma Rodriguez</h3>
                        <p class="facilitator-position">Digital Skills Coach</p>
                        <p class="facilitator-bio">Emma has helped hundreds of students master digital skills and build their online presence. She specializes in content creation and digital marketing strategies for young entrepreneurs.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">FB</a>
                            <a href="#" class="social-link">IG</a>
                            <a href="#" class="social-link">X</a>
                        </div>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="David Okafor">
                    </div>
                    <div class="facilitator-info">
                        <h3>David Okafor</h3>
                        <p class="facilitator-position">Online Teaching Expert</p>
                        <p class="facilitator-bio">David is a pioneer in online education methodologies. He has developed innovative approaches to virtual learning that engage students and maximize knowledge retention.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">FB</a>
                            <a href="#" class="social-link">IG</a>
                            <a href="#" class="social-link">X</a>
                        </div>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="Aisha Patel">
                    </div>
                    <div class="facilitator-info">
                        <h3>Aisha Patel</h3>
                        <p class="facilitator-position">Student Success Coordinator</p>
                        <p class="facilitator-bio">Aisha works closely with students to ensure they are making progress and overcoming challenges. She provides personalized support and guidance throughout the learning journey.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">FB</a>
                            <a href="#" class="social-link">IG</a>
                            <a href="#" class="social-link">X</a>
                        </div>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-image">
                        <img src="/placeholder.svg?height=250&width=300" alt="James Wilson">
                    </div>
                    <div class="facilitator-info">
                        <h3>James Wilson</h3>
                        <p class="facilitator-position">Technology Integration Specialist</p>
                        <p class="facilitator-bio">James helps students integrate various technologies into their learning and projects. He specializes in finding the right tools to enhance creativity and productivity.</p>
                        <div class="social-links">
                            <a href="#" class="social-link">FB</a>
                            <a href="#" class="social-link">IG</a>
                            <a href="#" class="social-link">X</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="join-team">
            <h2>Join Our Team</h2>
            <p>Are you passionate about digital education and empowering the next generation? We're always looking for talented educators to join our team of facilitators at Rehan.Education.</p>
            <a href="contact.php" class="btn">Get in Touch</a>
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
