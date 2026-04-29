<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manso Joseph Kwesi | Professional Web Developer - Ghana</title>
    <meta name="description" content="Professional web developer in Accra, Ghana. Custom websites, WordPress, e-commerce development with secure payment options.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Ghana Flag Banner -->
    <div class="ghana-banner">
        🇬🇭 Professional Web Developer | Accra, Ghana
    </div>

    <!-- Navigation -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">MK</div>
                <div class="logo-text">MansoKwesi</div>
            </a>
            <a href="#secure-contact" class="hire-btn">Contact Me</a>
        </div>
    </header>

    <!-- Contact Ribbon -->
    <div class="contact-ribbon">
        <div class="contact-items">
            <a href="#secure-contact" class="contact-btn">
                <i class="fas fa-phone"></i> Contact via Secure Form
            </a>
            <a href="#secure-contact" class="contact-btn">
                <i class="fas fa-comment-dollar"></i> Make Secure Payment
            </a>
            <a href="#secure-contact" class="contact-btn">
                <i class="fas fa-file-contract"></i> Book Project
            </a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-map-marker-alt"></i> Web Developer from Ghana
            </div>
            <h1 class="hero-title">Hi, I'm <span>Manso Joseph Kwesi</span></h1>
            <p class="hero-subtitle">
                Professional web developer specializing in custom websites, WordPress solutions, and e-commerce development for local and international clients.
            </p>
            
            <div class="stats-container">
                <div class="stat-card">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Satisfaction</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">24h</span>
                    <span class="stat-label">Start Time</span>
                </div>
            </div>
            
            <!-- SECURE Payment Information - No Public Numbers -->
            <div class="payment-info">
                <h3><i class="fas fa-shield-alt"></i> Secure Payment System</h3>
                <p>50% deposit required to start project</p>
                <p>Multiple secure payment options available</p>
                <a href="#secure-contact" class="action-btn payment">
                    <i class="fas fa-lock"></i> Get Payment Details
                </a>
            </div>
            
            <div style="margin-top: 20px;">
                <a href="#secure-contact" class="action-btn">
                    <i class="fas fa-clipboard-check"></i> Book Project Now
                </a>
            </div>
        </div>
        
        <div class="profile-card">
            <!-- Small Profile Picture -->
            <div class="profile-img-container">
                <img src="https://i.ibb.co/zVh4g1gG/mjk1.jpg" 
                     alt="Manso Joseph Kwesi" 
                     class="profile-img">
            </div>
            
            <h2 class="profile-name">Manso Joseph Kwesi</h2>
            <p class="profile-title">Full Stack Web Developer</p>
            <p class="profile-location">
                <i class="fas fa-map-marker-alt"></i> Accra, Ghana
            </p>
            
            <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap; margin-top: 15px;">
                <span style="background: rgba(0,107,63,0.1); color: var(--ghana-green); padding: 4px 12px; border-radius: 20px; font-size: 0.8em;">HTML/CSS</span>
                <span style="background: rgba(0,107,63,0.1); color: var(--ghana-green); padding: 4px 12px; border-radius: 20px; font-size: 0.8em;">JavaScript</span>
                <span style="background: rgba(0,107,63,0.1); color: var(--ghana-green); padding: 4px 12px; border-radius: 20px; font-size: 0.8em;">WordPress</span>
            </div>
        </div>
    </section>

    <!-- SECURE CONTACT BOX -->
    <section class="section" id="secure-contact">
        <div class="secure-contact-box">
            <h3><i class="fas fa-shield-alt"></i> Secure Contact & Payment</h3>
            <p style="margin-bottom: 20px; color: var(--gray);">To protect against spam and hacking, contact details are provided only through secure interaction.</p>
            
            <div style="margin: 20px 0;">
                <a href="javascript:void(0)" onclick="showSecureContact('whatsapp')" class="action-btn">
                    <i class="fab fa-whatsapp"></i> Get WhatsApp Number
                </a>
                <a href="javascript:void(0)" onclick="showSecureContact('email')" class="action-btn email">
                    <i class="fas fa-envelope"></i> Get Email Address
                </a>
                <a href="javascript:void(0)" onclick="showSecureContact('payment')" class="action-btn payment">
                    <i class="fas fa-money-bill-wave"></i> Get Payment Details
                </a>
                <a href="javascript:void(0)" onclick="showSecureContact('call')" class="action-btn call">
                    <i class="fas fa-phone"></i> Get Phone Number
                </a>
            </div>
            
            <div id="secureInfo" style="display: none; margin-top: 20px; padding: 15px; background: rgba(0,107,63,0.1); border-radius: 8px; border-left: 4px solid var(--ghana-green);">
                <p id="secureMessage" style="margin: 0;"></p>
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="section">
        <h2 class="section-title">Payment Methods</h2>
        <div class="payment-methods-section">
            <p style="text-align: center; margin-bottom: 20px; color: var(--gray);">Choose your preferred payment method:</p>
            
            <div class="payment-methods-grid">
                <!-- Ghana Payment Methods -->
                <div class="payment-method-card">
                    <div class="payment-method-icon" style="color: #FF6B00;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="payment-method-title">Mobile Money Ghana</div>
                    <div class="payment-method-desc">
                        MTN Mobile Money<br>
                        Vodafone Cash<br>
                        AirtelTigo Cash
                    </div>
                    <button onclick="showSecureContact('mobilemoney')" style="margin-top: 10px; background: var(--momo-orange); color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-size: 0.9em;">
                        Get Number
                    </button>
                </div>
                
                <!-- International Payments -->
                <div class="payment-method-card">
                    <div class="payment-method-icon" style="color: #003087;">
                        <i class="fab fa-paypal"></i>
                    </div>
                    <div class="payment-method-title">PayPal</div>
                    <div class="payment-method-desc">
                        Secure international payments<br>
                        Accepts all major cards<br>
                        USD/EUR/GBP accepted
                    </div>
                    <button onclick="showSecureContact('paypal')" style="margin-top: 10px; background: #003087; color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-size: 0.9em;">
                        Get Email
                    </button>
                </div>
                
                <!-- Bank Transfer -->
                <div class="payment-method-card">
                    <div class="payment-method-icon" style="color: #28a745;">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="payment-method-title">Bank Transfer</div>
                    <div class="payment-method-desc">
                        Local & International<br>
                        SWIFT transfers accepted<br>
                        Bank details on request
                    </div>
                    <button onclick="showSecureContact('bank')" style="margin-top: 10px; background: #28a745; color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-size: 0.9em;">
                        Get Details
                    </button>
                </div>
                
                <!-- Crypto Payments -->
                <div class="payment-method-card">
                    <div class="payment-method-icon" style="color: #f7931a;">
                        <i class="fab fa-bitcoin"></i>
                    </div>
                    <div class="payment-method-title">Cryptocurrency</div>
                    <div class="payment-method-desc">
                        Bitcoin (BTC)<br>
                        USDT (TRC20/ERC20)<br>
                        Other crypto accepted
                    </div>
                    <button onclick="showSecureContact('crypto')" style="margin-top: 10px; background: #f7931a; color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-size: 0.9em;">
                        Get Address
                    </button>
                </div>
            </div>
            
            <div style="background: rgba(0,107,63,0.1); padding: 15px; border-radius: 8px; margin-top: 25px; border-left: 4px solid var(--ghana-green);">
                <p style="margin: 0; font-size: 0.9em;">
                    <i class="fas fa-shield-alt"></i> <strong>Security Note:</strong> All contact and payment details are protected against spam and bots. Click buttons above to reveal securely.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <h2 class="section-title">My Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Custom Website</h3>
                <p>Responsive websites tailored to your business needs with modern design.</p>
                <div class="service-price">₵3,500 - ₵15,000</div>
                <div class="deposit-required">
                    <strong>50% Deposit Required</strong>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fab fa-wordpress"></i>
                </div>
                <h3>WordPress</h3>
                <p>Complete WordPress solutions including setup, customization, and maintenance.</p>
                <div class="service-price">₵2,500 - ₵8,000</div>
                <div class="deposit-required">
                    <strong>50% Deposit Required</strong>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3>E-commerce</h3>
                <p>Online stores with payment integration and product management.</p>
                <div class="service-price">₵6,000 - ₵25,000</div>
                <div class="deposit-required">
                    <strong>50% Deposit Required</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section class="section">
        <h2 class="section-title">Secure Booking Form</h2>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3 style="margin-bottom: 20px;">How It Works</h3>
                
                <div style="margin-bottom: 25px;">
                    <p style="margin-bottom: 10px; font-size: 0.95em;">
                        <i class="fas fa-shield-alt" style="color: #4ade80;"></i> <strong>Secure Process:</strong>
                    </p>
                    <ol style="padding-left: 20px; font-size: 0.9em; opacity: 0.9;">
                        <li>Fill booking form below</li>
                        <li>I'll contact you within 1 hour</li>
                        <li>Get secure payment details</li>
                        <li>Start project within 24 hours</li>
                    </ol>
                </div>
                
                <p style="font-size: 0.9em; opacity: 0.9;">
                    <i class="fas fa-lock"></i> Your information is secure and protected against spam.
                </p>
            </div>
            
            <div class="contact-form">
                <form id="bookingForm">
                    <h3 style="margin-bottom: 20px; color: var(--dark);">Project Booking</h3>
                    
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" class="form-control" required placeholder="Enter your name">
                    </div>
                    
                    <div class="form-group">
                        <label for="contact">Contact Method *</label>
                        <select id="contact" name="contact" class="form-control" required>
                            <option value="">How to contact you?</option>
                            <option value="WhatsApp">WhatsApp</option>
                            <option value="Phone Call">Phone Call</option>
                            <option value="Email">Email</option>
                            <option value="Telegram">Telegram</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="contactInfo">Contact Details *</label>
                        <input type="text" id="contactInfo" name="contactInfo" class="form-control" required placeholder="Your WhatsApp/Phone/Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Needed *</label>
                        <select id="service" name="service" class="form-control" required>
                            <option value="">Select service</option>
                            <option value="Custom Website">Custom Website</option>
                            <option value="WordPress Development">WordPress Development</option>
                            <option value="E-commerce Store">E-commerce Store</option>
                            <option value="Other">Other Project</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Project Details *</label>
                        <textarea id="message" name="message" class="form-control" rows="3" required placeholder="Describe your project..."></textarea>
                    </div>
                    
                    <div class="spinner" id="loadingSpinner"></div>
                    
                    <button type="button" class="submit-btn" onclick="submitBookingForm()">
                        <i class="fas fa-paper-plane"></i> Submit Booking Request
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div class="success-modal" id="successModal">
        <div class="success-content">
            <div style="font-size: 3em; color: var(--ghana-green); margin-bottom: 15px;">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2 style="color: var(--ghana-green); margin-bottom: 10px;">Booking Submitted! 🎉</h2>
            <p style="margin-bottom: 20px;">
                Thank you! I'll contact you within 1 hour with payment details.
            </p>
            <div style="background: rgba(0,107,63,0.1); padding: 15px; border-radius: 8px; margin: 15px 0;">
                <p style="margin: 0; font-size: 0.9em;">
                    <i class="fas fa-shield-alt"></i> Your information is secure
                </p>
            </div>
            <button onclick="closeSuccessModal()" style="background: var(--dark); color: white; border: none; padding: 10px 25px; border-radius: 8px; font-weight: 500; cursor: pointer; margin-top: 10px;">
                Close
            </button>
        </div>
    </div>

    <!-- Secure Contact Modal -->
    <div class="success-modal" id="secureContactModal">
        <div class="success-content">
            <div style="font-size: 3em; color: var(--ghana-green); margin-bottom: 15px;">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h2 style="color: var(--ghana-green); margin-bottom: 10px;" id="secureTitle">Secure Contact</h2>
            <p style="margin-bottom: 20px; font-size: 1.1em;" id="secureDetails">
                <!-- Details will be inserted here -->
            </p>
            <div style="background: rgba(0,107,63,0.1); padding: 15px; border-radius: 8px; margin: 15px 0;">
                <p style="margin: 0; font-size: 0.9em;">
                    <i class="fas fa-clock"></i> Available: Mon-Sat, 9AM-6PM GMT
                </p>
            </div>
            <div style="display: flex; gap: 10px; justify-content: center; margin-top: 20px;">
                <button onclick="copyToClipboard()" style="background: var(--primary); color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 500; cursor: pointer;">
                    <i class="fas fa-copy"></i> Copy
                </button>
                <button onclick="closeSecureModal()" style="background: var(--dark); color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 500; cursor: pointer;">
                    Close
                </button>
            </div>
        </div>
    </div>

    
</body>
</html>