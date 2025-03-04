
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="matuskocis.sk">
         <title>Benefito</title>
    
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="assets/css/site.min.css">
	<link rel="stylesheet" href="assets/skins/cyan.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="assets/examples/css/pages/register.css">    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic&subset=latin-ext'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,400,500,300italic&subset=latin-ext'>
	
	<script type="text/javascript" src="assets/jsPretty/jsqrscanner.nocache.js"></script>
    
    <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>  
  <style>
.panel-default .panel-heading {
  color: #76838f;
  background-color: #e4eaec;
  margin-top: 10px;
}
  /* Trieda pre animovaný button */
.btn-animated {
    position: relative;
    overflow: hidden;
    color: white;
    z-index: 1;
    border: 2px solid #03a9f4; /* Východisková farba rámika */
    animation: pulse-border 2s infinite; /* Pridanie animácie */
}

/* Definícia animácie pulzovania */
@keyframes pulse-border {
    0% {
        border-color: #03a9f4; /* Štartovacia farba */
        box-shadow: 0 0 5px rgba(3, 169, 244, 0.5);
    }
    50% {
        border-color: #ffeb3b; /* Farba rámika počas pulzu */
        box-shadow: 0 0 15px rgba(255, 235, 59, 0.7);
    }
    100% {
        border-color: #03a9f4; /* Návrat na pôvodnú farbu */
        box-shadow: 0 0 5px rgba(3, 169, 244, 0.5);
    }
}
.custom-button {
 background-color: #0bb2d4;
    color: #000000;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 14px;
    margin-left: auto;
    margin-bottom: auto;
    display: flex
;
   
    }
	strong {
    background-color: #0bb2d470;
    color: black;
}
    button img {
      width: 20px;
      height: 20px;
      margin-right: center;
    }
    button:hover {
      background-color: #e0e0e0;
    }
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
    background-color: #0bb2d4;
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
    border: 1px solid #0bb2d4;
    border-radius: 10px;
}

