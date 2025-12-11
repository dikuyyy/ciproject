# Stripe Payment Integration - Panduan Lengkap

## 📋 Deskripsi
Integrasi Stripe untuk payment processing pada aplikasi Phone Shop dengan CodeIgniter 3.

## 🔧 Setup & Konfigurasi

### 1. Install Stripe PHP Library
Pastikan Composer sudah terinstall, kemudian jalankan:
```bash
composer require stripe/stripe-php
```

### 2. Konfigurasi Stripe Keys
File: `application/config/stripe.php`

```php
$config['stripe_secret'] = 'sk_test_51ScPf9RzhTZ1KUaTOXeu443f3jnFzUU6dgOaa45hF7MH9zd75XZXLfeAQzR6qI2JNJrr3Z9gmA151HqMzVtVeUq5009iSlPATf';
$config['stripe_public'] = 'pk_test_51ScPf9RzhTZ1KUaTJBOQUQAjBul7I4wXn6I7ITrKR3wIWEC3mCzh7ukEmKDcZmPvSzRU5RjQQTooA5Rm6rbDrn4Y00dckUB8wR';
```

**⚠️ PENTING**: 
- Keys di atas adalah **TEST KEYS**
- Untuk production, ganti dengan **LIVE KEYS** dari Stripe Dashboard
- Jangan commit live keys ke version control
- Gunakan environment variables untuk production

### 3. Struktur File

#### Controller
- `application/controllers/Payment.php` - Handle semua proses payment

#### Routes
File: `application/config/routes.php`
```php
$route['payment/create_payment_intent'] = 'payment/create_payment_intent';
$route['payment/confirm_payment'] = 'payment/confirm_payment';
$route['payment/get_public_key'] = 'payment/get_public_key';
$route['payment/webhook'] = 'payment/webhook';
```

#### View
- `application/views/pages/checkout.php` - Checkout page dengan Stripe Elements

## 🚀 Cara Kerja

### Flow Pembayaran

1. **Customer mengisi form checkout**
   - Nama, email, alamat
   - Pilih metode pembayaran (Card/PayPal/GPay)

2. **Untuk Card Payment (Stripe)**:
   - Stripe Elements dimuat otomatis
   - Customer input card details (secure via Stripe)
   - Click "Place Order"

3. **Backend Processing**:
   ```
   JavaScript → create_payment_intent() → Stripe API
              → confirmCardPayment() → Success/Failed
              → Redirect ke success page
   ```

4. **Payment Intent Created**:
   - Amount: Rp 71.996.000 (IDR)
   - Currency: IDR
   - Payment Method: Card
   - Metadata: Order ID, Customer info

5. **Card Confirmation**:
   - Stripe validates card
   - 3D Secure if required
   - Payment processed

6. **Success Response**:
   - Redirect ke `/checkout/success`
   - Show order confirmation
   - Invoice download available

## 📝 API Endpoints

### 1. Get Public Key
**URL**: `GET /payment/get_public_key`

**Response**:
```json
{
  "publicKey": "pk_test_..."
}
```

### 2. Create Payment Intent
**URL**: `POST /payment/create_payment_intent`

**Request Body**:
```json
{
  "amount": 71996000,
  "currency": "idr",
  "description": "Phone Shop Purchase",
  "order_id": "ORD-123456",
  "customer_name": "John Doe",
  "customer_email": "john@example.com"
}
```

**Response**:
```json
{
  "clientSecret": "pi_xxx_secret_xxx",
  "paymentIntentId": "pi_xxx"
}
```

### 3. Confirm Payment
**URL**: `POST /payment/confirm_payment`

**Request Body**:
```json
{
  "payment_intent_id": "pi_xxx"
}
```

**Response**:
```json
{
  "success": true,
  "status": "succeeded",
  "payment_intent": "pi_xxx",
  "amount": 71996000,
  "currency": "idr"
}
```

### 4. Webhook (Stripe Events)
**URL**: `POST /payment/webhook`

Endpoint untuk menerima notifications dari Stripe:
- `payment_intent.succeeded`
- `payment_intent.payment_failed`
- dll.

## 💳 Testing Cards

Gunakan test cards ini untuk testing:

| Card Number         | Status     | Description                |
|--------------------|------------|----------------------------|
| 4242 4242 4242 4242 | Success   | Payment berhasil           |
| 4000 0000 0000 9995 | Declined  | Insufficient funds         |
| 4000 0025 0000 3155 | Success   | 3D Secure authentication   |
| 4000 0000 0000 0002 | Declined  | Card declined              |

