
        // DOM Elements
        const contactForm = document.getElementById('contactForm');
        const yearEl = document.getElementById('currentYear');
        const exploreBtn = document.getElementById('explore-btn');
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');
        const adminTabs = document.querySelectorAll('.admin-tab');
        const adminContents = document.querySelectorAll('.admin-content');
        const productForm = document.getElementById('product-form');
        const offeringType = document.getElementById('offering-type');
        const offeringCategory = document.getElementById('offering-category');

        // Set current year in footer
        yearEl.textContent = new Date().getFullYear();

        

        // Handle contact form submission
        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Get form values
                const firstName = document.getElementById('first-name').value;
                const lastName = document.getElementById('last-name').value;
                const email = document.getElementById('email').value;
                const message = document.getElementById('message').value;
                
                // For demonstration purposes, we'll just log the form data
                console.log({
                    firstName,
                    lastName,
                    email,
                    message
                });
                
                // Here you would typically send the form data to a server
                
                alert('Thank you for your message! We will get back to you soon.');
                contactForm.reset();
            });
        }

        //product carousel functionality
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.querySelector('.carousel');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
        
            let scrollAmount = 0;
            const scrollStep = 300; // Adjust scroll step as needed
        
            prevBtn.addEventListener('click', () => {
                scrollAmount -= scrollStep;
                if (scrollAmount < 0) scrollAmount = 0;
                carousel.style.transform = `translateX(-${scrollAmount}px)`;
            });
        
            nextBtn.addEventListener('click', () => {
                scrollAmount += scrollStep;
                if (scrollAmount > carousel.scrollWidth - carousel.clientWidth) {
                    scrollAmount = carousel.scrollWidth - carousel.clientWidth;
                }
                carousel.style.transform = `translateX(-${scrollAmount}px)`;
            });
        });


        document.addEventListener('DOMContentLoaded', () => {
            const carousels = document.querySelectorAll('.carousel-container');
        
            carousels.forEach(container => {
                const carousel = container.querySelector('.carousel');
                const prevBtn = container.querySelector('.prev-btn');
                const nextBtn = container.querySelector('.next-btn');
        
                let scrollAmount = 0;
                const scrollStep = 300; // Adjust scroll step as needed
        
                prevBtn.addEventListener('click', () => {
                    scrollAmount -= scrollStep;
                    if (scrollAmount < 0) scrollAmount = 0;
                    carousel.style.transform = `translateX(-${scrollAmount}px)`;
                });
        
                nextBtn.addEventListener('click', () => {
                    scrollAmount += scrollStep;
                    if (scrollAmount > carousel.scrollWidth - carousel.clientWidth) {
                        scrollAmount = carousel.scrollWidth - carousel.clientWidth;
                    }
                    carousel.style.transform = `translateX(-${scrollAmount}px)`;
                });
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            // Select all vote buttons
            const voteButtons = document.querySelectorAll('.vote-button');
        
            // Add click event listener to each vote button
            voteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const service_name = button.getAttribute('data-service_name');
                    alert(`Thank you for voting! for ${service_name}`);
                });
            });
        });
       
        

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                
                if (targetId === '#') return;
                
                // Handle special cases
                if (targetId === '#login') {
                    e.preventDefault();
                    openLoginModal();
                    return;
                }
                
                if (targetId === '#register') {
                    e.preventDefault();
                    // Scroll to registration section
                    const registerSection = document.getElementById('register-section');
                    if (registerSection) {
                        window.scrollTo({
                            top: registerSection.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                    return;
                }
                
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Offset for header height
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll class to navbar for styling on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

       // Vote for product/service functionality   


       document.addEventListener("DOMContentLoaded", () => {
        // Select all vote buttons
        const voteButtons = document.querySelectorAll(".vote-button");
    
        // Add click event listener to each vote button
        voteButtons.forEach(button => {
            button.addEventListener("click", (event) => {
                event.preventDefault(); // Prevent default behavior
    
                // Get the product ID from the button's data attribute
                const productId = button.getAttribute("data-product-id");
    
                // Assuming the user ID is stored in a global variable or session
                const userId = document.body.getAttribute("data-user-id"); // Example: Set this dynamically in your HTML
    
                if (!userId) {
                    alert("You must be logged in to vote.");
                    return;
                }
    
                // Send the product ID and user ID to the server via AJAX
                fetch("vote.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ product_id: productId, user_id: userId })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert("Thank you for voting!");
                        } else {
                            alert("Error: " + data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            });
        });
    });

        // Admin tabs functionality
        adminTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                adminTabs.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Hide all tab contents
                adminContents.forEach(content => content.classList.remove('active'));
                
                // Show relevant tab content
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(`${tabId}-content`).classList.add('active');
            });
        });

        
        populateAdminDashboard();
