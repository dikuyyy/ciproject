<style>
    .checkout-container {
        padding: 40px 0;
    }

    .payment-method-card {
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .payment-method-card.active {
        border-color: #ff6b35;
        background-color: #fff8f5;
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.2);
    }

    .payment-method-card input[type="radio"] {
        width: 20px;
        height: 20px;
        accent-color: #ff6b35;
        cursor: pointer;
    }

    .payment-method-info {
        flex: 1;
    }

    .payment-method-name {
        font-weight: 600;
        font-size: 1.1rem;
        color: #1a1a2e;
        margin-bottom: 5px;
    }

    .payment-method-desc {
        font-size: 0.85rem;
        color: #666;
    }

    .payment-method-icons {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .payment-icon {
        font-size: 2rem;
    }

    .payment-icon.visa {
        color: #1A1F71;
    }

    .payment-icon.mastercard {
        color: #EB001B;
    }

    .payment-icon.paypal {
        color: #00457C;
    }

    .payment-icon.gpay {
        color: #4285F4;
    }

    .payment-details {
        display: none;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        margin-top: 15px;
    }

    .payment-details.show {
        display: block;
    }

    .card-input-wrapper {
        position: relative;
    }

    .card-input-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 1.3rem;
    }

    .form-control:focus {
        border-color: #ff6b35;
        box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.15);
    }

    .btn-place-order {
        background: linear-gradient(135deg, #ff6b35, #ff8b35);
        border: none;
        color: #fff;
        padding: 15px 30px;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 10px;
        width: 100%;
    }

    .secure-payment-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 15px;
        color: #28a745;
        font-size: 0.9rem;
    }

    .paypal-button-container,
    .gpay-button-container {
        min-height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .payment-alert {
        background: #e3f2fd;
        border: 1px solid #90caf9;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
    }

    .payment-alert i {
        color: #1976d2;
        margin-right: 8px;
    }
</style>

<div class="container checkout-container">
    <h2 class="mb-4"><i class="fas fa-shopping-bag me-2"></i>Checkout</h2>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">
                        <i class="fas fa-user me-2 text-primary"></i>Personal Information
                    </h5>
                    <form id="checkoutForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="firstName" placeholder="John" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Doe" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="john.doe@example.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" placeholder="+62 812 3456 7890" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="address" class="form-label">Address *</label>
                                <textarea class="form-control" id="address" rows="2" placeholder="Jl. Sudirman No. 123" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City *</label>
                                <input type="text" class="form-control" id="city" placeholder="Jakarta" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="zip" class="form-label">ZIP Code *</label>
                                <input type="text" class="form-control" id="zip" placeholder="12345" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">
                        <i class="fas fa-credit-card me-2 text-primary"></i>Payment Method
                    </h5>

                    <!-- Visa/Mastercard Payment -->
                    <div class="payment-method-card active" data-method="card">
                        <input type="radio" name="paymentMethod" value="card" checked>
                        <div class="payment-method-info">
                            <div class="payment-method-name">Credit / Debit Card</div>
                            <div class="payment-method-desc">Pay securely with your card</div>
                        </div>
                        <div class="payment-method-icons">
                            <i class="fab fa-cc-visa payment-icon visa"></i>
                            <i class="fab fa-cc-mastercard payment-icon mastercard"></i>
                        </div>
                    </div>

                    <div class="payment-details show" id="cardDetails">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="cardNumber" class="form-label">Card Number *</label>
                                <div class="card-input-wrapper">
                                    <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" maxlength="19" required>
                                    <i class="fas fa-credit-card card-input-icon"></i>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="cardName" class="form-label">Cardholder Name *</label>
                                <input type="text" class="form-control" id="cardName" placeholder="JOHN DOE" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="expiry" class="form-label">Expiry Date *</label>
                                <input type="text" class="form-control" id="expiry" placeholder="MM/YY" maxlength="5" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cvv" class="form-label">CVV *</label>
                                <div class="card-input-wrapper">
                                    <input type="text" class="form-control" id="cvv" placeholder="123" maxlength="4" required>
                                    <i class="fas fa-lock card-input-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="saveCard">
                            <label class="form-check-label" for="saveCard">
                                Save this card for future purchases
                            </label>
                        </div>
                    </div>

                    <!-- PayPal Payment -->
                    <div class="payment-method-card" data-method="paypal">
                        <input type="radio" name="paymentMethod" value="paypal">
                        <div class="payment-method-info">
                            <div class="payment-method-name">PayPal</div>
                            <div class="payment-method-desc">Fast and secure payment with PayPal</div>
                        </div>
                        <div class="payment-method-icons">
                            <i class="fab fa-cc-paypal payment-icon paypal"></i>
                        </div>
                    </div>

                    <div class="payment-details" id="paypalDetails">
                        <div class="payment-alert">
                            <i class="fas fa-info-circle"></i>
                            You will be redirected to PayPal to complete your purchase securely.
                        </div>
                        <div id="paypal-button-container" class="paypal-button-container"></div>
                    </div>

                    <!-- Google Pay Payment -->
                    <div class="payment-method-card" data-method="gpay">
                        <input type="radio" name="paymentMethod" value="gpay">
                        <div class="payment-method-info">
                            <div class="payment-method-name">Google Pay</div>
                            <div class="payment-method-desc">Quick checkout with Google Pay</div>
                        </div>
                        <div class="payment-method-icons">
                            <i class="fab fa-google-pay payment-icon gpay"></i>
                        </div>
                    </div>

                    <div class="payment-details" id="gpayDetails">
                        <div class="payment-alert">
                            <i class="fas fa-info-circle"></i>
                            Click the button below to pay with Google Pay.
                        </div>
                        <div id="google-pay-button-container" class="gpay-button-container"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">
                        <i class="fas fa-receipt me-2 text-primary"></i>Order Summary
                    </h5>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal (4 items)</span>
                            <strong>Rp 71.996.000</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <strong class="text-success">FREE</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax (11%)</span>
                            <strong>Rp 7.919.560</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="h5 mb-0">Total</span>
                            <strong class="h5 mb-0 text-primary">Rp 79.915.560</strong>
                        </div>
                    </div>

                    <button type="button" class="btn btn-place-order" onclick="handlePlaceOrder()">
                        <i class="fas fa-lock me-2"></i>Place Order Securely
                    </button>

                    <div class="secure-payment-badge">
                        <i class="fas fa-shield-alt"></i>
                        <span>Secure SSL Encrypted Payment</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stripe JS -->
<script src="https://js.stripe.com/v3/"></script>

<!-- PayPal SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=YOUR_PAYPAL_CLIENT_ID&currency=USD"></script>

<!-- Google Pay SDK -->
<script async src="https://pay.google.com/gp/p/js/pay.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Payment method selection
    const paymentCards = document.querySelectorAll('.payment-method-card');
    
    paymentCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove active class from all cards
            paymentCards.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked card
            this.classList.add('active');
            
            // Check the radio button
            const radio = this.querySelector('input[type="radio"]');
            radio.checked = true;
            
            // Hide all payment details
            document.querySelectorAll('.payment-details').forEach(detail => {
                detail.classList.remove('show');
            });
            
            // Show relevant payment details
            const method = this.dataset.method;
            if (method === 'card') {
                document.getElementById('cardDetails').classList.add('show');
            } else if (method === 'paypal') {
                document.getElementById('paypalDetails').classList.add('show');
                initPayPal();
            } else if (method === 'gpay') {
                document.getElementById('gpayDetails').classList.add('show');
                initGooglePay();
            }
        });
    });

    // Card number formatting
    const cardNumberInput = document.getElementById('cardNumber');
    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s/g, '');
            let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
            e.target.value = formattedValue;
        });
    }

    // Expiry date formatting
    const expiryInput = document.getElementById('expiry');
    if (expiryInput) {
        expiryInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.slice(0, 2) + '/' + value.slice(2, 4);
            }
            e.target.value = value;
        });
    }

    // CVV input - numbers only
    const cvvInput = document.getElementById('cvv');
    if (cvvInput) {
        cvvInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    }
});

