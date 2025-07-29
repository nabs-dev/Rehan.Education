<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Waiver Agreement - Rehan.Education</title>
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
        
        /* Waiver Section */
        .waiver-section {
            padding: 80px 5%;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .waiver-intro {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .waiver-intro h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #222;
        }
        
        .waiver-intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        
        /* Waiver Content */
        .waiver-content {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .waiver-section-title {
            font-size: 1.4rem;
            margin: 30px 0 15px;
            color: #222;
        }
        
        .waiver-section-title:first-child {
            margin-top: 0;
        }
        
        .waiver-text {
            color: #555;
            line-height: 1.8;
            font-size: 1rem;
        }
        
        .waiver-text p {
            margin-bottom: 15px;
        }
        
        .waiver-text ul, .waiver-text ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }
        
        .waiver-text li {
            margin-bottom: 8px;
        }
        
        /* Form Section */
        .form-section {
            margin-top: 60px;
        }
        
        .form-section h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .waiver-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-group {
            margin-bottom: 25px;
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
        
        .checkbox-group {
            margin-bottom: 20px;
        }
        
        .checkbox-label {
            display: flex;
            align-items: flex-start;
            cursor: pointer;
        }
        
        .checkbox-input {
            margin-top: 5px;
            margin-right: 10px;
        }
        
        .checkbox-text {
            color: #555;
            font-size: 0.95rem;
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
        
        /* FAQ Section */
        .faq-section {
            margin-top: 80px;
        }
        
        .faq-section h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #222;
            text-align: center;
        }
        
        .faq-list {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        
        .faq-item {
            border-bottom: 1px solid #eee;
        }
        
        .faq-item:last-child {
            border-bottom: none;
        }
        
        .faq-question {
            padding: 20px;
            background-color: #fff;
            color: #222;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }
        
        .faq-question:hover {
            background-color: #f9f9f9;
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }
        
        .faq-answer p {
            color: #555;
            line-height: 1.8;
            padding-bottom: 20px;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
            padding: 0 20px 20px;
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
            
            .waiver-intro h2, .form-section h2, .faq-section h2 {
                font-size: 1.8rem;
            }
            
            .waiver-content, .waiver-form {
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
        <h1>Parents Waiver Agreement</h1>
        <p>Important information for parents and guardians of students enrolled in Rehan.Education programs</p>
    </section>

    <section class="waiver-section">
        <div class="waiver-intro">
            <h2>Parents Waiver and Consent Form</h2>
            <p>Please read the following agreement carefully. This document outlines the terms, conditions, and consent required for your child's participation in Rehan.Education programs.</p>
        </div>

        <div class="waiver-content">
            <h3 class="waiver-section-title">1. Program Participation</h3>
            <div class="waiver-text">
                <p>I hereby give permission for my child to participate in the educational programs offered by Rehan.Education. I understand that these programs involve digital skills training, AI education, and online teaching methodologies.</p>
            </div>

            <h3 class="waiver-section-title">2. Online Activities</h3>
            <div class="waiver-text">
                <p>I understand that the program involves online activities, including but not limited to:</p>
                <ul>
                    <li>Participation in virtual classrooms and learning environments</li>
                    <li>Creation and sharing of digital content</li>
                    <li>Use of AI tools and platforms under supervision</li>
                    <li>Interaction with other students in monitored online spaces</li>
                </ul>
                <p>I consent to my child's participation in these online activities and understand that Rehan.Education will implement appropriate safeguards to ensure a safe learning environment.</p>
            </div>

            <h3 class="waiver-section-title">3. Media Release</h3>
            <div class="waiver-text">
                <p>I understand that Rehan.Education may document program activities for educational and promotional purposes. By signing this waiver, I grant permission for Rehan.Education to:</p>
                <ul>
                    <li>Photograph or record my child during program activities</li>
                    <li>Use my child's work created during the program for educational purposes</li>
                    <li>Share program highlights, which may include my child's participation, on the Rehan.Education website and social media channels</li>
                </ul>
                <p>I understand that no personal information will be shared without additional explicit consent.</p>
            </div>

            <h3 class="waiver-section-title">4. Health and Safety</h3>
            <div class="waiver-text">
                <p>I acknowledge that it is my responsibility to ensure my child's physical and digital well-being during program participation, including:</p>
                <ul>
                    <li>Providing a suitable learning environment</li>
                    <li>Monitoring screen time and ensuring appropriate breaks</li>
                    <li>Supervising online activities as appropriate for my child's age</li>
                </ul>
                <p>I will inform Rehan.Education of any specific needs or concerns regarding my child's participation.</p>
            </div>

            <h3 class="waiver-section-title">5. Liability Waiver</h3>
            <div class="waiver-text">
                <p>I understand and acknowledge that participation in educational programs involves certain inherent risks. I hereby release Rehan.Education, its staff, facilitators, and partners from any liability for injuries or damages that may occur during my child's participation in the program, except in cases of gross negligence or willful misconduct.</p>
            </div>

            <h3 class="waiver-section-title">6. Program Policies</h3>
            <div class="waiver-text">
                <p>I acknowledge that I have read and agree to abide by all program policies, including:</p>
                <ul>
                    <li>Attendance and participation requirements</li>
                    <li>Code of conduct for online interactions</li>
                    <li>Digital citizenship guidelines</li>
                    <li>Payment and refund policies</li>
                </ul>
                <p>I understand that failure to comply with these policies may result in my child's removal from the program without refund.</p>
            </div>

            <h3 class="waiver-section-title">7. Consent to Communication</h3>
            <div class="waiver-text">
                <p>I consent to receive communications from Rehan.Education regarding my child's participation in the program, including:</p>
                <ul>
                    <li>Program updates and announcements</li>
                    <li>Information about my child's progress</li>
                    <li>Invitations to program events and activities</li>
                </ul>
                <p>I understand that I can opt out of non-essential communications at any time.</p>
            </div>
        </div>

        <div class="form-section">
            <h2>Parent/Guardian Consent Form</h2>
            <form class="waiver-form" action="#" method="post">
                <div class="form-group">
                    <label for="parent_name">Parent/Guardian Full Name</label>
                    <input type="text" class="form-control" id="parent_name" name="parent_name" required>
                </div>
                
                <div class="form-group">
                    <label for="child_name">Child's Full Name</label>
                    <input type="text" class="form-control" id="child_name" name="child_name" required>
                </div>
                
                <div class="form-group">
                    <label for="child_age">Child's Age</label>
                    <input type="number" class="form-control" id="child_age" name="child_age" min="10" max="18" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="program_consent" required>
                        <span class="checkbox-text">I have read and agree to the Program Participation terms (Section 1)</span>
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="online_consent" required>
                        <span class="checkbox-text">I have read and agree to the Online Activities terms (Section 2)</span>
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="media_consent" required>
                        <span class="checkbox-text">I have read and agree to the Media Release terms (Section 3)</span>
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="health_consent" required>
                        <span class="checkbox-text">I have read and agree to the Health and Safety terms (Section 4)</span>
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="liability_consent" required>
                        <span class="checkbox-text">I have read and agree to the Liability Waiver terms (Section 5)</span>
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="policies_consent" required>
                        <span class="checkbox-text">I have read and agree to the Program Policies terms (Section 6)</span>
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" class="checkbox-input" name="communication_consent" required>
                        <span class="checkbox-text">I have read and agree to the Consent to Communication terms (Section 7)</span>
                    </label>
                </div>
                
                <div class="form-group">
                    <label for="signature">Digital Signature (Type your full name)</label>
                    <input type="text" class="form-control" id="signature" name="signature" required>
                </div>
                
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                
                <button type="submit" class="btn">Submit Waiver Agreement</button>
            </form>
        </div>

        <div class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        Why is a waiver agreement necessary?
                        <span class="toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>A waiver agreement is necessary to ensure that all parents and guardians understand the nature of our programs, the activities involved, and the responsibilities of all parties. It also provides legal protection for both families and Rehan.Education.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Can I modify the terms of the waiver agreement?
                        <span class="toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>The waiver agreement is a standard document for all participants. If you have specific concerns about any of the terms, please contact us directly to discuss your situation before signing the agreement.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        How is my child's privacy protected?
                        <span class="toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Rehan.Education takes privacy very seriously. We comply with all applicable data protection regulations and implement appropriate technical and organizational measures to protect personal information. We only collect information necessary for program participation and never share personal data with third parties without explicit consent.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What if my child has special needs or requirements?
                        <span class="toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We are committed to making our programs accessible to all students. If your child has special needs or requirements, please contact us directly so we can discuss appropriate accommodations and ensure a positive learning experience.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        How long is this waiver valid?
                        <span class="toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>This waiver agreement is valid for the duration of your child's participation in Rehan.Education programs. If there are significant changes to our programs or policies, we may ask you to review and sign an updated agreement.</p>
                    </div>
                </div>
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
        // JavaScript for FAQ accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                const isActive = item.classList.contains('active');
                
                // Close all items
                document.querySelectorAll('.faq-item').forEach(faqItem => {
                    faqItem.classList.remove('active');
                    faqItem.querySelector('.toggle').textContent = '+';
                });
                
                // If the clicked item wasn't active, open it
                if (!isActive) {
                    item.classList.add('active');
                    question.querySelector('.toggle').textContent = '-';
                }
            });
        });
        
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
