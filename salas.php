

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

                  "nota-col1-baja" => new texto("",'  <p> Dedicamos la rumba a las buenas
experiencias, los buenos momentos. Luces, música, libertad y mucha diversión. Combinamos todo lo necesario para que tu visita sea inolvidable,  ponemos  a tu disposición 3 salas diferentes para que disfrutes de la mejor noche al estilo que prefieras. Tu eliges la sala, tu eliges tu noche! <b>Bienvenidos</b>.
                                                            </p>

                                                            <a href="#!">Conócenos</a>')

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

                 $("iframe").ready(function(){  
                     $("#LikeboxPluginPagelet").css({background:white});
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

                   <li>
                      <figure><a href="<?php echo home; ?>"><span class="home"></span></a></figure>
                    </li>

                    <li>
                      <a href="<?php echo pri_href; ?>"><?php echo pri_name; ?></a>
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

          <div id="centro">

 
                  <section id="info-centro">

                    <div class="cont">



                    <?php 

 
                
                    if( count($obj_home) > 0 ){

                        echo ' <div class="fiestas-cont">';

                                foreach($obj_home["rumbas"] as $k => $obj){


                                     echo '

                       
                             
                             <div class="item">
                              
                               <figure>
                                  <a href="'.$obj->href.'">
                                    <img src="'.($obj->src).'" alt="'.$obj->title.'" />
                                  </a>
                               </figure>

                             <a href="'.$obj->href.'" >

                               <span>
                                   '.$k.'                                    
                               </span>

                               </a>

                             </div>';


                                }

                                echo '</div>';

                              }


                     ?>
                   
                   
      
                         
                            
                          <div class="img-cont">
                            <img src="img/pareja.png" alt="" height="448" class="slide"/>
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
                                                            <img src="img/tour.png" alt=""/>

                                                            <a href="#!">
                                                              <span class="tour"></span>
                                                            </a>

                                                     </div>

                                                 </li>
                                                     
                                                     <li class="boletin">
                                                      
                                                      <hgroup>
                                                         <h1>suscríbete</h1>
                                                     </hgroup>

                                                       <form >

                                                            <input type="text" value="*Nombre" name="nombre"/>
                                                            <input type="text" value="*Email" name="correo"/>
                                                            <input type="text" value="*Movil" name="movil"/>
                                                            <input type="text" value="BB PIN" name="bbpin"/>

                                                            <input type="submit" value="enviar" />
                                                              <span class="obligatorio">* Campos Obligatorios</span>   
                                                              <span class="descripcion">Suscríbete y recibe toda la información sobre los eventos, las pormociones y descuento que
 tendremos en el Club.</span>                                                      
                                                       </form>

                                                     </li>

                                              </ul>
                                          </div>

                                          <aside>
                                              <ul>
                                                 <li>

                                                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=213583211996075";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

                                                      <div style="background:white;width:199px; height:252px;" class="overAuto overHidden">
                                                      <div class="fb-like-box" data-href="https://www.facebook.com/ClubFragmaCartagena" data-width="199" data-height="254" data-show-faces="true" data-stream="false" data-header="true"></div>
                                                      </div>

                                                  </li>

                                                  <li style="margin-top:15px">
                                                     <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 2,
  interval: 30000,
  width: 199,
  height: 260,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#8c8c8c',
      links: '#66ccff'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('fragmaclub1').start();
</script>
                                                  </li>
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