<?php

  include("conf_links.php");

?>

<!DOCTYPE html>
<html lang='es-CO'>

 <head>

    <meta charset="utf-8" />

    <title>Fragma Club</title>

    <link rel="stylesheet" type="text/css" href="css/estilo-gomo.css" media="screen" />

    <link rel="shortcut icon" type="image/png"  href="favicon.png" />

    <link rel="canonical" href="http://fragmaclub.com/"/>

     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/modernizr.js"></script>

     <!--
          Gomosoft "Creando soluciones en software"
          http://gomosoft.com
     -->


     <script type="text/javascript" >

    Modernizr.load();

         $(window).load(function(){

             if(!$.browser.mozilla){

                $("body").fadeIn(1000,function(){
                    $("nav.redes").fadeIn(1000);
                });

             }
             else{

               $("body , nav.redes").css({display:"block",opacity:"0.1"});

               $("body").animate({opacity:"0.99"},1000,function(){

                   $("nav.redes").animate({opacity:"0.99"},1000);

               });
             }


         });

     </script>



 </head>

  <body>

   <figure>
       <span class="sprite fondo"></span>
   </figure>

    <header id="cabeza">

        <figure>
              <span class="sprite logo"></span>
        </figure>
        <figure>
            <span class="sprite construcion"></span>
        </figure>

    </header>

         <section id="construcion">
             
             
             <nav class="sprite redes">


               <ul >

                   <li class="left">

                   </li>

                   <li class="left">
                       <figure class="left">
                           <a href="<?php echo face; ?> " target="_blank">
                               <span class="sprite red face"></span>
                           </a>
                       </figure>

                       <a href="<?php echo face; ?> " target="_blank" class="left">
                        <span class="texto left">FRAGMA CARTAGENA</span>
                       </a>

                   </li>

                   <li class="left">
                       <figure class="left">
                           <a href="<?php echo twitter; ?> " target="_blank">
                               <span class="sprite red twitter"></span>
                           </a>
                       </figure>

                       <a href="<?php echo twitter; ?> " target="_blank" class="left">
                           <span class="texto left">@FRAGMACARTAGENA1</span>
                       </a>

                   </li>

                   <li class="left">
                       <figure class="left" >
                           <a href="<?php echo youtube; ?> " target="_blank">
                               <span class="sprite red youtube"></span>
                           </a>
                       </figure>

                       <a href="<?php echo youtube; ?> " target="_blank" class="left">
                          <span class="texto">FRAGMA CLUB CARTAGENA</span>
                        </a>

                   </li>

                   <li class="left">
                       <figure class="left">
                           <a href="#!">
                               <span class="sprite red bbm"></span>
                           </a>
                       </figure>
                       <span class="texto left">215E330F</span>
                   </li>


               </ul>
             </nav>
            

         </section>

  </body>

</html>