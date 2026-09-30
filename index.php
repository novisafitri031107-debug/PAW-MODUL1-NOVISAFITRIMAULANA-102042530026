<<?php
$products = [
    [
        "nama" => "Headset TWS Bluetooth Gaming",
        "kategori" => "Audio",
        "harga" => 509000,
        "stok" => 14
    ],
    [
        "nama" => "Powerbank Fast Charging 20000mAh",
        "kategori" => "Aksesoris",
        "harga" => 520000,
        "stok" => 7
    ],
    [
        "nama" => "Smartwatch Fitness Tracker",
        "kategori" => "Wearable",
        "harga" => 2150000,
        "stok" => 5
    ],
    [
        "nama" => "Apple iPad Air Gen 5",
        "kategori" => "Perangkat",
        "harga" => 7999000,
        "stok" => 2
    ],
    [
        "nama" => "Speaker Bluetooth Portable",
        "kategori" => "Audio",
        "harga" => 80000,
        "stok" => 0
    ],
    [
        "nama" => "Webcam HD 1080p",
        "kategori" => "Perangkat",
        "harga" => 650000,
        "stok" => 6
    ]
];

$total_produk = count($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store - Katalog Produk</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fff5f7;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #ffffff;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ffd8e4;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #d53f8c;
        }

        nav a {
            text-decoration: none;
            color: #718096;
            margin-left: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        nav a:hover {
            color: #d53f8c;
        }

        .hero {
            background: linear-gradient(135deg, #ed64a6, #d53f8c);
            color: #ffffff;
            margin: 30px 40px;
            padding: 50px;
            border-radius: 15px;
        }

        .hero h4 {
            font-size: 12px;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            color: #fed7e2;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            color: #fff5f7;
            margin-bottom: 25px;
            font-size: 16px;
        }

        .btn-hero {
            background: #ffffff;
            color: #d53f8c;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        }

        .btn-hero:hover {
            background: #fff5f7;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto 50px auto;
            padding: 0 20px;
        }

        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 20px;
        }

        .catalog-title h2 {
            font-size: 12px;
            color: #d53f8c;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .catalog-title h3 {
            font-size: 22px;
            color: #2d3748;
        }

        .total-badge {
            background: #fed7e2;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #97266d;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background: #ffffff;
            border: 1px solid #ffd8e4;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(213, 63, 140, 0.1);
        }

        .category-tag {
            font-size: 12px;
            background: #fff5f7;
            color: #d53f8c;
            padding: 4px 8px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 10px;
            width: fit-content;
            font-weight: 600;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .price-box {
            margin-bottom: 15px;
        }

        .normal-price {
            font-size: 14px;
            color: #a0aec0;
            text-decoration: line-through;
        }

        .discounted-price {
            font-size: 18px;
            font-weight: bold;
            color: #e53e3e;
        }

        .normal-price-only {
            font-size: 18px;
            font-weight: bold;
            color: #2d3748;
        }

        .discount-badge {
            background: #fed7d7;
            color: #c53030;
            font-size: 11px;
            font-weight: bold;
            padding: 2px 6px;
            border-radius: 4px;
            margin-left: 5px;
            display: inline-block;
        }

        .stock-info {
            font-size: 13px;
            margin-bottom: 15px;
            color: #718096;
        }

        .status {
            font-size: 12px;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .status-tersedia {
            background: #c6f6d5;
            color: #22543d;
        }

        .status-habis {
            background: #fed7d7;
            color: #742a2a;
        }

        .buy-button {
            background: #ed64a6;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: block;
            width: 100%;
            transition: opacity 0.2s ease;
        }

        .buy-button:hover {
            background: #d53f8c;
        }

        .buy-button.disabled {
            background: #cbd5e0;
            cursor: not-allowed;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ffffff;
            border-top: 1px solid #ffd8e4;
            color: #718096;
            font-size: 14px;
        }

        @media (max-width: 900px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
            .hero {
                margin: 15px;
                padding: 30px;
            }
            header {
                padding: 15px 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">Cia Store</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">About</a>
        </nav>
    </header>

    <section class="hero">
        <h4>CIA STORE</h4>
        <h1>Simple Tech Store.</h1>
        <p>Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu.</p>
        <a href="#katalog" class="btn-hero">Lihat Produk</a>
    </section>

    <div class="container" id="katalog">
        <div class="catalog-header">
            <div class="catalog-title">
                <h2>Our Products</h2>
                <h3>Katalog Produk</h3>
            </div>
            <div class="total-badge">
                Total Produk: <?php echo $total_produk; ?>
            </div>
        </div>

        <div class="product-grid">
            <?php foreach ($products as $p) { ?>
                <div class="product-card">
                    <div>
                        <span class="category-tag"><?php echo $p['kategori']; ?></span>
                        <div class="product-name"><?php echo $p['nama']; ?></div>

                        <div class="price-box">
                            <?php 
                            if ($p['harga'] >= 1000000) {
                                $diskon = $p['harga'] * 0.10;
                                $harga_setelah_diskon = $p['harga'] - $diskon;
                            ?>
                                <span class="normal-price">Rp <?php echo number_format($p['harga'], 0, ',', '.'); ?></span>
                                <span class="discount-badge">10% OFF</span>
                                <br>
                                <span class="discounted-price">Rp <?php echo number_format($harga_setelah_diskon, 0, ',', '.'); ?></span>
                            <?php 
                            } else { 
                            ?>
                                <span class="normal-price-only">Rp <?php echo number_format($p['harga'], 0, ',', '.'); ?></span>
                            <?php 
                            } 
                            ?>
                        </div>

                        <div class="stock-info">
                            Stok: <strong><?php echo $p['stok']; ?></strong>
                        </div>
                    </div>

                    <div>
                        <?php if ($p['stok'] > 0) { ?>
                            <div class="status status-tersedia">Tersedia</div>
                            <a href="#" class="buy-button">Beli Sekarang</a>
                        <?php } else { ?>
                            <div class="status status-habis">Stok Habis</div>
                            <a href="#" class="buy-button disabled" onclick="return false;">Stok Habis</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Cia Store. Praktikum Pengembangan Aplikasi Website.</p>
    </footer>

</body>
</html>