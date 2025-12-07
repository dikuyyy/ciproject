    </main>
    <!-- End Main Content -->

    <!-- Footer -->
    <footer class="footer">
        <!-- Newsletter Section -->
        <div class="footer-newsletter">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h4><i class="fas fa-envelope-open-text me-2"></i> Subscribe to Our Newsletter</h4>
                        <p class="mb-0">Get the latest updates on new products and upcoming sales</p>
                    </div>
                    <div class="col-lg-6">
                        <form class="newsletter-form" action="<?php echo base_url('newsletter/subscribe'); ?>" method="POST">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <!-- About Column -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="footer-brand">
                            <a href="<?php echo base_url(); ?>">
                                <i class="fas fa-store me-2"></i>Shop<span>Hub</span>
                            </a>
                        </div>
                        <p class="footer-about">
                            ShopHub is your one-stop destination for all your shopping needs. We offer a wide range of quality products at competitive prices with excellent customer service.
                        </p>
                        <div class="footer-social">
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <!-- Quick Links Column -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul class="footer-links">
                            <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                            <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
                            <li><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                            <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                            <li><a href="<?php echo base_url('careers'); ?>">Careers</a></li>
                            <li><a href="<?php echo base_url('sitemap'); ?>">Sitemap</a></li>
                        </ul>
                    </div>

                    <!-- Customer Service Column -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="footer-title">Customer Service</h5>
                        <ul class="footer-links">
                            <li><a href="<?php echo base_url('account'); ?>">My Account</a></li>
                            <li><a href="<?php echo base_url('orders'); ?>">Order History</a></li>
                            <li><a href="<?php echo base_url('wishlist'); ?>">Wishlist</a></li>
                            <li><a href="<?php echo base_url('track-order'); ?>">Track Order</a></li>
                            <li><a href="<?php echo base_url('returns'); ?>">Returns & Refunds</a></li>
                            <li><a href="<?php echo base_url('shipping'); ?>">Shipping Info</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info Column -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <h5 class="footer-title">Contact Info</h5>
                        <ul class="footer-contact">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>123 Shopping Street, Suite 100<br>New York, NY 10001</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span>(021) 1234-5678</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>support@shophub.com</span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: 10:00 AM - 4:00 PM</span>
                            </li>
                        </ul>

                        <!-- App Download -->
                        <div class="app-download mt-4">
                            <p class="mb-2"><strong>Download Our App</strong></p>
                            <a href="#" class="app-btn">
                                <i class="fab fa-apple"></i>
                                <span>App Store</span>
                            </a>
                            <a href="#" class="app-btn">
                                <i class="fab fa-google-play"></i>
                                <span>Google Play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment & Security -->
        <div class="footer-payment">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <span class="payment-title">We Accept:</span>
                        <div class="payment-icons">
                            <i class="fab fa-cc-visa" title="Visa"></i>
                            <i class="fab fa-cc-mastercard" title="Mastercard"></i>
                            <i class="fab fa-cc-amex" title="American Express"></i>
                            <i class="fab fa-cc-paypal" title="PayPal"></i>
                            <i class="fab fa-cc-stripe" title="Stripe"></i>
                            <i class="fab fa-cc-apple-pay" title="Apple Pay"></i>
                            <i class="fab fa-google-pay" title="Google Pay"></i>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <span class="security-badges">
                            <i class="fas fa-shield-alt me-1"></i> SSL Secured
                            <i class="fas fa-lock ms-3 me-1"></i> Safe Payment
                            <i class="fas fa-check-circle ms-3 me-1"></i> Verified
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <p class="copyright mb-0">
                            &copy; <?php echo date('Y'); ?> <strong>ShopHub</strong>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <ul class="footer-legal">
                            <li><a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a></li>
                            <li><a href="<?php echo base_url('terms'); ?>">Terms of Service</a></li>
                            <li><a href="<?php echo base_url('cookies'); ?>">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop" title="Back to Top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Footer Styles -->
    <style>
        /* Footer Base */
        .footer {
            background-color: var(--dark-color);
            color: #fff;
            margin-top: auto;
        }

        /* Newsletter Section */
        .footer-newsletter {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            padding: 40px 0;
        }

        .footer-newsletter h4 {
            color: #fff;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .footer-newsletter p {
            color: rgba(255, 255, 255, 0.9);
        }

        .newsletter-form .form-control {
            border-radius: 25px 0 0 25px;
            padding: 12px 20px;
            border: none;
        }

        .newsletter-form .btn {
            border-radius: 0 25px 25px 0;
            padding: 12px 30px;
            background-color: var(--dark-color);
            border-color: var(--dark-color);
            font-weight: 500;
        }

        .newsletter-form .btn:hover {
            background-color: #000;
            border-color: #000;
        }

        /* Main Footer */
        .footer-main {
            padding: 60px 0 40px;
        }

        .footer-brand a {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .footer-brand a span {
            color: #fff;
        }

        .footer-about {
            color: rgba(255, 255, 255, 0.7);
            margin: 20px 0;
            line-height: 1.8;
        }

        .footer-social {
            display: flex;
            gap: 10px;
        }

        .footer-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .footer-social a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-title {
            color: #fff;
            font-weight: 600;
            margin-bottom: 25px;
            font-size: 1.1rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-contact {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-contact li {
            display: flex;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-contact li i {
            color: var(--primary-color);
            margin-right: 15px;
            margin-top: 4px;
            width: 16px;
        }

        /* App Download Buttons */
        .app-download {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .app-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: #fff;
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.3s;
        }

        .app-btn:hover {
            background-color: var(--primary-color);
            color: #fff;
        }

        .app-btn i {
            font-size: 1.2rem;
        }

        /* Payment Section */
        .footer-payment {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px 0;
        }

        .payment-title {
            color: rgba(255, 255, 255, 0.7);
            margin-right: 15px;
        }

        .payment-icons {
            display: inline-flex;
            gap: 15px;
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .payment-icons i:hover {
            color: #fff;
        }

        .security-badges {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .security-badges i {
            color: var(--accent-color);
        }

        /* Bottom Footer */
        .footer-bottom {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 20px 0;
        }

        .copyright {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .footer-legal {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
            justify-content: flex-end;
        }

        .footer-legal a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .footer-legal a:hover {
            color: var(--primary-color);
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 999;
            box-shadow: 0 5px 20px rgba(255, 107, 53, 0.4);
        }

        .back-to-top:hover {
            background-color: var(--secondary-color);
            color: #fff;
            transform: translateY(-5px);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .footer-newsletter h4 {
                font-size: 1.1rem;
            }

            .footer-main {
                padding: 40px 0 20px;
            }

            .payment-icons {
                display: flex;
                flex-wrap: wrap;
                margin-top: 10px;
            }

            .footer-legal {
                justify-content: center;
            }

            .security-badges {
                display: block;
                margin-top: 10px;
            }
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Back to Top Script -->
    <script>
        // Back to Top Button
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
    </body>

    </html>