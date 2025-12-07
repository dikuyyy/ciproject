<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Shop - Your Trusted Online Shopping Destination">
    <title><?php echo isset($title) ? $title . ' | ShopHub' : 'ShopHub - Online Shop'; ?></title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #ff6b35;
            --secondary-color: #004e89;
            --accent-color: #ffc857;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-color);
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--dark-color);
            color: #fff;
            font-size: 0.85rem;
            padding: 8px 0;
        }

        .top-bar a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }

        .top-bar a:hover {
            color: var(--accent-color);
        }

        /* Main Navbar */
        .main-navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
        }

        .navbar-brand span {
            color: var(--secondary-color);
        }

        /* Search Bar */
        .search-bar {
            position: relative;
            max-width: 500px;
            width: 100%;
        }

        .search-bar input {
            border-radius: 25px;
            padding: 10px 20px;
            padding-right: 50px;
            border: 2px solid #e0e0e0;
            width: 100%;
            transition: all 0.3s;
        }

        .search-bar input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(255, 107, 53, 0.2);
            outline: none;
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .search-bar button:hover {
            background: var(--secondary-color);
        }

        /* Nav Icons */
        .nav-icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-icon {
            position: relative;
            color: var(--dark-color);
            font-size: 1.3rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .nav-icon:hover {
            color: var(--primary-color);
        }

        .nav-icon .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Category Navbar */
        .category-navbar {
            background-color: var(--secondary-color);
        }

        .category-navbar .nav-link {
            color: #fff !important;
            padding: 12px 20px !important;
            font-weight: 500;
            transition: all 0.3s;
        }

        .category-navbar .nav-link:hover {
            background-color: var(--primary-color);
        }

        .category-navbar .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            padding: 10px 0;
        }

        .category-navbar .dropdown-item {
            padding: 10px 20px;
            transition: all 0.3s;
        }

        .category-navbar .dropdown-item:hover {
            background-color: var(--primary-color);
            color: #fff;
        }

        /* User Dropdown */
        .user-dropdown .dropdown-toggle::after {
            display: none;
        }

        .user-dropdown .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            min-width: 200px;
        }

        .user-dropdown .dropdown-item {
            padding: 10px 20px;
        }

        .user-dropdown .dropdown-item i {
            width: 20px;
            margin-right: 10px;
            color: var(--primary-color);
        }

        /* Promo Banner */
        .promo-banner {
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            color: #fff;
            text-align: center;
            padding: 8px;
            font-size: 0.9rem;
        }

        .promo-banner a {
            color: #fff;
            font-weight: 600;
            text-decoration: underline;
        }

        /* Mobile Responsive */
        @media (max-width: 991px) {
            .search-bar {
                max-width: 100%;
                margin: 15px 0;
            }

            .nav-icons {
                justify-content: center;
                margin-top: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Promo Banner -->
    <div class="promo-banner">
        <i class="fas fa-gift me-2"></i>
        Free Shipping on your first order! <a href="#">Claim Now</a>
    </div>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span><i class="fas fa-phone-alt me-2"></i> Call Us: (021) 1234-5678</span>
                    <span class="ms-4"><i class="fas fa-envelope me-2"></i> support@shophub.com</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#"><i class="fas fa-question-circle me-1"></i> Help</a>
                    <a href="#"><i class="fas fa-truck me-1"></i> Track Order</a>
                    <a href="#"><i class="fab fa-whatsapp me-1"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="main-navbar sticky-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-lg-2 col-md-3 col-6">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <i class="fas fa-store me-2"></i>Shop<span>Hub</span>
                    </a>
                </div>

                <div class="col-lg-6 col-md-5 d-none d-md-block">
                </div>

                <!-- Nav Icons -->
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="nav-icons justify-content-end">
                        <!-- Cart -->
                        <a href="<?php echo base_url('cart'); ?>" class="nav-icon" title="Cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge"><?php echo isset($cart_count) ? $cart_count : '0'; ?></span>
                        </a>

                        <!-- User Menu -->
                        <?php if (isset($user_logged_in) && $user_logged_in): ?>
                            <div class="dropdown user-dropdown">
                                <a href="#" class="nav-icon dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="far fa-user-circle"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <div class="px-3 py-2 border-bottom">
                                            <strong><?php echo isset($user_name) ? $user_name : 'User'; ?></strong>
                                            <br><small class="text-muted"><?php echo isset($user_email) ? $user_email : ''; ?></small>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('account'); ?>"><i class="fas fa-user"></i> My Account</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('orders'); ?>"><i class="fas fa-box"></i> My Orders</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('wishlist'); ?>"><i class="fas fa-heart"></i> Wishlist</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('settings'); ?>"><i class="fas fa-cog"></i> Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="<?php echo base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo base_url('auth/login'); ?>" class="btn btn-outline-primary btn-sm ms-2 d-none d-lg-inline-block">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Mobile Search -->
            <div class="row d-md-none mt-3">
                <div class="col-12">
                    <form class="search-bar" action="<?php echo base_url('search'); ?>" method="GET">
                        <input type="text" name="q" placeholder="Search products...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Category Navbar -->
    <nav class="category-navbar">
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="fas fa-bars me-2"></i> Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('category/electronics'); ?>"><i class="fas fa-laptop me-2"></i> Electronics</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('category/fashion'); ?>"><i class="fas fa-tshirt me-2"></i> Fashion</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('category/beauty'); ?>"><i class="fas fa-spa me-2"></i> Beauty</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('category/home'); ?>"><i class="fas fa-home me-2"></i> Home & Living</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('category/sports'); ?>"><i class="fas fa-running me-2"></i> Sports</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('category/books'); ?>"><i class="fas fa-book me-2"></i> Books</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url('categories'); ?>"><i class="fas fa-th me-2"></i> View All</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('promo'); ?>"><i class="fas fa-percent me-1"></i> Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('flash-sale'); ?>"><i class="fas fa-bolt me-1"></i> Flash Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('new-arrivals'); ?>"><i class="fas fa-star me-1"></i> New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('best-sellers'); ?>"><i class="fas fa-fire me-1"></i> Best Sellers</a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="<?php echo base_url('brands'); ?>"><i class="fas fa-tags me-1"></i> Brands</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="py-4">