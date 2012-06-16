

<?php

  include("conf_links.php");

 
 class obj_linkeable{

        public $src,$title,$href;

        function __construct($src,$title,$href){


               $this->src = $src;
               $this->title = $title;
               $this->href = $href;

        }

  }


 class texto{

        public $title,$texto;

        function __construct($title,$texto){

     
               $this->title = $title;
               $this->texto = $texto;

        }

  }

 
    $obj_home = array(

      'rumbas' => array(
       
       'viernes' => new obj_linkeable($paths["rumbas"]."viernes.jpg","Rumba Salsa","#!"),
       'sábado' => new obj_linkeable($paths["rumbas"]."sabado.jpg","Rumba ELectronica","#!")       

          ),

      'sliders' => array(
       
        'slider-bajo' => array(

              "sala" => new obj_linkeable($paths["slider-bajo"]."slider-b.jpg","Sala Principal","#!"),
              "baño" => new obj_linkeable($paths["slider-bajo"]."slider-b.jpg","Sala Principal","#!")

          ),

         'slider-alto' => array(
                       


          )

        ),
      'texto' => array(

                  "nota-col1-baja" => new texto("sala crossover",'<p> En nuestra sala Crossover se combinan ritmos de todos los géneros enmarcada por la arquitectura histórica que transporta al pasado, esta es la sala ideal para disfrutar de los últimos temas latinos del momento, llevados a otro nivel por Dj Yamil Macia. 
                                                            </p>')

         )

      );


?>

<!DOCTYPE html>
<html lang='es-CO'>

 <head>

    <meta charset="utf-8" />

    <title>Fragma Club</title>

    <link rel="stylesheet" type="text/css" href="css/html5_reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/ini.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/estilo-gomo.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/sala.css" media="screen" />
   
   <?php
        
         if($_GET){
       
              $sec = $_GET["sec"];

              switch ($sec) {

                 case "1":
                       echo '<link rel="stylesheet" type="text/css" href="css/indie-lounge.css" media="screen" />';
                  break;

                 case "2":
                       echo '<link rel="stylesheet" type="text/css" href="css/hip-house.css" media="screen" />';
                  break;
                
                default:

                     echo '<link rel="stylesheet" type="text/css" href="css/crossover.css" media="screen" />';
                        
                  break;
                  
              }

         }

   ?>

    <link rel="shortcut icon" type="image/png"  href="favicon.png" />

    <link rel="canonical" href="http://fragmaclub.com/" />

     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/less.js"></script>
     <script type="text/javascript" src="js/modernizr.js"></script>
     <script type="text/javascript" src="js/carousel.js"></script>

     <!--
          Gomosoft "Creando soluciones en software"
          http://gomosoft.com
     -->


     <script type="text/javascript" >

       less.watch();
       Modernizr.load();

         $(window).load(function(){    



               
                 $(".slide-bajo .img-cont").cycle({ 
                           fx:     'fade', 
                           speed:  'slow', 
                           timeout: 6000, 
                           next:   '.slide-bajo .controles .slider-sig', 
                           prev:   '.controles .slider-ant',
                           pause:1
                        });
                 

         });

     </script>



    </head>

      <body>
        


        
          <header> 

 
                <nav id="social-repro">
                                       

                  <ul>
                      <li>
                         <span id="sigueme">
                        Siguenos
                         </span>
                      </li>  

                      <li>
                          <figure>  <a href="<?php echo youtube; ?>" target="_blank"> <span class="ytb" style="width:23px"></span> </a></figure>
                      </li>
                      <li>
                          <figure>  <a href="<?php echo fsqr; ?>" target="_blank"> <span class="fsqr"></span> </a></figure>
                      </li> 
                      <li>
                          <figure>  <a href="<?php echo twitter; ?>" target="_blank"> <span class="twitter"></span> </a></figure>
                      </li>
                      <li>
                          <figure>  <a href="<?php echo face; ?>" target="_blank"> <span class="fbk"></span> </a></figure>
                      </li>

                       <li id="repro">
                       </li>


                  </ul>
         

                </nav>



                <nav id="menu-principal">

                   <ul>

                   <li >
                      <figure><a href="<?php echo home; ?>"><span class="home"></span></a></figure>                      
                    </li>

                    <li style="width:100px" class="salas">
                      <a href="<?php echo pri_href; ?>"><?php echo pri_name; ?></a>

                        <ul>

                             <li>
                                <a href="<?php echo cross; ?>"><span></span> &nbsp; &nbsp; &nbsp;Crossover</a>
                             </li>

                             <li>                                 
                                 <a href="<?php echo hip; ?>"><span></span>&nbsp; &nbsp; &nbsp;Hip House</a>
                             </li>

                             <li>                              
                                 <a href="<?php echo indi; ?>"><span></span>&nbsp; &nbsp; &nbsp;Indie Lounge</a>
                             </li>

                        </ul>

                    </li>

                    <li>
                      <a href="<?php echo seg_href; ?>"><?php echo seg_name; ?></a>
                    </li>

                    <li>
                      <a href="<?php echo ter_href; ?>"><?php echo ter_name; ?></a>
                    </li>

                    <li>
                      <a href="<?php echo cua_href; ?>"><?php echo cua_name; ?></a>
                    </li>

                    <li>
                      <a href="<?php echo qui_href; ?>"><?php echo qui_name; ?></a>
                    </li>

                    <li>
                      <a href="<?php echo sex_href; ?>"><?php echo sex_name; ?></a>
                    </li>
                  </ul>

                </nav>
    

          </header>             

          <div id="centro" >




                     <section id="info-centro" >

                    <div class="cont" >


                <div class="cont-text overAuto" >
                          <figure class="txt-elig">
                             <span class="texto-eliges"></span>
                          </figure>
                </div>
                   
                               
                            
                          <div class="img-cont">
                            <img src="img/discos.png" alt="" height="448" class="slide"/>
                          </div>

                   </div>

                  </section>

                     

                  
                  <section id="info-centro-baja">
                            
                            <div class="cont">
                                    
                                <div class="cols-cont">

                                        <div class="item">
                                              <ul>
                                                 <li>
                                                    <figure>
                                                        <a href="/"><span class="logo-fragma"></span></a>
                                                    </figure>
                                                 </li>

                                                 <li class="rotante">

                                                       <div class="slide-bajo">

                                                           <div class="img-cont">

                                                             <?php


                                                                  foreach ($obj_home["sliders"]["slider-bajo"] as $key => $value) {
                                                                    
                                                                              
                                                 echo "<a href='{$value->href}' title='{$value->title}'>  <img src='{$value->src}' alt='' />  </a>";

                                                                  }

                                                             ?>


                                                          </div>

                                                            <nav class="controles">

                                                                 <span class="slider-sig"></span>
                                                                 <span class="slider-ant"></span>

                                                            </nav>

                                                      </div>

                                                 </li>


                                                 <li class="parrafo">

                                                         <div class="nota">

                                                               <?php

                                                                 $obj_nota = $obj_home["texto"]["nota-col1-baja"];

                                                                  if($obj_nota->title != "")
                                                                       echo "<hgroup> <h1>{$obj_nota->title}</h1> </hgroup>";

                                                                  echo $obj_nota->texto;

                                                               ?>

                                                         </div>

                                                 </li>

                                              </ul>
                                          </div>

                                          <div class="item -s">
                                              <ul>
                                                 <li class="tour">

                                                      <div class="caja-cute">
                                                            <img src="img/djs/yamil.jpg" alt=""/>                                                      

                                                     </div>

                                                 </li>
                                                     
                                                     <li class="nombre-dj">
                                                      
                                                        <hgroup>
                                                           <h1>yamil macia</h1>
                                                        </hgroup>

                                                        <p> 
                                                          Su gusto y admiración por la música latina lo lleva a tener un estilo muy particular,  Yamil deja ver en sus sesiones originalidad, pasión y mucha energía. 
                                                        </p><div></div>
                                                      <div class="dj-contacto-cont">
                                                        
                                                        <h1>booking</h1>
                                                        
                                                        <figure>
                                                          <span class="cross-mail"></span>
                                                          <a href="#!" style="text-decoration:underline; line-height:1.2">nombre@dominio.com </a>
                                                        </figure>    

                                                        <figure>
                                                          <span class="cross-tel"></span>
                                                          <a href="#!">(57) 555 555 5555 </a>
                                                        </figure>    

                                                        <figure>
                                                          <span class="cross-bb"></span>
                                                          <a href="#!">PIN55pin55</a>
                                                        </figure> 

                                                            <nav>
                                                               <a href="#!"> <span class="sprite- icono-social- fbk"></span> </a>
                                                                <a href="#!"> <span class="sprite- icono-social- twitter"></span> </a>
                                                            </na>   

                                                      </div>

                                                     </li>                                                     


                                              </ul>
                                          </div>

                                          <aside>

                                            <hgroup>
                                                <h1>artistas invitados</h1>
                                            </hgroup>
                                             
                                              <ul>

                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                   <li>gomosoft</li>
                                                    
                                              </ul>

                                          </aside>

                                  </div>
                              
                            </div>

                  </section>


          </div>


           <footer>
              <div class="cont">

                    <span>
                       &copy; <b>fragma club</b> Todos los derechos reservados <?php echo date("Y"); ?>
                   </span>

                     <span>
                        Diseño <a href="<?php echo mkkk; ?>" target="_blank">Markakalinka</a>  | Programación <a href="<?php echo gomosoft; ?>" target="_blank">Gomosoft</a>
                    </span>   

                </div>
          </footer>



      </body>

  </html>