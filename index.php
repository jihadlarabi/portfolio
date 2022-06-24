<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <meta name="author" content="cosmos-themes">

        <title>Jihad Ait Larabi- Développeur web junior</title>

        <!-- favicon -->
        <link href="https://kalvin.netlify.app/images/favicon.ico" rel="icon" type="image/png">
	
        <!--Font Awesome css-->
        <link rel="stylesheet" href="./index_files/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="./index_files/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--Owl Carousel css-->
        <link rel="stylesheet" href="./index_files/owl.carousel.min.css">
        <link rel="stylesheet" href="./index_files/owl.theme.default.min.css">

        <!--Magnific Popup css-->
        <link rel="stylesheet" href="./index_files/magnific-popup.css">

        <!-- Google Fonts -->
        <link href="./index_files/css" rel="stylesheet">

        <!--Site Main Style css-->
        <link rel="stylesheet" href="./index_files/style.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async="" src="./index_files/analytics.js.download"></script><script async="" src="./index_files/js"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-122650090-1');
			
        </script>


<style>




@media screen and (max-width:990px){
 .skills-container{
 grid-tempLate-columns: repeat(2, 1fr);
 padding: 2rem 50px;
 }
}

@media screen and (max-width:650px){
 .skills-container{
 grid-tempLate-columns:2fr;
 padding: 2rem 50px;
 }
}

.video-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
  grid-gap: 15px;
  max-width: 1100px;
  padding: 15px; 
  margin: 0 auto;
  box-sizing: border-box;
}

.video-gallery .gallery-item {
  position: relative;
  width: 100%;
  height: 300px;
  background: #000;
  cursor: pointer;
  overflow: hidden;
}

.video-gallery .gallery-item img {
  position: relative;
  display: block;
  width: 115%;
  height: 300px;
  object-fit: cover;
  opacity: .5;
  /*transition: opacity .35s, transform .35s;*/
  transition: all 350ms ease-in-out;
  transform: translate3d(-23px, 0, 0);
  /*backface-visibility: hidden;*/
}

.north-cascades-img {
  object-position: 50% 30%;
}

.video-gallery .gallery-item .gallery-item-caption {
  padding: 32px;
  font-size: 1em;
  color: #fff;
  text-transform: uppercase;
}

.video-gallery .gallery-item .gallery-item-caption,
.video-gallery .gallery-item .gallery-item-caption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.video-gallery .gallery-item h2 {
  font-weight: 300;
  overflow: hidden;
  padding: 12px 0;
}

.video-gallery .gallery-item h2,
.video-gallery .gallery-item p {
  position: relative;
  margin: 0;
  z-index: 1;
  pointer-events: none;
}

.video-gallery .gallery-item p {
  letter-spacing: 1px;
  font-size: 12px;
  padding: 12px 0;
  opacity: 0;
  transition: opacity 0.35s, transform 0.35s;
  transform: translate3d(10%, 0, 0);
}

.video-gallery .gallery-item:hover img {
  opacity: 0.3;
  transform: translate3d(0, 0, 0);
}

.video-gallery .gallery-item .gallery-item-caption {
  text-align: left;
}

.video-gallery .gallery-item h2::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 15%;
  height: 1px;
  background: #fff;
  transition: transform 0.3s;
  transform: translate3d(-100%, 0, 0);
}

.video-gallery .gallery-item:hover h2::after {
  transform: translate3d(0, 0, 0);
}

.video-gallery .gallery-item:hover p {
  opacity: 1;
  transform: translate3d(0, 0, 0);
}

