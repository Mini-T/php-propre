<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <script src="UIKit/js/uikit.js"></script>
    <link rel="stylesheet" href="UIKit/css/uikit.css">

</head>

<body>
    <div id="main">
        <header id="image">

            <div class="frat"></div>

            <div class="fratt">
                <div id="row1">
                    <a href="#">Espace membre</a>
                    <br>
                    <a href="#">S'inscrire</a>
                </div>
                <div id="row2">
                    <h1 class="titre">Fit it</h1>
                    <p class="bullshit">Pour se motiver et le rester, de l’initiation
                        pour les débutants à l’accompagnement au
                        quotidien dans votre pratique du fitness.</p>
                    <a href="#" class="bullshit">Inscrivez-vous</a>
                </div>
                <div id="row3"><a href="" class="bullshit" id="follow">Follow</a></div>
            </div>

        </header>
        <div id="avantages">
            <div id="first">
                <h2 class="stitle">Les avantages</h2>

            </div>
            <div id="second">
                <div class="av">
                    <i class="fas fa-credit-card cardm"></i>
                    <h4 class="cardt">Sans engagement</h4>
                    <p class="cardp">Résiliation à tout moment</p>
                </div>
                <div class="av">
                    <i class="fas fa-calendar-check cardm"></i>
                    <h4 class="cardt">Ouvert de 6h a 24h</h4>
                    <p class="cardp">7 jours sur 7 et 365 jours par an</p>
                </div>
                <div class="av">
                    <i class="fas fa-arrows-alt cardm"></i>
                    <h4 class="cardt">Des cours diversifiés</h4>
                    <p class="cardp">Une discipline différente
                        chaque jour</p>
                </div>
            </div>
        </div>
        <div id="coach">
            <div id="area">
                <H1 class="titre">Nos Coach</H1>
                <p id="areat" class="cardp">C'est parti pour une nouvelle année
                    Avec Fabien et Julie.</p>
                <a href="#" id="areatb">Réserver un coach personnel</a>
            </div>
            <div></div>

        </div>
        <div id="class">
            <h2 class="stitle">Nos meilleurs cours</h2>
        </div>

        //DEBUT CARROUSEL

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

            <ul class="uk-slider-items uk-grid">
                <li class="uk-width-3-4">
                    <div class="uk-panel">
                        <img src="Groupe 23.png" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>1</h1>
                        </div>
                    </div>
                </li>
                <li class="uk-width-3-4">
                    <div class="uk-panel">
                        <img src="Groupe 24.png" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>2</h1>
                        </div>
                    </div>
                </li>
                <li class="uk-width-3-4">
                    <div class="uk-panel">
                        <img src="Groupe 25.png" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>3</h1>
                        </div>
                    </div>
                </li>

            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            //FIN CAROUSEL

        </div>
        <div id="class1">
            <h2 class="stitle" id="offer">Nos offres</h2>
            <div id="cards">
                <div class="card">
                    <h2 class="cardtitle">SOFT</h2>
                    <div>
                        <p class="horaire">8h - 18h</p>
                        <H3 style="font-size: 30px; color:white; font-weight:bolder">19,99€ / mois</H3>
                    </div>
                    <div>
                        <ul id="liste">
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Sans engagement</p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Encadrement sportif</p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Cours collectifs Live & vidéos
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Cardio, musculation & Cross Training</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="frais">
                        <p class="prom">Soit une économie de 45€</p>
                        <p class="prom">FRAIS D'INSCRIPTION OFFERTS</p>
                    </div>
                    <button id="choix">Choisir</button>
                </div>
                <div class="card">
                    <h2 class="cardtitle">MEDIUM</h2>
                    <div>
                        <p class="horaire">6h - 18h</p>
                        <H3 style="font-size: 30px; color:white; font-weight:bolder">19,99€ / mois</H3>
                    </div>
                    <div>
                        <ul id="liste">
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Sans engagement</p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Encadrement sportif</p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Cours collectifs Live & vidéos
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Cardio, musculation & Cross Training</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="frais">
                        <p class="prom">Soit une économie de 45€</p>
                        <p class="prom">FRAIS D'INSCRIPTION OFFERTS</p>
                    </div>
                    <button id="choix">Choisir</button>
                </div>
                <div class="card">
                    <h2 class="cardtitle">PRIVILEGE</h2>
                    <div>
                        <p class="horaire">6h - 24h</p>
                        <H3 style="font-size: 30px; color:white; font-weight:bolder">19,99€ / mois</H3>
                    </div>
                    <div>
                        <ul id="liste">
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Sans engagement</p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Encadrement sportif</p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Cours collectifs Live & vidéos
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="checklist">
                                    <i class="fas fa-check double"></i>
                                    <p>Cardio, musculation & Cross Training</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="frais">
                        <p class="prom">Soit une économie de 45€</p>
                        <p class="prom">FRAIS D'INSCRIPTION OFFERTS</p>
                    </div>
                    <button id="choix">Choisir</button>
                </div>
            </div>
        </div>
        <div class='newsletter'>
            <h2 class="stitle" id="new">Newsletter</h2>
            <p class="prop">Inscrivez-vous à la newsletter et ne manquez rien de l'actualité de
                FIT IT. Découvrez nos nouvelles salles, nos offres
                exclusives et nos conseils de pro.</p>
            <input type="email" id="email" name="email" placeholder="Votre adresse e-mail"><br>
            <input type="submit" id="envoi" name="envoi" value="Valider"><BR></BR>
            <input type="checkbox" id="putain" name="putain">
            <label for="putain">Vous acceptez de recevoir nos derniers articles par mail</label>
        </div>
</body>

</html>