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
                <h4 class="inner-text-title font-weight-bold pt-5">Explore the World</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Tours</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- places section -->
    <div class="dex-placesblock2 py-5" id="destinations">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
                <p>Destinations</p>
                <h3 class="title-style">Embarquez pour l'inattendu</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="grids5-info">
                        <a href="#destination" class="place-image d-block zoom"><img src="assets/images/blog3.webp"
                                alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>Italy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, consectetur.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="grids5-info">
                        <a href="#destination" class="place-image d-block zoom"><img src="assets/images/blog2.webp"
                                alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>USA</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, consectetur.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="grids5-info">
                        <a href="#destination" class="place-image d-block zoom"><img src="assets/images/blog1.webp"
                                alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>London</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, consectetur.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //places section -->

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

    <!-- for tours carousel slider -->
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
    <!-- //for tours carousel slider -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
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