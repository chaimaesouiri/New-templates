<?php include_once ('website.php'); ?>
<html lang="en" data-react-helmet="lang">
<head>
    <meta charset="UTF-8">
    <title>Create a professional resume with Applyya</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="twitter:site" content="@applyya">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta property="og:image" content="/images/share-image.jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@applyya">
    <meta property="twitter:image" content="/images/share-image.jpeg">
    <link href="/static/css/6.b26f647d.chunk.css" rel="stylesheet">
    <link href="/static/css/main.58d8f2aa.chunk.css" rel="stylesheet">
    <script charset="utf-8" src="/static/js/0.d61cc6bd.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/9.cbf0ab19.chunk.css">
    <script charset="utf-8" src="/static/js/9.e40e95bb.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/10.45b51a33.chunk.css">
    <script charset="utf-8" src="/static/js/10.6dfffe41.chunk.js"></script>
    <link rel="alternate" href="<?=$host?>" hreflang="en" data-react-helmet="true">
    <link rel="alternate" href="<?=$host?>fr/" hreflang="fr" data-react-helmet="true">
    <link rel="alternate" href="<?=$host?>es/" hreflang="es" data-react-helmet="true">
    <link rel="alternate" href="<?=$host?>uk/" hreflang="uk" data-react-helmet="true">
    <meta property="og:title" content="Create a professional resume with Applyya" data-react-helmet="true">
    <meta property="og:description" content="Create an excellent resume in minutes with our free resume builder. Select a template. Personalize it. Download resume in PDF version for free." data-react-helmet="true">
    <meta name="description" content="Create an excellent resume in minutes with our free resume builder. Select a template. Personalize it. Download resume in PDF version for free." data-react-helmet="true">
    <meta property="og:image" content="/images/share-image.jpeg" data-react-helmet="true">
    <meta property="og:url" content="" data-react-helmet="true">
