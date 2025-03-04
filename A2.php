<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reštauračný Systém</title>
    <style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
    background-color: #0a6640; /* Hlavná farba pozadia */
    color: #333;
    line-height: 1.8;
    overflow-x: hidden;
}

/* Hlavička stránky */
header {
    background: linear-gradient(145deg, #0a6640, #053320); /* Gradient medzi dvoma odtieňmi */
    padding: 100px 20px;
    text-align: center;
    color: white;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    border-bottom: 3px solid #4dffb6;
}

header h1 {
    font-size: 4.5em;
    font-weight: 700;
    letter-spacing: 3px;
    margin: 0;
    text-transform: uppercase;
    animation: color-change 6s ease-in-out infinite;
}

@keyframes color-change {
    0% { color: #4dffb6; }
    50% { color: #146644; }
    100% { color: #00ff0b; }
}

/* Úvodná sekcia */
#intro {
    text-align: center;
    padding: 80px 20px;
    font-size: 1.6em;
    color: #495057;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 20px;
    margin: 50px auto;
    max-width: 1100px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px);
}

#intro p {
    font-size: 1.2em;
    color: #e1e1e1;
}

/* Sekcia produktov */
.section {
    padding: 60px 30px;
    background-color: #ffffff;
    border-radius: 25px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
    max-width: 1100px;
    border-top: 6px solid #264c3d; /* Svetlejší zelený akcent */
}

.section h2 {
    font-size: 2.8em;
    font-weight: 600;
    margin-bottom: 30px;
    color: #146644;
    text-transform: uppercase;
}

/* Tlačidlá pre kategórie */
.category-buttons {
    text-align: center;
    margin-bottom: 40px;
}

.category-buttons button {
    padding: 14px 40px;
    font-size: 18px;
    background-color: #053320;
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    margin: 15px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.category-buttons button:hover {
    background-color: #146644;
    transform: scale(1.05);
}

/* Kategórie produktov */
.product-category {
    display: none;
    background-color: #f8f9fa;
    padding: 60px;
    border-radius: 20px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    font-family: 'Inter', sans-serif;
    color: #495057;
    transition: transform 0.3s, box-shadow 0.3s ease-in-out;
}

.product-category.active {
    display: block;
    transform: scale(1.03);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
}

.product-category h3 {
    font-size: 2.4em;
    color: #4dffb6;
    margin-bottom: 20px;
    text-transform: uppercase;
}

/* Tlačidlá produktov */
.product-category button {
    background-color: #0a6640;
    color: white;
    border: none;
    border-radius: 30px;
    padding: 14px 35px;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.product-category button:hover {
    background-color: #053320;
    transform: scale(1.1);
}

/* Produktová mriežka */
.product-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
}

/* Karta produktu */
.card {
    background-color: #ffffff;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    overflow: hidden;
    max-width: 360px;
    text-align: center;
    transition: transform 0.3s ease-in-out;
    font-family: 'Inter', sans-serif;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    height: auto;
    border-bottom: 3px solid #f1f1f1;
}

.card h3 {
    font-size: 2em;
    color: #333;
    margin: 20px 0;
    font-weight: 600;
}

.card .price {
    font-size: 1.6em;
    color: #4dffb6;
    margin-bottom: 20px;
}

.card button {
    padding: 16px 30px;
    font-size: 18px;
    background-color: #146644;
    color: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    width: 100%;
    transition: all 0.3s ease-in-out;
}

.card button:hover {
    background-color: #053320;
    transform: scale(1.05);
}

/* Košík */
#cart {
    background-color: #ffffff;
    border-radius: 20px;
    padding: 60px;
    text-align: center;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
    max-width: 900px;
}

#cart h2 {
    font-size: 2.8em;
    color: #0a6640;
    margin-bottom: 30px;
}

/* Košík - položky */
#cart ul {
    list-style-type: none;
    padding: 0;
}

#cart li {
    margin-bottom: 20px;
    color: #495057;
    font-size: 1.2em;
}

/* Tlačidlo pre checkout */
#checkoutBtn {
    padding: 18px 40px;
    font-size: 20px;
    background-color: #264c3d;
    color: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: background-color 0.4s, transform 0.3s;
    margin-top: 30px;
}

