<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="discription" content="PortfolioEmad">
	<meta name="author" content="Emad MUSTAFA">
	<meta name="keywords" content="HTML,CSS,JavaScript,PHP">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="images/logoportfolio.png" type="image/-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css" />

	<title>Portfolio</title>
</head>

<body>

	<header>

        <nav>
			<div>
				<img class="logop" src="images/logoportfolio.png" alt="logoportfolio" />
			</div>


			<ul class="hideNavbar">
				<li class="nav-links"><a href="#Home">Accueil</a></li>
				<li class="nav-links"><a href="#page-1">Profil</a></li>
				<li class="nav-links"><a href="#page-2">Compétences</a></li>
				<li class="nav-links"><a href="#page-3">Portfolio</a></li>
				<li class="nav-links"><a href="#contact-section">Contact</a></li>
			</ul>
			<button>
				<i class="fas fa-bars"></i>
			</button>
		</nav>
		<section id="Home" class="home-content">
			<div class="home-text">
				<h3></h3>

				<h1>EMAD MUSTAFA <span class="coloredText"> </span></h1>

				<h3 id="target"></h3>

				<button class="btn"><a href="#page-1">QUI SUIS-JE ?</a></button>

			</div>
		</section>
		<div class="cover hidenCover"></div>
	</header>


	<main>
		<section id="page-1" class="page ">
			<div class="container">
				<h3>À Propos</h3>
				<div class="aboutMe">
					<figure>
						<img src="images/Emad.jpg" alt="emad" />
					</figure>
					<article>


						<p>
							Je m’appelle <strong>Emad MUSTAFA</strong> , développeur Web junior.
							le Développement Web un domaine qui m’intéresse depuis de nombreuses années..
							En suivant la formation Bootcamp Développement Web et Applications
							sur Paris . La formation m'ait permis
							d'acquérir des bases solides sur les langages de front-end et back-end
							J'ai collaboré avec d'autres développeurs et développeuses ainsi qu'avec
							desUX-UI Designers.
							Mes différentes expériences m'ont permis d'une part, de développer des
							compétences transversales telles que l'organisation, la motivation,la
							responsabilité et le travail d'équipe .
						</p>

						<a href="images/Emad CV.pdf" class="btn downloadCV" download>
							<span>Télécharger CV</span></a>
					</article>
				</div>
			</div>
		</section>



		<section id="page-2" class="page">
			<div>
				<h3>Compétences</h3">
			</div>
			<div class="container ">

				<div class="row">
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="60"> <span class="percent"></span> </span>
						<h4>HTML5</h4>
						<img src="images/html.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="60"> <span class="percent"></span> </span>
						<h4>CSS3</h4>
						<img src="images/CSS.jpg" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="50"> <span class="percent"></span> </span>
						<h4>BOOTSTRAP</h4>
						<img src="images/bootstrap.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="30"> <span class="percent"></span> </span>
						<h4>JAVASCRIPT</h4>
						<img src="images/JS.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="20"> <span class="percent"></span> </span>
						<h4>REACT</h4>
						<img src="images/REACT.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 compétences"> <span class="chart" data-percent="30"> <span class="percent"></span> </span>
						<h4>MYSQL</h4>
						<img src="images/MYSQL.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="20"> <span class="percent"></span> </span>
						<h4>PHP5</h4>
						<img src="images/PHP.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="20"> <span class="percent"></span> </span>
						<h4>SYMFONY</h4>
						<img src="images/symfony.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6 page-2"> <span class="chart" data-percent="20"> <span class="percent"></span> </span>
						<h4>NODE.JS</h4>
						<img src="images/NODE.png" alt="">
					</div>
				</div>
			</div>
			</div>





		</section>



		<section id="page-3" class="page">
			<div class="container">
				<h3>Projets</h3>
				<ul>
					<li class="project">
						<figure class="project_Image">
							<img src="images/free.png" />
							<div class="project-links">
								<a href="https://www.behance.net/gallery/128096525/Flowbe">
									<i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>

							</div>
						</figure>
						<h4> Application Freelance</h4>


					</li>
					<li class="project">
						<figure class="project_Image">
							<img src="images/photo.jpeg" />
							<div class="project-links">
								<a href="https://emadkud.github.io/Cornfood/"><i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>Projet Cornfood</h4>
					<li class="project">
						<figure class="project_Image">
							<img src="images/To do list.png" />
							<div class="project-links">
								<a href="https://omnivers.github.io/todolist/"><i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>To do list</h4>
					</li>
					<!-- <li class="project">
						<figure class="project_Image">
							<img src="images/tenor.gif" />
							<div class="project-links">
								<a href="https://emadkud.github.io/shifumi/"><i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>Shifumi</h4>
					</li> -->
					<li class="project">
						<figure class="project_Image">
							<img src="images/moovice.png " />
							<div class="project-links">
								<a href="https://moovice1.netlify.app/"><i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>moovice en cours</h4>
					</li>
					 <li class="project">
						<figure class="project_Image">
							<img src="images/memory-game.gif" />
							<div class="project-links">
								<a href="https://singular-marshmallow-57b4e9.netlify.app/"><i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>Jeux de Mémoire</h4>
					</li>
					<li class="project">
						<figure class="project_Image">
							<img src="images/todo-list-in-react.gif" />
							<div class="project-links">
								<a href="https://to-do-list-from-react.netlify.app/"><i class="fas fa-hand-point-up"></i></a>
								<a href="#"><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>To do list react</h4>
					</li>
					<!--<li class="project">
						<figure class="project_Image">
							<img src="images/Feuilles de vigne.jpg" />
							<div class="project-links">
								<a href="http://"><i class="fas fa-hand-point-up"></i></a>

								<a href=""><i class="fas fa-arrow-up"></i></a>
							</div>
						</figure>
						<h4>Projet site restaurant(À VENIR)</h4>
					</li>
				</ul> -->
			</div>
		</section>



		<?php echo $alert; ?>



		<section id="contact-section">
			<div class="contact-section">
					<h2></h2>
				<div class="contact-info">
				
					<div><i class="fas fa-map-marker-alt"></i>PARIS . FRANCE</div>
					<div><i class="fas fa-envelope"></i>basemrf007@gmail.com</div>
					<div><i class="fas fa-phone"></i>+33 6 05 55 26 79</div>
					<div>
						<a href="https://www.linkedin.com/in/emad-mustafa-a30a69188/"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://github.com/Emadkud"><i class="fab fa-github"></i></a>
						<a href="./images/Emad CV.pdf"><i class="fas fa-user-tie"></i></a>
						<a href="https://twitter.com/basemmostafa7"><i class="fab fa-twitter"></i></a>

					</div>

				</div>

				<div class="contact-form">
					
					<form action="" method="POST" autocomplete="on">

						<input type="text" name="name" class="text-box" placeholder=" Nom " required>
						<input type="email" name="email" class="text-box" placeholder=" Email " required>
						<input type="phone" name="phone" class="text-box" placeholder=" Phone  ">
						<input type="subject" name="subject" class="text-box" placeholder=" Objet " required>
						<textarea name="message" id="" cols="30" rows="10" placeholder=" Message"></textarea>
						<input type="submit" name="submit" class="send-btn" value="Envoyer">
						<div id="result"></div>
					</form>
				</div>

			</div>

		</section>

		<footer>
			<div class="copyright">
				<p> Copyright © EMAD MUSTAFA - 2021 </p>
			</div>


		</footer>


	</main>
	<script src="script.js"></script>
	<script type="text/javascript">
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>



</body>

</html>