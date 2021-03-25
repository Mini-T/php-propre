<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <script src="carrousel.js"></script>
    <link rel="stylesheet" href="carrousel.Css">

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
                    <h1 class="bullshit">Fit it</h1>
                    <p class="text">Pour se motiver et le rester, de l’initiation
                        pour les débutants à l’accompagnement au
                        quotidien dans votre pratique du fitness.</p>
                    <a href="#" class="text">Inscrivez-vous</a>
                </div>
                <div id="row3"><a href="" class="text" id="follow">Follow</a></div>
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
                <H1 class="bullshit">Nos Coach</H1>
                <p id="areat" class="cardp">C'est parti pour une nouvelle année
                    Avec Fabien et Julie.</p>
                <a href="#" id="areatb">Réserver un coach personnel</a>
            </div>
            <div></div>

        </div>
        <div id="class">
            <h2 class="stitle">Nos meilleurs cours</h2>
        </div>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="Groupe 23.png" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <img src="Groupe 24.png" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <img src="Groupe 25.png" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div id="class1">
            <h2 class="stitle">Nos offres</h2>
            <div id="cards">
                <div class="card">
                    <h2 class="cardtitle">SOFT</h2>
                    <div>
                        <p>8h - 18h</p>
                        <H3 style="font-size: 30px;">19,99€ / mois</H3>
                    </div>
                </div>
                <div class="card">
                    <h2 class="cardtitle">MEDIUM</h2>
                    <div>
                        <p>6h - 18h</p>
                        <H3 style="font-size: 30px;">19,99€ / mois</H3>
                    </div>
                </div>
                <div class="card">
                    <h2 class="cardtitle">PRIVILEGE</h2>
                    <div>
                        <p>6h - 24h</p>
                        <H3 style="font-size: 30px;">19,99€ / mois</H3>
                    </div>
                    <div>
                        <ul id="liste">
                            <li><i class="fas fa-check"></i>
                                <p>Sans engagement</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Encadrement sportif</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Cours collectifs Live & vidéos
                                </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Cardio, musculation & Cross Training</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
</body>

</html>