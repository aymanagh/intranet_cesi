<!DOCTYPE html>
<html>
    <head>
        <!-- import Header -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
        <?php include('header.php') ?>
        <title>Accueil</title>
    </head>
    <body  class="my-body">
    <!-- import Navbar -->
    <?php include('navbar.php')?>
        <!-- Container -->
        <div class="container container-cesi " style="max-width : 100em; background-color: #cecdcb">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="w3-animate-bottom">
                        <!-- <h1>Accueil</h1> -->
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col text-center"><h4 class=" font-weight-bold">Mon emploi du temps</h4></div>
                <div class="col text-center"><h4 class=" font-weight-bold">Mes notifications</h4></div>
                <div class="col text-center"><h4 class=" font-weight-bold">Evènements</h4></div>
            </div>
            <div class="row ml-4 mr-4 mb-5">
                <div class="col border border-dark rounded-lg card-planning">
                    <div class="row">
                        <div class="col-sm-12 text-center card-planning-title">
                            14/05/2020 Remise PFR - Lot 1
                        </div>
                    </div>
                    <div class="mt-2" style="color: white">
                        <div class="row col-sm-12">25 mars 2020</div>
                        <div class="row">
                            <div class="col-sm-6 font-weight-bold">8h45 - 12h15</div>
                            <div class="col-sm-6 font-weight-bold">Création WEB</div>
                        </div>
                        <hr color="white">
                    </div>
                    <div class="mt-2" style="color: white">
                        <div class="row col-sm-12">25 mars 2020</div>
                        <div class="row">
                            <div class="col-sm-6 font-weight-bold">13h30 - 17h00</div>
                            <div class="col-sm-6 font-weight-bold">Création WEB</div>
                        </div>
                        <hr color="white">
                    </div>
                    <div class="mt-2" style="color: white">
                        <div class="row col-sm-12">26 mars 2020</div>
                        <div class="row">
                            <div class="col-sm-6 font-weight-bold">8h45 - 12h15</div>
                            <div class="col-sm-6 font-weight-bold">Création WEB</div>
                        </div>
                        <hr color="white">
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-light font-weight-bold">ACCES A L'EMPLOI DU TEMPS</button>
                        </div>
                    </div>
                </div>
                <div class="col border border-dark ml-1 mr-1 rounded-lg card-time">
                    <div>
                        <div class="row notif" style="margin-top: 1em;">
                            <div class="col-sm-2">
                                <img src="./assets/notif2.svg" alt="img-notif">
                            </div>
                            <div class="col-sm-10">
                                Livret de suivi en entreprise
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-5 font-weight-bold">
                                Michel MICHEL
                            </div>
                            <div class="col-sm-5 text-right font-weight-bold">
                                24/09/2020
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right font-weight-bold">
                                Document mis a jour 
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div>
                        <div class="row notif">
                            <div class="col-sm-2">
                                <img src="./assets/notif2.svg" alt="img-notif">
                            </div>
                            <div class="col-sm-10">
                                Projet fil rouge
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-5 font-weight-bold">
                                Michel MICHEL
                            </div>
                            <div class="col-sm-5 text-right font-weight-bold">
                                24/09/2020
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right font-weight-bold">
                                Document mis a jour 
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div>
                        <div class="row notif">
                            <div class="col-sm-2">
                                <img src="./assets/notif2.svg" alt="img-notif">
                            </div>
                            <div class="col-sm-10">
                                Rendez vous tuteurs
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-5 font-weight-bold">
                                Michel MICHEL
                            </div>
                            <div class="col-sm-5 text-right font-weight-bold">
                                24/09/2020
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right font-weight-bold">
                                Document mis a jour 
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col border border-dark rounded-lg overflow-auto actu card-info">
                    <div class="row event">
                        <div class="col-sm-2">
                            <img src="./assets/notif.svg" alt="img-notif" style="background-color: #ffc853; border-radius: 2em;">
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col text-center">
                                    <strong class="text-event">Evenement 1</strong> 
                                </div>
                            </div>
                            <div class="row card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem,
                                convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique,
                                ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies.
                                Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis.
                                Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 text-left" style="padding-left: 0">
                                    <strong>Mai 2020</strong> 
                                </div>
                                <div class="col-sm-6 text-right">
                                    <strong>Le Mans</strong>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row event">
                        <div class="col-sm-2">
                            <img src="./assets/notif.svg" alt="img-notif" style="background-color: #ffc853; border-radius: 2em;">
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col text-center">
                                    <strong class="text-event">Evenement 2</strong> 
                                </div>
                            </div>
                            <div class="row card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem,
                                convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique,
                                ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies.
                                Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis.
                                Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 text-left" style="padding-left: 0">
                                    <strong>Mai 2020</strong> 
                                </div>
                                <div class="col-sm-6 text-right">
                                    <strong>Le Mans</strong>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row event">
                        <div class="col-sm-2">
                            <img src="./assets/notif.svg" alt="img-notif" style="background-color: #ffc853; border-radius: 2em;">
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col text-center">
                                    <strong class="text-event">Evenement 3</strong> 
                                </div>
                            </div>
                            <div class="row card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem,
                                convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique,
                                ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies.
                                Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis.
                                Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 text-left" style="padding-left: 0">
                                    <strong>Mai 2020</strong> 
                                </div>
                                <div class="col-sm-6 text-right">
                                    <strong>Le Mans</strong>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center"><h4 class=" font-weight-bold">Vie de campus</h4></div>
                <div class="col text-center"><h4 class=" font-weight-bold">Actualités CESI</h4></div>
                <div class="col text-center"><h4 class=" font-weight-bold">Tweets</h4></div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="col border border-dark rounded-lg card-info">
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/covid-19.jpg" alt="img-covid">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">COVID-19</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Informations concernant le virus.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/covid-19.jpg" alt="img-covid">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">COVID-19</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Informations concernant le virus.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/covid-19.jpg" alt="img-covid">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">COVID-19</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Informations concernant le virus.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/covid-19.jpg" alt="img-covid">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">COVID-19</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Informations concernant le virus.</div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col border border-dark ml-1 mr-1 rounded-lg card-planning card-actu-global">
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/linus.jpg" alt="img-linus">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">Le mot de bienvenue du Président Directeur Général</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Linus Torvalds vous souhaite la bienvenue sur votre espace numérique de travail.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/steve.jpg" alt="img-linus">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">Le mot de bienvenue de ce bon vieux Steve</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Steve Jobs vous souhaite la bienvenue au CESI.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/steve.jpg" alt="img-linus">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">Le mot de bienvenue de ce bon vieux Steve</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Steve Jobs vous souhaite la bienvenue au CESI.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/steve.jpg" alt="img-linus">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">Le mot de bienvenue de ce bon vieux Steve</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Steve Jobs vous souhaite la bienvenue au CESI.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-2 card-actu">
                        <div class="col-sm-6">
                            <img class="img-actu" src="./assets/steve.jpg" alt="img-linus">
                        </div>
                        <div class="col-sm-6">
                            <div class="row font-weight-bold">Le mot de bienvenue de ce bon vieux Steve</div>
                            <div class="row">24/03/2020</div>
                            <div class="row font-weight-bold">Steve Jobs vous souhaite la bienvenue au CESI.</div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col border border-dark rounded-lg card-info">
                    <a class="twitter-timeline" href="https://twitter.com/GroupeCESI?ref_src=twsrc%5Etfw">Tweets by GroupeCESI</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                </div>
            </div><hr>
        </div>
        <!-- Import Footer-->
        <section id="footer">
            <?php include('footer.php') ?>
        </section>
    </body>
</html>