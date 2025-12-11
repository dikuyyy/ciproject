<style>
    .success-container {
        padding: 60px 0;
        min-height: 70vh;
    }

    .success-card {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        max-width: 800px;
        margin: 0 auto;
    }

    .success-icon {
        width: 80px;
        height: 80px;
        background: #28a745;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
    }

    .success-icon i {
        font-size: 2.5rem;
        color: #fff;
    }

    .success-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1a1a2e;
        text-align: center;
        margin-bottom: 10px;
    }

    .success-message {
        text-align: center;
        color: #666;
        margin-bottom: 35px;
        font-size: 1rem;
    }

    .order-details {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 25px;
        margin-bottom: 30px;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-label {
        color: #666;
        font-weight: 500;
    }

    .detail-value {
        color: #1a1a2e;
        font-weight: 600;
        text-align: right;
    }

    .order-items-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1a1a2e;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #e0e0e0;
    }

    .order-item {
        display: flex;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .order-item:last-child {
        border-bottom: none;
    }

    .item-image {
        width: 70px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        background: #f8f9fa;
        padding: 8px;
    }

    .item-details {
        flex: 1;
    }

    .item-name {
        font-weight: 600;
        color: #1a1a2e;
        margin-bottom: 5px;
    }

    .item-specs {
        font-size: 0.85rem;
        color: #666;
    }

    .item-price {
        font-weight: 700;
        color: #ff6b35;
        white-space: nowrap;
    }

    .summary-section {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        margin-top: 25px;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        font-size: 0.95rem;
    }

    .summary-row.total {
        border-top: 2px solid #e0e0e0;
        margin-top: 10px;
        padding-top: 15px;
        font-size: 1.2rem;
        font-weight: 700;
    }

    .summary-row.total .amount {
        color: #ff6b35;
    }

    .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .btn-download {
        flex: 1;
        background: #28a745;
        color: #fff;
        border: none;
        padding: 14px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
    }

    .btn-continue {
        flex: 1;
        background: #ff6b35;
        color: #fff;
        border: none;
        padding: 14px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .info-box {
        background: #e7f3ff;
        border: 1px solid #90caf9;
        border-radius: 10px;
        padding: 15px;
        margin-top: 25px;
    }

    .info-box i {
        color: #1976d2;
        margin-right: 10px;
    }

    .info-box p {
        margin: 0;
        color: #1976d2;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .success-card {
            padding: 25px 20px;
        }

        .action-buttons {
            flex-direction: column;
        }

        .detail-row {
            flex-direction: column;
            gap: 5px;
        }

        .detail-value {
            text-align: left;
        }
    }
</style>

<div class="container success-container">
    <div class="success-card">
        <!-- Success Icon -->
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>

        <!-- Success Message -->
        <h1 class="success-title">Order Placed Successfully!</h1>
        <p class="success-message">
            Thank you for your purchase. Your order has been received and is being processed.
        </p>

        <!-- Order Details -->
        <div class="order-details">
            <div class="detail-row">
                <span class="detail-label">Order Number</span>
                <span class="detail-value">#ORD-2025-001234</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Order Date</span>
                <span class="detail-value">December 8, 2025 - 14:30 WIB</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Payment Method</span>
                <span class="detail-value">Credit Card (Visa ****3456)</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Payment Status</span>
                <span class="detail-value text-success">Paid</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Delivery Address</span>
                <span class="detail-value">
                    Jl. Sudirman No. 123<br>
                    Jakarta, DKI Jakarta 12345<br>
                    Indonesia
                </span>
            </div>
        </div>

        <!-- Order Items -->
        <h3 class="order-items-title">Order Items</h3>
        
        <div class="order-item">
            <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=100" alt="iPhone 15 Pro Max" class="item-image">
            <div class="item-details">
                <div class="item-name">iPhone 15 Pro Max</div>
                <div class="item-specs">256GB, Titanium Blue</div>
                <div class="item-specs">Qty: 1</div>
            </div>
            <div class="item-price">Rp 24.999.000</div>
        </div>

        <div class="order-item">
            <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=100" alt="Samsung Galaxy S24 Ultra" class="item-image">
            <div class="item-details">
                <div class="item-name">Samsung Galaxy S24 Ultra</div>
                <div class="item-specs">12GB/256GB, Phantom Black</div>
                <div class="item-specs">Qty: 1</div>
            </div>
            <div class="item-price">Rp 20.999.000</div>
        </div>

        <div class="order-item">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=100" alt="Xiaomi 14 Pro" class="item-image">
            <div class="item-details">
                <div class="item-name">Xiaomi 14 Pro</div>
                <div class="item-specs">12GB/512GB, Black</div>
                <div class="item-specs">Qty: 2</div>
            </div>
            <div class="item-price">Rp 25.998.000</div>
        </div>

        <!-- Summary -->
        <div class="summary-section">
            <div class="summary-row">
                <span>Subtotal (4 items)</span>
                <span>Rp 71.996.000</span>
            </div>
            <div class="summary-row">
                <span>Shipping</span>
                <span class="text-success">FREE</span>
            </div>
            <div class="summary-row">
                <span>Tax (11%)</span>
                <span>Rp 7.919.560</span>
            </div>
            <div class="summary-row total">
                <span>Total Paid</span>
                <span class="amount">Rp 79.915.560</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button class="btn-download" onclick="downloadInvoice()">
                <i class="fas fa-download me-2"></i>Download Invoice
            </button>
            <a href="<?php echo base_url(); ?>" class="btn-continue">
                <i class="fas fa-home me-2"></i>Continue Shopping
            </a>
        </div>

        <!-- Info Box -->
        <div class="info-box">
            <i class="fas fa-info-circle"></i>
            <p><strong>What's next?</strong> You will receive an email confirmation with your order details. We'll notify you when your order is shipped.</p>
        </div>
    </div>
</div>

<script>
    function downloadInvoice() {
        // Create invoice content
        const invoiceContent = `
            ================================================
                         SHOPHUB INVOICE
            ================================================
            
            Order Number: #ORD-2025-001234
            Order Date: December 8, 2025 - 14:30 WIB
            Payment Method: Credit Card (Visa ****3456)
            Payment Status: PAID
            
            ------------------------------------------------
                         CUSTOMER DETAILS
            ------------------------------------------------
            
            Delivery Address:
            Jl. Sudirman No. 123
            Jakarta, DKI Jakarta 12345
            Indonesia
            
            ------------------------------------------------
                         ORDER ITEMS
            ------------------------------------------------
            
            1. iPhone 15 Pro Max
               256GB, Titanium Blue
               Qty: 1 x Rp 24.999.000
               
            2. Samsung Galaxy S24 Ultra
               12GB/256GB, Phantom Black
               Qty: 1 x Rp 20.999.000
               
            3. Xiaomi 14 Pro
               12GB/512GB, Black
               Qty: 2 x Rp 12.999.000
               
            ------------------------------------------------
                         ORDER SUMMARY
            ------------------------------------------------
            
            Subtotal (4 items):    Rp 71.996.000
            Shipping:              FREE
            Tax (11%):             Rp  7.919.560
            ------------------------------------------------
            TOTAL PAID:            Rp 79.915.560
            ================================================
            
            Thank you for shopping with ShopHub!
            
            For any questions, please contact:
            Email: support@shophub.com
            Phone: (021) 1234-5678
            
            ================================================
        `;

        // Create a Blob with the invoice content
        const blob = new Blob([invoiceContent], { type: 'text/plain' });
        const url = window.URL.createObjectURL(blob);
        
        // Create a temporary link and trigger download
        const link = document.createElement('a');
        link.href = url;
        link.download = 'Invoice_ORD-2025-001234.txt';
        document.body.appendChild(link);
        link.click();
        
        // Clean up
        document.body.removeChild(link);
        window.URL.revokeObjectURL(url);
        
        // Show success message
        alert('Invoice downloaded successfully!');
    }
</script>
