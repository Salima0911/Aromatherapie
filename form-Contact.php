<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Aromatherapie</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<link rel="stylesheet" href="css/Style.css" />
		<link rel="stylesheet" href="css/mobile.css" />
		<!-- <link rel="stylesheet" href="css/form.css" /> -->
		<link rel="stylesheet" href="css/inscription.css" />

		<link rel="stylesheet" href="css/form-contact.css" />

		<!-- <link rel="stylesheet" href="css/landscape.css" /> -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<header>
			<menu>
				<div class="barre">
					<div class="search-box">
						<input
							type="text"
							name=""
							class="search-txt"
							placeholder="Recherche par produit"
						/>
						<a class="search-btn" href="#">
							<i class="fa-solid fa-magnifying-glass"></i>
						</a>
					</div>
					<div class="logo">
						<img src="image/Logo.png" alt="logo" />
					</div>

					<ul class="main-navbar">
						<li><a href="#">S'inscrire</a></li>
						<li><a href="#">Se connecter</a></li>
					</ul>
				</div>
			</menu>
			<nav>
				<ul>
					<li><a href="#">Bien-être</a></li>
					<li><a href="#"> Beauté</a></li>
					<li><a href="#"> Santé</a></li>
					<li><a href="#">Nos produits</a></li>
					<li><a href="#">Nos missions</a></li>
					<li><a href="#">Aromathérapie</a></li>
				</ul>
			</nav>
		</header>

		<main>
			<div id="contact">
				<div class="contact">
					<h1>Contactez-nous</h1>
					<p>
						Nous avons à coeur de vous offrir la meilleure expérience possible
						sur notre
					</p>
					<br />
					<p>
						Si vous rencontrez des difficultés avec votre compte ou si vous avez
						des questions à propos de notre plateforme, n'hésitez pas à nous
						contacte
					</p>
					<br />
					<div class="img-contact">
						<img
							src="./image/background.png"
							alt=""
							width="100%"
							height="300px"
							border-radius="20px"
						/>
					</div>
				</div>
				<div class="wrapper">
					<h1>Formulaire de contact</h1>

					<form action="" id="form">
						<div class="form-control">
							<input type="text" name="name" placeholder="Nom Prenom" />
						</div>
						<div class="form-control">
							<input type="email" name="email" placeholder="E-mail" />
						</div>
						<div class="form-control">
							<input type="text" name="name" placeholder="Objet" />
						</div>
						<div class="form-control">
							<textarea>Nom</textarea>
						</div>
						<button>Envoyer</button>
					</form>
				</div>
			</div>
		</main>

		<footer>
			<div class="qui-somme-nous">
				<h4>Qui nous sommes</h4>
				<ul class="footer-menu">
					<li><a href="#"> Nos engagements </a></li>
					<li><a href="#">+33 67 29 94 56 </a></li>
					<li><a href="#">formulaire de contact</a></li>
				</ul>
				<div class="iocn-reseau-sociciaux">
					<a href="#" class="icon facebook"></a>
					<a href="#" class="icon youtube"></a>
					<a href="#" class="icon instagram"></a>
					<a href="#" class="icon discord"></a>
					<a href="#" class="icon linkedin"></a>
				</div>
			</div>
			<div class="reglement">
				<h4>Réglement</h4>
				<ul class="footer-menu">
					<li><a href="#">Conditions générales de vente </a></li>
					<li><a href="#">Mentions légales </a></li>
					<li><a href="#">Politique de confidentialité</a></li>
				</ul>
			</div>

			<div class="iformations">
				<h4>Informations</h4>
				<ul class="footer-menu">
					<li><a href="#">Informations </a></li>
					<li><a href="#">Aromathérapie </a></li>
					<li><a href="#">F.A.Q.</a></li>
				</ul>
			</div>
			<div class="logo">
				<img src="./image/Logo.png" alt="" />
			</div>
		</footer>
	</body>
</html>