#checkoutBtn:hover {
    background-color: #b3ffe0;
    transform: scale(1.05);
}

/* Footer */
footer {
    background-color: #0a6640;
    padding: 40px;
    text-align: center;
    color: white;
    font-size: 1.4em;
    position: relative;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -12px 40px rgba(0, 0, 0, 0.1);
    border-top: 6px solid #4dffb6;
}

footer a {
    color: #00ff0b;
    text-decoration: none;
    transition: color 0.3s;
}

footer a:hover {
    color: #1aff23;
}

/* Navigačné odkazy */
.nav-links a {
    color: #e1e1e1;
    text-decoration: none;
    margin: 0 15px;
    font-size: 1.1em;
    font-weight: 500;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #146644;
}

/* Modal */
.modal-content {
    background-color: #f5f7fa;
    margin: auto;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 12px 50px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    text-align: center;
}

.modal-content input {
    width: 100%;
    padding: 15px;
    margin: 20px 0;
    border: 1px solid #0a6640;
    border-radius: 10px;
}

.modal-content button {
    background-color: #146644;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.modal-content button:hover {
    background-color: #053320;
}
/* Modálne okno (skrytý obsah na začiatku) */
.modal {
    display: none; /* Skryté pred otvorením */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Polopriezračné pozadie */
    overflow: auto;
    padding-top: 60px;
}

/* Modálny obsah */
.modal-content {
    background-color: #ffffff;
    margin: auto;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 12px 50px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    text-align: center;
    position: relative;
}

