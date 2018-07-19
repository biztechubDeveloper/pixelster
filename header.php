<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pixelster
 */

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Pixel ster html template</title>
      <link rel="icon" href="assets/images/ak.png" type="image/gif" sizes="16x16">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <section>
        <div class="hole-header">
        <div class="header-rof"> 
         <div class="container"> 
            <div class="row"> 
                 <div class="col-md-6"> 
                   <div class="header-text"> 
                     <p>Lorem ipsum dolor sit amet</p> 
                   </div> 
                 </div>
                 <div class="col-md-6"> 
                   <div class="header-phone"> 
                     <ul>
                       <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                       <li class="list-inline-item"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                       <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                       <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                       <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                     </ul>
                   </div> 
                 </div>
             </div>
         </div>
        </div>
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-xl-4">
                      <div class="logo-image">
                        <a href="#"><img src="assets/images/pixelster.png" alt=""></a>
                      </div>
                  </div>
                     <div class="col-md-9 col-xl-8">
                        <div class="main-menu">
                           <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Gallery</a></li>
                              <li><a href="#">Why Choose Us</a></li>
                              <li><a href="#">Contact</i></a></li>
                              <li><a href="#">Blog</i></a></li>
                              <li><a href="#">Free Trial</i></a></li>
                           </ul>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
            </div>
      </section>