// PayPal Integration
function initPayPal() {
    const container = document.getElementById('paypal-button-container');
    if (container && container.children.length === 0) {
        paypal.Buttons({
            style: {
                layout: 'vertical',
                color: 'gold',
                shape: 'rect',
                label: 'paypal',
                height: 50
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '5330.00', // Approximate USD conversion
                            currency_code: 'USD'
                        },
                        description: 'ShopHub Order - 4 items'
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Payment completed successfully by ' + details.payer.name.given_name);
                    window.location.href = '<?php echo base_url("checkout/success"); ?>';
                });
            },
            onError: function(err) {
                console.error('PayPal Error:', err);
                alert('Payment failed. Please try again.');
            }
        }).render('#paypal-button-container');
    }
}

// Google Pay Integration
function initGooglePay() {
    const container = document.getElementById('google-pay-button-container');
    
    if (!container || container.children.length > 0) return;
    
    const paymentsClient = new google.payments.api.PaymentsClient({
        environment: 'TEST' // Change to 'PRODUCTION' for live
    });

    const button = paymentsClient.createButton({
        onClick: onGooglePaymentButtonClicked,
        buttonColor: 'default',
        buttonType: 'buy',
        buttonSizeMode: 'fill'
    });

    container.appendChild(button);
}

function onGooglePaymentButtonClicked() {
    const paymentDataRequest = {
        apiVersion: 2,
        apiVersionMinor: 0,
        allowedPaymentMethods: [{
            type: 'CARD',
            parameters: {
                allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
                allowedCardNetworks: ['MASTERCARD', 'VISA']
            },
            tokenizationSpecification: {
                type: 'PAYMENT_GATEWAY',
                parameters: {
                    gateway: 'stripe',
                    'stripe:version': '2018-10-31',
                    'stripe:publishableKey': 'pk_test_YOUR_KEY'
                }
            }
        }],
        merchantInfo: {
            merchantName: 'ShopHub',
            merchantId: '12345678901234567890'
        },
        transactionInfo: {
            totalPriceStatus: 'FINAL',
            totalPrice: '5330.00',
            currencyCode: 'USD',
            countryCode: 'US'
        }
    };

    const paymentsClient = new google.payments.api.PaymentsClient({
        environment: 'TEST'
    });

    paymentsClient.loadPaymentData(paymentDataRequest)
        .then(function(paymentData) {
            console.log('Payment successful:', paymentData);
            alert('Payment successful with Google Pay!');
            window.location.href = '<?php echo base_url("checkout/success"); ?>';
        })
        .catch(function(err) {
            console.error('Google Pay Error:', err);
            alert('Payment cancelled or failed.');
        });
}

