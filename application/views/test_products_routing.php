<!DOCTYPE html>
<html>
<head>
    <title>Products CRUD Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f5f5f5;
        }
        .test-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .test-link {
            display: block;
            padding: 15px;
            margin: 10px 0;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .test-link:hover {
            background: #0056b3;
            transform: translateX(5px);
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            margin-left: 10px;
        }
        .status.success { background: #28a745; color: white; }
        .status.pending { background: #ffc107; color: #333; }
        .info {
            background: #e7f3ff;
            padding: 15px;
            border-left: 4px solid #007bff;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="test-container">
        <h1>🧪 Products CRUD Test Page</h1>
        
        <div class="info">
            <strong>ℹ️ Instructions:</strong>
            <p>Click each link below to test the routing. If you see the correct page, routing is working!</p>
        </div>

        <h2>Test Links:</h2>
        
        <a href="<?= base_url('admin/products') ?>" class="test-link">
            1. View Products List <span class="status pending">Test</span>
        </a>
        
        <a href="<?= base_url('admin/products/add') ?>" class="test-link">
            2. Add Product Form <span class="status pending">Test</span>
        </a>
        
        <a href="<?= base_url('admin/products/edit/1') ?>" class="test-link">
            3. Edit Product (ID: 1) <span class="status pending">Test</span>
        </a>
        
        <a href="<?= base_url('admin/products/view/1') ?>" class="test-link">
            4. View Product Detail (ID: 1) <span class="status pending">Test</span>
        </a>

        <h2>Direct URLs (for manual testing):</h2>
        <div style="background: #f8f9fa; padding: 15px; border-radius: 5px; font-family: monospace; font-size: 12px;">
            <p><strong>Base URL:</strong> <?= base_url() ?></p>
            <p><strong>List:</strong> <?= base_url('admin/products') ?></p>
            <p><strong>Add:</strong> <?= base_url('admin/products/add') ?></p>
            <p><strong>Edit:</strong> <?= base_url('admin/products/edit/1') ?></p>
            <p><strong>View:</strong> <?= base_url('admin/products/view/1') ?></p>
        </div>

        <div class="info" style="margin-top: 30px; background: #fff3cd; border-left-color: #ffc107;">
            <strong>⚠️ If links don't work:</strong>
            <ol>
                <li>Clear browser cache (Ctrl+Shift+Delete)</li>
                <li>Try in Incognito/Private mode</li>
                <li>Check .htaccess file exists in root</li>
                <li>Check Apache mod_rewrite is enabled</li>
                <li>See TROUBLESHOOTING_PRODUCTS.md for details</li>
            </ol>
        </div>
    </div>
</body>
</html>
