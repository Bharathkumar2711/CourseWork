



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
                <a href="logout.php" class="nav-link" id="logout-nav-link">Logout</a>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Empowering Communities Through Data-Driven Insights</h1>
                <p class="hero-subtitle">Access real-time statistics, manage local businesses, and analyze resident engagement to foster a healthier, more sustainable community.</p>
                <div class="hero-btns">
                    <a href="register.html" class="btn btn-primary" id="explore-btn">Join Our Community</a>
                    <a href="#about" class="btn btn-secondary">Learn More</a>

                </div>

            </div>
            
        </div>
    </section>

    <!-- Product Section -->

    <section class="section product-section" id="products">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-sage-800 mb-4">Eco-Friendly Products</h2>
            <p class="text-muted-foreground text-lg">
                Sustainable, ethically sourced products that support your wellness journey and protect our planet.
            </p>
        </div>

        <div class="product-category">
            <h3 class="product-category-title">Our Products</h3>
            <div class="carousel-container">
                <button class="carousel-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                <div class="carousel">
                    <?php include('fetch_products.php'); ?>
                </div>
                <button class="carousel-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<section class="section service-section" id="services-carousel-section">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-sage-800 mb-4">Our Wellness Services</h2>
            <p class="text-muted-foreground text-lg">
                Explore our range of services designed to support your health and wellness journey.
            </p>
        </div>

        <div class="service-category">
            <h3 class="product-category-title">Our Services</h3>
            <div class="carousel-container">
                <button class="carousel-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                <div class="carousel">
                    <?php include('fetch_service.php'); ?>
                </div>
                <button class="carousel-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

    <!-- Product Registration Section (foregister_productr local businesses) -->
    <section class="section" id="product-registration" >
        <div class="container">
            <div class="text-center mb-12">
                <h2 class="text-sage-800 mb-4">Register a Product or Service</h2>
                <p class="text-muted-foreground text-lg">
                    Add your health and wellness offering to our community platform.
                </p>
            </div>
            
            <form action="product_Registration.php" class="registration-form" method="post" id="product-form" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Type</label>
                        <select class="form-select" name="offering_type" required id="offering-type">
                            <option value="">Select type</option>
                            <option value="product">Product</option>
                            <option value="service">Service</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
    <label class="form-label">Category</label>
    <select class="form-select" name="offering_category" required id="offering-category">
        <option value="">Select a category</option>
        <option value="Healthy Eating">Healthy Eating</option>
        <option value="Fitness">Fitness</option>
        <option value="Sustainable Living">Sustainable Living</option>
        <option value="Mindfulness">Mindfulness</option>
    </select>
</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="p_name" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-textarea" name="p_description" required></textarea>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="number" name="p_price" step="0.01" min="0" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Price Category</label>
                        <select class="form-select" name="p_category" required>
                            <option value="">Select category</option>
                            <option value="affordable">Affordable</option>
                            <option value="moderate">Moderate</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Health Benefits</label>
                    <textarea class="form-textarea" name="p_benefits" required></textarea>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Certifications (if any)</label>
                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="p_certification_1" value="organic"> USDA Organic
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="p_certification_2" value="non-gmo"> Non-GMO
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="p_certification_3" value="fair-trade"> Fair Trade
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="p_certification_4" value="vegan"> Vegan
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="p_certification_5" value="cruelty-free"> Cruelty-Free
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Image Upload</label>
                    <input type="file" name="p_image" class="form-input" accept="image/*">
                </div>
                
                <button type="submit"class="btn btn-primary" name="register_product" >Register Product/Service</button>
            </form>
        </div>
    </section>

<!-- Admin Dashboard (for council members) -->
    
    <?php include('Admin_dashboard.php'); ?>

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
    <!-- <script src="product_register.js"></script> -->
    <script src="product_Registration.php"></script>

    </body>
</html>