// Place Order Handler
function handlePlaceOrder() {
    const form = document.getElementById('checkoutForm');
    const selectedPayment = document.querySelector('input[name="paymentMethod"]:checked').value;

    // Validate form
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    if (selectedPayment === 'card') {
        // Validate card details
        const cardNumber = document.getElementById('cardNumber').value;
        const cardName = document.getElementById('cardName').value;
        const expiry = document.getElementById('expiry').value;
        const cvv = document.getElementById('cvv').value;

        if (!cardNumber || !cardName || !expiry || !cvv) {
            alert('Please fill in all card details');
            return;
        }

        // Process card payment
        processCardPayment();
    } else if (selectedPayment === 'paypal') {
        alert('Please use the PayPal button above to complete payment');
    } else if (selectedPayment === 'gpay') {
        alert('Please use the Google Pay button above to complete payment');
    }
}

// Process Card Payment
function processCardPayment() {
    const btn = document.querySelector('.btn-place-order');
    const originalText = btn.innerHTML;
    
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Processing Payment...';
    btn.disabled = true;

    // Simulate payment processing (replace with actual Stripe API call)
    setTimeout(() => {
        alert('Payment successful! Your order has been placed.');
        window.location.href = '<?php echo base_url("checkout/success"); ?>';
    }, 2000);
}
</script>