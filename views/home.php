<!doctype html>
<html lang="en">

<head>
    <?php include 'views/includes/head.php'; ?>
</head>

<body>
    <!-- header -->
    <?php include 'views/includes/header.php'; ?>
    <!-- //header -->

    <!-- banner section -->
    <div class="slideshow">
        <div class="holder">
            <div class="slide slide-1">
                <span class="container">
                    <span class="banner-content">
                        <h3>Languages & Travel Sarl</h3>
                        <p>Centre de formation des langues et cultures etrangères en afrique et en europe.</p>
                        <a class="btn btn-style mt-sm-5 mt-4" href="<?= PATH ?>about">En savoir plus</a>
                    </span>
                </span>
            </div>
            <div class="slide slide-2">
                <span class="container">
                    <span class="banner-content">
                        <h3 class="mb-2">Votre Avenir International</h3>
                        <p>Assistance visa et accompagnement universitaire.</p>
                        <a class="btn btn-style mt-sm-5 mt-4" href="<?= PATH ?>about">Découvrir</a>
                    </span>
                </span>
            </div>
            <div class="slide slide-3">
                <span class="container">
                    <span class="banner-content">
                        <h3>Traduction & Interprétariat</h3>
                        <p>Services professionnels de traduction et interprétariat.</p>
                        <a class="btn btn-style mt-sm-5 mt-4" href="<?= PATH ?>contact">Contactez-nous</a>
                    </span>
                </span>
            </div>
            <div class="slide slide-4">
                <span class="container">
                    <span class="banner-content">
                        <h3>Vivez votre aventure</h3>
                        <p>Profitez de ces offres exclusives exceptionnelles.</p>
                        <a class="btn btn-style mt-sm-5 mt-4" href="<?= PATH ?>about">Explore More</a>
                    </span>
                </span>
            </div>
        </div>
        <div class="steps"></div>
        <a href="#" class="prev"><i class="fas fa-arrow-left"></i></a>
        <a href="#" class="next"><i class="fas fa-arrow-right"></i></a>
    </div>
    <!-- //banner section -->

    <!-- about section -->
    <section class="dex-aboutblock py-lg-5 py-4" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="<?= PATH ?>assets/images/about3.jpg" alt="" class="img-fluid radius-image" loading="lazy">
                </div>
                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                    <div class="title-main">
                        <p>À propos de nous</p>
                        <h3 class="title-style">DFConsulting Language and Travel</h3>
                    </div>
                    <p class="mt-3">
                        Centre de promotion des langues et cultures étrangères en afrique et en europe.
                        Saisissez l'opportunité de continuer vos études en italie et en allemagne en
                        <?php
                        // Définir le fuseau horaire sur celui du Cameroun
                        date_default_timezone_set('Africa/Douala');

                        $date_cameroun = date('Y');
                        $date_prochain = $date_cameroun + 1;

                        echo "$date_cameroun - $date_prochain";
                        ?>
                    </p>
                    <ul class="mt-4 list-style-lis">
                        <li><i class="fas fa-check-circle"></i>Cours de langue en présentiel et en ligne</li>
                        <li class="mt-2"><i class="fas fa-check-circle"></i>Assistance Visa professionnelle</li>
                        <li class="mt-2"><i class="fas fa-check-circle"></i>Traduction et interprétariat</li>
                        <li class="mt-2"><i class="fas fa-check-circle"></i>Préparation aux examens certifiés</li>
                    </ul>
                    <a href="contact.php" class="btn btn-style mt-5">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- stats section -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
                <p>Nos Résultats</p>
                <h3 class="title-style text-white">DFConsulting en Chiffres</h3>
            </div>
            <div class="w3-stats text-center py-lg-4">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <i class="fas fa-graduation-cap"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="timer" data-to="500" data-speed="1500"></div>
                                <span class="stats-plus">+</span>
                            </div>
                            <p class="count-text">Étudiants Formés</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <i class="fas fa-certificate"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="timer" data-to="150" data-speed="1500"></div>
                                <span class="stats-plus">+</span>
                            </div>
                            <p class="count-text">Certifications Obtenues</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <i class="fas fa-passport"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="timer" data-to="80" data-speed="1500"></div>
                                <span class="stats-plus">+</span>
                            </div>
                            <p class="count-text">Visas Obtenus</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <i class="fas fa-globe"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="timer" data-to="3" data-speed="1500"></div>
                                <span class="stats-plus"></span>
                            </div>
                            <p class="count-text">Langues Enseignées</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats section -->

    <!-- services section -->
    <section class="dex-grids-block py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
                <p>Nos Services</p>
                <h3 class="title-style">Services Professionnels DFConsulting</h3>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="bottom-block">
                        <a href="contact.php" class="d-block">
                            <i class="fas fa-language"></i>
                            <h3 class="my-3">Cours de Langue-italien A1-C2</h3>
                            <p class="">Italien, Allemand et Anglais en présentiel et en ligne. Apprentissage avec des experts qualifiés.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-md-0 mt-4">
                    <div class="bottom-block">
                        <a href="contact.php" class="d-block">
                            <i class="fas fa-passport"></i>
                            <h3 class="my-3">Assistance Visa</h3>
                            <p class="">Accompagnement complet pour vos démarches visa et assistance contrat de travail à l'étranger.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-lg-0 mt-4">
                    <div class="bottom-block">
                        <a href="contact.php" class="d-block">
                            <i class="fas fa-file-alt"></i>
                            <h3 class="my-3">Traduction & Interprétariat</h3>
                            <p class="">Services professionnels de traduction et d'interprétariat dans plusieurs langues.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-4">
                    <div class="bottom-block">
                        <a href="contact.php" class="d-block">
                            <i class="fas fa-certificate"></i>
                            <h3 class="my-3">Examens Italien</h3>
                            <p class="">Préparation aux examens italiens : Cert.it, CELI 3, CILS, L2. Formation spécialisée pour la réussite.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-4">
                    <div class="bottom-block">
                        <a href="contact.php" class="d-block">
                            <i class="fas fa-medal"></i>
                            <h3 class="my-3">Examens Allemand</h3>
                            <p class="">Préparation aux examens allemands : ECL, ÖSD. Coaching personnalisé pour votre certification.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-4">
                    <div class="bottom-block">
                        <a href="contact.php" class="d-block">
                            <i class="fas fa-briefcase"></i>
                            <h3 class="my-3">Assistance Contrat Travail</h3>
                            <p class="">Accompagnement dans les démarches pour obtenir des contrats de travail à l'étranger.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services section -->

    <!-- Flyer section -->
    <section class="w3_stats py-5" id="stats" style="min-height: 100vh;">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="w3-stats text-center py-lg-4">
                <!-- Utilisation d'une ligne flex avec direction colonne -->
                <div class="row d-flex flex-column align-items-center">

                    <!-- Image 1 -->
                    <div class="col-12 mb-4">
                        <img src="<?= PATH ?>assets/images/flyer1.jpeg"
                            class="img-fluid"
                            style="max-height: 350vh; width: auto; object-fit: contain;"
                            alt="Flyer 1">
                    </div>

                    <!-- Image 2 -->
                    <div class="col-12">
                        <img src="<?= PATH ?>assets/images/flyer2.jpeg"
                            class="img-fluid"
                            style="max-height: 350vh; width: auto; object-fit: contain;"
                            alt="Flyer 2">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //Flyer section -->

    <!-- centres section -->
    <section class="dex-centres py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
                <p>Nos Implantations</p>
                <h3 class="title-style">Nos Centres DFConsulting</h3>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                    <div class="bottom-block">
                        <div class="centre-info">
                            <i class="fas fa-map-marker-alt mb-3" style="font-size: 2.5rem; color: #007bff;"></i>
                            <h4 class="mb-3">Perugia, Italie</h4>
                            <p class="text-muted mb-2">Situé in VIA FRANCESCO DE SANCTIS, PG</p>
                            <p class="mb-2"><strong>Spécialités :</strong></p>
                            <ul class="list-unstyled">
                                <li>• Cours d'italien intensifs</li>
                                <li>• Préparation CILS, CELI</li>
                                <li>• Immersion culturelle</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                    <div class="bottom-block">
                        <div class="centre-info">
                            <i class="fas fa-map-marker-alt mb-3" style="font-size: 2.5rem; color: #007bff;"></i>
                            <h4 class="mb-3">Douala - Cité des Palmiers</h4>
                            <p class="text-muted mb-2">situé derrière le lycée de lq citée des palmiers à côté du stade Caïman à l'immeuble en carreau bleu blanc</p>
                            <p class="mb-2"><strong>Services :</strong></p>
                            <ul class="list-unstyled">
                                <li>• Cours présentiel et en ligne</li>
                                <li>• Assistance visa</li>
                                <li>• Traduction certifiée</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                    <div class="bottom-block">
                        <div class="centre-info">
                            <i class="fas fa-map-marker-alt mb-3" style="font-size: 2.5rem; color: #007bff;"></i>
                            <h4 class="mb-3">Douala - Ndogpassi Entrée Lycée</h4>
                            <p class="text-muted mb-2">situé à l'entrée du lycée en allant à petit bonanjo après l'église la communauté des enfants benis</p>
                            <p class="mb-2"><strong>Services :</strong></p>
                            <ul class="list-unstyled">
                                <li>• Préparation examens</li>
                                <li>• Cours individuels</li>
                                <li>• Orientation universitaire</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //centres section -->

    <!-- why section -->
    <section class="dex-whyblock pb-5 pt-2">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <video src="<?= PATH ?>assets/images/about.mp4" class="img-fluid radius-image" loading="lazy" autoplay loop controls muted></video>
                    <!-- <img src="assets/images/about2.webp" alt="" class="img-fluid radius-image" loading="lazy"> -->
                </div>
                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                    <div class="title-main mb-4" style="max-width:600px;">
                        <p>Nos Avantages</p>
                        <h3 class="title-style">Pourquoi Choisir DFConsulting!</h3>
                    </div>
                    <p>Centre spécialisé dans la promotion des langues et cultures étrangères avec une expertise reconnue.
                        Nous vous accompagnons dans toutes vos démarches linguistiques et administratives.</p>
                    <div class="two-grids mt-5">
                        <div class="grids_info">
                            <i class="fas fa-user-graduate"></i>
                            <div class="detail">
                                <h4>Expertise Pédagogique</h4>
                                <p>Formation dispensée par des professeurs qualifiés et expérimentés dans l'enseignement des langues étrangères.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-4">
                            <i class="fas fa-handshake"></i>
                            <div class="detail">
                                <h4>Accompagnement Personnalisé</h4>
                                <p>Suivi individualisé pour vos projets d'études, démarches visa et préparation aux examens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why section -->

    <!-- blog section -->
    <div class="dex-blog-content py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
                <p>Notre Blog</p>
                <h3 class="title-style">Embarquez pour l'inattendu</h3>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($blogs as $blog): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-grid-1">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="<?= PATH ?><?= $blog['imagePath'] ?>" alt="Card image cap" loading="lazy">
                                </a>
                                <div class="course-price-badge">Trips</div>
                            </div>
                            <div class="card-body course-details">
                                <div class="course-meta mb-3">
                                    <div class="meta-item course-students">
                                        <span class="fa fa-calendar"></span>
                                        <span class="meta-value"><?= $blog['date'] ?>"</span>
                                    </div>
                                </div>
                                <a href="#blog" class="course-desc"><?= $blog['title'] ?>"</a>
                                <p class="mt-2"><?= $blog['content'] ?>"</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- //blog section -->

    <!-- footer -->
    <?php include 'views/includes/footer.php'; ?>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slider -->
    <!-- <script src="assets/js/slideshow.js"></script> -->
    <!-- //banner slider -->

    <!-- for services carousel slider -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-three').owlCarousel({
                loop: true,
                stagePadding: 20,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    991: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })
        })
    </script>
    <!-- //for services carousel slider -->

    <!-- counter-->
    <script src="assets/js/app.js" defer></script>
    <!-- <script src="assets/js/counter.js"></script> -->
    <!-- //counter-->

    <!-- theme switch js (light and dark)-->
    <!-- <script src="assets/js/theme-change.js"></script> -->
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>