<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore</title>
    <style>
        /* Import del font di Apple (simile a San Francisco) */
        @font-face {
            font-family: 'Helvetica Neue', sans-serif;
            src: local('Helvetica Neue'), local('HelveticaNeue'),
                url('https://fonts.cdnfonts.com/s/19271/helvetica-neue.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        /* Reset base per il layout */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Animazione di transizione generale */
        * {
            transition: all 0.3s ease;
        }

        header {
            background-color: #fff;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #0071e3;
        }

        main {
            max-width: 1200px;
            margin: 120px auto;
            padding: 50px 20px;
        }

        /* Hero section */
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.9) 100%);
            color: #fff;
            border-radius: 20px;
            margin-bottom: 50px;
            animation: fadeIn 1s ease-out;
        }

        .hero h1 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        .hero p {
            font-size: 22px;
            font-weight: 300;
            margin-top: 10px;
            opacity: 0;
            animation: fadeInUp 1s 0.5s forwards;
        }

        /* Animazioni */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Grid di prodotti */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
            opacity: 0;
            animation: fadeIn 1.5s forwards;
        }

        .product {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1.5s 0.5s forwards;
        }

        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .product img:hover {
            transform: scale(1.05);
        }

        .product h3 {
            font-size: 22px;
            font-weight: 600;
            margin-top: 15px;
        }

        .product p {
            font-size: 16px;
            color: #666;
            margin: 10px 0;
        }

        .product a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #0071e3;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .product a:hover {
            background: #005bb5;
        }

        /* Sezione Flash Sale */
        .flash-sale {
            background: linear-gradient(135deg, #0071e3, #00b0ff);
            color: white;
            padding: 40px 20px;
            margin-top: 50px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .flash-sale h2 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .flash-sale p {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .countdown {
            font-size: 28px;
            font-weight: 700;
            background: #fff;
            color: #333;
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
        }

        footer {
            background: #fff;
            padding: 20px 50px;
            text-align: center;
            color: #666;
            border-top: 1px solid #ddd;
            margin-top: 50px;
        }

        footer p {
            font-size: 14px;
            color: #999;
        }

        /* Responsività */
        @media (max-width: 768px) {
            header {
                padding: 20px 30px;
            }

            .logo {
                font-size: 24px;
            }

            nav ul {
                display: none;
            }

            .hero {
                padding: 60px 20px;
            }

            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }

            .flash-sale {
                padding: 30px 15px;
            }
        }

        /* Sezione con il {{$slot}} */
        .slot-section {
            background: #f1f1f6;
            padding: 50px 20px;
            margin-top: 50px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
        }

        .slot-section h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .slot-section p {
            font-size: 18px;
            color: #666;
            font-weight: 300;
            margin-bottom: 30px;
        }

        .slot-section .cta-button {
            padding: 12px 24px;
            background: #0071e3;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .slot-section .cta-button:hover {
            background: #005bb5;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">TechStore</div>
        <nav>
            <ul>
                <li><a href="#">Mac</a></li>
                <li><a href="#">iPad</a></li>
                <li><a href="#">iPhone</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="hero">
            <h1>iPhone 16 Pro</h1>
            <p>Progettato per l'Apple Intelligence</p>
        </div>

        <div class="product-grid">
            <div class="product">
                <img src="https://via.placeholder.com/300x200" alt="iPhone 16">
                <h3>iPhone 16</h3>
                <p>Scopri il nuovo iPhone 16 con funzionalità avanzate.</p>
                <a href="#">Scopri di più</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/300x200" alt="Apple Watch">
                <h3>Apple Watch</h3>
                <p>Il futuro del benessere è sul tuo polso.</p>
                <a href="#">Scopri di più</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/300x200" alt="MacBook Air">
                <h3>MacBook Air</h3>
                <p>Potenza e leggerezza in un design sottile.</p>
                <a href="#">Scopri di più</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/300x200" alt="iPad Pro">
                <h3>iPad Pro</h3>
                <p>Per i professionisti della creatività.</p>
                <a href="#">Scopri di più</a>
            </div>
        </div>

        <!-- Sezione Slot -->
        <div class="slot-section">
            <h1>{{$slot}}</h1>
        </div>

        <!-- Flash Sale Section -->
        <div class="flash-sale">
            <h2>Offerta Flash!</h2>
            <p>Solo per oggi, ottieni il 20% di sconto su tutti i prodotti!</p>
            <div class="countdown">00:10:00</div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 TechStore - Tutti i diritti riservati.</p>
    </footer>
</body>

</html>
