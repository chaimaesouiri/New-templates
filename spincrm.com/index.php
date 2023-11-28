<?php include_once ('website.php'); ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title><?=$namehost?> - Sales CRM - sales management system, customer communication. Grow your sales today.</title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?=$host?>/wp-content/themes/spincrm-v4/images/favicon2.ico?v=100" rel="shortcut icon">
    <link href="<?=$host?>/wp-content/themes/spincrm-v4/images/favicon2.ico?v=100" rel="apple-touch-icon-precomposed">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- This site is optimized with the Yoast SEO plugin v17.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <link rel="canonical" href="<?=$host?>/en/" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="lt_LT" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pardavimų valdymo sistema | <?=$namehost?>" />
    <meta property="og:description" content="Free <?=$namehost?> - sales management system, customer communication. Grow your sales today." />
    <meta property="og:url" content="<?=$host?>/en/" />
    <meta property="og:site_name" content="<?=$namehost?>" />
    <meta property="og:image" content="<?=$host?>/wp-content/uploads/2018/08/1024x500.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel='dns-prefetch' href='//use.fontawesome.com' />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <link rel='stylesheet' id='atomic-blocks-fontawesome-css' href='<?=$host?>/wp-content/plugins/atomic-blocks/dist/assets/fontawesome/css/all.min.css?ver=1609437232' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='<?=$host?>/wp-includes/css/dist/block-library/style.min.css?ver=2020d4be068ad5fd14d25f8b4957e65f' media='all' />
    <link rel='stylesheet' id='atomic-blocks-style-css-css' href='<?=$host?>/wp-content/plugins/atomic-blocks/dist/blocks.style.build.css?ver=1609437232' media='all' />
    <link rel='stylesheet' id='lordicon-element-css-css' href='<?=$host?>/wp-content/plugins/lordicon-interactive-icons/dist/element.css?ver=2.0.0' media='all' />
    <link rel="stylesheet" href="<?=$host?>/wp-content/themes/spincrm-v4/css/style.css">
    <link rel='stylesheet' id='contact-form-7-css' href='<?=$host?>/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.6' media='all' />
    <link rel='stylesheet' id='html5blank-css' href='<?=$host?>/wp-content/themes/spincrm-v4/style.min.css?ver=1.0' media='all' />
    <link rel='stylesheet' id='bfa-font-awesome-css' href='https://use.fontawesome.com/releases/v5.15.4/css/all.css?ver=2.0.1' media='all' />
    <link rel='stylesheet' id='bfa-font-awesome-v4-shim-css' href='https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css?ver=2.0.1' media='all' />
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!--build:css-->
    <link rel="stylesheet" href="<?=$host?>/wp-content/themes/spincrm-v4/css/main.css">
    <!-- endbuild -->
    <!--custom css start-->
    <link rel="stylesheet" href="<?=$host?>/wp-content/themes/spincrm-v4/css/custom.css">
    <!--custom css end-->
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/jquery.js?v=100"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <style type="text/stylesheet"> 
     .hero-section {  background-image: url($media['HomePage'][3]) !important;

     }
     .footer-top{  background-image: url($media['HomePage'][31]) !important;

}


     </style>
