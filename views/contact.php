<!doctype html>
<html lang="en">

<head>
    <?php include 'views/includes/head.php'; ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php include 'views/includes/header.php'; ?>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-sm-5 py-4">
        <div class="dex-breadcrumb pt-5 pb-4">
            <div class="container py-xl-5 py-lg-4">
                <h4 class="inner-text-title font-weight-bold pt-5">Contactez-nous</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="dex-contact-main py-5" id="contact" data-aos="fade-up">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;" data-aos="fade-up" data-aos-delay="100">
                <p>Contactez-nous</p>
                <h3 class="title-style">Restons en Contact</h3>
            </div>
            <div class="dex-contact-info">
                <div class="row contact-infos justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <i class="fas fa-map-marked-alt"></i></div>
                            <div class="text-box">
                                <h3 class="mb-2">Nos Centres</h3>
                                <p><strong>Douala :</strong> Cité des Palmiers (en face du stade Caïman)</p>
                                <p><strong>Douala :</strong> Ndogpassi entrée lycée (en allant à petit bonanjo)</p>
                                <p><strong>Italie :</strong> Perugia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <i class="fas fa-mobile-alt"></i></div>
                            <div class="text-box">
                                <h3 class="mb-2">Appelez-nous</h3>
                                <p style="font-size: 20px;" class="mt-4"><strong>Italie :</strong> <a href="tel:+393791473768">+39 379 147 3768</a></p>
                                <p style="font-size: 20px;" class="mt-4">
                                    <strong>Cameroun :</strong> <br>
                                    <a href="https://wa.me/+237659286033?text=Bonjour,%20j'aimerais%20en%20savoir%20plus" target="_blank" style="color: green;">
                                        <i class="fa-brands fa-whatsapp"></i>+237 659 286 033
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="single-contact-infos center">
                            <a href="" class="icon-box"><i class="fas fa-whatsapp"></i>+237 659 286 033</a>
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <i class="fas fa-envelope-open-text"></i></div>
                            <div class="text-box">
                                <h3 class="mb-2">Nos Services</h3>
                                <p>Cours de langues (Italien, Allemand, Anglais)</p>
                                <p>Assistance Visa & Traduction</p>
                                <p>Préparation examens certifiés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact map -->
    <section class="dex-contact-main" id="contact" data-aos="fade-up">
        <div class="container">
            <div class="map pt-lg-3" data-aos="fade-up" data-aos-delay="100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8361550431864!2d9.775284874017476!3d4.053816046927751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610dff769b283f%3A0x9b1f172f06dfa509!2sStarTech%20Academy!5e0!3m2!1sfr!2scm!4v1764169426287!5m2!1sfr!2scm"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- //contact map -->

    <!-- contact-form -->
    <section class="dex-contact-main" data-aos="fade-up">
        <div class="contact-infhny py-5">
            <div class="container py-lg-3">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;" data-aos="fade-up" data-aos-delay="100">
                    <p>Envoyez-nous un message</p>
                    <h3 class="title-style mt-4">Contactez DFConsulting</h3>
                </div>
<div class="top-map">
                    <div class="map-content-9">
                        <form action="" method="post">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <input type="text" name="Name" id="dexName" placeholder="Nom complet" required="" data-aos="fade-up" data-aos-delay="100">
                                    <input type="number" name="Phone" placeholder="Numéro de téléphone" required="" data-aos="fade-up" data-aos-delay="150">
                                    <input type="email" name="Email" id="dexSender" placeholder="Email*"
                                        required="" data-aos="fade-up" data-aos-delay="200">
                                    <input type="text" name="Subject" id="dexSubject" placeholder="Sujet" required="" data-aos="fade-up" data-aos-delay="250">
                                </div>
                                <div class="form-top-righ" data-aos="fade-up" data-aos-delay="300">
                                    <textarea name="Message" id="dexMessage" placeholder="Votre message - Précisez le service qui vous'intéresse (Cours de langue, Assistance visa, Traduction, Examens)*"
                                        required=""></textarea>
                                </div>
                            </div>
                                <div class="form-top-righ">
                                    <textarea name="Message" id="dexMessage" placeholder="Votre message - Précisez le service qui vous intéresse (Cours de langue, Assistance visa, Traduction, Examens)*"
                                        required=""></textarea>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="sendmessage" class="btn btn-style btn-primary">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-form -->

    <!-- footer -->
    <?php include 'views/includes/footer.php'; ?>
    <!-- //footer -->

    <!-- Floating Contact Options -->
    <div class="contact-floating">
        <div class="contact-options">
            <a href="https://wa.me/+237659286033?text=Bonjour,%20j'aimerais%20en%20savoir%20plus" target="_blank" class="contact-btn whatsapp" title="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://web.facebook.com/p/Dfconsulting-language-and-travel-Sarl-61584481056598/?_rdc=1&_rdr#" target="_blank" class="contact-btn facebook" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="mailto:dfconsultinglanguageandtravel@gmail.com" class="contact-btn gmail" title="Gmail">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="tel:+237659286033" class="contact-btn call" title="Appeler">
                <i class="fas fa-phone"></i>
            </a>
            <a href="sms:+237659286033" class="contact-btn sms" title="SMS">
                <i class="fas fa-sms"></i>
            </a>
        </div>
        <button class="contact-toggle" title="Nous contacter">
            <i class="fas fa-comments"></i>
        </button>
    </div>
    <style>
        .contact-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .contact-toggle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            border: none;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
        .contact-toggle:hover {
            transform: scale(1.1);
            background: #0056b3;
        }
        .contact-options {
            display: none;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 15px;
        }
        .contact-options.active {
            display: flex;
        }
        .contact-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .contact-btn:hover {
            transform: scale(1.1);
        }
        .contact-btn.whatsapp { background: #25D366; }
        .contact-btn.facebook { background: #1877F2; }
        .contact-btn.gmail { background: #DB4437; }
        .contact-btn.call { background: #28a745; }
        .contact-btn.sms { background: #6c757d; }
    </style>
    <script>
        document.querySelector('.contact-toggle').addEventListener('click', function() {
            document.querySelector('.contact-options').classList.toggle('active');
        });
    </script>
    <!-- //Floating Contact Options -->

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

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/app.js" defer></script>
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
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
    <!-- //Js scripts -->
</body>

</html>