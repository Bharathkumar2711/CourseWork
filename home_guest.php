<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="scripts" href="home.js">
    </head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#hero" class="logo">Healthy<span>Habitat</span></a>
            <div class="nav-links">
                <a href="#services" class="nav-link">Services</a>
                <a href="#products" class="nav-link">Products</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#contact" class="nav-link">Contact</a>
                <a href="login1.html" class="nav-link" id="login-nav-link">Login</a>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Promoting Health Through Sustainable Living</h1>
                <p class="hero-subtitle">Connect with local businesses offering health and wellness products and
                    services in your community.</p>
                <div class="hero-btns">
                    <a href="register.html" class="btn btn-primary" id="explore-btn">Join Our Community</a>
                    <a href="#about" class="btn btn-secondary">Learn More</a>

                </div>

            </div>
            
        </div>
    </section>

    <!-- Service Section -->
    <section class="section" id="services">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-sage-800 mb-4">Our Wellness Services</h2>
                <p class="text-muted-foreground text-lg">
                    Comprehensive services designed to support your journey toward a healthier, more sustainable
                    lifestyle.
                </p>
            </div>

            <div class="service-grid">
                <div class="service-card">
                    <div class="service-card-header">
                        <div class="service-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3 class="service-title">Healthy Eating Programs</h3>
                        <p class="service-description">Personalized nutrition counseling and organic meal delivery
                            services to support your dietary needs and health goals.</p>
                    </div>
                    <ul class="service-items">
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Nutrition Counseling</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Organic Meal Delivery</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Diet Planning</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Food Sensitivity Testing</span>
                        </li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-card-header">
                        <div class="service-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h3 class="service-title">Fitness and Wellness</h3>
                        <p class="service-description">Online and in-person classes focused on physical and mental
                            well-being, with customized training programs.</p>
                    </div>
                    <ul class="service-items">
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Yoga & Meditation Classes</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Personal Training Services</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Group Fitness Sessions</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Recovery Techniques</span>
                        </li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-card-header">
                        <div class="service-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h3 class="service-title">Sustainable Living</h3>
                        <p class="service-description">Eco-friendly home services and sustainable gardening techniques
                            to reduce environmental impact.</p>
                    </div>
                    <ul class="service-items">
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Eco-Friendly Home Cleaning</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Sustainable Gardening</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Zero-Waste Workshops</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Home Energy Efficiency</span>
                        </li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-card-header">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3 class="service-title">Mindfulness & Mental Health</h3>
                        <p class="service-description">Professional mental health services and workshops designed to
                            help manage stress and improve overall wellbeing.</p>
                    </div>
                    <ul class="service-items">
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Counseling & Therapy</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Stress Management Workshops</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Meditation Practices</span>
                        </li>
                        <li class="service-item">
                            <div class="service-item-dot"></div>
                            <span>Mindfulness Training</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    
     <!-- About Section  -->
    <section class="section about-section" id="about">
        <div class="container">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-sage-800 mb-6">Our Mission</h2>
                <p class="text-lg text-muted-foreground mb-8">
                    At Healthy Habitat Network, we believe that personal wellness and planetary health are deeply
                    interconnected.
                    Our mission is to provide a platform that connects residents with local health and wellness
                    businesses,
                    fostering a community focused on sustainability and wellbeing.
                </p>
                <p class="text-lg text-muted-foreground">
                    We are committed to sustainability, ethical sourcing, and promoting mindfulness in all aspects
                    of life. Join us on this journey toward a healthier you and a healthier planet.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-section" id="contact">
        <div class="container">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-sage-800 mb-4">Contact Us</h2>
                <p class="text-muted-foreground text-lg">
                    Have questions about our platform? We'd love to hear from you.
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="first-name">First Name</label>
                                <input type="text" class="form-input" id="first-name">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="last-name">Last Name</label>
                                <input type="text" class="form-input" id="last-name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-input" id="email">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-textarea" id="message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    </form>
                </div>

                <div class="contact-image">
                    <img src="https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07"
                        alt="Orange flowers representing growth and wellness" />
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Healthy Habitat Network</h3>
                    <p class="mb-4">Promoting health and wellness through sustainable living practices in communities.
                    </p>
                    <div class="social-links">
                        <a href="https://en-gb.facebook.com/" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#services">Services</a></li>
                        <li class="footer-link"><a href="#products">Products</a></li>
                        <li class="footer-link"><a href="#about">About Us</a></li>
                        <li class="footer-link"><a href="#contact">Contact</a></li>
                        <li class="footer-link"><a href="C:\xampp\htdocs\updated_code_1\register.html">Register</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Resources</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Blog</a></li>
                        <li class="footer-link"><a href="#">FAQs</a></li>
                        <li class="footer-link"><a href="#">Privacy Policy</a></li>
                        <li class="footer-link"><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <span id="currentYear">2025</span> Healthy Habitat Network. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="home.js"></script>
    <script src="fetch_products.php"></script>
    </body>
</html>