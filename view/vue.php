<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <style>
    <?php include "bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" ?>
    <?php include "portfo1.css" ?>

    </style>

    <script> 

    <?php  include "bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\js" ?>
    <?php include "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"?> 

    </script>

    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-default-navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavBar">
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavBar">
                <ul class="nav navbar-nav">

                    <li> <a href="#about">  MOI </a></li>
                    <li> <a href="#skills">  Competence </a></li>
                    <li> <a href="#experience"> experience  </a></li>
                    <li> <a href="#education">  education  </a></li>
                    <li> <a href="#portfolio">  portfolio  </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about" class="container-fluid">

        <div class="col-xs-8 col-md-4 profile-picture">

            <img src="view/photoProfil.jpg" id="photoprofil">
        </div>

        <div class="heading">

            <h1> Hello moi c est loup </h1>
            <h3> Apprenti Developpeur Web </h1>
            <a class="button1" href="view/cv.pdf" > Telecharger  </a>

        </div>


    </section>



    <section id="skills"> 

        <div class="red-divider">

        </div>

        <div class="heading">
            <h1> Competences </h1>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="20"
                        aria-valuemax="100" style="width:85%">

                        <h5 > HTML 85%  </h5>
                    </div> 

                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="20"
                        aria-valuemax="100" style="width:85%">

                        <h5 > CSS 85%  </h5>
                    </div> 

                </div>
            
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="20"
                        aria-valuemax="100" style="width:90%">

                        <h5 > JAVASCRIPT 90%  </h5>
                    </div> 

                </div>

            </div>
            <div class="col-md-6">


                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="20"
                        aria-valuemax="100" style="width:45%">

                        <h5 > JQUERY 45%  </h5>
                    </div> 

                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="20"
                        aria-valuemax="100" style="width:85%">

                        <h5 > BOOTSTRAP 85%  </h5>
                    </div> 

                </div>
            
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="20"
                        aria-valuemax="100" style="width:15%">

                        <h5 > ANGULAR 10%  </h5>
                    </div> 

                </div>


            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">

            <div class="white-divider">
            </div>

            <div class="heading">
                <h1> Experience professionnelle </h1>
            </div>

            <ul class="timeline">
                <li>
                    
                    <div class="timeline-badge">
                        <span class="glyphicon glyphicon-briefcase"></span>
                    </div>

                    <div class="timeline-panel-container">
                        <div class="timeline-panel"> 
                            <div class="timeline-heading" >
                                <h3> Le Geek Ruthenois   </h3>
                                <h1> D??veloppement html , css , php   </h1>
                                <p class="text-muted"> <small class="glyphicon glyphicon-time"> 2019 - 2021</small> </p>
                            </div>
                            <div class="timeline-body">
                                <p> Presentation du site , cr??ation du formulaire de contact , r??daction des mentions l??gales </p>
                            </div>
                        </div>
                    </div>
                    
                </li>

                <li>
                    
                    <div class="timeline-badge">
                        <span class="glyphicon glyphicon-briefcase"></span>
                    </div>

                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel"> 
                            <div class="timeline-heading" >
                                <h3> D??veloppement du jeu de la Vie  </h3>
                                <h1> Developpement html css , javascript   </h1>
                                <p class="text-muted"> <small class="glyphicon glyphicon-time"> 2019 - 2021</small> </p>
                            </div>
                            <div class="timeline-body">
                                <p> Cr??ation de la grille , gestion des ??v??nements (bouton d'arr??t , bouton 
                                    pas ?? pas , boutons pour lancer des configurations pr??d??finies 
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </li>

                <li>
                    
                    <div class="timeline-badge">
                        <span class="glyphicon glyphicon-briefcase"></span>
                    </div>

                    <div class="timeline-panel-container">
                        <div class="timeline-panel"> 
                            <div class="timeline-heading" >
                                <h3> Application Horaire Bus  </h3>
                                <h1> D??veloppement en Java  </h1>
                                <p class="text-muted"> <small class="glyphicon glyphicon-time"> 2019 - 2021</small> </p>
                            </div>
                            <div class="timeline-body">

                                <p> Scrum Master / Chef de Projet. D??veloppement d'une intelligence artificielle permettant 
                                    de g??rer les itin??raires d'un r??seau de bus. (D??veloppement d'algorithme li??s ?? la th??orie
                                    des graphes). 
                                </p>

                            </div>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </div>
    </section>


    <section id="education">
        
        <div class="container">

            <div class="row">
                <div class="red-divider">

                </div>
        
                <div  class="heading">
                    <h1> Education </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="education-block">
                        <h5> 2019 - 2020 </h5>
                        <span class="glyphicon glyphicon-education">  </span>
                        <h3>Lycee des Iles sous Le vent  </h3>
                        <H4> BAC ES MENTION  BIEN </H4>
                        <div class="red-divider">  </div>
                        <br><br>
                        <p> Option math expertes et SES (sciences ??conomiques et sociales )  </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="education-block">
                        <h5> 2019 - 2020 </h5>
                        <span class="glyphicon glyphicon-education">  </span>
                        <h3> IUT INFORMATIQUE RODEZ PREMIERE ANNEE   </h3>
                        <H4> 2 Semestres valid??s   </H4>
                        <div  class="red-divider">  </div>
                        <br><br>
                        <p> Premiere ann??e d IUT INFORMATIQUE </p>
                        <p> VALIDATION PROJET DE FIN D ANNEE Application horaire bus  </p>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="white-divider" id="trait-rouge"> </div>
                <div class="heading">
                    <h2 id="Portfolio12"> Porfollio </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="conteneur1GeekRuthenois" >
                    <a href="TD4/structure.html" id="GeekRuthenois" > le geek ruthenois   </a>
                </div>
                <div class="col-sm-6" id="conteneurJeuDeLaVie">
                    <a id="jeuDeLaVie" href="javaScript/jeuVie.html"> le jeu de la vie   </a>
		</div>
                

            </div>
            <div class="row">
            </div>
        </div>
    </section>
</body>
</html>
