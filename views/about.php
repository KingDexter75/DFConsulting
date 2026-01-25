<!doctype html>
<html lang="en">

<head>
    <?php include 'views/includes/head.php'; ?>
</head>

<body>
    <!-- header -->
    <?php include 'views/includes/header.php'; ?>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-sm-5 py-4">
        <div class="dex-breadcrumb pt-5 pb-4">
            <div class="container py-xl-5 py-lg-4">
                <h4 class="inner-text-title font-weight-bold pt-5">À Propos de Nous</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Accueil</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>À Propos</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <div class="dex-about-content py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="<?= PATH ?>assets/images/about3.jpg" class="img-fluid radius-image" alt="">
                </div>
                <div class="col-lg-6 ps-lg-5 mt-lg-0 mt-4">
                    <div class="title-main">
                        <p>À Propos de Nous</p>
                        <h3 class="title-style mt-2">DFConsulting Language and Travel SARL</h3>
                    </div>
                    <p class="mt-4">DFConsulting Language and Travel SARL est un centre de promotion des langues et cultures étrangères et assistance visa.
                        Notre mission principale est d'accompagner les étudiants dans l'apprentissage des langues étrangères (Italien, Allemand et Anglais).</p>
                    <p class="mt-3">Nous offrons une gamme complète de services incluant des cours de langue, l'assistance visa,
                        la traduction et l'interprétariat, ainsi que la préparation aux examens certifiés internationaux.</p>
                    <a href="contact.php" class="btn btn-style mt-5">Nous Contacter</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //about section -->

    <!-- stats section -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
                <p>Nos Résultats</p>
                <h3 class="title-style text-white mt-2">DFConsulting en Chiffres</h3>
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

    <!-- team section -->
    <section class="dex-team-main py-5" id="team">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
                <p>Notre Équipe</p>
                <h3 class="title-style mt-2">Rencontrez nos Formateurs</h3>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-6">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="<?= PATH ?>assets/images/team1.webp" alt="" class="radius-image">
                        </div>
                        <a href="#url" class="team-title">DF Consulting Staff</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="<?= PATH ?>assets/images/team2.webp" alt="" class="radius-image">
                        </div>
                        <a href="#url" class="team-title">DF Consulting Staff</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="<?= PATH ?>assets/images/team3.webp" alt="" class="radius-image">
                        </div>
                        <a href="#url" class="team-title">DF Consulting Staff</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="<?= PATH ?>assets/images/team4.webp" alt="" class="radius-image">
                        </div>
                        <a href="#url" class="team-title">DF Consulting Staff</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="<?= PATH ?>assets/images/team5.webp" alt="" class="radius-image">
                        </div>
                        <a href="#url" class="team-title">DF Consulting Staff</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team section -->

    <!-- why section -->
    <section class="dex-whyblock pb-5 pt-2">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="<?= PATH ?>assets/images/about2.jpeg" alt="" class="img-fluid radius-image">
                </div>
                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                    <div class="title-main mb-4" style="max-width:600px;">
                        <p>Nos Services</p>
                        <h3 class="title-style mt-2">Orientation dans votre Parcours</h3>
                    </div>
                    <p>DFConsulting vous accompagne dans toutes les étapes de votre projet d'études à l'étranger.
                        Notre équipe d'experts vous guide dans chaque démarche administrative et académique pour assurer votre réussite.</p>
                    <div class="two-grids mt-5">
                        <div class="grids_info">
                            <i class="fas fa-graduation-cap"></i>
                            <div class="detail">
                                <h4>Démarches Universitaires</h4>
                                <ul class="list-unstyled mt-3">
                                    <li>• Demande de pré-inscription</li>
                                    <li>• Immatriculation complète</li>
                                    <li>• Choix des universités adaptées</li>
                                </ul>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-4">
                            <i class="fas fa-file-signature"></i>
                            <div class="detail">
                                <h4>Assistance Financière & Visa</h4>
                                <ul class="list-unstyled mt-3">
                                    <li>• Demande de bourse d'études</li>
                                    <li>• Assistance visa étudiant</li>
                                    <li>• Accompagnement personnalisé</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why section -->

    <!-- testimonials section -->
    <section class="dex-clients py-5 mb-5 mt-4" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
                <p class="mt-2">Temoignages</p>
                <h3 class="title-style mt-2">Ce que disent nos clients</h3>
            </div>
            <div id="owl-demo2" class="owl-carousel owl-theme mt-4 py-md-2 mb-md-4">
                <?php foreach ($testimonials as $testimonial) : ?>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <i class="fas fa-quote-left"></i> <?= date('d-M-Y', strtotime($testimonial['dateC'])); ?>
                            </blockquote>
                            <p><?= $testimonial['message']; ?></p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url">
                                <img src="<?= PATH ?>assets/images/logo.webp" class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3><?= $testimonial['name']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->

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

    <!-- counter-->
    <script src="assets/js/app.js" defer></script>
    <!-- <script src="assets/js/counter.js"></script> -->
    <!-- //counter-->

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 2,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- owl carousel -->

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