**Details**:
- Expiry: Tanggal masa depan (e.g., 12/25)
- CVV: Any 3 digits (e.g., 123)
- ZIP: Any 5 digits (e.g., 12345)

## 🔐 Security

### Best Practices Implemented:

1. **No Card Data on Server**
   - Card details handled by Stripe Elements
   - PCI DSS compliance automatic

2. **HTTPS Required**
   - Stripe requires HTTPS untuk production
   - Use SSL certificate

3. **API Keys Security**
   - Secret key hanya di server
   - Public key di client-side
   - Jangan hardcode di production

4. **CSRF Protection**
   - Enable di `config/config.php` untuk production
   ```php
   $config['csrf_protection'] = TRUE;
   ```

5. **Input Validation**
   - Validate amount server-side
   - Sanitize customer data

## 🧪 Testing

### 1. Test di Development
```bash
# Jalankan XAMPP
# Akses: http://localhost/ciproject/checkout
```

### 2. Test Payment Flow
1. Tambah items ke cart
2. Go to checkout
3. Isi form customer details
4. Pilih "Credit / Debit Card"
5. Input test card: 4242 4242 4242 4242
6. Expiry: 12/25, CVV: 123
7. Click "Place Order"
8. Lihat di Stripe Dashboard > Payments

### 3. Monitor di Stripe Dashboard
- Login ke: https://dashboard.stripe.com/test/payments
- Lihat real-time payments
- Check logs dan events

## 📊 Stripe Dashboard

### Monitoring Payments:
1. Login: https://dashboard.stripe.com
2. Switch ke **Test Mode** (toggle di top-right)
3. Menu **Payments** - Lihat semua transactions
4. Menu **Customers** - Customer data
5. Menu **Logs** - API request/response

### Webhooks Setup (Optional):
1. Dashboard > Developers > Webhooks
2. Add endpoint: `https://yourdomain.com/payment/webhook`
3. Select events:
   - `payment_intent.succeeded`
   - `payment_intent.payment_failed`
4. Copy webhook secret
5. Add ke code di `Payment.php` line 122

## 🌐 Production Deployment

### Checklist:

- [ ] Ganti test keys dengan live keys
- [ ] Enable HTTPS/SSL
- [ ] Update `base_url` di config.php
- [ ] Enable CSRF protection
- [ ] Setup webhook endpoint
- [ ] Test live payments dengan small amount
- [ ] Setup error logging
- [ ] Configure email notifications
- [ ] Add database untuk order tracking

### Environment Variables (Recommended):
```php
// application/config/stripe.php
$config['stripe_secret'] = getenv('STRIPE_SECRET_KEY') ?: 'sk_test_...';
$config['stripe_public'] = getenv('STRIPE_PUBLIC_KEY') ?: 'pk_test_...';
```

## 🐛 Troubleshooting

### Error: "No such token"
- Pastikan Stripe.js loaded
- Check public key benar

### Error: "Amount must be positive"
- Validate amount > 0
- For IDR, amount dalam Rupiah (tidak perlu x100)

### Payment berhasil tapi tidak redirect
- Check console untuk errors
- Verify success URL correct

### Webhook tidak terima events
- Verify webhook URL accessible
- Check webhook secret correct
- Test dengan Stripe CLI

## 📚 Resources

- [Stripe PHP Docs](https://stripe.com/docs/api/php)
- [Stripe Elements](https://stripe.com/docs/stripe-js)
- [Payment Intents](https://stripe.com/docs/payments/payment-intents)
- [Testing](https://stripe.com/docs/testing)
- [Webhooks](https://stripe.com/docs/webhooks)

## 💡 Next Steps

1. **Database Integration**
   - Save orders ke database
   - Link dengan payment_intent_id

2. **Email Notifications**
   - Order confirmation
   - Payment receipt

3. **Order Tracking**
   - Customer dashboard
   - Order history

4. **Refund System**
   - Admin panel untuk refunds
   - Partial refunds

5. **Multiple Currencies**
   - Auto-detect customer location
   - Currency conversion

## 📞 Support

Jika ada masalah:
1. Check Stripe Dashboard Logs
2. Check browser console
3. Check CodeIgniter logs: `application/logs/`
4. Contact Stripe Support: https://support.stripe.com

---

**Status**: ✅ Fully Integrated & Ready for Testing
**Last Updated**: December 9, 2025
