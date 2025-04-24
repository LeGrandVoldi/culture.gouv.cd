<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ministère de la Culture, Arts et Patrimoine RDC</title>
    <meta property="og:title" content="Ministère de la Culture, Arts et Patrimoine RDC" />
    <meta property="og:url" content="https://culture.gouv.cd" />
    <meta property="og:image" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiqhFEMy2vsw61WjJjrt4ZFItf_xeN885PjA&s" />
    <!-- Type du contenu (page web, article, vidéo, etc.) -->
    <meta property="og:type" content="website" />
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
	<!-- plugins css -->
	<link rel="stylesheet" type="text/css" href={{asset("assets/vendor/reey-font/stylesheet.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("assets/vendor/bootstrap/bootstrap.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("assets/vendor/font-awesome/css/all.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("assets/vendor/flaticon/css/flaticon_towngov.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("assets/vendor/owl-carousel/owl.carousel.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}}>
	<link rel="stylesheet" href={{asset("assets/vendor/youtube-popup/youtube-popup.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("assets/css/style.css")}}>
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href={{asset("assets/image/favicon/apple-touch-icon.png")}}>
	<link rel="icon" type="image/png" sizes="32x32" href={{asset("assets/image/favicon/favicon-32x32.png")}}>
	<link rel="icon" type="image/png" sizes="16x16" href={{asset("assets/image/favicon/favicon-16x16.png")}}>
    <script>
    // Fonction pour afficher le pop-up après un délai
    window.onload = function() {
        setTimeout(function() {
            document.getElementById("popup").style.display = "flex";
        }, 2000);  // Le pop-up s'affiche après 2 secondes
    };

    // Fonction pour fermer le pop-up
    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }

    // Gestion du formulaire
    document.getElementById("emailForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const email = document.getElementById("email").value;
        alert("Merci de vous être enregistré avec " + email);
        closePopup();
    });

    </script>
    <style>
        .popup {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .close-btn {
            position: fixed;
            top: 20px;
            right: 30px;
            font-size: 35px;
            font-weight: bold;
            color: #ffffff;
            background-color: rgba(255, 0, 0, 0.8);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
            z-index: 1001;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .close-btn:hover {
            background-color: #cc0000;
            transform: scale(1.1);
        }

        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            width: 450px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        .popup-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .popup-content h2 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }

        .popup-content p {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        .popup-content a.btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .popup-content a.btn-primary:hover {
            background-color: #4cae4c;
        }
    </style>

</head>
<!-- Contenu du site -->
<div id="popup" class="popup">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <div class="popup-content">
        <img src="https://civility.co/wp-content/uploads/2023/06/2023-06-13_Post_What-You-Really-Need-to-Know-About-Consent-Agendas-1024x393.jpg" alt="Image culturelle RDC">
        <h2>Inscrivez-vous à l'Agenda Culturel Annuel de la RDC</h2>
        <p>
            Cliquez ci-dessous pour l'ajouter à votre calendrier et recevoir un rappel.
        </p>
        <a href="/admin" target="_blank" class="btn btn-primary">
            Ajouter à mon calendrier
        </a>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById('popup').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    window.onload = function () {
        setTimeout(showPopup, 2000);
    };
</script>
<div id="pre-loader">
    <div id="loader-logo"></div><!-- loader-logo -->
    <div id="loader-circle"></div><!-- loader-circle -->
    <div class="loader-section section-left"></div><!-- loader-section -->
    <div class="loader-section section-right"></div><!-- loader-section -->
</div><!-- pre-loader -->
<header class="header header-two">
	<div class="topbar-one">
		<div class="topbar-one-left">
			<div class="menu-logo">
				<a href="index.html"><img src={{asset("assets/image/logomin.png")}} width="160" alt="img-27"></a>
			</div><!-- menu-logo -->
		</div><!-- topbar-one-left -->
		<div class="container">
			<div class="topbar-one-middle">
				<div class="topbar-info">
					<ul>
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-envelope"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<a href="mailto:info@culture.gouv.cd">info@culture.gouv.cd</a>
							</div><!-- topbar-text -->
						</li><!-- li -->

					</ul><!-- ul -->
				</div><!--topbar-info-->
				<div class="topbar-right">
					<ul>
						<li>Adresse : Av. Boulevard du 30 juin n°154, BP 3164 et 3131 Kinshasa/Gombe</li>

					</ul><!-- ul -->
				</div><!--topbar-right-->
			</div><!--topbar-one-middle-->
			<div class="main-menu menu-two sticky-header">
				<div class="main-menu-one-inner">
					<div class="main-menu-left">
						<div class="navigation">
							<ul class="main-menu-list list-unstyled">
								<li class="active">
									<a href="index.html">Acceuil</a>
								</li><!-- has-dropdown -->
								<li class="has-dropdown">
									<a href="#">Le Ministère</a>
									<ul class="list-unstyled">
										<li><a href="min.html">La Ministre</a></li>
										<li><a href="cabinet.html">Le Cabinet</a>
										<li><a href="secretariat.html">Le Secretariat Général</a></li>
										<li><a href="entites.html">Les Entités sous tutelle</a></li>
										<!--<li><a href="#">Services spécialisés</a></li>-->
									</ul><!-- list-unstyled -->
								</li><!-- has-dropdown -->
								<li>
									<a href="doc.html">Culture 360</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="discover.html">Redécouvrir la culture</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="actu.html">Actualités</a>
								</li><!--has-dropdown-->
								<li>
									<a href="contact.html">Contact</a>
								</li><!-- li -->
							</ul><!-- main-menu-list -->
						</div><!-- navigation -->
					</div><!-- main-menu-left -->
					<div class="main-menu-right">
						<div class="mobile-menu-button mobile-nav-toggler">
							<span></span>
							<span></span>
							<span></span>
						</div><!-- mobile-menu-button -->

					</div><!-- main-menu-right -->
				</div><!-- main-menu-one-inner -->
			</div><!-- main-menu menu-two -->
		</div><!-- container -->
		<div class="topbar-one-button">
			<a href="https://docs.google.com/forms/d/1bqQszDbQtawjOU6oF8ynovgLKFU74TAqfbVx9b9Ll34/edit" class="btn btn-primary">S'enregistrer</a>
		</div><!-- topbar-one-button -->
	</div><!-- topbar-one -->
</header><!--header-->
<div class="page-wrapper">
	<section class="main-slider main-slider-two">
		<div class="main-slider-two-swiper owl-carousel owl-theme">
			<div class="item">
				<div class="item-slider-bg" style="background-image: url(assets/image/bg/foto1.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-12">
							<div class="slider-content-two text-center">
								<div class="slider-tagline-two">Ministère de la culture, arts et partimoine</div>
								<h1 class="section-title">Célébrons la culture : <br><span style="font-size: 30px;">Diversité, Inclusion, Créativité et Mémoire Collective</span></h1>
							</div><!-- slider-content-two -->
						</div><!-- col-12 col-md-12 col-lg-12 -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!--item-->
			<div class="item">
				<div class="item-slider-bg" style="background-image: url(assets/image/bg/foto2.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-12">
							<div class="slider-content-two text-center">
								<div class="slider-tagline-two">Ministère de la culture, arts et partimoine</div>
								<h1 class="section-title">Célébrons la culture : <br><span style="font-size: 30px;">Diversité, Inclusion, Créativité et Mémoire Collective</span></h1>
							</div><!-- slider-content-two -->
						</div><!-- col-12 col-md-12 col-lg-12 -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!--item-->
		</div><!-- main-slider-two-swiper -->
	</section><!--main-slider-->
	<section class="service-two-section">
		<div class="container">
			<div class="row row-gutter-y-40">
                                <div class="col-12 col-lg-4 col-xl-4">
					<div class="service-two-card">
						<div class="service-two-imgbox">
							<div class="service-two-image">
								<img src="assets/image/gallery/prio-02.png" class="img-fluid" alt="img-29">
								<a href="prior.html"></a>
							</div><!-- service-two-image -->
						</div><!-- service-two-imgbox -->
						<div class="service-two-card-content">
							<h4 style="color:#9f6e26;">Priorités du Gouvernement</h4>
							<p>Les priorités du Ministère suivent les 7 actions culturelles du Programme gouvernemental.</p>
							<a href="prior.html">
								<i class="fa-solid fa-arrow-right-long"></i>
								<span>Lire Plus</span>
							</a>
						</div><!--service-two-card-content-->
					</div><!--service-two-card-->
				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="service-two-card">
						<div class="service-two-imgbox">
							<div class="service-two-image">
								<img src="assets/image/divers.png" class="img-fluid" alt="img-28">
								<a href="discover.html"></a>
							</div><!-- service-two-image -->
						</div><!-- service-two-imgbox -->
						<div class="service-two-card-content">
							<h4 style="color:#9f6e26;">Guide Culturel de la RDC</h4>
							<p>Découvrez les trésors culturels de la République Démocratique du Congo, des sites historiques aux festivals vibrants.</p>
							<a href="discover.html">
								<i class="fa-solid fa-arrow-right-long"></i>
								<span>Lire plus</span>
							</a>
						</div><!--service-two-card-content-->
					</div><!--service-two-card-->
				</div><!--col-12 col-lg-4 col-xl-4-->

				<div class="col-12 col-lg-4 col-xl-4">
					<div class="service-link-box">
						<h4 class="section-title">Services <br>Culturels</h4>
						<ul>
							<li><a href="/admin">Inscription à l'agenda culturel<i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="/voir--agenda" target="_blank">Voir l'agenda culturel<i class="fa-solid fa-chevron-right"></i></a></li>
							<li><a href="https://enregistrement.capcongo.online/">S'identifier en tant qu'artiste ou opérateur<i class="fa-solid fa-chevron-right"></i></a></li>
							<li><a href="https://imnc.online">Visiter le Musée National<i class="fa-solid fa-chevron-right"></i></a></li>
							<li><a href="https://fpc.cd">Demander un accompagnement au FPC<i class="fa-solid fa-chevron-right"></i></a></li>
							<!--<li><a href="contact.html">Obtenir des informations au secretariat général<i class="fa-solid fa-chevron-right"></i></a></li>-->
							<!--<li><a href="contact.html">Postuler pour une subvention culturelle<i class="fa-solid fa-chevron-right"></i></a></li>-->

						</ul><!-- ul -->
					</div><!--service-link-box-->
				</div><!--col-12 col-lg-4 col-xl-4-->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- service-two-section -->

	<section class="cta-three">
		<div class="cta-three-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cta-three-content text-center">

							<h2 class="section-title text-white">Je suis artiste, <br>Je m'identifie,<br><span style="font-size:px;">J'invite chacun d'entre vous.</span></h2>
							 <a href="https://enregistrement.capcongo.online/" class="btn btn-primary">S'identifier </a>
						</div><!-- cta-three-content -->
					</div><!-- col-lg-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!--cta-three-inner-->
	</section><!--cta-three-->
	<!--
<section class="event-two-section">
	<div class="container-fluid">
		<div class="row row-gutter-y-60">
			<div class="col-xxl-4 col-xl-6">
				<div class="event-two-card">
					<div class="event-two-card-image">
						<div class="event-two-card-image-inner">
							<a href="#"><img src="assets/image/event/event-1.png" class="img-fluid" alt="img-34"></a>
							<div class="event-two-card-meta">
								<div class="event-two-meta-number">
									<span>17</span>
								</div>
								<div class="event-two-meta-date">
									<span>Août 2024</span>
								</div>
							</div>
						</div>
					</div>
					<div class="event-two-card-content">
						<div class="event-card-info">
							<ul class="list-unstyled">
								<li>
									<i class="fa-solid fa-clock"></i>
									<span>18:00 - 20:00</span>
								</li>
								<li>
									<i class="fa-sharp fa-solid fa-location-pin"></i>
									<span>restaurant Le Dojo</span>
								</li>
							</ul>
						</div>
						<div class="event-two-card-title">
							<h4><a href="#">Festival International de Cinéma de Kinshasa.</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-xl-6">
				<div class="event-two-card">
					<div class="event-two-card-image">
						<div class="event-two-card-image-inner">
							<a href="#"><img src="assets/image/event/event-2.png" class="img-fluid" alt="img-35"></a>
							<div class="event-two-card-meta">
								<div class="event-two-meta-number">
									<span>18</span>
								</div>
								<div class="event-two-meta-date">
									<span>Août 2024</span>
								</div>
							</div>
						</div>
					</div>
					<div class="event-two-card-content">
						<div class="event-card-info">
							<ul class="list-unstyled">
								<li>
									<i class="fa-solid fa-clock"></i>
									<span>14:00 - 00:00</span>
								</li>
								<li>
									<i class="fa-sharp fa-solid fa-location-pin"></i>
									<span>Espace Food Arena</span>
								</li>
							</ul>
						</div>
						<div class="event-two-card-title">
							<h4><a href="#">Festival Congo Food Week contre la faim en RDC</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-xl-6">
				<div class="event-two-card">
					<div class="event-two-card-image">
						<div class="event-two-card-image-inner">
							<a href="#"><img src="assets/image/event/event-3.png" class="img-fluid" alt="img-36"></a>
							<div class="event-two-card-meta">
								<div class="event-two-meta-number">
									<span>04</span>
								</div>
								<div class="event-two-meta-date">
									<span>Août 2024</span>
								</div>
							</div>
						</div>
					</div>
					<div class="event-two-card-content">
						<div class="event-card-info">
							<ul class="list-unstyled">
								<li>
									<i class="fa-solid fa-clock"></i>
									<span>10:00 - 20:00</span>
								</li>
								<li>
									<i class="fa-sharp fa-solid fa-location-pin"></i>
									<span>Musée National</span>
								</li>
							</ul>
						</div>
						<div class="event-two-card-title">
							<h4><a href="#">Fashion Mood DRC, Au Musée National</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->

	<section class="department-two-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="department-two-box">
						<div class="section-title-box text-center">
							<div class="section-tagline">Les diverses entités du Ministère</div>
							<h2 class="section-title">Découvrez les trois principaux<br>organismes</h2>
						</div><!-- section-title-box -->
					</div><!--department-two-box-->
				</div><!--col-12 col-lg-12-->
				<div class="col-12 col-lg-4">
					<div class="department-two-card">
						<div class="department-two-imgbox">
							<div class="department-two-img">

								<a href="department-details.html"></a>
							</div><!-- department-two-img -->
							<!-- department-two-img-icon -->
						</div><!-- department-two-imgbox -->
						<div class="department-two-content">
							<h4><a href="cabinet.html">Le Cabinet du Ministre</a></h4>
							<p>Le Cabinet du Ministre est l'organe clé qui assiste le Ministre dans l’élaboration et la mise en œuvre des politiques culturelles. 							</p>
							<div class="department-two-button">
								<a href="cabinet.html"><i class="fa-solid fa-arrow-right-long"></i>
								<span>Read More</span>	</a>
							</div><!-- department-two-button -->
						</div><!-- department-two-content -->
					</div><!--department-two-card-->
				</div><!-- col-12 col-lg-4 -->
				<div class="col-12 col-lg-4">
					<div class="department-two-card">
						<div class="department-two-imgbox">
							<div class="department-two-img">

								<a href="department-details.html"></a>
							</div><!-- department-two-img -->
							<!-- department-two-img-icon -->
						</div><!-- department-two-imgbox -->
						<div class="department-two-content">
							<h4><a href="secretariat.html">Le Secrétariat Général </a></h4>
							<p>Le Secrétariat Général assure la continuité des services administratifs et la bonne organisation du ministère.							</p>
						<div class="department-two-button">
							<a href="secretariat.html"><i class="fa-solid fa-arrow-right-long"></i><span>Read More</span></a>
						</div><!-- department-two-button -->
					</div><!-- department-two-content -->
				</div><!--department-two-card-->
				</div><!-- col-12 col-lg-4 -->
				<div class="col-12 col-lg-4">
					<div class="department-two-card">
						<div class="department-two-imgbox">
							<div class="department-two-img">

								<a href="department-details.html"></a>
							</div><!-- department-two-img -->
							<!-- department-two-img-icon -->
						</div><!-- department-two-imgbox -->
						<div class="department-two-content">
							<h4><a href="entites.html">Entités sous tutelle</a></h4>
							<p>Englobent plusieurs institutions culturelles et artistiques essentielles au développement de la culture en RDC.</p>
							<div class="department-two-button">
								<a href="entites.html"><i class="fa-solid fa-arrow-right-long"></i><span>Read More</span></a>
							</div><!-- department-two-button -->
						</div><!-- department-two-content -->
					</div><!--department-two-card-->
				</div><!-- col-12 col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--department-two-section-->
	<section class="team-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg-6 col-xl-6 text-center">
					<div class="team-inner">
						<div class="section-title-box">
							<div class="section-tagline">Le cabinet</div>
							<h2 class="section-title">Rencontrez les membres de notre cabinet</h2>
						</div><!-- section-title-box -->
					</div><!--team-inner-->
				</div><!--col-12 col-md-12 col-lg-6 col-xl-6-->
			</div><!-- row -->
			<div class="row row-gutter-y-30 justify-content-center">
				<div class="col-12 col-md-6 col-xl-3 d-flex justify-content-center">
					<div class="team-card text-center">
						<div class="team-card-img">
							<img src="assets/image/ren.png" class="img-fluid" alt="img-40">
							<!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><span><a href="path.html" style="color:#17418a;">Patricia Zinga</a></span></h4>
							<p>Directrice du Cabinet</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
				<div class="col-12 col-md-6 col-xl-3 d-flex justify-content-center">
					<div class="team-card text-center">
						<div class="team-card-img">
							<img src="assets/image/team/Cab02.png" class="img-fluid" alt="img-41">
							<!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><span><a href="theo.html" style="color:#17418a;">Théodore Nganzi
							</a></span></h4>
							<p>Directeur du Cabinet Adjoint</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
				<div class="col-12 col-md-6 col-xl-3 d-flex justify-content-center">
					<div class="team-card text-center">
						<div class="team-card-img">
							<img src="assets/image/team/Cab03.png" class="img-fluid" alt="img-42">
							<!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><span style="color:#17418a;">Le Collège</span></h4>
							<p>des Conseillers</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--team-section-->

	<section class="portfolio-two-section" style="background-color:#17418a;">
		<div class="container">
			<div class="portfolio-two-box">
				<div class="section-title-box text-center">
					<!--<div class="section-tagline">Portfolio</div>--><!-- section-tagline -->
					<h2 class="section-title" style="color:#fff;padding-top:60px;">La culture de la RDC se vit, se célèbre, se partage<br><span style="font-size:30px;">dans toute sa diversité, dans chaque coin de son territoire</span></h2><!-- section-title -->
				</div><!-- section-title-box  -->
			</div><!--portfolio-two-box-->
		</div><!-- container -->
		<div class="portfolio-two-content">
			<div class="container">
				<div class="portfolio-two-carousel owl-carousel owl-theme">
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event1.jpg" class="img-fluid" alt="img-44">
						</div><!-- item -->

					</div><!--portfolio-two-card-->
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event-4.png" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div><!--portfolio-two-card-->
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event3.jpg" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div><!--portfolio-two-card-->
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event4.jpg" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div><!--portfolio-two-card-->
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event5.jpg" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div><!--portfolio-two-card-->
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event6.jpeg" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div><!--portfolio-two-card-->
					<div class="portfolio-two-card">
						<div class="item">
							<img src="agenda/event7.jpg" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div>
					<div class="portfolio-two-card">
					<!--portfolio-two-card-->
						<div class="item">
							<img src="agenda/event8.jpeg" class="img-fluid" alt="img-45">
						</div><!-- item -->

					</div><!--portfolio-two-card-->

				</div><!--portfolio-two-carousel-->
			</div><!-- container -->
		</div><!--portfolio-two-content-->
	</section><!--portfolio-two-section-->
	<section class="testimonial-two-section">
		<div class="testimonial-two-inner">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4 col-xl-4">
						<div class="testimonial-two-content">
							<div class="section-title-box">
								<div class="section-tagline">
									CITATIONS
								</div><!-- section-tagline -->
								<h2 class="section-title">Ce qu’ils disent sur la Culture</h2>
								<p>La culture est le pilier de notre identité. Découvrez ce que les gens pensent de nos initiatives pour préserver et promouvoir notre héritage culturel.</p>
							</div><!--section-title-box-->
						</div><!--testimonial-two-content-->
						<div class="testimonial-author-thumb">
							<div class="swiper author-thumb-carousel">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="author-thumb-image">
											<img src="assets/image/testimonial/images (3).jpeg" class="img-fluid" alt="img-48">
										</div><!-- author-thumb-image -->
									</div><!--swiper-slide-->
									<div class="swiper-slide">
										<div class="author-thumb-image">
											<img src="assets/image/testimonial/images (2).jpeg" class="img-fluid" alt="img-49">
										</div><!-- author-thumb-image -->
									</div><!--swiper-slide-->
									<div class="swiper-slide">
										<div class="author-thumb-image">
											<img src="assets/image/testimonial/images (3).jpeg" class="img-fluid" alt="img-50">
										</div><!-- author-thumb-image -->
									</div><!--swiper-slide-->
								</div><!-- swiper-wrapper -->
							</div><!--client-carousel owl-carousel owl-theme-->
						</div><!--testimonial-author-thumb-->
					</div><!--col-lg-4-->
					<div class="col-lg-5">
						<div class="testimonial-author-review">
							<div class="swiper author-review-carousel">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="testimonial-two-card">
											<div class="testimonial-two-card-content">
												<div class="testimonial-two-card-text">
													<p>Les arts, la culture et le patrimoine constituent la base de la renaissance africaine et offrent une occasion de revenir sur nos racines. La culture est le début et la fin de tout. Elle couvre tous les aspects de la vie humaine.
													</p>
												</div><!-- testimonial-two-card-text -->
												<div class="testimonial-two-card-outer">
													<div class="testimonial-two-card-outer-title">
														<span style="color: #17418a;font-size: 18px;font-weight: 800;"><b>Félix Tshisekedi</b> ,<br><span class="testimonial-two-card-outer-title">Président de la République démocratique du Congo</span>
													</span>
													</div><!-- testimonial-two-card-outer-title -->
													<!-- testimonial-two-card-outer-title -->
												</div><!-- testimonial-two-card-outer -->
												<div class="testimonial-two-card-outer-icon">
													<i class="flaticon-quote"></i>
												</div><!-- testimonial-two-card-outer-icon -->
											</div><!-- testimonial-two-card-content -->
										</div><!--testimonial-two-card-->
									</div><!--swiper-slide-->
									<div class="swiper-slide">
										<div class="testimonial-two-card">
											<div class="testimonial-two-card-content">
												<div class="testimonial-two-card-text">
													<p>La culture congolaise est un kaléidoscope vibrant de traditions ancestrales et de créativité contemporaine unissant les cœurs et nourrissant les esprits avec ses rythmes, ses couleurs et ses récits

													</p>
												</div><!-- testimonial-two-card-text -->
												<div class="testimonial-two-card-outer">
													<div class="testimonial-two-card-outer-title">
														<span style="color: #17418a;font-size: 18px;font-weight: 800;"><b>Yolande Elebe</b> ,<br><span class="testimonial-two-card-outer-title">Ministre de la Culture, Arts et Patrimoine</span>
													</span>
													</div><!-- testimonial-two-card-outer-title -->
													<!-- testimonial-two-card-outer-title -->
												</div><!-- testimonial-two-card-outer -->
												<div class="testimonial-two-card-outer-icon">
													<i class="flaticon-quote"></i>
												</div><!-- testimonial-two-card-outer-icon -->
											</div><!-- testimonial-two-card-content -->
										</div><!--testimonial-two-card-->
									</div><!--swiper-slide-->
									<div class="swiper-slide">
										<div class="testimonial-two-card">
											<div class="testimonial-two-card-content">
												<div class="testimonial-two-card-text">
													<p>Nous avons affirmé la volonté de construire un Congo uni et fort dans sa diversité culturelle et son attachement à la mère patrie.
													</p>
												</div><!-- testimonial-two-card-text -->
												<div class="testimonial-two-card-outer">
													<div class="testimonial-two-card-outer-title">
														<span style="color: #17418a;font-size: 18px;font-weight: 800;"><b>Félix Tshisekedi</b> ,<br><span class="testimonial-two-card-outer-title">Président de la République démocratique du Congo</span>
													</span>
													</div><!-- testimonial-two-card-outer-title -->
													<!-- testimonial-two-card-outer-title -->
												</div><!-- testimonial-two-card-outer -->
												<div class="testimonial-two-card-outer-icon">
													<i class="flaticon-quote"></i>
												</div><!-- testimonial-two-card-outer-icon -->
											</div><!-- testimonial-two-card-content -->
										</div><!--testimonial-two-card-->
									</div><!--swiper-slide-->
								</div><!-- swiper-wrapper -->
							</div><!-- swiper author-review-carousel -->
						</div><!-- testimonial-author-review -->
					</div><!-- col-lg-5 -->
					<div class="col-lg-3">
						<div class="testimonial-two-img">
							<img src="assets/image/testimonial/cita02.png" alt="img-51" style="max-width: 489px;max-height: 489px;">
						</div><!-- testimonial-two-img -->
					</div><!--col-lg-3-->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- testimonial-two-inner -->
	</section><!--testimonial-two-section-->
	<section class="blog-section">
		<div class="container">
			<div class="blog-box">
				<div class="section-title-box text-center">
					<div class="section-tagline">DIRECTEMENT DU BLOG</div>
					<h2 class="section-title">Découvrez les dernières<br>Actualités</h2>
				</div><!-- section-title-box -->
			</div><!--blog-box-->
			<div class="row row-gutter-y-155">

			    <div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="images/yolande.jpeg" class="img-fluid" alt="img-52">
							<!--<a href="news-details.html"></a>-->
							<a href="art4.html"></a>
						</div><!-- blog-card-image -->
						<div class="blog-card-date">
							<span>30 AOU</span>
						</div><!-- blog-card-date -->
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									par<span>Admin</span>
								</span>
							</div><!-- blog-card-meta -->
							<h5><a href="art4.html" style="color:#17418a;">La ministre Yolande Elebe Ma Ndembo fait valider le projet de loi portant politique culturelle au Conseil des ministres</a></h5>
							<p>Au cours du Conseil des ministres de ce vendredi 30 août 2024, la ministre de la Culture, Arts et Patrimoine, Yolande Elebe Ma Ndembo, a fait valider le projet de loi...
							</p>
						</div><!-- blog-card-content -->
					</div><!-- blog-card -->
				</div><!-- col-lg-4 -->

				<div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="assets/image/im1.jpeg" class="img-fluid" alt="img-52">
							<!--<a href="news-details.html"></a>-->
							<a href="art1.html"></a>
						</div><!-- blog-card-image -->
						<div class="blog-card-date">
							<span>15 JUIL</span>
						</div><!-- blog-card-date -->
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									par<span>Admin</span>
								</span><!-- author -->
							</div><!-- blog-card-meta -->
							<h5><a href="art1.html" style="color:#17418a;">Gestion collective des droits d’auteurs : le numérique et la libéralisation du secteur parmi les innovations apportées à la nouvelle loi en gestation</a></h5>
							<p>Les rideaux sont tombés, le mercredi 7 août 2024, sur les travaux de la Commission sur la problématique du droit d’auteurs...
							</p>
						</div><!-- blog-card-content -->
					</div><!-- blog-card -->
				</div><!-- col-lg-4 -->

				<div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="assets/image/im2.jpeg" class="img-fluid" alt="img-53">
							<a href="art2.html"></a>
						</div><!-- blog-card-image -->
						<div class="blog-card-date">
							<span>20 JUIL</span>
						</div><!-- blog-card-date -->
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									par<span>Admin</span>
								</span><!-- author -->
							</div><!-- blog-card-meta -->
							<h5><a href="art2.html" style="color:#17418a;">Visite du nouveau Centre Culturel et Artistique des Pays de l’Afrique Centrale basé à Kinshasa</a></h5>
							<p>La Première ministre, accompagnée de la ministre de la Culture, des Arts et du Patrimoine, ainsi que de trois autres membres du gouvernement...</p>
						</div><!-- blog-card-content -->
					</div><!-- blog-card -->
				</div><!-- col-lg-4 -->

				<!--<div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="assets/image/im3.jpeg" class="img-fluid" alt="img-54">
							<a href="art3.html"></a>
						</div><
						<div class="blog-card-date">
							<span>23 JUIL</span>
						</div>
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									par<span>Admin</span>
								</span>
								<span class="comment">
									<span>04 Commentaires</span>
								</span>
							</div>
							<h5><a href="art3.html" style="color:#17418a;">Visite des Premières dames Nyakeru et Vučić au Musée national de la RDC</a></h5>
							<p>Le 23 juillet 2024, la Première dame de la RDC, Denise Nyakeru, et son homologue serbe, Tamara Vučić, ont visité le Musée national de la RDC avec la Ministre de la Culture, Yolande Elebe Ma Ndembo.</p>
						</div>
					</div>-->
				</div><!-- col-lg-4 -->
			</div><!-- row -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- blog-section -->

</div><!--page-wrapper-->
<section class="footer">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget-logo">
						<a href="index.html"><img src="assets/image/logomin.png" class="img-fluid" alt="img-25"></a>
					</div><!-- footer-widget-logo -->
					<div class="footer-widget-text">
						<p>Célébrons la culture : Diversité, Inclusion, Mémoire Collective</p>
					</div><!-- footer-widget-text -->
					<div class="footer-widget-socials">
						<a href="https://twitter.com/minculturap_rdc?lang=en"><i class="fa-brands fa-twitter"></i></a>
						<a href="https://www.facebook.com/minicultureartsrdc/?locale=fr_FR"><i class="fa-brands fa-facebook"></i></a>
						<a href="https://www.tiktok.com/@min_cap"><i class="fa-brands fa-tiktok"></i></a>
						<a href="https://www.instagram.com/mincap_rdc/"><i class="fa-brands fa-instagram"></i></a>
                                                <a href="https://www.linkedin.com/company/minist%C3%A8re-de-la-culture-arts-et-patrimoines-rdc?trk=public_post_feed-actor-name"><i class="fa-brands fa-linkedin"></i></a>
					</div><!-- footer-widget-socials -->
				</div><!--col-lg-4-->
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-explore">
							<h4 class="footer-widget-title">Explorer</h4>
							<ul class="list-unstyled">
								<li><a href="doc.html">Culture 360</a></li>
								<li><a href="discover.html">Redécouvrir la culture</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul><!-- list-unstyled -->
						</div><!-- footer-widget-explore -->
					</div><!--footer-widget-->
				</div><!--col-lg-3-->
				<div class="col-lg-2">
					<div class="footer-widget">
						<div class="footer-widget-department">
							<h4 class="footer-widget-title">Organismes</h4>
							<ul class="list-unstyled">
								<li><a href="cabinet.html">Le Cabinet du Ministre</a></li>
								<li><a href="secretariat.html">Le Secrétariat Général </a></li>
								<li><a href="entites.html">Entités sous supervision</a></li>
							</ul><!-- list-unstyled -->
						</div><!-- footer-widget-department -->
					</div><!--footer-widget-->
				</div><!--col-lg-2-->
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-contact">
							<h4 class="footer-widget-title">Contact</h4>
							<p>Av. Boulevard du 30 juin n°154, BP 3164 et 3131<br>Kinshasa/Gombe</p>
						</div><!-- footer-widget-contact -->
						<div class="footer-widget-contact-list">
							<i class="fa-solid fa-envelope"></i>
							<div class="footer-widget-contact-item">
								<a href="mailto:info@culture.gouv.cd">info@culture.gouv.cd</a>
							</div><!-- footer-widget-contact-item -->
						</div><!-- footer-widget-contact-list -->
						<div class="footer-widget-contact-list">
							<i class="fa-solid fa-phone"></i>
							<div class="footer-widget-contact-item">
								<a href="tel:+243814814409">+243814814409</a>
							</div><!-- footer-widget-contact-item -->
						</div><!-- footer-widget-contact-list -->
					</div><!--footer-widget-->
				</div><!--col-lg-3-->
			</div><!-- row -->
		</div><!-- container -->
	</div><!--footer-inner-->
	<div class="bottom-footer">
		<div class="conatiner">
			<p>© Copyright 2024 , Ministère de la culture, arts et patrimoine</p>
		</div><!-- container -->
	</div><!--bottom-footer-->
</section><!--footer-->
<div class="mobile-nav-wrapper">
	<div class="mobile-nav-overlay mobile-nav-toggler"></div><!-- mobile-nav-overlay -->
	<div class="mobile-nav-content">
		<a href="#" class="mobile-nav-close mobile-nav-toggler">
			<span></span>
			<span></span>
		</a><!-- mobile-nav-close -->
		<div class="logo-box">
			<a href="index.html"><img src="assets/image/logomin.png" width="160" height="40" alt="191"></a>
		</div><!-- logo-box -->
		<div class="mobile-nav-container"></div><!-- mobile-nav-container -->
		<ul class="mobile-nav-contact list-unstyled">
			<li>
				<i class="fa-solid fa-phone"></i>
				<a href="tel:+243814814409">+243814814409</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-envelope"></i>
				<a href="mailto:needhelp@company.com">info@culture.gouv</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-map-marker-alt"></i>
				Adresse : Av. Boulevard du 30 juin n°154, BP 3164 et 3131 Kinshasa/Gombe
			</li><!-- li -->
		</ul><!-- /.mobile-nav-contact -->
		<ul class="mobile-nav-social list-unstyled">
			<li><a href="https://twitter.com/minculturap_rdc?lang=en"><i class="fa-brands fa-twitter"></i></a></li>
			<li><a href="https://www.facebook.com/minicultureartsrdc/?locale=fr_FR"><i class="fa-brands fa-facebook"></i></a></li>
			<li><a href="https://www.tiktok.com/@min_cap"><i class="fa-brands fa-tiktok"></i></a></li>
			<li><a href="https://www.instagram.com/mincap_rdc/"><i class="fa-brands fa-instagram"></i></a></li>
			<li><a href="https://www.linkedin.com/company/minist%C3%A8re-de-la-culture-arts-et-patrimoines-rdc?trk=public_post_feed-actor-name"><i class="fa-brands fa-linkedin"></i></a></li>
		</ul><!-- mobile-nav-social -->
	</div><!-- mobile-nav-content -->
</div><!-- mobile-nav-wrapper -->
	<div class="search-popup">
		<div class="search-popup-overlay search-toggler"></div><!-- search-popup-overlay -->
		<div class="search-popup-content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- sr-only -->
				<input type="text" id="search" placeholder="Search Here...">
				<button type="submit" aria-label="search submit" class="search-btn">
					<span><i class="flaticon-search-interface-symbol"></i></span>
				</button><!-- search-btn -->
			</form><!-- form -->
		</div><!-- search-popup-content -->
	</div><!-- search-popup -->
	<a href="#" class="scroll-to-top scroll-to-target" data-target="html"><i class="fa-solid fa-arrow-up"></i></a>
<script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
<script src="assets/vendor/youtube-popup/youtube-popup.jquery.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>