</head>
<body class="home no-page-loader">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute-------- w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="<?=$host?>/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?=$host?><?= $media['HomePage'][0]?>" alt="logo" class="img-fluid logo-white" style="max-width: 200px;" />
                        <img src="<?=$host?><?= $media['HomePage'][1]?>" alt="logo" class="img-fluid logo-color" style="max-width: 200px;" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li id="menu-item-1357" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="/" class="nav-link "><?= $content['HomePage'][0]?></a></li>
                            <li id="menu-item-1354" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?=$host?>/#pricing" class="nav-link "><?= $content['HomePage'][1]?></a></li>
                            <li id="menu-item-4903" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?=$host?>/contact" class="nav-link "><?= $content['HomePage'][2]?></a></li>
                        </ul>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <a href="<?=$host?>/" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img src="<?=$host?><?= $media['HomePage'][2]?>" alt="logo" class="img-fluid ps-2" style="max-width: 200px;" />
                            </a>
                            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="far fa-close"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                                <li id="menu-item-1357" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="/" class="nav-link "><?= $content['HomePage'][3]?></a></li>
                                <li id="menu-item-1354" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?=$host?>/#pricing" class="nav-link "><?= $content['HomePage'][4]?></a></li>
                                <li id="menu-item-4903" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?=$host?>/contact" class="nav-link "><?= $content['HomePage'][5]?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--header end-->

        <!--hero section start-->
        <section class="hero-section pb-60 text-white bg-dark" style="background: url('<?=$host?>')no-repeat center left,  linear-gradient(90deg, #021048, #0b163f) !important">
            <div class="container pb-60">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-10 pt-60">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5"><?= $content['HomePage'][6]?></h1>
                            <p class="lead"><?= $content['HomePage'][7]?></p>

                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-md-block d-lg-block d-xl-block">
                                <form id="header-registration-form" class="hero-subscribe-form">
                                    <div class=" d-block d-lg-flex d-md-flex">
                                        <input type="email" class="form-control me-2" name="email" data-name="email" placeholder="Enter your email" id="email-address" required="">
                                        <button type="submit" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="white-space: nowrap;"><?= $content['HomePage'][8]?></button>
                                    </div>
                                    <div class="response-container mt-2"></div>
                                </form>
                                <ul class="nav subscribe-feature-list mt-3">
                                    <li class="nav-item">
                                        <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i><?= $content['HomePage'][9]?></span>
                                    </li>
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i><?= $content['HomePage'][10]?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-8 mt-5">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="200">
                            <ul class="position-absolute animate-element parallax-element widget-img-wrap z-2">
                                <li class="layer" data-depth="0.04">
                                    <img src="<?=$host?><?= $media['HomePage'][4]?>" alt="widget-img" style="max-width: 200px;" class="img-fluid widget-img-1 position-absolute shadow-lg rounded-custom">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="<?=$host?><?= $media['HomePage'][5]?>" alt="widget-img" style="max-width: 250px;" class="img-fluid widget-img-3 position-absolute shadow-lg rounded-custom">
                                </li>
                            </ul>
                            <img src="<?=$host?><?= $media['HomePage'][6]?>" alt="dashboard image" class="img-fluid position-relative rounded-custom mt-lg-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <div class="customer-section pb-4 pt-4  bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <ul class="customer-logos-grid text-center list-unstyled mb-0">
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][7]?>" width="150" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][8]?>" width="250" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][9]?>" width="150" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][10]?>" width="150" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][11]?>" width="150" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][12]?>" width="150" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][13]?>" width="150" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="350">
                            </li>
                            <li>
                                <img src="<?=$host?><?= $media['HomePage'][14]?>" width="150" style="margin-top: 19px !important;" alt="clients logo" class="img-fluid customer-logo-gray p-1 p-md-2 p-lg-3 m-auto aos-init aos-animate" data-aos="fade-up">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <!--feature left right content start-->
        <!--why choose us section start-->

        <section class="pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-1">
                    <div class="col-lg-5 col-12">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][11]?></h2>
                            <p><?= $content['HomePage'][12]?> <?=$namehost?> <?= $content['HomePage'][13]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][14]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][15]?></li>
                            </ul>
                            <!--<a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="feature-img-holder icon-bg-right mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/dnbjoceq.json" trigger="hover" stroke="20" target=".home-feature-1" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-us pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-2">
                    <div class="col-lg-5 col-12 order-lg-1">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][16]?></h2>
                            <p><?=$namehost?> <?= $content['HomePage'][17]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][18]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][19]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][20]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][21]?></li>
                            </ul>
                            <!-- <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-0">
                        <div class="feature-img-holder icon-bg-left mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="hover" stroke="20" target=".home-feature-2" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-3">
                    <div class="col-lg-5 col-12">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][22]?></h2>
                            <p><?= $content['HomePage'][23]?> <?=$namehost?><?= $content['HomePage'][24]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][25]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][26]?></li>
                            </ul>
                            <!--<a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="feature-img-holder icon-bg-right mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/rvruzzcr.json" trigger="hover" stroke="20" target=".home-feature-3" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-us pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-4">
                    <div class="col-lg-5 col-12 order-lg-1">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][27]?></h2>
                            <p><?= $content['HomePage'][28]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][29]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][30]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][31]?></li>
                            </ul>
                            <!-- <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-0">
                        <div class="feature-img-holder icon-bg-left mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/dbkviqyk.json" trigger="hover" stroke="20" target=".home-feature-4" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-5">
                    <div class="col-lg-5 col-12">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][32]?></h2>
                            <p><?= $content['HomePage'][33]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][34]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][35]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][36]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][37]?></li>
                            </ul>
                            <!--<a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="feature-img-holder icon-bg-right mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/qfabemmy.json" trigger="hover" stroke="20" target=".home-feature-5" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-us pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-6">
                    <div class="col-lg-5 col-12 order-lg-1">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][38]?></h2>
                            <p><?= $content['HomePage'][39]?> <?=$namehost?> <?= $content['HomePage'][40]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][41]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][42]?></li>
                            </ul>
                            <!-- <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-0">
                        <div class="feature-img-holder icon-bg-left mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/ufezupnm.json" trigger="hover" stroke="20" target=".home-feature-6" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-7">
                    <div class="col-lg-5 col-12">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][43]?></h2>
                            <p><?= $content['HomePage'][44]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][45]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][46]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][47]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][48]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][49]?></li>
                            </ul>
                            <!--<a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="feature-img-holder icon-bg-right mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/esixrdij.json" trigger="hover" stroke="20" target=".home-feature-7" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-us pt-60">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center home-feature-8">
                    <div class="col-lg-5 col-12 order-lg-1">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-warning-light shadow-sm d-inline-block">
                                <i class="fa fa-circle-notch fa-2x text-white"></i>
                            </div>
                            <h2><?= $content['HomePage'][50]?></h2>
                            <p><?= $content['HomePage'][51]?> <?=$namehost?><?= $content['HomePage'][52]?></p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][53]?>
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i><?= $content['HomePage'][54]?></li>
                            </ul>
                            <!-- <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-0">
                        <div class="feature-img-holder icon-bg-left mt-4 mt-lg-0 mt-xl-0">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/hwttzbwp.json" trigger="hover" stroke="20" target=".home-feature-8" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--customer review tab section end-->

        <!--our work process start-->
        <section class="work-process ptb-120 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary"><?= $content['HomePage'][55]?></h4>
                            <h2><?= $content['HomePage'][56]?></h2>
                            <p><?= $content['HomePage'][57]?> <?=$namehost?><?= $content['HomePage'][58]?></p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                        <div class="img-wrap fluid-icon">
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/ngrsltok.json" trigger="loop" stroke="30" colors="primary:#071c4d,secondary:#175cff">
                            </lord-icon>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                        <ul class="work-process-list list-unstyled">
                            <li class="d-flex align-items-start mb-4">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fad fa-address-card fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6"><?= $content['HomePage'][59]?></span>
                                    <h3 class="h5 mb-2"><?= $content['HomePage'][60]?></h3>
                                    <p><?= $content['HomePage'][61]?></p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fad fa-presentation fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6"><?= $content['HomePage'][62]?></span>
                                    <h3 class="h5 mb-2"><?= $content['HomePage'][63]?></h3>
                                    <p><?= $content['HomePage'][64]?></p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fad fa-tasks fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6"><?= $content['HomePage'][65]?></span>
                                    <h3 class="h5 mb-2"><?= $content['HomePage'][66]?></h3>
                                    <p><?= $content['HomePage'][67]?></p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 mb-lg-0">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fad fa-flag-checkered fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6"><?= $content['HomePage'][68]?></span>
                                    <h3 class="h5 mb-2"><?= $content['HomePage'][69]?></h3>
                                    <p><?= $content['HomePage'][70]?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--our work process end-->
        <section id="pricing" class="pricing-section pb-100 pt-60 position-relative z-2">

            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-3">
                        <div class="media d-flex align-items-center py-2 p-sm-2">
                            <div class="icon-box mb-0 bg-primary-soft rounded-circle d-block me-3">
                                <i class="fal fa-calendar-alt text-primary"></i>
                            </div>
                            <div class="media-body fw-medium h6 mb-0"><?= $content['HomePage'][71]?></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media d-flex align-items-center py-2 p-sm-2">
                            <div class="icon-box mb-0 bg-primary-soft rounded-circle d-block me-3">
                                <i class="fal fa-tachometer-alt text-primary"></i>
                            </div>
                            <div class="media-body fw-medium h6 mb-0"><?= $content['HomePage'][72]?></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media d-flex align-items-center py-2 p-sm-2">
                            <div class="icon-box mb-0 bg-primary-soft rounded-circle d-block me-3">
                                <i class="fal fa-credit-card text-primary"></i>
                            </div>
                            <div class="media-body fw-medium h6 mb-0"><?= $content['HomePage'][73]?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom  bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block"><?= $content['HomePage'][74]?></h3>
                                <h4 class="display-6 fw-semi-bold"><?= $content['HomePage'][75]?><span><?= $content['HomePage'][76]?></span></h4>
                                <div class="m-b-10"><?= $content['HomePage'][77]?></div>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][78]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][79]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][80]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][81]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][82]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][83]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][84]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][85]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][86]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][87]?></li>
                                </ul>
                            </div>
                            <a href="" class="btn btn-outline-primary  mt-2"><?= $content['HomePage'][88]?></a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                <img src="<?=$host?><?= $media['HomePage'][15]?>" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-dark text-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-warning d-block"><?= $content['HomePage'][89]?></h3>
                                <h4 class="display-6 fw-semi-bold"><?= $content['HomePage'][90]?><span><?= $content['HomePage'][91]?></span></h4>
                                <div class="m-b-10"><?= $content['HomePage'][92]?></div>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][93]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][94]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][95]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][96]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][97]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][98]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][99]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][100]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][101]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> <?= $content['HomePage'][102]?> </li>
                                </ul>
                            </div>
                            <a href="" class="btn btn-primary  mt-2"><?= $content['HomePage'][103]?></a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                <img src="<?=$host?><?= $media['HomePage'][16]?>" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom  bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block"><?= $content['HomePage'][104]?></h3>
                                <h4 class="display-6 fw-semi-bold"><?= $content['HomePage'][105]?><span><?= $content['HomePage'][106]?></span></h4>
                                <div class="m-b-10"><?= $content['HomePage'][107]?></div>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][108]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][109]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][110]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][111]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][112]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][113]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][114]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][115]?>
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> <?= $content['HomePage'][116]?></li>
                                </ul>
                            </div>
                            <a href="" class="btn btn-outline-primary  mt-2"><?= $content['HomePage'][117]?></a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                <img src="<?=$host?><?= $media['HomePage'][17]?>" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center pt-60">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <p><?= $content['HomePage'][118]?></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--integration section start-->
        <section class="integration-section  ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary"><?= $content['HomePage'][119]?></h4>
                            <h2><?= $content['HomePage'][120]?></h2>
                            <!--<p>-</p>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="text-lg-end mb-5 mb-lg-0">
                            <a href="<?=$host?>/" class="btn btn-primary"><?= $content['HomePage'][121]?></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service z--1" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                <li class="layer" data-depth="0.03" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(30.3446px, -12.082px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                    <img src="<?=$host?><?= $media['HomePage'][18]?>" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <ul class="integration-list list-unstyled mb-0">
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][19]?>" alt="integration" class="img-fluid">
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][20]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][21]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][22]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][23]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][24]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][25]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][26]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][27]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][28]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][29]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="<?=$host?><?= $media['HomePage'][30]?>" alt="integration" class="img-fluid">

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-subscribe pt-60 pb-120 ">
            <div class="container">
                <div class="bg-gradient ptb-120 position-relative overflow-hidden rounded-custom">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-8">
                            <div class="subscribe-info-wrap text-center position-relative z-2">
                                <div class="section-heading">
                                    <h4 class="h5 text-warning"><?= $content['HomePage'][122]?></h4>
                                    <h2><?= $content['HomePage'][123]?></h2>
                                    <p><?= $content['HomePage'][124]?></p>
                                </div>
                                <div class="form-block-banner mw-60 m-auto mt-5">
                                    <a href="<?=$host?>/" class="btn btn-primary"><?= $content['HomePage'][125]?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                    <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5" style="background-color: #8b93be !important;"></div>
                </div>
            </div>
        </section>



        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top  bg-gradient text-white ptb-120" style="background: url('')no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="<?=$host?><?= $media['HomePage'][32]?>" alt="logo" class="img-fluid logo-white" style="max-width: 200px">
                                    <img src="<?=$host?><?= $media['HomePage'][33]?>" alt="logo" class="img-fluid logo-color" style="max-width: 200px">
                                </div>
                                <p><?= $content['HomePage'][126]?></p>

                                <form class="newsletter-form position-relative">
                                    <div class=" d-block d-lg-flex d-md-flex">
                                        <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" name="email" required="">
                                        <button type="submit" class="btn btn-primary mt-3 mt-lg-0 mt-md-0"><?= $content['HomePage'][127]?></button>
                                    </div>
                                    <div class="response-container mt-2"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mt-6 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3><?= $content['HomePage'][128]?></h3>
                                        <ul class="list-unstyled mb-lg-0">
                                            <li style="padding-bottom: 10px;"><i class="fal fa-phone"></i> <?= $content['HomePage'][129]?> <a href="tel:+37066352000" class="text-decoration-none" style="color: #d6d5e1"><strong><?= $content['HomePage'][130]?></strong></a></li>
                                            <li style="padding-bottom: 10px;"><i class="fal fa-envelope"></i> <?= $content['HomePage'][131]?> <a href="mailto:info@<?=$ihost?>" class="text-decoration-none" style="color: #d6d5e1"><strong><span class="__cf_email__"><?= $content['HomePage'][132]?><?=$ihost?></span></strong></a></li>
                                            <li style="padding-bottom: 10px;"><i class="fal fa-clock"></i> <?= $content['HomePage'][133]?> <strong><?= $content['HomePage'][134]?></strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mt-6 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3><?= $content['HomePage'][135]?></h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li id="menu-item-1697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1697"><a href="<?=$host?>/terms-of-service"><?= $content['HomePage'][136]?></a></li>
                                            <li id="menu-item-1698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698"><a href="<?=$host?>/privacy"><?= $content['HomePage'][137]?></a></li>
                                            <li id="menu-item-1701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-1701"><a href="<?=$host?>/refund-policy"><?= $content['HomePage'][138]?></a></li>
                                            <li id="menu-item-1701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-1701"><a href="<?=$host?>/delivery-policy"><?= $content['HomePage'][139]?></a></li>
                                            <li id="menu-item-1701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-1701"><a href="<?=$host?>/about"><?= $content['HomePage'][140]?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0"><?= $content['HomePage'][141]?> <?=$namehost?> <?= $content['HomePage'][142]?></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
    </div>
    <script type='text/javascript' src='<?=$host?>/wp-content/themes/spincrm-v4/js/custom.js?v2&#038;ver=2020d4be068ad5fd14d25f8b4957e65f' id='js-file-js'></script>
    <script type='text/javascript' src='<?=$host?>/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='<?=$host?>/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type='text/javascript' src='<?=$host?>/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.6' id='contact-form-7-js'></script>
    <script type='text/javascript' src='<?=$host?>/wp-content/plugins/atomic-blocks/dist/assets/js/dismiss.js?ver=1609437232' id='atomic-blocks-dismiss-js-js'></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/vendors/swiper-bundle.min.js"></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/vendors/parallax.min.js"></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/vendors/aos.js"></script>
    <script src="<?=$host?>/wp-content/themes/spincrm-v4/js/app.js"></script>
</body>
</html>