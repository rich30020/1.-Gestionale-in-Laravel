<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Tecnologia all'avanguardia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'SF Pro Display', sans-serif;
        }

        body {
            background-color: #f5f5f7;
            color: #1d1d1f;
        }

        header {
            background-color: #fff;
            padding: 12px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #0071e3;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        nav ul li a:hover {
            color: #0071e3;
        }

        main {
            max-width: 1200px;
            margin: 120px auto;
            padding: 20px;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .filter-buttons button {
            padding: 10px 20px;
            border: none;
            background: #0071e3;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .filter-buttons button:hover {
            background: #005bb5;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .product {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .product:hover {
            transform: translateY(-10px);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product h3 {
            font-size: 20px;
            font-weight: 600;
            margin-top: 10px;
        }

        .product p {
            font-size: 16px;
            color: #555;
        }

        .product a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background: #0071e3;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
        }

        .product a:hover {
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
        <div class="filter-buttons">
            <button>Tutti</button>
            <button>Mac</button>
            <button>iPad</button>
            <button>iPhone</button>
            <button>Watch</button>
        </div>

        <div class="product-grid">
            <div class="product">
                <img src="https://via.placeholder.com/600x400" alt="iPhone 16">
                <h3>iPhone 16</h3>
                <p>Il nuovo iPhone con prestazioni incredibili.</p>
                <a href="#">Acquista</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/600x400" alt="MacBook Air M4">
                <h3>MacBook Air M4</h3>
                <p>Il laptop più leggero e potente di sempre.</p>
                <a href="#">Acquista</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/600x400" alt="iPad Air M3">
                <h3>iPad Air M3</h3>
                <p>Potenza e versatilità con il chip M3.</p>
                <a href="#">Acquista</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/600x400" alt="Apple Watch Series 10">
                <h3>Apple Watch Series 10</h3>
                <p>Il tuo compagno ideale per la salute.</p>
                <a href="#">Acquista</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/600x400" alt="AirPods Pro 2">
                <h3>AirPods Pro 2</h3>
                <p>Audio spaziale e cancellazione attiva del rumore.</p>
                <a href="#">Acquista</a>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/600x400" alt="Mac Studio M3 Ultra">
                <h3>Mac Studio M3 Ultra</h3>
                <p>Il massimo della potenza per i professionisti.</p>
                <a href="#">Acquista</a>
            </div>
        </div>
    </main>
</body>
</html>