.modal-content button {
    background-color: #0bb2d4;
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
 .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Štýly pre modálne okno */
        .modal-cart {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        /* Štýly tlačidiel */
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-open {
            background-color: #007bff;
            color: #fff;
        }

        .btn-close {
            background-color: #dc3545;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }
		.panel-default1 {
    background-color: #32de84;
    position: revert;
	position: sticky;
    bottom: 0;
    z-index: 1000;
	
}
	</style>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
	
		<body class="animsition layout-full">
		  <div class="container-fluid">
	  			
			<div class="row">
			  <div class="col-xxl-3 col-lg-4 mx-auto p-0">
				<!-- Example Panel With Heading -->				  
				  						
											<div class="text-center">
							<h3 class="mt-2"><span style="font-weight: 600;">Zákaznícky program</span><br>vo vašej obľúbenej prevádzke!</h3>
						</div>
						<div class="d-flex align-items-center justify-content-center">
							<a class="btn btn-primary btn-lg btn-animated" href="scan/skener.php?sess=4IfIrPJnkUrMkWqrX9d58A%3D%3D&blocek=true#novy_nakup">naskenujte bloček</a></a>
						</div>
												<div class="mt-2">
							<div class="col-11 mx-auto">								
								<div class="text-center pb-2">
								  <i class="fas fa-exclamation-circle" style="font-size: 12px;"></i> Povoľte <strong>prístup ku kamere</strong> vášho telefónu. Bude využitá len na odfotenie vášho bločku.
								</div>								  
							</div>
						</div>
						<h3 class="mt-0 text-center">
						<img src="logo/logo_41-8127.png" style="max-height:150px; max-width:150px;" alt="">
						</h3>
												<div class="col-12">
						  <!-- Example Continuous Accordion -->
						  <div class="example-wrap">
							<div class="example">
							  <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous" aria-multiselectable="true" role="tablist">
							<!-- Nápoje Panel -->
								<div class="panel panel-default ">
								  <div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
									<a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousOne" aria-controls="exampleCollapseContinuousOne" aria-expanded="false">
									  Nápoje</a>
								  </div>
								  <div class="panel-collapse collapse" id="exampleCollapseContinuousOne" aria-labelledby="exampleHeadingContinuousOne" role="tabpanel">
									<div class="panel-body">
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Kola</strong> 2,50€</p>
									<button class="custom-button" onclick="addToCart('Kola', 2.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Voda</strong> 0€</p>
									<button class="custom-button" onclick="addToCart('Voda', 0)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Pivo</strong> 2,50€</p>
									<button class="custom-button"onclick="addToCart('Pivo', 2.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px; ">
									<p><strong>Víno</strong> 2€</p>
									<button class="custom-button"onclick="addToCart('Víno', 2)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Vinea</strong> 3€</p>
									<button class="custom-button"onclick="addToCart('VInea', 3)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>

									  
									</div>
								  </div>
								</div>
								
								<!-- Hlavné jedla Panel -->
								<div class="panel panel-default">
								  <div class="panel-heading" id="exampleHeadingContinuousTwo" role="tab">
									<a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousTwo" aria-controls="exampleCollapseContinuousTwo" aria-expanded="false">
									  Hlavné jedlá</a>
								  </div>
								  <div class="panel-collapse collapse" id="exampleCollapseContinuousTwo" aria-labelledby="exampleHeadingContinuousTwo" role="tabpanel">
									<div class="panel-body">
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Steak</strong> 10€</p>
									<button class="custom-button" class="custom-button" onclick="addToCart('Steak', 10)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Teriaky</strong> 7€</p>
									<button class="custom-button" class="custom-button" onclick="addToCart('Teriaky', 7)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Riža s mesom</strong> 6,50€</p>
									<button class="custom-button" class="custom-button" onclick="addToCart('Riža s mesom', 6.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px; ">
									<p><strong>Kebab</strong> 5,50€</p>
									<button class="custom-button" class="custom-button" onclick="addToCart('Kebab', 5.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Pizza</strong> 7€</p>
									<button class="custom-button" onclick="addToCart('Pizza', 7)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>									  
									  </div>
								  </div>
								  
								</div>
				
								<!-- Hlavné jedla Panel -->
								<div class="panel panel-default">
								  <div class="panel-heading" id="exampleHeadingContinuousThree" role="tab">
									<a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousThree" aria-controls="exampleCollapseContinuousThree" aria-expanded="false">
									  Polievky</a>
								  </div>
								  <div class="panel-collapse collapse" id="exampleCollapseContinuousThree" aria-labelledby="exampleHeadingContinuousThree" role="tabpanel">
									<div class="panel-body">
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Cesnačka</strong> 5€</p>
									<button class="custom-button"onclick="addToCart('Cesnačka', 5)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Paradajková Polievka</strong> 4,50€</p>
									<button class="custom-button" onclick="addToCart('Paradajková Polievka', 4.50)" >  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Kurací Vívar</strong> 5,50€</p>
									<button class="custom-button"onclick="addToCart('Kurací Vívar', 5.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
																		  
									  </div>
								  </div>
								  
								</div>
								
								
								
								<div class="panel panel-default">
								  <div class="panel-heading" id="exampleHeadingContinuousFour" role="tab">
									<a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousFour" aria-controls="exampleCollapseContinuousFour" aria-expanded="false">
									  Zákusky</a>
								  </div>
								  <div class="panel-collapse collapse" id="exampleCollapseContinuousFour" aria-labelledby="exampleHeadingContinuousFour" role="tabpanel">
									<div class="panel-body">
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Jablkový štrúdl</strong> 4,50 €</p>
									<button class="custom-button" onclick="addToCart('Jablkový štrúdl', 4.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Ovocná panna</strong> 5,00€</p>
									<button class="custom-button" onclick="addToCart('Ovocná panna', 5.0)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Malinový cheesecake</strong> 4,90 €</p>
									<button class="custom-button" onclick="addToCart('Malinový cheesecake', 4.90)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon">  </button>
									</div>
									<div style="display: flex; align-items: center; gap: 10px; ">
									<p><strong>Čokoládový fondán</strong>6,90 €</p>
									<button class="custom-button" onclick="addToCart('Čokoládový fondán', 6.90)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon" >  </button>
									</div>							
									<div style="display: flex; align-items: center; gap: 10px;">
									<p><strong>Tiramisu</strong> 5,50 €</p>
									<button class="custom-button" onclick="addToCart('Tiramisu', 5.50)">  <img src="https://denisvarga.eu/remark/cart-outline.svg" alt="Cart Icon" > </button>
									</div>									  
									  </div>
								  </div>
								  
								</div>
								<div class="panel panel-default1 " >
								  <div class="panel-heading" id="exampleHeadingContinuousFive" role="tab">
									<a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousFive" aria-controls="exampleCollapseContinuousFive" aria-expanded="false">
									 Košík <p id="totalPrice1"> 0.00€</p>
									 </a>
								  </div>
								  <div class="panel-collapse collapse" id="exampleCollapseContinuousFive" aria-labelledby="exampleHeadingContinuousFive" role="tabpanel">
									<div class="panel-body">
									
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
            <input type="text" id="phone" placeholder="Telefónne číslo" required>
            <input type="text" id="adresa" placeholder="Adresa" required>
            <div class="payment-methods">
                <button onclick="submitOrder('nezaplatene')">Potvrdit</button>
                
            </div>
        </div>
    </div>
									  
									</div>
								  </div>
								</div>
							  </div>
							  
							</div>
						  </div>
						  <!-- End Example Continuous Accordion -->
						</div>

						
						
						
				<!-- End Example Panel With Heading -->

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
    cart.forEach(function(item, index) {
        let li = document.createElement('li');

        // Text položky
        li.textContent = item.name + ' - ' + item.price.toFixed(2) + '€';

        // Tlačidlo na odstránenie
        let removeButton = document.createElement('button');
        removeButton.textContent = 'Odstrániť';
        removeButton.style.marginLeft = '10px'; // trochu odsadenia
        removeButton.onclick = function() {
            removeFromCart(index);
        };

        // Pridanie tlačidla do položky
        li.appendChild(removeButton);
        cartItems.appendChild(li);
    });

    // Aktualizácia celkovej sumy
    document.getElementById('totalPrice').textContent = 'Celková suma: ' + total.toFixed(2) + '€';
}

			 document.getElementById('totalPrice1').textContent =  total.toFixed(2) + '€';
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
                adresa: adresa,
            }));
        }
		 // Otvorenie modálneho okna
    document.querySelectorAll('.btn-open').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');
            document.getElementById(targetId).style.display = 'block';
        });
    });

    // Zatvorenie modálneho okna
    document.querySelectorAll('.btn-close').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-close');
            document.getElementById(targetId).style.display = 'none';
        });
    });
    </script>

    <!-- Core  -->
    <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="global/vendor/jquery/jquery.js"></script>
    <script src="global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="global/vendor/bootstrap/bootstrap.js"></script>
    <script src="global/vendor/animsition/animsition.js"></script>
    <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="global/vendor/switchery/switchery.js"></script>
    <script src="global/vendor/intro-js/intro.js"></script>
    <script src="global/vendor/screenfull/screenfull.js"></script>
    <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="global/js/Component.js"></script>
    <script src="global/js/Plugin.js"></script>
    <script src="global/js/Base.js"></script>
    <script src="global/js/Config.js"></script>
    
    <script src="assets/js/Section/Menubar.js"></script>
    <script src="assets/js/Section/GridMenu.js"></script>
    <script src="assets/js/Section/Sidebar.js"></script>
    <script src="assets/js/Section/PageAside.js"></script>
    <script src="assets/js/Plugin/menu.js"></script>
		    
    <script src="global/js/config/colors.js"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="assets/js/Site.js"></script>
    <script src="global/js/Plugin/asscrollable.js"></script>
    <script src="global/js/Plugin/slidepanel.js"></script>
    <script src="global/js/Plugin/switchery.js"></script>
    <script src="global/js/Plugin/jquery-placeholder.js"></script>
    <script src="global/js/Plugin/animate-list.js"></script>
	<script src="global/vendor/formatter/jquery.formatter.js"></script>
	<script src="global/js/Plugin/formatter.js"></script>
    <script type="text/javascript">	
	
(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/forms/validation', ['jquery', 'Site'], factory);
  } else if (typeof exports !== "undefined") {
    factory(require('jquery'), require('Site'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery, global.Site);
    global.formsValidation = mod.exports;
  }
})(this, function (_jquery, _Site) {
  'use strict';

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  (0, _jquery2.default)(document).ready(function ($$$1) {
    (0, _Site.run)();
  });
  
});     

	 (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
	  
	  
	  
	  	  </script> 	  
	
  </body>
  </html>
