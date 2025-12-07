<style>
    /* Hot Sale Section */
    .hot-sale-section {
        background: linear-gradient(135deg, #ff6b35 0%, #ff8b35 100%);
        border-radius: 20px;
        padding: 40px 20px;
        margin-bottom: 40px;
        box-shadow: 0 10px 30px rgba(255, 107, 53, 0.3);
    }

    .hot-sale-title {
        color: #fff;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 30px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .hot-sale-title i {
        color: #ffc857;
    }

    /* Product Card */
    .product-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .product-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        background: #f8f9fa;
        padding: 20px;
    }

    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #ff6b35;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 1;
    }

    .product-body {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .product-name {
        font-weight: 600;
        font-size: 1.1rem;
        color: #1a1a2e;
        margin-bottom: 10px;
        min-height: 50px;
    }

    .product-price {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ff6b35;
        margin-bottom: 10px;
    }

    .product-price-old {
        font-size: 1rem;
        color: #999;
        text-decoration: line-through;
        margin-left: 10px;
    }

    .product-description {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .product-specs {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 15px;
    }

    .product-specs i {
        color: #ff6b35;
        margin-right: 5px;
    }

    .btn-add-cart {
        background: linear-gradient(135deg, #ff6b35, #ff8b35);
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s;
        width: 100%;
    }

    .btn-add-cart:hover {
        background: linear-gradient(135deg, #004e89, #006bb3);
        transform: scale(1.05);
        color: #fff;
    }

    /* Section Title */
    .section-title {
        font-weight: 700;
        font-size: 1.8rem;
        color: #1a1a2e;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #ff6b35, #ffc857);
        border-radius: 2px;
    }

    /* Carousel Custom Styles */
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.8;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        opacity: 1;
        background: #fff;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }

    /* Hot Sale Product Card */
    .hot-sale-card {
        background: #fff;
        border-radius: 15px;
        padding: 15px;
        margin: 0 10px;
    }

    .hot-sale-card .product-image {
        height: 200px;
    }

    /* Rating Stars */
    .product-rating {
        color: #ffc857;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .product-rating .rating-count {
        color: #999;
        font-size: 0.85rem;
        margin-left: 5px;
    }
</style>

<div class="container">
    <!-- Hot Sale / Featured Products Section -->
    <div class="hot-sale-section">
        <h2 class="hot-sale-title">
            <i class="fas fa-fire"></i> Hot Sale - Limited Time Offer!
        </h2>

        <div id="hotSaleCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hotSaleCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#hotSaleCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#hotSaleCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="hot-sale-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=400" 
                                         class="product-image" alt="iPhone 15 Pro Max">
                                    <span class="product-badge">-25%</span>
                                </div>
                                <div class="product-body">
                                    <h5 class="product-name">iPhone 15 Pro Max</h5>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-count">(156)</span>
                                    </div>
                                    <div class="product-price">
                                        Rp 18.999.000
                                        <span class="product-price-old">Rp 24.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-sale-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=400" 
                                         class="product-image" alt="Samsung Galaxy S24 Ultra">
                                    <span class="product-badge">-20%</span>
                                </div>
                                <div class="product-body">
                                    <h5 class="product-name">Samsung Galaxy S24 Ultra</h5>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-count">(203)</span>
                                    </div>
                                    <div class="product-price">
                                        Rp 16.799.000
                                        <span class="product-price-old">Rp 20.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-sale-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400" 
                                         class="product-image" alt="Xiaomi 14 Pro">
                                    <span class="product-badge">-30%</span>
                                </div>
                                <div class="product-body">
                                    <h5 class="product-name">Xiaomi 14 Pro</h5>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-count">(89)</span>
                                    </div>
                                    <div class="product-price">
                                        Rp 9.099.000
                                        <span class="product-price-old">Rp 12.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="hot-sale-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1567581935884-3349723552ca?w=400" 
                                         class="product-image" alt="OPPO Find X7 Pro">
                                    <span class="product-badge">-15%</span>
                                </div>
                                <div class="product-body">
                                    <h5 class="product-name">OPPO Find X7 Pro</h5>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="rating-count">(67)</span>
                                    </div>
                                    <div class="product-price">
                                        Rp 10.199.000
                                        <span class="product-price-old">Rp 11.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-sale-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1585060544812-6b45742d762f?w=400" 
                                         class="product-image" alt="Vivo X100 Pro">
                                    <span class="product-badge">-18%</span>
                                </div>
                                <div class="product-body">
                                    <h5 class="product-name">Vivo X100 Pro</h5>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-count">(94)</span>
                                    </div>
                                    <div class="product-price">
                                        Rp 11.479.000
                                        <span class="product-price-old">Rp 13.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-sale-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1592286927505-2fd704821596?w=400" 
                                         class="product-image" alt="Google Pixel 8 Pro">
                                    <span class="product-badge">-22%</span>
                                </div>
                                <div class="product-body">
                                    <h5 class="product-name">Google Pixel 8 Pro</h5>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-count">(112)</span>
                                    </div>
                                    <div class="product-price">
                                        Rp 10.919.000
                                        <span class="product-price-old">Rp 13.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#hotSaleCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hotSaleCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- All Products Section -->
    <div class="mb-5">
        <h2 class="section-title">
            <i class="fas fa-mobile-alt me-2"></i> All Products
        </h2>

        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=400" 
                             class="product-image" alt="iPhone 15 Pro Max">
                        <span class="product-badge">New</span>
                    </div>
                    <div class="product-body">
                        <h5 class="product-name">iPhone 15 Pro Max</h5>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="rating-count">(156)</span>
                        </div>
                        <div class="product-price">Rp 24.999.000</div>
                        <p class="product-description">
                            Flagship terbaru dari Apple dengan chip A17 Pro, kamera 48MP, dan layar Super Retina XDR 6.7 inci.
                        </p>
                        <div class="product-specs">
                            <i class="fas fa-memory"></i> 256GB/512GB/1TB<br>
                            <i class="fas fa-microchip"></i> A17 Pro Chip
                        </div>
                        <button class="btn btn-add-cart" onclick="handleShowCanvas()">
                            <i class="fas fa-shopping-cart me-2"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=400" 
                             class="product-image" alt="Samsung Galaxy S24 Ultra">
                        <span class="product-badge">Popular</span>
                    </div>
                    <div class="product-body">
                        <h5 class="product-name">Samsung Galaxy S24 Ultra</h5>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(203)</span>
                        </div>
                        <div class="product-price">Rp 20.999.000</div>
                        <p class="product-description">
                            Smartphone premium dengan S Pen, kamera 200MP, dan performa Snapdragon 8 Gen 3.
                        </p>
                        <div class="product-specs">
                            <i class="fas fa-memory"></i> 12GB RAM / 256GB<br>
                            <i class="fas fa-microchip"></i> Snapdragon 8 Gen 3
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="fas fa-shopping-cart me-2"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400" 
                             class="product-image" alt="Xiaomi 14 Pro">
                    </div>
                    <div class="product-body">
                        <h5 class="product-name">Xiaomi 14 Pro</h5>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(89)</span>
                        </div>
                        <div class="product-price">Rp 12.999.000</div>
                        <p class="product-description">
                            Ponsel flagship dengan Leica Camera, charging 120W HyperCharge, dan layar AMOLED 120Hz.
                        </p>
                        <div class="product-specs">
                            <i class="fas fa-memory"></i> 12GB RAM / 512GB<br>
                            <i class="fas fa-microchip"></i> Snapdragon 8 Gen 3
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="fas fa-shopping-cart me-2"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1567581935884-3349723552ca?w=400" 
                             class="product-image" alt="OPPO Find X7 Pro">
                    </div>
                    <div class="product-body">
                        <h5 class="product-name">OPPO Find X7 Pro</h5>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-count">(67)</span>
                        </div>
                        <div class="product-price">Rp 11.999.000</div>
                        <p class="product-description">
                            Smartphone dengan kamera Hasselblad, layar curved 6.82 inci, dan baterai 5000mAh.
                        </p>
                        <div class="product-specs">
                            <i class="fas fa-memory"></i> 16GB RAM / 512GB<br>
                            <i class="fas fa-microchip"></i> Dimensity 9300
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="fas fa-shopping-cart me-2"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>

</script>