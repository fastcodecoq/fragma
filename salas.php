

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
    <link rel="stylesheet" type="text/css" href="css/salas.css" media="screen" />

    <link rel="shortcut icon" type="image/png"  href="favicon.png" />

    <link rel="canonical" href="http://fragmaclub.com/" />

     <script type="text/javascript" src="js/jquery.js"></script>     
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

                                                

                                                 <li class="parrafo" style="margin-top:40px">

                                                        <figure>
                                                            <img src="img/salas-gente.jpg" alt="" width="308" height="335" />
                                                        </figure>

                                                 </li>

                                              </ul>
                                          </div>

                                          <div class="item -s">

                                              <ul>
                                                 <li >

                                                  <figure class="titulo">
                                                    <span ></span>
                                                  </figure>

                                                 </li>
                                                     
                                                 <li >
                                                      
                                                   <p>
                                                      <b class="ita">Fragma Club</b> está situado en Cartagena de Indias, Colombia, hace parte del Antiguo Cuartel de la Brigada de Artillería dando frente al Baluarte de
                                                      la Cruz en la ciudad amurallada en el centro histórico de Cartagena.  La magia de Fragma  proviene gracias a la historia que poseen cada uno de los rincones donde se encuentra ubicado.

                                                      <br />  <br />

                                                Nace por la idea de brindarle al público Cartagenero e internacional un lugar diferente y único, donde sus asistentes puedan disfrutar la mejor rumba con tres estilos y espacios distintos; contamos con tres salas: Indie Lounge, Crossover y Hip House, cada una de ellas con un estilo en particular. 
                                                   </p>  

                                                   <br />

                                                    <hgroup>
                                                      <h1>conóce cada una de nuestras salas</h1>
                                                    </hgroup>

                                                    <nav class="menu-salas">

                                                         <ul>
                                                           
                                                           <li>
                                                              <a href="<?php echo cross; ?>">
                                                                  <span class="crossover"></span>
                                                              </a>
                                                           </li>

                                                           <li>
                                                              <a href="<?php echo hip; ?>">
                                                                  <span class="hip-house"></span>
                                                              </a>
                                                           </li>

                                                           <li>
                                                              <a href="<?php echo indi; ?>">
                                                                  <span class="indie-lounge"></span>
                                                              </a>
                                                           </li>

                                                          </ul>

                                                    </nav>

                                                 </li>

                                              </ul>

                                          </div>

                                          

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