/* Tlačidlo pre zatvorenie modálneho okna */
.close-btn {
    color: #aaa;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Tlačidlá platobných metód */
.payment-methods button {
    background-color: #0a6640; /* Hlavná farba pre platbu */
    color: white;
    padding: 15px 30px;
    border-radius: 30px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    margin: 10px 0;
    font-size: 18px;
    width: 80%;
    max-width: 300px;
}

.payment-methods button:hover {
    background-color: #146644; /* Svetlejší odtieň pri hoveri */
    transform: scale(1.05);
}
/* Modálne okno (skrytý obsah na začiatku) */
.modal {
    display: none; /* Skryté pred otvorením */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Polopriezračné pozadie */
    overflow: auto;
    padding-top: 60px;
}

/* Modálny obsah */
.modal-content {
    background-color: #ffffff;
    margin: auto;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 12px 50px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    text-align: center;
    position: relative;
}

/* Tlačidlo pre zatvorenie modálneho okna */
.close-btn {
    color: #aaa;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Tlačidlá platobných metód */
.payment-methods button {
    background-color: #0a6640; /* Hlavná farba pre platbu */
    color: white;
    padding: 15px 30px;
    border-radius: 30px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    margin: 10px 0;
    font-size: 18px;
    width: 80%;
    max-width: 300px;
}

.payment-methods button:hover {
    background-color: #146644; /* Svetlejší odtieň pri hoveri */
    transform: scale(1.05);
}
/* Navigačný bar */
.navbar {
    background:#0ab36d; /* Gradient farby */
    padding: 20px 0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    font-family: 'Inter', sans-serif;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.navbar-logo {
    color: white;
    font-size: 1.4em;
    font-weight: 700;
    text-decoration: none;
    letter-spacing: 3px;
    text-transform: uppercase;
    transition: color 0.3s ease-in-out;
}

.navbar-logo:hover {
    color: #b6ffe1; /* Zmena farby pri hover */
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.nav-links a:hover {
    color: #b6ffe1; /* Farba pri hover */
}

/* Prispôsobenie pre menšie obrazovky */
@media screen and (max-width: 768px) {
    .navbar-container {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .nav-links {
        flex-direction: column;
        gap: 15px;
    }
    
    .nav-links a {
        font-size: 1.5em;
    }
}


    </style>
</head>
<script async src="https://cdn.seline.so/seline.js" data-token="6e28bf71cffb3af"></script>
<body>
    <h1>Reštauračný Systém</h1>
   <div class="category-buttons">
        <button onclick="showCategory('drinks')">Nápoje</button>
        <button onclick="showCategory('snacks')">Občerstvenie</button>
        <button onclick="showCategory('soup')">Polievky</button>
        <button onclick="showCategory('mainCourse')">Hlavné jedlá</button>
        <button onclick="showCategory('desserts')">Zákusky</button>
        <button onclick="showCategory('pizza')">Pizza</button>
		<button onclick="showCategory('dressing')">Dresingy</button>
    </div>
    <div id="drinks" class="product-category">
        <h2>Nápoje</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Káva', 1.5)">
                
                <h1>Káva</h1>
                <p class="price">1.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Čaj', 1)">
                
                <h1>Čaj</h1>
                <p class="price">1.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Džús', 2)">
                
                <h1>Džús</h1>
                <p class="price">2.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Voda', 0.8)">
                
                <h1>Voda</h1>
                <p class="price">0.80€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Pivo', 1.5)">
                
                <h1>Pivo</h1>
                <p class="price">1.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <!-- Pridané ďalšie položky -->
            <div class="card" onclick="addToCart('Limonáda', 2.5)">
                
                <h1>Limonáda</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Minerálka', 1.2)">
              
                <h1>Minerálka</h1>
                <p class="price">1.20€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Kakao', 1.8)">
                
                <h1>Kakao</h1>
                <p class="price">1.80€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Riedky džús', 2.2)">
             
                <h1>Riedky džús</h1>
                <p class="price">2.20€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Energetický nápoj', 3)">
                
                <h1>Energetický nápoj</h1>
                <p class="price">3.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Šampanské', 10)">
            
                <h1>Šampanské</h1>
                <p class="price">10.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Cider', 2.5)">
                
                <h1>Cider</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Smoothie', 3.5)">
                
                <h1>Smoothie</h1>
                <p class="price">3.50€</p>
                <button>Pridať do košíka</button>
            </div>
        </div>
    </div>
    <div id="snacks" class="product-category">
        <h2>Občerstvenie</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Chipsy', 1.5)">
                
                <h1>Chipsy</h1>
                <p class="price">1.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Čokoláda', 2)">
                
                <h1>Čokoláda</h1>
                <p class="price">2.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Sušienky', 1.2)">
              
                <h1>Sušienky</h1>
                <p class="price">1.20€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Ovocie', 1.8)">
               
                <h1>Ovocie</h1>
                <p class="price">1.80€</p>
                <button>Pridať do košíka</button>
            </div>
            <!-- Pridané ďalšie položky -->
            <div class="card" onclick="addToCart('Popcorn', 2.5)">
                
                <h1>Popcorn</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Tyčinky', 1.5)">
                
                <h1>Tyčinky</h1>
                <p class="price">1.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Orechy', 2.2)">
                
                <h1>Orechy</h1>
                <p class="price">2.20€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Krekry', 1.8)">
               
                <h1>Krekry</h1>
                <p class="price">1.80€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Bageta', 2.5)">
                
                <h1>Bageta</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Croissant', 1.8)">
               
                <h1>Croissant</h1>
                <p class="price">1.80€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Muffin', 2)">
                
                <h1>Muffin</h1>
                <p class="price">2.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Hrozienka', 1.5)">
               
                <h1>Hrozienka</h1>
                <p class="price">1.50€</p>
                <button>Pridať do košíka</button>
            </div>

        </div>
    </div>
    <div id="soup" class="product-category">
        <h2>Polievky</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Kuracia polievka', 3)">
               
                <h1>Kuracia polievka</h1>
                <p class="price">3.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Hovädzia polievka', 3.5)">
          
                <h1>Hovädzia polievka</h1>
                <p class="price">3.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Zeleninová polievka', 2.5)">
             
                <h1>Zeleninová polievka</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Hrášková polievka', 2)">
                
                <h1>Hrášková polievka</h1>
                <p class="price">2.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <!-- Pridané ďalšie položky -->
            <div class="card" onclick="addToCart('Šampiňónová polievka', 3.2)">
                
                <h1>Šampiňónová polievka</h1>
                <p class="price">3.20€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Cesnaková polievka', 2.8)">
                
                <h1>Cesnaková polievka</h1>
                <p class="price">2.80€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Rybia polievka', 3.5)">
                
                <h1>Rybia polievka</h1>
                <p class="price">3.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Kyslá kapustnica', 3)">
               
                <h1>Kyslá kapustnica</h1>
                <p class="price">3.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Boršč', 3.5)">
                
                <h1>Boršč</h1>
                <p class="price">3.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Klobásová polievka', 2.7)">
                
                <h1>Klobásová polievka</h1>
                <p class="price">2.70€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Krémová polievka', 3)">
                
                <h1>Krémová polievka</h1>
                <p class="price">3.00€</p>
                <button>Pridať do košíka</button>
            </div>
        </div>
    </div>
    <div id="mainCourse" class="product-category">
        <h2>Hlavné jedlá</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Špagety', 5)">
               
                <h1>Špagety</h1>
                <p class="price">5.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Steak', 12)">
              
                <h1>Steak</h1>
                <p class="price">12.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Hamburger', 8)">
                
                <h1>Hamburger</h1>
                <p class="price">8.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Ryža s kuracím mäsom', 7)">
               
                <h1>Ryža s kuracím mäsom</h1>
                <p class="price">7.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <!-- Pridané ďalšie položky -->
            <div class="card" onclick="addToCart('Pečené kurča', 10)">
               
                <h1>Pečené kurča</h1>
                <p class="price">10.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Mäsové guľky', 6)">

                <h1>Mäsové guľky</h1>
                <p class="price">6.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Rizoto', 8)">
               
                <h1>Rizoto</h1>
                <p class="price">8.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Lasagne', 9)">
                
                <h1>Lasagne</h1>
                <p class="price">9.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Kebab', 7.5)">
                
                <h1>Kebab</h1>
                <p class="price">7.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Frittata', 6.5)">
                
                <h1>Frittata</h1>
                <p class="price">6.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Quiche', 7)">
                
                <h1>Quiche</h1>
                <p class="price">7.00€</p>
                <button>Pridať do košíka</button>
            </div>
        </div>
    </div>
    <div id="desserts" class="product-category">
        <h2>Zákusky</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Koláč', 3)">
                
                <h1>Koláč</h1>
                <p class="price">3.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Torta', 5)">
              
                <h1>Torta</h1>
                <p class="price">5.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Zmrzlina', 2.5)">
               
                <h1>Zmrzlina</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Puding', 2)">
              
                <h1>Puding</h1>
                <p class="price">2.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <!-- Pridané ďalšie položky -->
            <div class="card" onclick="addToCart('Palacinky', 3.5)">
                
                <h1>Palacinky</h1>
                <p class="price">3.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Makový koláč', 3.5)">
                
                <h1>Makový koláč</h1>
                <p class="price">3.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Tiramisu', 4)">
                
                <h1>Tiramisu</h1>
                <p class="price">4.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Cheesecake', 4)">
             
                <h1>Cheesecake</h1>
                <p class="price">4.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Kávová torta', 5)">
              
                <h1>Kávová torta</h1>
                <p class="price">5.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Eclairs', 2.5)">
                
                <h1>Eclairs</h1>
                <p class="price">2.50€</p>
                <button>Pridať do košíka</button>
            </div>
        </div>
    </div>
	 <div id="pizza" class="product-category">
        <h2>Pizze</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Margherita', 6.5)">
                
                <h1>Margherita</h1>
                <p class="price">6.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Pepperoni', 7.5)">
               
                <h1>Pepperoni</h1>
                <p class="price">7.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Hawaiian', 8)">
               
                <h1>Hawaiian</h1>
                <p class="price">8.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Vegetarian', 7)">
                
                <h1>Vegetarian</h1>
                <p class="price">7.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('BBQ Chicken', 8.5)">
                
                <h1>BBQ Chicken</h1>
                <p class="price">8.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Four Cheese', 9)">
              
                <h1>Four Cheese</h1>
                <p class="price">9.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Margarita', 7)">
                
                <h1>Margarita</h1>
                <p class="price">7.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Meat Lovers', 9.5)">
                
                <h1>Meat Lovers</h1>
                <p class="price">9.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Seafood', 10)">
                
                <h1>Seafood</h1>
                <p class="price">10.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Pesto', 8)">
               
                <h1>Pesto</h1>
                <p class="price">8.00€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Buffalo', 7.5)">
                
                <h1>Buffalo</h1>
                <p class="price">7.50€</p>
                <button>Pridať do košíka</button>
            </div>
        </div>
    </div>

    <div id="dressing" class="product-category">
        <h2>Dressingy</h2>
        <div class="product-grid">
            <div class="card" onclick="addToCart('Kečup', 0.5)">
                
                <h1>Kečup</h1>
                <p class="price">0.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Majonéza', 0.5)">
                
                <h1>Majonéza</h1>
                <p class="price">0.50€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Barbecue', 0.6)">
              
                <h1>Barbecue</h1>
                <p class="price">0.60€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Česnekový dressing', 0.6)">
               
                <h1>Česnekový dressing</h1>
                <p class="price">0.60€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Ranch', 0.6)">
                
              
                <h1>Sriracha</h1>
                <p class="price">0.70€</p>
                <button>Pridať do košíka</button>
            </div>
           
            <div class="card" onclick="addToCart('Jalapeño', 0.7)">
                
                <h1>Jalapeño dresing</h1>
                <p class="price">0.70€</p>
                <button>Pridať do košíka</button>
            </div>
            <div class="card" onclick="addToCart('Ranch', 0.6)">
                
               
            </div>
        </div>
    </div>
    <div id="cart">
      <h2>Košík</h2>
        <ul id="cartItems"></ul>
        <p id="totalPrice">Celková suma: 0.00€</p>
        <button id="checkoutBtn" onclick="openModal()">Zaplatit</button>
    </div>
    <div id="paymentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Spôsob platby</h2>
            <input type="text" value="A2" id="phone" placeholder="Telefónne číslo" hidden>
            <input type="text" value="A2" id="adresa" placeholder="Adresa" hidden>
            <div class="payment-methods">
              <button onclick="submitOrder('nezaplatene')">Potvrdit</button>
                
            </div>
        </div>
    </div>
	

    <script>
	
        let cart = [];
        let total = 0.00;

        function showCategory(category) {
            document.querySelectorAll('.product-category').forEach(function(element) {
                element.style.display = 'none';
            });
            document.getElementById(category).style.display = 'block';
        }

        function addToCart(name, price) {
            cart.push({name: name, price: price});
            total += price;
            updateCart();
        }

        function updateCart() {
            let cartItems = document.getElementById('cartItems');
            cartItems.innerHTML = '';
            cart.forEach(function(item) {
                let li = document.createElement('li');
                li.textContent = item.name + ' - ' + item.price.toFixed(2) + '€';
                cartItems.appendChild(li);
            });
            document.getElementById('totalPrice').textContent = 'Celková suma: ' + total.toFixed(2) + '€';
        }

        function openModal() {
            document.getElementById('paymentModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('paymentModal').style.display = 'none';
        }

        function submitOrder(paymentMethod) {
            let phone = document.getElementById('phone').value;
            if (!phone) {
                alert('Prosím, zadajte telefónne číslo.');
                return;
            }
			let adresa = document.getElementById('adresa').value;
            if (!adresa) {
                alert('Prosím, zadajte adresu');
                return;
            }


            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_order.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert('Objednávka bola úspešne odoslaná!');
                    closeModal();
                    cart = [];
                    total = 0.00;
                    updateCart();
                } else if (xhr.readyState === 4) {
                    alert('Chyba pri ukladaní objednávky.');
                }
            };
            xhr.send(JSON.stringify({
                items: cart.map(item => item.name),
                total: total.toFixed(2),
                paymentMethod: paymentMethod,
                phone: phone,
                adresa: adresa
            }));
        }
    </script>
	<footer>
    <p>&copy; 2024 Denis Varga. All Rights Reserved.</p>
    
    
   
    
</footer>
</body>
</html>
