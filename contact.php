<?php 
include 'db.php';

// Initialize variables
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$success = "";

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    // Validate subject
    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = test_input($_POST["subject"]);
    }
    
    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    // If no errors, insert into database
    if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr)) {
        $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        
        if ($stmt->execute()) {
            $success = "Your message has been sent successfully!";
            // Clear form fields
            $name = $email = $subject = $message = "";
        } else {
            $error = "Error: " . $stmt->error;
        }
        
        $stmt->close();
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rehan.Education</title>
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
        
        /* Contact Section */
        .contact-section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }
        
        /* Contact Info */
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
        }
        
        .info-item {
            margin-bottom: 30px;
        }
        
        .info-item h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .info-item p, .info-item a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .info-item a:hover {
            color: #0066cc;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
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
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: #0066cc;
            color: #fff;
            transform: translateY(-3px);
        }
        
        /* Contact Form */
        .contact-form {
            flex: 1;
            min-width: 300px;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .contact-form h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #0066cc;
            outline: none;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .error {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #0066cc;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background-color: #0055aa;
            transform: translateY(-2px);
        }
        
        /* Map Section */
        .map-section {
            margin-top: 80px;
            padding: 0 5%;
        }
        
        .map-container {
            width: 100%;
            height: 400px;
            background-color: #f5f5f5;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .map-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-size: 1.2rem;
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
            
            .contact-info h2, .contact-form h2 {
                font-size: 1.8rem;
            }
            
            .contact-form {
                padding: 30px 20px;
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
        <h1>Contact Us</h1>
        <p>Get in touch with our team for inquiries, support, or to learn more about our programs</p>
    </section>

    <section class="contact-section">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            
            <div class="info-item">
                <h3>Address</h3>
                <p>123 Education Street, London, UK</p>
            </div>
            
            <div class="info-item">
                <h3>Phone</h3>
                <p>Call/WhatsApp: +44 7418 359852</p>
            </div>
            
            <div class="info-item">
                <h3>Email</h3>
                <p><a href="mailto:info@rehan.education">info@rehan.education</a></p>
            </div>
            
            <div class="info-item">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link">FB</a>
                    <a href="#" class="social-link">IG</a>
                    <a href="#" class="social-link">X</a>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            
            <?php if (!empty($success)): ?>
                <div class="success"><?php echo $success; ?></div>
            <?php endif; ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                    <?php if (!empty($nameErr)): ?>
                        <span class="error"><?php echo $nameErr; ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    <?php if (!empty($emailErr)): ?>
                        <span class="error"><?php echo $emailErr; ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subject; ?>">
                    <?php if (!empty($subjectErr)): ?>
                        <span class="error"><?php echo $subjectErr; ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea class="form-control" id="message" name="message"><?php echo $message; ?></textarea>
                    <?php if (!empty($messageErr)): ?>
                        <span class="error"><?php echo $messageErr; ?></span>
                    <?php endif; ?>
                </div>
                
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <section class="map-section">
        <div class="map-container">
            <div class="map-placeholder">
                Map location will be displayed here
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
