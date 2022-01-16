<!DOCTYPE html>
    <html lang="">
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            ?>
            <main>

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bg-carousel" width="1250" height="500" src="../public/img/carouselEen%20.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1>Welkom bij Health One.</h1>
                                    <p>Opzoek naar een sportschool? Dan bent u hier goed. Meld u vandaag nog aan.</p>
                                    <p><a class="btn btn-lg btn-warning" href="registreren.php">Word vandaag nog lid!</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img bg-carousel" width="1250" height="500" src="../public/img/carouselTwee.jpg" alt="pic2" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Voor bestaande leden.</h1>
                                    <p><a class="btn btn-lg btn-warning" href="login.php">Login</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bg-carousel" width="1250" height="500" src="../public/img/carouselDrie.jpg" alt="pic3" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>Over ons.</h1>
                                    <p>Wilt u meer informatie over de sportschool. Of heeft u vragen? klik dan hier</p>
                                    <p><a class="btn btn-lg btn-warning" href="contact.php">Over ons</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <div class="container marketing">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Inloggen</h2>
                            <p>Bent u al een bestaand lid bij ons. dan kunt u hieronder inloggen</p>
                            <p><a class="btn btn-warning" href="login.php">Meer Info ></a></p>
                        </div>
                        <div class="col-lg-4">
                            <h2>Onze apparaten</h2>
                            <p>Geintresseerd in onze apparaten? of wilt u kijken wat andere leden ervan vinden? bekijk ze hier of geef een review.</p>
                            <p><a class="btn btn-warning" href="categories.php">Meer Info ></a></p>
                        </div>
                        <div class="col-lg-4">
                            <h2>Openingstijden</h2>
                            <p>Wilt u weten welke tijden wij geopend zijn. Klik dan hier zodat u alle openingstijden kunt zien.</p>
                            <p><a class="btn btn-warning" href="contact.php">Meer Info ></a></p>
                        </div>
                    </div>


                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Sportcenter <span class="text-warning">Healt One</span></h2>
                            <p class="lead">Fit en gezond zijn is geen vanzelfsprekendheid. We moeten er zelf wat voor doen. Goede, gezonde voeding is hiervoor de basis.
                                Bewegen hoort hier ook bij. Regelmatig bewegen zorgt voor een goede doorbloeding en draagt bij aan ontspanning van lichaam en geest.
                                Sporten is goed voor sterkere spieren en voor de conditie. Sporcenter HealthOne heeft verschillende sportapparaten om mee te kunnen werken aan je conditie.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../public/img/fotoEen.jpg" alt="pic1" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">professionele <span class="text-warning"> begeleiding</span></h2>
                            <p class="lead">Bij Healt One zetten wij ons 100% in om je te helpen bij het behalen van je persoonlijke doelstellingen. Het begint allemaal bij het opbouwen van een sportritme en dat ook daadwerkelijk behouden. Daar helpen wij je graag mee aan de hand van professionele begeleiding</p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../public/img/fotoTwee.jpg" alt="pic2" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Ons <span class="text-warning">Aanbod</span></h2>
                            <p class="lead">Bij Sportcenter Healt One vind je het allemaal. We maken fitness graag gemakkelijk zodat je snel succes ervaart, plezier beleeft en op een gezonde manier je grenzen verlegt. Je kiest bij Healt one voor een betaalbare manier van fitness met persoonlijke begeleiding en een ruim aanbod aan faciliteiten.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../public/img/fotoDrie.jpg" alt="pic3" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        </div>
                    </div>

                </div>


                <?php
                include_once ('defaults/footer.php');
                ?>
            </main>
        </div>
    </body>
</html>