</head>
<body>
    <div id="app">
        <div class="root bg-white">
            <header id="header" class="header animated fixed">
                <div class="container">
                    <nav class="nav d-flex align-items-center justify-content-between">
                        <a class="logo" href="/"><img src="<?= $media['HomePage'][0]?>" alt="Applyya"></a>
                        <div class="d-flex align-items-center">
                            <div class="menu__btn"><span></span></div>
                        </div>
                        <div class="nav__content" style="height: 0px;">
                            <div class="ReactCollapse--content">
                                <div class="nav__content__inner ">
                                    <ul class="menu">
                                        <li class="menu__item"><a href="/contact"><?= $content['HomePage'][0]?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <main>
                <section class="creat-resume">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 order-2">
                                <h1 class="title-section creat-resume__title"><?= $content['HomePage'][1]?></span></h1>
                                <p class="text-animate"><?= $content['HomePage'][2]?></p>
                                <p class="text-animate"><?= $content['HomePage'][3]?></p><a class="btn-orange creat-resume__btn btn-animate" href="/"><?= $content['HomePage'][4]?></a></div>
                            <div class="col-12 col-md-6 col-lg-7 order-md-2 order-1">
                                <div class="creat-resume__img img-animate"><img src="<?= $media['HomePage'][1]?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="value-resume"><span class="value-resume__img img-animate"><img src="<?= $media['HomePage'][2]?>" alt=""></span>
                    <div class="container">
                        <h2 class="title-section value-resume__title text-center"><?= $content['HomePage'][5]?></span></h2>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <div class="card__img"><img src="<?= $media['HomePage'][3]?>" alt=""></div>
                                    <h4 class="card__title"><?= $content['HomePage'][6]?></h4>
                                    <p><?= $content['HomePage'][7]?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <div class="card__img"><img src="<?= $media['HomePage'][4]?>" alt=""></div>
                                    <h4 class="card__title"><?= $content['HomePage'][8]?></h4>
                                    <p><?= $content['HomePage'][9]?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <div class="card__img"><img src="<?= $media['HomePage'][5]?>" alt=""></div>
                                    <h4 class="card__title"><?= $content['HomePage'][10]?></h4>
                                    <p><?= $content['HomePage'][11]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="good-resume">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <h2 class="title-section good-resume__title"><?= $content['HomePage'][12]?></span></h2></div>
                            <div class="col-12 col-md-7 col-lg-6">
                                <p class="good-resume__text text-animate"><?= $content['HomePage'][14]?></p>
                                <p class="good-resume__text text-animate"><?= $content['HomePage'][15]?></p>
                                <p class="good-resume__text text-animate"><?= $content['HomePage'][16]?></p>
                            </div>
                            <div class="col-12">
                                <div class="slick-slider slider slick-initialized" dir="ltr">
                                    <button aria-label="Previous" class="slider__next slider-arrow">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                            <path fill="currentColor" d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z"></path>
                                        </svg>
                                    </button>
                                    <div class="slick-list" style="">
                                        <div class="slick-track" style="width: 3735px; opacity: 1; transform: translate3d(-415px, 0px, 0px);">
                                            <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_1.9b518bbd.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_1.0a5d9c00.jpg"><img src="<?= $media['HomePage'][6]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_3.8bb75b74.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_3.d17d1d35.jpg"><img src="<?= $media['HomePage'][7]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_2.a4baa069.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_2.6f35a2bd.jpg"><img src="<?= $media['HomePage'][8]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_3.8bb75b74.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_3.d17d1d35.jpg"><img src="<?= $media['HomePage'][9]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_1.9b518bbd.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_1.0a5d9c00.jpg"><img src="<?= $media['HomePage'][10]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_3.8bb75b74.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_3.d17d1d35.jpg"><img src="<?= $media['HomePage'][11]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_2.a4baa069.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_2.6f35a2bd.jpg"><img src="<?= $media['HomePage'][12]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_3.8bb75b74.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_3.d17d1d35.jpg"><img src="<?= $media['HomePage'][13]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 415px;">
                                                <div>
                                                    <div class="slider__item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <picture>
                                                            <source type="image/webp" srcset="/static/media/template_1.9b518bbd.webp">
                                                            <source type="image/jpg" srcset="/static/media/template_1.0a5d9c00.jpg"><img src="<?= $media['HomePage'][14]?>" alt="Resume template by <?=$ihost?>"></picture>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button aria-label="Next" class="slider__prev slider-arrow">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                            <path fill="currentColor" d="M4.2 247.5L151 99.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17L69.3 256l118.5 119.7c4.7 4.7 4.7 12.3 0 17L168 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 264.5c-4.7-4.7-4.7-12.3 0-17z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="how-create-cv">
                    <div class="container">
                        <h2 class="title-section text-center how-create-cv__title"><?= $content['HomePage'][17]?></span></h2>
                        <div class="row align-items-center mb-20">
                            <div class="col-12 col-md-6">
                                <div class="how-create-cv__img img-animate"><img src="<?= $media['HomePage'][15]?>" alt=""></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="how-create-cv__desc"><span class="how-create-cv__step"><img src="<?= $media['HomePage'][16]?>" alt=""></span>
                                    <p class="text-animate"><?= $content['HomePage'][18]?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-150">
                            <div class="col-12 col-md-6 order-md-2">
                                <div class="how-create-cv__img img-animate"><img src="<?= $media['HomePage'][17]?>" alt=""></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="how-create-cv__desc how-create-cv__desc_left"><span class="how-create-cv__step"><img src="<?= $media['HomePage'][18]?>" alt=""></span>
                                    <p class="text-animate"><?= $content['HomePage'][19]?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="how-create-cv__img img-animate"><img src="<?= $media['HomePage'][19]?>" alt=""></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="how-create-cv__desc"><span class="how-create-cv__step"><img src="<?= $media['HomePage'][20]?>" alt=""></span>
                                    <p class="text-animate"><?= $content['HomePage'][20]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ready-create-resume">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-6 col-lg-4">
                                <h3 class="title-section ready-create-resume__title"><span><?= $content['HomePage'][21]?></h3>
                                <p class="ready-create-resume__text"><?= $content['HomePage'][22]?></p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5">
                                <div class="ready-create-resume__btn"><img class="ready-create-resume__arrow-img" src="<?= $media['HomePage'][21]?>" alt=""><span class="for-free"></span><a class="btn-orange creat-resume__btn" href="/"><?= $content['HomePage'][23]?></a></div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="footer" id="footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4 order-2 order-md-1">
                            <a class="logo__bottom" href="/"><img src="<?= $media['HomePage'][22]?>" alt="applyya"></a>
                        </div>
                        <div class="col-12 col-md-8 order-1">
                            <nav class="footer-menu d-flex align-items-center">
                               <a href="/terms-of-service"><?= $content['HomePage'][24]?></a>
                               <a href="/privacy"><?= $content['HomePage'][25]?></a>
                               <a href="/refund-policy"><?= $content['HomePage'][26]?></a>
                               <a href="/delivery-policy"><?= $content['HomePage'][27]?></a>
                               <a href="/about"><?= $content['HomePage'][28]?></a>
                                <div class="social-link d-flex">
                                <a aria-label="Facebook" href="https://facebook.com/" class="social-link__item social-link--facebook"><span class="icon icon-facebook"></span>
                                </a>
                                <a aria-label="Linkedin" href="https://www.linkedin.com/" class="social-link__item social-link--linkedin"><span class="icon icon-linkedin"></span></a>
                                <a aria-label="Twitter" href="https://twitter.com/" class="social-link__item social-link--twitter"><span class="icon icon-twitter"></span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>