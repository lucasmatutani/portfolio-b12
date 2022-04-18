<?php

if(isset($_POST['submit']))
{
//     print_r($_POST['name']);
//     print_r('<br>');
//     print_r($_POST['email']);
//     print_r('<br>');
//     print_r($_POST['subject']);
//     print_r('<br>');
//     print_r($_POST['content']);

include_once './connection.php';

$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$mensagem = $_POST['content'];

$result = mysqli_query($conexao, "INSERT INTO message_form(name, email, subject, content) VALUES ('$nome','$email','$assunto','$mensagem')");
}
?>


<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>B12</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Portfólio" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Lucas Matutani" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/capsules-solid.svg" />    
        <link href='https://fonts.googleapis.com/css?family=Rubik:400,700,700i' rel='stylesheet' type='text/css'>		
        <link rel="stylesheet" type="text/css"  href='style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>            
                <script src="js/respond.min.js"></script>                   
        <![endif]-->         
    </head>

    <body class="page-template-onepage">

        <div class="site-wrapper">   

            <div class="doc-loader">
                <img src="images/logo_b12.gif" alt="Logo">
            </div>       

            <header class="header-holder">             
                <div class="menu-wrapper center-relative relative">             
                    <div class="header-logo">
                        <a href="index.php">
                            <img src="images/logo_b12.gif" alt="Logo">
                        </a>               
                    </div>

                    <div class="toggle-holder">
                        <div id="toggle">
                            <div class="first-menu-line"></div>
                            <div class="second-menu-line"></div>
                            <div class="third-menu-line"></div>
                        </div>
                    </div>

                    <div class="menu-holder">
                        <nav id="header-main-menu">
                            <ul class="main-menu sm sm-clean">
                                <li>
                                    <a href="#home">Pagina Inicial</a>
                                </li>
                                <li>
                                    <a href="#services">Serviços</a>
                                </li>
                                <li>
                                    <a href="#about">Sobre</a>
                                </li>
                                <li>
                                    <a href="#news">News</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolios</a>
                                </li>
                                <li>
                                    <a href="#pricing">Preços</a>
                                </li>
                                <li>
                                    <a href="#team">Time</a>
                                </li>
                                <li>
                                    <a href="#skills">Skills</a>
                                </li>
                                <li>
                                    <a href="#millstones">Milestones</a>
                                </li>
                                <li>
                                    <a href="#contact">Contato</a>
                                </li>
                            </ul>
                        </nav>                       
                    </div>
                    <div class="clear"></div>   
                </div>
            </header>                  

            <div id="content" class="site-content center-relative">       

                <!-- Home Section -->
                <div id="home" class="section no-page-title">                
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">                           
                            <h1 class="big-text"> 
                                Bem vindo<br>                               
                                Somos a B12
                            </h1>
                            <div class="button-holder text-left">
                                <a href="#portfolio" class="button">Saiba Mais</a>
                            </div>
                        </div>                        
                    </div>
                </div> 

                <!-- Services Section -->
                <div id="services" class="section">                  
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            SERVIÇOS      
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">

                            <div class="one_third ">
                                <div class="service-holder">
                                    <p class="service-num">1</p>
                                    <div class="service-txt">
                                        <h4>Desenvolvedor Web <br> Full-Stack</h4>
                                        <p>
                                            Curabitur cursus mattis ligula a maximus pellentesque in purus malesuada pharetra eros.
                                        </p>
                                        <br>
                                        <div class="button-holder text-left">
                                            <a href="#portfolio" class="button-dot">
                                                <span>MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="one_third ">
                                <div class="service-holder">
                                    <p class="service-num">2</p>
                                    <div class="service-txt">
                                        <h4>Suporte e Web Desinger<br><br></h4>
                                        <p>
                                            Est sem integer suscipit enim quis dictum feugiat etiam pellentesque curabitur donec porttitor.
                                        </p>
                                        <br>
                                        <div class="button-holder text-left">
                                            <a href="#news" class="button-dot">
                                                <span>MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="one_third last">
                                <div class="service-holder">
                                    <p class="service-num">3</p>
                                    <div class="service-txt">
                                        <h4>Audio Visual<br><br><br></h4>
                                        <p>
                                            Donec vel est sem integer suscipit enim quis lorem posuere vestibulum metus tempor vitae.
                                        </p>
                                        <br>
                                        <div class="button-holder text-left">
                                            <a href="#contact" class="button-dot">
                                                <span>MORE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div>

                <!-- About Section -->
                <div id="about" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            SOBRE             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">

                            <div class="one_half">
                                <p class="title-description-up">
                                    QUEM SOU EU
                                </p>
                                <h2 class="entry-title medium-text">
                                    Live up to <br> 
                                    your creative potential.
                                </h2>
                                <p>
                                    Code the energy hidden in matter citizens of distant epochs from which we spring drake equation perga inconspicuous motespatch clean designed code and energy matter.
                                </p>
                                <br>
                                <div class="button-holder text-left">
                                    <a href="#portfolio" class="button">
                                        LEARN MORE
                                    </a>
                                </div>
                            </div>

                            <div class="one_half last" data-threshold="0 0" data-jarallax-element="120 0">
                                <img src="images/eu_vertical2.jpeg" alt="" />                     
                            </div>
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div> 

                <!-- Portfolio Section -->
                <div id="portfolio" class="section no-padding">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            PORTFOLIOS                       
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <div id="portfolio-wrapper">
                                <div class="portfolio-load-content-holder"></div>
                                <div class="grid" id="portfolio-grid">
                                    <div class="grid-sizer"></div>

                                    <div id="p-item-1" class="grid-item element-item p_one_fourth">
                                        <a class="item-link ajax-portfolio" href="portfolio-1.php" data-id="1">
                                            <img src="images/portfolio_item_01.jpg" alt="" />
                                            <div class="portfolio-text-holder">
                                                <p class="portfolio-desc">INTERIOR</p>
                                                <p class="portfolio-title">Living Room</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div id="p-item-2" class="grid-item element-item p_one_half">
                                        <a class="item-link ajax-portfolio" href="portfolio-2.php" data-id="2">
                                            <img src="images/portfolio_item_02.jpg" alt="" />
                                            <div class="portfolio-text-holder">
                                                <p class="portfolio-desc">FASHION</p>
                                                <p class="portfolio-title">Modeling</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div id="p-item-3" class="grid-item element-item p_one_fourth">
                                        <a class="item-link ajax-portfolio" href="portfolio-3.php" data-id="3">
                                            <img src="images/portfolio_item_03.jpg" alt="" />
                                            <div class="portfolio-text-holder">
                                                <p class="portfolio-desc">CREATIVE</p>
                                                <p class="portfolio-title">Psd Mockup</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div id="p-item-4" class="grid-item element-item p_one_fourth">
                                        <a class="item-link ajax-portfolio" href="portfolio-4.php" data-id="4">
                                            <img src="images/portfolio_item_04.jpg" alt="" />
                                            <div class="portfolio-text-holder">
                                                <p class="portfolio-desc">ARCHITECTURE</p>
                                                <p class="portfolio-title">Pillars</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>                           
                        </div>                        
                    </div>
                </div> 

                <!-- Pricing Section -->
                <div id="pricing" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            PRICING             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">

                            <div class="one_third">
                                <div class="pricing-table ">
                                    <p class="pricing-num">1</p>
                                    <div class="pricing-wrapper">                   
                                        <div class="pricing-table-header">
                                            <div class="pricing-table-title">BASIC</div>                                                
                                        </div>
                                        <div class="pricing-table-price">$25</div>
                                        <div class="pricing-table-desc">PER MONTH</div>
                                        <div class="pricing-table-content-holder">  
                                            <ul>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Unlimited Support
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    5GB Server Space
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    2 Users per Project
                                                </li>
                                                <li class="pricing-list included-no">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Email Integration
                                                </li>
                                                <li class="pricing-list included-no">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Unlimited Download
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-button">
                                        <a href="#" class="button scroll">
                                            CHOOSE PLAN
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="one_third">
                                <div class="pricing-table ">
                                    <p class="pricing-num">2</p>
                                    <div class="pricing-wrapper">                   
                                        <div class="pricing-table-header">
                                            <div class="pricing-table-title">ADVANCED</div>                                                
                                        </div>
                                        <div class="pricing-table-price">$50</div>
                                        <div class="pricing-table-desc">PER MONTH</div>
                                        <div class="pricing-table-content-holder">  
                                            <ul>                                                 
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Unlimited Support
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    5GB Server Space
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    2 Users per Project
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Email Integration
                                                </li>
                                                <li class="pricing-list included-no">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Unlimited Download
                                                </li>
                                            </ul>                                            
                                        </div>
                                    </div>
                                    <div class="pricing-button">
                                        <a href="#" class="button scroll">
                                            CHOOSE PLAN
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="one_third last">
                                <div class="pricing-table ">
                                    <p class="pricing-num">3</p>
                                    <div class="pricing-wrapper">                   
                                        <div class="pricing-table-header">
                                            <div class="pricing-table-title">EXPERT</div>                                                
                                        </div>
                                        <div class="pricing-table-price">$75</div>
                                        <div class="pricing-table-desc">PER MONTH</div>
                                        <div class="pricing-table-content-holder">  
                                            <ul>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Unlimited Support
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    5GB Server Space
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    2 Users per Project
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Email Integration
                                                </li>
                                                <li class="pricing-list included-yes">
                                                    <span class="fa fa-check" aria-hidden="true"></span>
                                                    Unlimited Download
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-button">
                                        <a href="#" class="button scroll">
                                            CHOOSE PLAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div> 

                <!-- Team Section -->
                <div id="team" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            TIME             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <div class="member member-left">
                                <img src="images/eu_vertical.jpeg" alt="" data-threshold="200 200" data-jarallax-element="60 0">
                                <div class="member-info">
                                    <p class="member-postition">PROGRAMADOR</p>
                                    <h5 class="member-name">Lucas Matutani</h5>
                                    <div class="member-content">
                                        <p>
                                            Code the energy hidden in matter citizens of distant epochs sun. Citizens of distant epochs encyclopaedia galant ctica the ash of stellar alchemy Vangelis white dwarf adipisci velit. Nemo enim ipsam volupta tem quia voluptas sit aspernatur aut odit aut fugit radio telescope quis nostrum exercitatio nem ullam corporis suscipit laboriosam quis.
                                        </p>
                                        <div class="member-social-holder" data-jarallax-element="0 30">
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-instagram"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-vimeo"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-behance"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            
                            <div class="member big-screen member-right">
                                <div class="member-info">
                                    <img src="images/eu_vertical.jpeg" alt="" data-threshold="-200 0" data-jarallax-element="60 0" />
                                    <p class="member-postition">DESIGNER</p>
                                    <h5 class="member-name">John Williams</h5>
                                    <div class="member-content">
                                        <p>
                                            Code the energy hidden in matter citizens of distant epochs sun. Citizens of distant epochs encyclopaedia galant ctica the ash of stellar alchemy Vangelis white dwarf adipisci velit. Nemo enim ipsam volupta tem quia voluptas sit aspernatur aut odit aut fugit radio telescope quis nostrum exercitatio nem ullam corporis suscipit laboriosam quis.
                                        </p>
                                        <div class="member-social-holder" data-jarallax-element="0 30">
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-instagram"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-vimeo"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-behance"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="member member-left">
                                <img src="images/about_item_03.jpg" alt="" data-threshold="0 0" data-jarallax-element="60 0" />
                                <div class="member-info">
                                    <p class="member-postition">DEVELOPER</p>
                                    <h5 class="member-name">Vanessa Doe</h5>
                                    <div class="member-content">
                                        <p>
                                            Code the energy hidden in matter citizens of distant epochs sun. Citizens of distant epochs encyclopaedia galant ctica the ash of stellar alchemy Vangelis white dwarf adipisci velit. Nemo enim ipsam volupta tem quia voluptas sit aspernatur aut odit aut fugit radio telescope quis nostrum exercitatio nem ullam corporis suscipit laboriosam quis.
                                        </p>
                                        <div class="member-social-holder" data-jarallax-element="0 30">
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-instagram"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-vimeo"></span>
                                                </a>
                                            </div>
                                            <div class="social">
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-behance"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div> 

                <!-- Skills Section -->
                <div id="skills" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            SKILLS             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">

                            <div class="one_half ">
                                <p class="title-description-up">
                                    OUR NUMBERS
                                </p>
                                <h2 class="entry-title medium-text">
                                    Check our <br>
                                    Skills
                                </h2>
                                <p>
                                    Code the energy hidden in matter citizens of distant epochs from which we spring drake equation perga inconspicuous motespatch clean designed code and energy matter.
                                </p>
                                <br>
                                <div class="button-holder text-left">
                                    <a href="#portfolio" class="button">LEARN MORE</a>
                                </div>
                            </div>

                            <div class="one_half last">
                                <div class="skills-holder">

                                    <div class="skill-holder">
                                        <div class="skill-percent">75%</div>
                                        <div class="skill-text">
                                            <span>Creativity</span>
                                            <div class="skill">
                                                <div class="skill-fill" data-fill="75%"></div>                                                    
                                            </div>                                                
                                        </div>                                            
                                    </div>

                                    <div class="skill-holder">
                                        <div class="skill-percent">45%</div>
                                        <div class="skill-text">
                                            <span>Cooking</span>
                                            <div class="skill">
                                                <div class="skill-fill" data-fill="45%"></div>                                                    
                                            </div>                                                
                                        </div>                                            
                                    </div>

                                    <div class="skill-holder">
                                        <div class="skill-percent">90%</div>
                                        <div class="skill-text">
                                            <span>PhP</span>
                                            <div class="skill">
                                                <div class="skill-fill" data-fill="90%"></div>                                                    
                                            </div>                                                
                                        </div>                                            
                                    </div>

                                    <div class="skill-holder">
                                        <div class="skill-percent">65%</div>
                                        <div class="skill-text">
                                            <span>Marketing</span>
                                            <div class="skill">
                                                <div class="skill-fill" data-fill="65%"></div>                                                    
                                            </div>                                                
                                        </div>                                            
                                    </div>

                                    <div class="skill-holder">
                                        <div class="skill-percent">85%</div>
                                        <div class="skill-text">
                                            <span>Design</span>
                                            <div class="skill">
                                                <div class="skill-fill" data-fill="85%"></div>                                                    
                                            </div>                                                
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div> 

                <!-- Millstones Section -->
                <div id="millstones" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            MILESTONES             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <ul class="milestones-holder">

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">135</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Terabytes of files uploaded</h5>
                                        <p class="milestone-text">
                                            Nulla ac laoreet est, a mollis nibh. Aenean eget auctor velit quis pharetra.
                                        </p>
                                    </div>
                                </li>

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">67K</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Lines of CSS code wrote</h5>
                                        <p class="milestone-text">
                                            Nulla ac laoreet est, a mollis nibh. Aenean eget auctor velit quis pharetra.
                                        </p>
                                    </div>
                                </li>

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">74</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Cups of coffee drinked per week</h5>
                                        <p class="milestone-text">
                                            Nulla ac laoreet est, a mollis nibh. Aenean eget auctor velit quis pharetra.
                                        </p>
                                    </div>
                                </li>

                                <li class="milestone">
                                    <div class="milestone-info-left">
                                        <p class="milestone-num">389</p>
                                    </div>
                                    <div class="milestone-info-right">
                                        <h5>Happy clients served this year</h5>
                                        <p class="milestone-text">
                                            Nulla ac laoreet est, a mollis nibh. Aenean eget auctor velit quis pharetra.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>                        
                    </div>
                </div> 

                <!-- Contact Section -->
                <div id="contact" class="section">                   
                    <div class="page-title-holder">
                        <h3 class="entry-title">
                            CONTATO             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <div class="one_half ">
                                <p class="title-description-up">FALE CONOSCO</p>
                                <h2 class="entry-title medium-text">
                                    Lets start <br>
                                    Working
                                </h2>
                                <p>
                                    Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept one we are.
                                </p>
                                <br>
                                <div class="social">
                                    <a href="#" target="_blank">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#" target="_blank">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#" target="_blank">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#" target="_blank">
                                        <span class="fa fa-vimeo"></span>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#" target="_blank">
                                        <span class="fa fa-behance"></span>
                                    </a>
                                </div>
                            </div>
                            
                            
                            <div class="one_half last ">
                                <form class="contact-form" action="index.php" method="POST">
                                    <p>
                                        <input id="name" type="text" name="name" placeholder="Nome">
                                    </p>
                                    <p>
                                        <input id="email" type="email" name="email" placeholder="Email">
                                    </p>                                    
                                    <p>
                                        <input id="subject" type="text" name="subject" placeholder="Assunto">
                                    </p>
                                    <p>
                                        <textarea id="content" name="content" placeholder="Mensagem"></textarea>
                                    </p>
                                    <p class="contact-submit-holder">
                                        <input type="submit" value="ENVIAR" name="submit"
                                        id="submit">
                                    </p>  
                                </form>
                            </div>                            
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div> 
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-content center-relative">
                    <!-- <div class="footer-logo">
                        <img src="images/footer_logo.png" alt="Seppo" />
                    </div>         -->
                    <div class="footer-logo-divider"></div>
                    <div class="footer-mail">            
                        <a href="mailto:contato.b12digital@gmail.com">contato.b12digital@gmail.com</a>
                    </div>
                    <div class="footer-social-divider"></div>
                    <!-- <div class="social-holder">
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-behance"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-dribbble"></span>
                        </a>
                    </div> -->

                    <div class="copyright-holder">
                        © 2022 Lucas Matutani           
                    </div>
                </div>
            </footer>
        </div>

        <!--Load JavaScript-->
        <script src="js/jquery.js"></script>			                                       
        <script src="js/jquery.sticky.js"></script>			                                       
        <script src="js/tipper.js"></script>			                                       
        <script src="js/jarallax.js"></script>			                                       
        <script src="js/jarallax-element.min.js"></script>			                                       
        <script src='js/imagesloaded.pkgd.js'></script>                
        <script src='js/jquery.fitvids.js'></script>                
        <script src='js/jquery.smartmenus.min.js'></script>                                 
        <script src='js/isotope.pkgd.js'></script>                                                 
        <script src='js/owl.carousel.min.js'></script>                          
        <script src='js/jquery.sticky-kit.min.js'></script>                          
        <script src='js/main.js'></script>
    </body>
</html>