<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once './connection.php';
// require './lib\vendor\autoload.php';
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

        <link rel="shortcut icon" href="images/favicon.ico" />    
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
                                    <a href="#home">Home</a>
                                </li>
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#about">Sobre</a>
                                </li>
                                <li>
                                    <a href="#news">News</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#pricing">Pricing</a>
                                </li>
                                <li>
                                    <a href="#team">Team</a>
                                </li>
                                <li>
                                    <a href="#skills">Skills</a>
                                </li>
                                <li>
                                    <a href="#millstones">Milestones</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
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
                                        <h4>Preciese</h4>
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
                                        <h4>Support</h4>
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
                                        <h4>Responsive</h4>
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
                            PORTFOLIO                        
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
                            TEAM             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <div class="member member-left">
                                <img src="images/about_item_01.jpg" alt="" data-threshold="0 0" data-jarallax-element="60 0">
                                <div class="member-info">
                                    <p class="member-postition">CEO</p>
                                    <h5 class="member-name">Marty Stone</h5>
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
                                    <p class="member-postition">DESIGNER</p>
                                    <h5 class="member-name">John Williams</h5>
                                    <div class="member-content">
                                        <p>
                                            Code the energy hidden in matter citizens of distant epochs sun. Citizens of distant epochs encyclopaedia galant ctica the ash of stellar alchemy Vangelis white dwarf adipisci velit. Nemo enim ipsam volupta tem quia voluptas sit aspernatur aut odit aut fugit radio telescope quis nostrum exercitatio nem ullam corporis suscipit laboriosam quis.
                                        </p>
                                        <div class="member-social-holder" data-jarallax-element="0 -30">
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
                                <img src="images/about_item_02.jpg" alt="" data-threshold="0 0" data-jarallax-element="60 0" />
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
                            CONTACT             
                        </h3>
                    </div>
                    <div class="section-wrapper block content-1170 center-relative">                                                
                        <div class="content-wrapper">
                            <div class="one_half ">
                                <p class="title-description-up">CONTACT US</p>
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
                            <?php
                            $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                            if(!empty($data ['SendAddMsg'])){
                                var_dump($data);
                                $query_msg = "INSERT INTO message_form (name, email, subject, content, created) VALUES (:name, :email, :subject, :content, NOW())";
                                $add_msg = $conn -> prepare ($query_msg);

                                $add_msg -> bindParam(':name', $data['name'], PDO::PARAM_STR);
                                $add_msg -> bindParam(':email', $data['email'], PDO::PARAM_STR);
                                $add_msg -> bindParam(':subject', $data['subject'], PDO::PARAM_STR);
                                $add_msg -> bindParam(':content', $data['content'], PDO::PARAM_STR);
                                $add_msg -> execute();

                                if($add_msg -> rowCount()){
                                    $mail = new PHPMailer(true);
                                    try {
                                        $mail->CharSet = 'UTF-8';
                                        $mail->isSMTP();
                                        $mail->Host = 'smtp.mailtrap.io';
                                        $mail->SMTPAuth = true;
                                        $mail->Username = 'a3d93f3ccdb6b8';
                                        $mail->Password = '6bfafbd5283f3e';
                                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                        $mail->Port = 2525;
                    
                                        //Enviar e-mail para o cliente
                                        $mail->setFrom('lucasmatutani@gmail.com', 'Atendimento');
                                        $mail->addAddress($data['email'], $data['name']);
                    
                                        $mail->isHTML(true);
                                        $mail->Subject = 'Recebi a mensagem de contato';
                                        $mail->Body = "Prezado(a) " . $data['name'] . "<br><br>Recebi o seu e-mail.<br>Será lido o mais rápido possível.<br>Em breve será respondido.<br><br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                                        $mail->AltBody = "Prezado(a) " . $data['name'] . "\n\nRecebi o seu e-mail.\nSerá lido o mais rápido possível.\nEm breve será respondido.\n\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];
                    
                                        $mail->send();
                                        
                                        $mail->clearAddresses();
                    
                                        //Enviar e-mail para o colaborador da empresa
                                        $mail->setFrom('atendimento@celke.com.br', 'Atendimento');
                                        $mail->addAddress('kelly@celke.com.br', 'Kelly');
                    
                                        $mail->isHTML(true);
                                        $mail->Subject = $data['subject'];
                                        $mail->Body = "Nome: " . $data['name'] . "<br>E-mail: " . $data['email'] . "<br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                                        $mail->AltBody = "Nome: " . $data['name'] . "\nE-mail: " . $data['email'] . "\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];
                    
                                        $mail->send();
                                        unset($data);
                                        echo '<div class="alert alert-success">Message sent successfully</div>';                    
                                    } catch (Exception $e) {
                                        echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
                                    }
                                } else {
                                    echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
                                }
                            }
                                    
                            ?>
                            
                            <div class="one_half last ">
                                <div class="contact-form">
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
                                        <input type="submit" value="ENVIAR" name="SendAddMsg">
                                    </p>  
                                </div>
                            </div>                            
                            <div class="clear"></div>
                        </div>                        
                    </div>
                </div> 
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-content center-relative">
                    <div class="footer-logo">
                        <img src="images/footer_logo.png" alt="Seppo" />
                    </div>        
                    <div class="footer-logo-divider"></div>
                    <div class="footer-mail">            
                        <a href="mailto:hello@site.com">hello@cocobasic.com</a>
                    </div>
                    <div class="footer-social-divider"></div>
                    <div class="social-holder">
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
                    </div>

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