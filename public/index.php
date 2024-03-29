<!doctype html>
<html lang="fr">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- favicon -->
		 <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
		<!-- Our custom CSS -->
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/nav.css">
		<link rel="stylesheet" href="css/about.css">
		<link rel="stylesheet" href="css/skills.css">
		<link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/footer.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">

		<title>Camille Rouaux - Portfolio</title>
	</head>

  <body>
		<div class="burger">
			<span></span>
		</div>

		<a href="#"><img  class="logo" src="image/logo.png" alt="Logo"></a>
		
		<nav class="navbar">
			<div class="nav-links">
				<ul class="main">			
					<li><a href="#about_section">About</a></li>
					<li><a href="#skills_section">Skills</a></li>
					<li><a href="#projects_section">Projects</a></li>
					<!-- <li><a href="#">Contact</a></li> -->
				</ul>
			</div>	
		</nav>

		<div class="overlay"></div>

		<section>
			<canvas id="space"></canvas>
			<!-- {# <img src="{{ asset('image/stars.png')}}" id="stars" alt="Stars"> #} -->
			<img src="image/mountains_behind.png" id="mountains_behind" alt="mountains behind">
			<img src="image/mountains_front.png" id="mountains_front" alt="mountains front">
		</section>

		<div class="main_section">
			
			<div class="about_section" id="about_section">
				<!-- {# <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

				<dotlottie-player class="svg" src="https://lottie.host/be0a8ac7-824c-430c-adec-de159a745ca8/00nNmb5WkL.json" background="transparent" speed="1" style="width: 100%; " loop autoplay></dotlottie-player> #} -->

				<div class="prez">
					<div class="titre">
						<h5>Hey there ! I'm -</h5>
						<h2>Camille Rouaux</h2>
						<p>I'm a <b>Backend Developper</b>, and i like to do some shenanigans with CSS and other Front features.</p>
					</div>				
					<img src="image/picture.png" class="avatar" alt="Photo de Camille Rouaux">	
				</div>		
				<div class="allButtons">
					<div class="socialButtons">
						<a href="https://github.com/CamilleRouaux" class="git" target="_blank">	
							<img src="image/github.png">
						</a>
						<a href="https://www.linkedin.com/in/camille-rouaux/" class="linkedin" target="_blank">
							<img src="image/linkedin.png">
						</a>
						<button class="mail" value="rouaux.camille@hotmail.fr">
							<img src="image/mail.png">
						</button>
					</div>
					<a href="doc/CV_Rouaux_Camille.pdf" download="CV_Rouaux_Camille.pdf" class="cv"><img src="image/download.png" alt=""> Mon CV</a>
				</div>
			</div>

			<!-- {# <div class="scroll_arrow">
				<a href="#skills_section" aria-label="Faire défiler vers le bas jusqu'à la section Skills">
				<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

				<dotlottie-player src="https://lottie.host/01d7db93-93fe-426f-af86-10ffbf74f9c8/3qO6jI0mGQ.json" background="transparent" speed="1" style="width: 60px; height: 60px;" loop autoplay></dotlottie-player>
				</a>
			</div> #} -->
			<div class="purple_background_section">
				<div class="skills_section" id="skills_section">
					<h2>Skills</h2>
					<div class="all_skills">
						<div class="front_skills" id="skills_width">
							<h3>Front-end</h3>
							<ul class="skill_list">
							<span>
								<li class="skill">
									<span class="skill_icon"><img src="image/js.png" alt="logo JavaScript"></span>
									<span class="skill_text">Javascript</span>
								</li>
							</span>
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/css.png" alt="logo CSS3"></span>
										<span class="skill_text">CSS3</span>
									</li>
								</span>
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/bootstrap.png" alt="logo Bootstrap"></span>
										<span class="skill_text">Bootstrap</span>
									</li>
								</span>
							</ul>
							
						</div>

						<div class="back_skills" id="skills_width">
							<h3>Back-end</h3>
							<ul class="skill_list">
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/php.png" alt="logo Php" id="php_logo"></span>
										<span class="skill_text">PHP</span>
									</li>
								</span>
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/symfony.png" alt="logo Symfony" id="_logo"></span>
										<span class="skill_text">Symfony</span>
									</li>
								</span>
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/laravel.png" alt="logo Laravel"></span>
										<span class="skill_text">Laravel</span>
									</li>
								</span>
							</ul>
						</div>

						<div class="other_skills" id="skills_width">
							<h3>Other</h3>
							<ul class="skill_list">
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/github.png" alt="logo GitHub"></span>
										<span class="skill_text">GitHub</span>
									</li>
								</span>
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/git.png" alt="logo Node.js"></span>
										<span class="skill_text">Git</span>
									</li>
								</span>
							</ul>	
						</div>

						<div class="loading_skills" id="skills_width">
							<h3>Loading ..</h3>
							<ul class="skill_list">
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/react.png" alt="logo React"></span>
										<span class="skill_text">React</span>
									</li>
								</span>
								<span>
									<li class="skill">
										<span class="skill_icon"><img src="image/node.png" alt="logo Node.js"></span>
										<span class="skill_text">Node.js</span>
									</li>
								</span>
							</ul>	
						</div>

					</div>
				</div>

				<div class="projects_section" id="projects_section" >
					<h2>Projects </h2>
					<div class="projects_container">
						<div class="project_card">
							<div class="project_card_img">
								<img src="image/Portfolio.png" alt="Background mon Portfolio ">
							</div>
							<div class="project_card_body">
								<h3 class="project_card_title">Mon Portfolio</h3>
								<p class="project_card_description">Projet personnel</p>
								<div class="project_card_tags">
									<span class="project_card_element">Symfony</span>
									<span class="project_card_element">CSS3</span>
									<span class="project_card_element">JavaScript</span>
								</div>
							</div>
              <div class="project_card_overlay">
                <a href="https://github.com/CamilleRouaux/Portfolio" class="project_card_button" target="_blank">Voir</a>
              </div>
						</div>
						<div class="project_card">
							<div class="project_card_img">
								<img src="image/LOTR.png" alt="Background Image of The Lord of the Rings Encyclopædia ">
							</div>
							<div class="project_card_body">
								<h3 class="project_card_title">The Lord of the Rings Encyclopædia</h3>
								<p class="project_card_description_lotr">Projet personnel en cours de développement</p>
								<div class="project_card_tags">
									<span class="project_card_element">Symfony</span>
									<span class="project_card_element">React</span>
									<span class="project_card_element">Redux</span>
									<span class="project_card_element">API</span>
								</div>
							</div>
              <div class="project_card_overlay">
                <a href="https://github.com/CamilleRouaux/LOTR-Encyclopedia" class="project_card_button" target="_blank">Voir</a>
              </div>
						</div>
						<div class="project_card">
							<div class="project_card_img">
								<img src="image/hortus.png" alt="Hortus Plantae Floresque">
							</div>
							<div class="project_card_body">
								<h3 class="project_card_title">Hortus Plantae Floresque</h3>
								<p class="project_card_description">Projet de fin d'étude réalise en équipe.</p>
								<div class="project_card_tags">
									<span class="project_card_element">Symfony</span>
									<span class="project_card_element">CSS3</span>
									<span class="project_card_element">Bootstrap</span>
									<span class="project_card_element">JavaScript</span>
								</div>
							</div>
              <div class="project_card_overlay">
                <a href="https://github.com/CamilleRouaux/Hortus_Plantae_Floresque" class="project_card_button" target="_blank">Voir</a>
              </div>
						</div>
					</div>
				</div>

        <footer>
          <div class="footerSocialButtons">
            <a href="https://github.com/CamilleRouaux" class="git_footer" target="_blank">	
              <img src="image/github.png">
            </a>
            <a href="https://www.linkedin.com/in/camille-rouaux/" class="linkedin_footer" target="_blank">
              <img src="image/linkedin.png">
            </a>
            <button class="mail_footer" value="rouaux.camille@hotmail.fr">
              <img src="image/mail.png">
            </button>
          </div>
          <p>© 2024 Camille ROUAUX - Tous droits réservés.</p>
        </footer>

			</div>

		</div>	  
   
    
  </body>

		<script src="js/twinkling_stars.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/burger.js"></script>
		<script src="js/mail_to_clipboard.js"></script>

</html>