/*
@media screen and (max-width: 784px) {
  .video-gallery {
    width: 100%;
    padding: 15px;    

  }
  .video-gallery .gallery-item {
    width: 95%;
    margin: 0 auto; 
    width: 100%;
  }
}
*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
span, a, a:hover {
    display: inline-block;
    text-decoration: none;
    color: inherit;
}
.section-head {
  margin-bottom: 60px;
}
.section-head h4 {
  position: relative;
  padding:0;
  color:#f91942;
  line-height: 1;
  letter-spacing:0.3px;
  font-size: 34px;
  font-weight: 700;  
  text-align:center;
  text-transform:none;
  margin-bottom:30px;
}
.section-head h4:before {
  content: '';
  width: 60px;
  height: 3px;
  background: #f91942;
  position: absolute;
  left: 0px;
  bottom: -10px;
  right:0;  
  margin:0 auto;
}
.section-head h4 span {
  font-weight: 700;
  padding-bottom: 5px;
  color:#2f2f2f
}
p.service_text{
  color:#cccccc !important;
  font-size:16px;
  line-height:28px;
  text-align:center;    
}
.section-head p, p.awesome_line{
  color:#818181;
  font-size:16px;
  line-height:28px;
  text-align:center;  
}

.extra-text {
    font-size:34px;
    font-weight: 700;
    color:#2f2f2f;
    margin-bottom: 25px;
    position:relative;
    text-transform: none;
}
.extra-text::before {
    content: '';
    width: 60px;
    height: 3px;
    background: #f91942;
    position: absolute;
    left: 0px;
    bottom: -10px;
    right: 0;
    margin: 0 auto;
}
.extra-text span {
    font-weight: 700;
    color:#f91942;
}
.item {
    background: #fff;
    text-align: center;
    padding: 30px 25px;
    -webkit-box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    border-radius: 20px;
    border:5px solid rgba(0, 0, 0, 0.07);
    margin-bottom: 30px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover{
    background:gray;
    box-shadow:0 8px 20px 0px rgba(0, 0, 0, 0.2);
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover .item, .item:hover span.icon{
    background:#fff;
    border-radius:10px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover h6, .item:hover p{
    color:#fff;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item .icon {
    font-size: 40px;
    margin-bottom:25px;
    color: #f91942;   
    width: 90px;
    height: 90px;
    line-height: 96px;
    border-radius: 50px;
}
.item .feature_box_col_one{
    background:rgba(247, 198, 5, 0.20);
    color:black
}
.item .feature_box_col_two{
    background:rgba(255, 77, 28, 0.15);
    color:black
}
.item .feature_box_col_three{
    background:rgba(0, 147, 38, 0.15);
    color:black
}
.item .feature_box_col_four{
    background:rgba(0, 108, 255, 0.15);
    color:black
}
.item .feature_box_col_five{
    background:rgba(146, 39, 255, 0.15);
    color:black
}
.item .feature_box_col_six{
    background:rgba(23, 39, 246, 0.15);
    color:black
}
.item p{
    font-size:15px;
    line-height:26px;
}
.item h6 {
    margin-bottom:20px;
    color:#2f2f2f;
}
.mission p {
    margin-bottom: 10px;
    font-size: 15px;
    line-height: 28px;
    font-weight: 500;
}
.mission i {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: #f91942;
    border-radius: 50%;
    color: #fff;
    font-size: 25px;
}
.mission .small-text {
    margin-left: 10px;
    font-size: 13px;
    color: #666;
}
.skills {
    padding-top:0px;
}
.skills .prog-item {
    margin-bottom: 25px;
}
.skills .prog-item:last-child {
    margin-bottom: 0;
}
.skills .prog-item p {
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 10px;
}
.skills .prog-item .skills-progress {
    width: 100%;
    height: 10px;
    background: #e0e0e0;
    border-radius:20px;
    position: relative;
}
.skills .prog-item .skills-progress span {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    background: #f91942;
    width: 10%;
    border-radius: 10px;
    -webkit-transition: all 1s;
    transition: all 1s;
}
.skills .prog-item .skills-progress span:after {
    content: attr(data-value);
    position: absolute;
    top: -5px;
    right: 0;
    font-size: 10px;
    font-weight:600;    
    color: #fff;
    background:rgba(0, 0, 0, 0.9);
    padding: 3px 7px;
    border-radius: 30px;
}







@keyframes load{
  from {
    width: 0%
  }
}
@-webkit-keyframes load{
  from {
    width: 0%
  }
}
@-moz-keyframes load{
  from {
    width: 0%
  }
}
@-o-keyframes load{
  from {
    width: 0%
  }
}

.bar{
  background-color: #EEE;
  padding: 2px;
  border-radius: 15px;
  margin-bottom: 5px;
  font-size: 14px;
  color: #FFF;
  font-weight: bold;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}
.bar::before{
  content:  attr(data-skill);
  background-color: #f3b0ff;
  display: inline-block;
  padding: 5px 0 5px 10px;
  border-radius: inherit;
  animation: load 2s 0s;
  -webkit-animation: load 2s 0s;
  -moz-animation: load 2s 0s;
  -o-animation: load 2s 0s;
}

.bar.front::before{
  background-color: #a6cfe3;
}
.bar.back::before{
  background-color: #a6cfe3;
}

.bar.learning::before{
  width: calc(100% - 10px);
}
.bar.basic::before{
  width: calc(40% - 10px);
}
.bar.intermediate::before{
  width: calc(60% - 10px);
}
.bar.advanced::before{
  width: calc(80% - 10px);
}
.bar.expert::before{
  width: calc(100% - 10px);
}

.banner{
	height: 670px; 
	background-image: url('https://kalvin.netlify.app/images/background/home-banner-bg.jpg'); 
	

}

</style>
    </head>

    <body>

        <!--Preloader-->
        <div class="preloader loaded">
            <div class="loader "></div>
        </div>
        <!--Preloader-->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
               

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <!--Nav Links-->
                        <li class="nav-item">
                            <a href="https://kalvin.netlify.app/index-main.html#" class="nav-link active" data-scroll-nav="0">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://kalvin.netlify.app/index-main.html#" class="nav-link" data-scroll-nav="1">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://kalvin.netlify.app/index-main.html#" class="nav-link" data-scroll-nav="2">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://kalvin.netlify.app/index-main.html#" class="nav-link" data-scroll-nav="4">COMPÉTENCES</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://kalvin.netlify.app/index-main.html#" class="nav-link" data-scroll-nav="3">PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://kalvin.netlify.app/index-main.html#" class="nav-link" data-scroll-nav="5">Contact</a>
                        </li>
												 <li class="nav-item">
                            <a href="admin.php" class="nav-link" >Login</a>
							
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->

        <!--Home Section Start-->
        <section id="home" class="banner" 
				
				data-stellar-background-ratio=".7"
				data-scroll-index="0"	>
            <div class="container">
                <!--Banner Content-->
					<div class="banner-caption">
                    <h1>Jihad Larabi</h1>
                    <p class="cd-headline clip mt-30">
                       
                        <span class="blc"> Développeur Web Freelance  Spécialisé :</span>
                        <span class="cd-words-wrapper" style="width: 210.436px; overflow: hidden;">
                            <b class="is-hidden">Création de Site Web </b>
                            <b class="is-hidden">Référenceur Web (SEO)</b>
                            <b class="is-visible">Gestion Des Alarmes</b>
                        </span>
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="https://kalvin.netlify.app/index-main.html#" data-scroll-nav="1"></a>
                </div>
            </div>
        </section>
        <!--Home Section End-->

        <!--About Section Start-->
        <section class="about pt-100 pb-100" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <!--About Image-->
                        <div class="about-img">
                            <img src="./index_files/ji.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6" >
                        <!--About Content-->
                        <div class="about-content" >
                            <div class="about-heading">
							   <h2>Qui suis-je ?</h2>
                                <span></span>
                            </div>
                            <p> Je suis <b>jihad Ait larabi</b>,développeur web freelance, 
							officiant avec plusieurs amis développeurs, intégrateurs web, référenceurs, 
							rédacteur web, ou installation et Configuration des moyens de télécommunication. 
							Toujours disponible pour un café, 
							j'aurai beaucoup de plaisir à vous accompagner dans vos projets..</p>
                            <!--About Social Icons-->
                            <div class="social-icons">
						
                                <a href="https://web.facebook.com/jihad.aitlarabi/" target="_blank"><i class="fab fa-facebook " style="color:#696969"></i></a>
                                <a href="mailto: jihadthales@gmail.com" target="_blank"><i class="fas fa-envelope-square" style="color:#696969"></i></a>
                                <a href="https://www.linkedin.com/in/jihad-ait-larabi-287050135/" target="_blank"><i class="fab fa-linkedin" style="color:#696969"></i></a>
                                <a href="+212666954770" target="_blank"><i class="fab fa-whatsapp" style="color:#696969"></i></a>
                            </div>
                           
                            <span class="about-button">
                                <a class="main-btn" href="jihad.pdf" target="_blank">Télécharger CV</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->

        <!--Services Section Start--
         <section class="services bg-gray pt-100 pb-50" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h2>MES SERVICES</h2>
                            <h6>MES COMPÉTENCES SONT À VOTRE DISPOSITION !</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--Service Item--
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-laptop"></i>
                            </span>
                            <h4>WEB DEVELOPMENT </h4>
                            <p>  Réalisation sur-mesure de votre site internet statique ou bien dynamique </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item--
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-gears"></i>
                            </span>
                            <h4>GESTION DE PROJETS WEB</h4>
                            <p>
								Conception Boutique e-Commerce <br>
								Conception d'Application Web<br>
								Site vitrine
								</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item--
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-mobile"></i>
                            </span>
                            <h4>DESIGN RESPONSIVE & ÉLÉGANT</h4>
                            <p>Concevoir un site web à votre image et adapté à tout support écran (Ordinateur, Tablette, Smartphone)</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item--
                        <div class="service-item">
                            <span class="icon">
                              <i class="fas fa-wrench	"></i>
                            </span>
                            <h4>MAINTENANCE </h4>
                            <p>sécuriser votre site et le mettre à jour régulièrement..</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item--
                        <div class="service-item">
                            <span class="icon">
                <i class="fad fa-camera-home"></i>
                            </span>
                           <h4>videosurveillance-cameras</h4>
                            <p>La mise en place d’un système de gestion des alarmes et alertes avec
								notre outil de supervision.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item--
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-support"></i>
                            </span>
                             <h4> DÉLAIS RESPECTÉS</h4>
                            <p>Gérer votre projet web suivant un planning, des tâches estimées, des attentes et des besoins respectés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Section End-->
			<div class="feat bg-gray pt-5 pb-5" data-scroll-index="2">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12"  >
							<h2 style="text-align:center;">MES SERVICES</h2>
                            <h6 style="text-align:center;">MES COMPÉTENCES SONT À VOTRE DISPOSITION !</h6>
		  
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-gears""></i></span>
            <h4>MAINTENANCE </h4>
              <p>sécuriser votre site et le mettre à jour régulièrement..</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-laptop"></i></span>
            <h4>WEB DEVELOPMENT </h4>
                            <p>  Réalisation sur-mesure de votre site internet statique ou bien dynamique </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-camera"></i></span>
            
			<h4>videosurveillance</h4>
           <p>  Réalisation sur-mesure de votre site internet statique ou bien dynamique </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-laptop"></i></span>
             <h4>GESTION DE PROJETS</h4>
                            <p>
								Conception Boutique e-Commerce <br>
								Conception d'Application Web<br>
								Site vitrine
								</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-mobile"></i></span>
            <h4>DESIGN RESPONSIVE </h4>
                            <p>Concevoir un site web à votre image et adapté à tout support écran (Ordinateur, Tablette, Smartphone)</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-support"></i></span>
							<h4> DÉLAIS RESPECTÉS</h4>
                            <p>Gérer votre projet web suivant un planning, des tâches estimées, des attentes et des besoins respectés.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
	
		 <section class="portfolio pt-100 pb-70" data-scroll-index="4">
		  <div class="container">
		  <h2 style="text-align:center;">MES COMPÉTENCES</h2>
                            <h6 style="text-align:center;">J'ai hâte de part mes futures expériences faire avancer ces barres de progressions</h6>
   
					<div class="bar front advanced" data-skill="gestion des alarmes"></div>
					<div class="bar front advanced" data-skill="HTML5"></div>
					<div class="bar front advanced" data-skill="CSS3"></div>
					<div class="bar back basic" data-skill="JAVASCRIPT"></div>
					<div class="bar back intermediate" data-skill="BOTSTRAP"></div>
					<div class="bar front advanced" data-skill="PHP"></div>
					<div class="bar back intermediate" data-skill="ANGULAR 11"></div>
					<div class="bar front advanced" data-skill="Mysql"></div>
					<div class="bar front basic" data-skill="JEE"></div>
				  </div>
						 </section>
		
        <!--Stats Section Start-->
        <section class="stats pt-100 pb-100" style="background-image: url('https://kalvin.netlify.app/images/background/stats-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <p>Vous cherchez un partenaire freelance pour développer votre projet ?
							</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                          
                            
                            <p>Vous etes interesse par un Devis gratuit ?</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                          
                             <p>Envie de discuter de votre projet autour d'un café ?
							</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                           <a href="mailto: jihadthales@gmail.com" title="Contactez Jihad Ait Larabi | Développeur Web &amp;  Freelance au Maroc" class="anewBtn">


                    <button type="button" class="btn btn-light"><i class="fa fa-envelope"></i>&#160 Contactez moi !</button>
                        </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Stats Section End-->

		<section class="portfolio pt-100 pb-70" data-scroll-index="3">
     			 <div class="col">
                        <div class="heading text-center">
                            <h2>PORTFOLIO- Réalisations</h2>
                           
                        </div>
                    </div>

  <div class="video-gallery">
    
    <div class="gallery-item ">
     <img src="./index_files/centre.PNG" alt="Mount Rainier"/ >
      <div class="gallery-item-caption">
        <!--<div>-->
        <h2>Site <span>Web</span></h2>
         	<p>site présentation,centre de formation</p>
			<p>Bases de Données avec MySQL </p>
			<p> Développé en Php</p>
		    
        <!--</div>-->
        	 <a class="vimeo-popup" href="./index_files/centre.PNG"> 
			 <i class="fa fa-search"></i></a>
			  
                                  
                             
      </div>
    </div>

    <div class="gallery-item">
      <img src="./index_files/ecom.PNG" alt="Olympic National Park"/>
      <div class="gallery-item-caption">
        <!--<div>-->
          <h2>Site <span>Web</span></h2>
         	<p>Site E-commerce</p>
			<p>Développé en Angular et Nestjs</p>
			<p>Bases de Données avec MySQL </p>
        <!--</div>--> 
		
        <a class="vimeo-popup" href="./index_files/ecom.PNG"> 
			 <i class="fa fa-search"></i></a>						
      </div>
    </div>
    
    <div class="gallery-item">
     <img src="./index_files/profil.PNG" class="north-cascades-img" alt="North Cascades National Park"/>
      <div class="gallery-item-caption">
        <!--<div>-->
          <h2>Site <span>Web</span></h2>
        		<p>Portfolio</p>
				<p> Développé en Php</p>
				<p>Bases de Données avec MySQL </p>
        <!--</div>-->
        <a class="vimeo-popup" href=""></a>
      </div>
    </div>

    <div class="gallery-item">
      <img src="./index_files/gestion.PNG" alt="Mount St Helens"/>
      <div class="gallery-item-caption">
        <!--<div>-->
           <h2>Site <span>Web</span></h2>
         	<p>Gestion </p>
			<p>Développé en Php</p>
			<p>Bases de Données avec MySQL </p>
        <!--</div>-->
          <a class="vimeo-popup" href=""></a>
      </div>
    </div>
	<div class="gallery-item">
      <img src="./index_files/pfe.png" alt="Mount St Helens"/>
      <div class="gallery-item-caption">
        <!--<div>-->
           <h2>Application <span>Web</span></h2>
         	<p>Gestion  Des Ressources Financières</p>
			<p>Développé en Php</p>
			<p>Bases de Données avec MySQL </p>
        <!--</div>-->
          <a class="vimeo-popup" href=""></a>
      </div>
	 
    </div>
	<div class="gallery-item">
      <img src="./index_files/Cap.PNG" alt="Mount St Helens"/>
      <div class="gallery-item-caption">
        <!--<div>-->
         <h2>Site <span>Web</span></h2>
        		<p>Portfolio</p>
				<p> Développé en Php</p>
				<p>Bases de Données avec MySQL </p>
        <!--</div>-->
          <a class="vimeo-popup" href=""></a>
      </div>
    </div>
  </div>
</div>
        </section>
		
		
        <!--Portfolio Section Start--
        <section class="portfolio pt-100 pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Portfolio</h6>
                            <h2>Work I Have Done</h2>
                        </div>
                        <div class="portfolio-filter text-center">
                            <ul>
                                <li class="sel-item" data-filter="*">All</li>
                                <li data-filter=".design">Web Design</li>
                                <li data-filter=".application">Applications</li>
                                <li data-filter=".development">Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-items" style="position: relative; height: 643.344px;">
                    <!--Portfolio Item--
                    <div class="col-lg-4 col-md-6 item application" style="position: absolute; left: 0px; top: 0px;">
                        <div class="item-content">
                            <img src="./index_files/img-1.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Application</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="./index_files/img-1.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item--
                    <div class="col-lg-4 col-md-6 item design" style="position: absolute; left: 380px; top: 0px;">
                        <div class="item-content">
                            <img src="./index_files/img-2.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="./index_files/img-2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item--
                    <div class="col-lg-4 col-md-6 item development" style="position: absolute; left: 760px; top: 0px;">
                        <div class="item-content">
                            <img src="./index_files/img-3.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Application</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="./index_files/img-3.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item--
                    <div class="col-lg-4 col-md-6 item design development" style="position: absolute; left: 0px; top: 321px;">
                        <div class="item-content">
                            <img src="./index_files/img-4.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Development</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="./index_files/img-4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item--
                    <div class="col-lg-4 col-md-6 item development application" style="position: absolute; left: 380px; top: 321px;">
                        <div class="item-content">
                            <img src="./index_files/img-5.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="./index_files/img-5.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item--
                    <div class="col-lg-4 col-md-6 item application development" style="position: absolute; left: 760px; top: 321px;">
                        <div class="item-content">
                            <img src="./index_files/img-6.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="./index_files/img-6.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->

        <!--Blog Section Start--
        <section class="blogs pt-100 pb-100 bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading text-center">
                            <h2>MON PORTFOLIO</h2>
                            <h6>Latest News</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <!--Blogs Item-->
                        
                        <!--Blogs Item-->
                        
                        <!--Blogs Item-->
                        
                        <!--Blogs Item--
                        
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1950px, 0px, 0px); transition: all 0.5s ease 0s; width: 3900px;"><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/centre.PNG"  alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-3(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-4(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-1(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-2(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-3(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-4(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned active" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-1(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-2(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="blog-item">
                            <div class="blog-img">
                                <a href="https://kalvin.netlify.app/single-blog.html">
                                    <img src="./index_files/img-3(1).jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="https://kalvin.netlify.app/single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="blog-button pt-40">
                            <a class="main-btn" href="https://kalvin.netlify.app/blogs-page.html">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Section End-->

        <!--Testimonials Section Start-->
        <section class="testimonials pt-100 pb-100" style="background-image: url('https://kalvin.netlify.app/images/background/testimonials-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-theme text-center owl-loaded owl-drag">
                            <!--Testimonials Item-->
                            
                            <!--Testimonials Item-->
                            
                            <!--Testimonials Item-->
                            
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-2760px, 0px, 0px); transition: all 0.5s ease 0s; width: 6440px;">
                                    <div class="owl-item cloned" style="width: 920px;"><div class="testimonial-item">
                                <div class="author-img">
                                    <img src="./index_files/" alt="">
                                </div>
                                <h5>Mlle KHADIJA FALLAH</h5>
                                <span>Directrice De Centre</span>
                                <p>"Merci Jihad de m'avoir appris à coder... Tout ça c'est grâce à toi!</p>
                                    </div></div>
									
									<div class="owl-item cloned" style="width: 920px;"><div class="testimonial-item">
                                        <div class="author-img">
                                            <img src="./index_files/" alt="">
                                        </div>
                                        <h5>Mr Rachid</h5>
                                        <span>شركة النقل الزهور</span>
                                        <p>"Jihad t'es le meilleur! Merci pour tout..."</p>
                                    </div></div>--->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Section End-->

        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
						
                            <h2>Contact</h2>
                            <h6>Vous avez une question ? Vous êtes hésitant à me prendre dans votre équipe ? Envoyez moi un message pour avoir des renseignements.

</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!--Contact Form-->
                       <form method="post" action="validation.php"  id="contact-us">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Nom</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Nom complet " required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email </label>
                <input id="form_email" type="email" name="email" placeholder="Adresse email" class="form-control"  required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
			  
                <label for="form_message">Message </label>
                <textarea id="form_message" name="message" placeholder="Description du besoin" class="form-control" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit"  class="btn btn-dark" value="Envoyer ">
            </div>
          </div>

        </div>

        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->

        <!--Footer Start-->
        <footer class="pt-50 pb-50">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>DÉVELOPPEUR INFORMATIQUE INDÉPENDANT</h5>
                            <p>La conception de site internet est le début d’une longue aventure 
								c’est pour cette raison que nous proposons des solutions 
								d’accompagnement pour vous accompagner de A à Z.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                          
                            <p>Ecoute du besoin</p>
							<p>Esprit d'équipe</p>
								<p>Adaptabilité</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p> <a href="mailto: jihadthales@gmail.com" id="email-me" target="_blank">jihadthales<i class="fa fa-at"></i>gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>AVEZ-VOUS UN PROJET WEB À DÉVELOPPER ?
PRENONS CONTACT !</h5>
                            <p><a href="tel:212-666-954-770" id="call-me" target="_blank">Tel : +212-666-954-770</a> </p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <hr>
						
                        <p class="copy pt-30">
						
                            Tous droits réservés ©  2021.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->
		
        <!--Jquery js-->
        <script src="./index_files/jquery.min.js.download"></script>
        <!--Bootstrap js-->
        <script src="./index_files/bootstrap.min.js.download"></script>
        <!--Stellar js-->
        <script src="./index_files/jquery.stellar.js.download"></script>
        <!--Animated Headline js-->
        <script src="./index_files/animated.headline.js.download"></script>
        <!--Owl Carousel js-->
        <script src="./index_files/owl.carousel.min.js.download"></script>
        <!--ScrollIt js-->
        <script src="./index_files/scrollIt.min.js.download"></script>
        <!--Isotope js-->
        <script src="./index_files/isotope.pkgd.min.js.download"></script>
        <!--Magnific Popup js-->
        <script src="./index_files/jquery.magnific-popup.min.js.download"></script>
        <!--Site Main js-->
        <script src="./index_files/main.js.download"></script>

    

</body></html>