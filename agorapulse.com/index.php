<?php include_once ('website.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="lrt">
<head>
    <meta charset="utf-8">
    <title>Social Media Management Software | <?=$namehost?></title>
    <meta name="description" content="An easy to use Social Media Management Software that allows you to stay organized, save time, and easily manage your inbox, publishing, reporting, monitoring, and team collaboration tools.">
    <meta property="og:description" content="An easy to use Social Media Management Software that allows you to stay organized, save time, and easily manage your inbox, publishing, reporting, monitoring, and team collaboration tools.">
    <meta name="twitter:description" content="An easy to use Social Media Management Software that allows you to stay organized, save time, and easily manage your inbox, publishing, reporting, monitoring, and team collaboration tools.">
    <meta name="keywords" content="Social Media Management Software">
    <link rel="canonical" href="<?=$host?>/">
    <link rel="alternate" href="<?=$host?>/" hreflang="x-default" />
    <link rel="alternate" href="<?=$host?>/" hreflang="en" />
    <link rel="alternate" href="<?=$host?>/fr/" hreflang="fr" />
    <link rel="alternate" href="<?=$host?>/es/" hreflang="es" />
    <link rel="alternate" href="<?=$host?>/de/" hreflang="de" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Home">
    <meta property="fb:app_id" content="529576650555031">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?=$host?>/">
    <meta property="og:image" content="<?=$host?>/assets/agorapulse-og-img.png">
    <meta property="og:site_name" content="<?=$namehost?>">
    <meta name="twitter:title" content="Social Media Management Software | <?=$namehost?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@<?=$namehost?>">
    <meta name="twitter:image" content="<?=$host?>/assets/agorapulse-og-img.png">
    <meta name="twitter:creator" content="@<?=$namehost?>">
    <meta name="p:domain_verify" content="0c9659695195285a24ddac7365a66648">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//cdn.segment.com">
    <link rel="dns-prefetch" href="//connect.facebook.net">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.googleadservices.com">
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
    <link rel="dns-prefetch" href="//api.segment.io">
    <link rel="dns-prefetch" href="//staticxx.facebook.com">
    <link rel="dns-prefetch" href="//snap.licdn.com">
    <link rel="dns-prefetch" href="//px.ads.linkedin.com">
    <link rel="dns-prefetch" href="//secure.gravatar.com">
    <link href="<?=$host?>/assets/index.css?310b73b41aa1d7c6a19c" rel="stylesheet">
    <link href="<?=$host?>/assets/pricing_v3.css" rel="stylesheet">
    <script type="text/javascript" src="<?=$host?>/assets/index.js?310b73b41aa1d7c6a19c" defer></script>
    <style>
        nav.navbar {
            height: 83px;
        }
        
        nav.navbar.hide {
            box-shadow: 0px 1px 3px 0px #999;
        }
        
        .top-nav nav.navbar {
            height: 83px;
        }
        nav.navbar.white .navbar-collapse {
            height: 50px
        }
    </style>
    <style type="text/stylesheet"> 
     .banner-featured {  background-image: url($media['HomePage'][16]) !important;
     }
     .screenshot{  background-image: url($media['HomePage'][28]) !important;
     }
  

      </style>
</head>
<body class="home top-nav">
    <nav class="navbar navbar-expand-lg" id="myNavbar">
        <div class="container">
            <a href="/" class="navbar-brand" title="<?=$namehost?>"> <img class="brand" alt="<?=$namehost?>" src="<?=$host?><?= $media['HomePage'][0]?>" width="140" height="29"> </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation" id="navcollapse"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav nav-fill">
                    <li class="nav-item"> <a href="#pricing" class="nav-link"><?= $content['HomePage'][0]?></a> </li>
                    <li class="nav-item"> <a href="#home-features" class="nav-link"><?= $content['HomePage'][1]?></a> </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-fill">
                    <li class="nav-item"> <a class="button nav-contact-button" href="/contact" id="en-nav-Contact"><?= $content['HomePage'][2]?></a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <link href="<?=$host?>/assets/home.css?310b73b41aa1d7c6a19c" rel="stylesheet">
    <script type="text/javascript" src="<?=$host?>/assets/home.js?310b73b41aa1d7c6a19c" defer></script>
    <main id="home">
        <section id="home-hero" class="hero-section">
            <div class="container">
                <h1><?= $content['HomePage'][3]?><br><?= $content['HomePage'][4]?></h1>
                <p><?= $content['HomePage'][5]?> <?=$namehost?><?= $content['HomePage'][6]?></p>
                <link href="<?=$host?>/assets/supported_networks.css?310b73b41aa1d7c6a19c" rel="stylesheet">
                <script type="text/javascript" src="<?=$host?>/assets/supported_networks.js?310b73b41aa1d7c6a19c" defer></script>
                <section id="supported-networks" data-sal="slide-up" data-sal-duration="600" data-sal-delay="5">
                    <p><?= $content['HomePage'][7]?></p><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][1]?>" alt="facebook" src="<?=$host?><?= $media['HomePage'][2]?>" data-loaded="true" /><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][3]?>" alt="instagram" src="<?=$host?><?= $media['HomePage'][4]?>" data-loaded="true" /><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][5]?>" alt="LinkedIn" src="<?=$host?><?= $media['HomePage'][6]?>" data-loaded="true" /><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][7]?>" alt="twitter" src="<?=$host?><?= $media['HomePage'][8]?>" data-loaded="true" /><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][9]?>" alt="youtube" src="<?=$host?><?= $media['HomePage'][10]?>" data-loaded="true" /><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][11]?>" alt="google my business" src="<?=$host?><?= $media['HomePage'][12]?>" data-loaded="true" /><img class="lozad" data-src="<?=$host?><?= $media['HomePage'][13]?>" alt="tiktok" src="<?=$host?><?= $media['HomePage'][14]?>" data-loaded="true" /></section>
            </div>
            <div class="image-wrap">
                <picture title="Take Control<br>of Your Social Media">
                    <source type="image/webp" srcset="<?=$host?>/assets/home-hero-image-desktop-large.webp 1440w, /assets/home-hero-image-desktop-medium.webp 768w, /assets/home-hero-image-desktop-small.webp 599w" sizes="(max-width: 1440px) 100vw, 1440px"> <img class="hero-imageFixed lozad" src="<?=$host?><?= $media['HomePage'][15]?> 1440w" alt="Take Control<br>of Your Social Media" sizes="(max-width: 1440px) 100vw, 1440px" srcset="<?=$host?>/assets/home-hero-image-desktop-large.png 1440w, /assets/home-hero-image-desktop-medium.png 768w, /assets/home-hero-image-desktop-small.png 599w" width="1440" height="1238"> </picture>
            </div>
        </section>
        <section id="home-featured">
            <div class="container">
                <div class="banner-featured " style="background-image: url();"> <img class="featured-image mobile" src="<?=$host?><?= $media['HomePage'][17]?>" alt="balloons-celebration-social" />
                    <div class="featured-heading"> <img class="featured-image left" src="<?=$host?><?= $media['HomePage'][18]?>" alt="star" />
                        <h2 class="featured-title black-section-title" data-sal="slide-up" data-sal-duration="600" data-sal-delay="5"><?= $content['HomePage'][8]?> <?=$namehost?><?= $content['HomePage'][9]?></h2> <img class="featured-image right" src="<?=$host?><?= $media['HomePage'][19]?>" alt="balloons-celebration-social" /> </div>
                    <div class="button-wrap"> <a href="/google-analytics-integration/" target="_blank" title="Learn more" class="vbtn orange" data-sal="slide-up" data-sal-duration="600" data-sal-delay="6"> <?= $content['HomePage'][10]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"/> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> </a> </div>
                </div>
            </div>
        </section>
        <section id="home-logos">
            <div class="container text-center">
                <h2 data-sal="slide-up" data-sal-duration="600" data-sal-delay="5"><?= $content['HomePage'][11]?></h2>
                <div class="logo_row gallery-logo_10">
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][20]?>" alt="ogilvy" style="max-height: 31px; width: 79px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][21]?>" alt="digitalbutter" style="max-height: 20px; width: 141px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][22]?>" alt="west-virginia-university" style="max-height: 31px; width: 100px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][23]?>" alt="confluent health" style="max-height: 31px; width: 140px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][24]?>" alt="shipt" style="max-height: 26px; width: 79px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][25]?>" alt="butter box" style="max-height: 25px; width: 56px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                    <div>
                        <div class="item_logo"> <img src="<?=$host?><?= $media['HomePage'][26]?>" alt="fourteen foods" style="max-height: 45px; width: 80px;" loading="lazy" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200"> </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="home-intro">
            <div class="container text-center">
                <h2 class="black-section-title" data-sal="slide-up" data-sal-duration="600" data-sal-delay="5"><?= $content['HomePage'][12]?></h2>
                <p><?= $content['HomePage'][13]?> </p>
            </div>
        </section>
        <section id="home-features" class="inbox buddy-inbox">
            <div class="container">
                <h3 class="black-section-title" data-sal="slide-up" data-sal-duration="600" data-sal-delay="5"><?= $content['HomePage'][14]?></h3>
                <div class="module">
                    <div class="module-text">
                        <div data-sal="slide-up" data-sal-duration="600" data-sal-delay="200">
                            <div class="feature-row open-feature" data-feature-img="<?=$host?><?= $media['HomePage'][27]?>" data-feature-skin="inbox">
                                <button>
                                    <h4><?= $content['HomePage'][15]?></h4>
                                    <div class="feature-icon"> <i class="chevron-down"></i> <i class="chevron-up"></i> </div>
                                </button>
                                <div class="feature-text">
                                    <p><?= $content['HomePage'][16]?> </p>
                                    <div class="screenshot mobile-screenshot lozad" data-sal="slide-left" data-sal-once="false" data-sal-duration="600" data-sal-delay="400" data-background-image="<?=$host?>"></div> <a class="button hero-button" href="/features/social-media-inbox/" title="Unified Social Inbox"><?= $content['HomePage'][17]?></a> </div>
                            </div>
                            <div class="feature-row" data-feature-img="<?=$host?><?= $media['HomePage'][29]?>" data-feature-skin="publishing">
                                <button>
                                    <h4><?= $content['HomePage'][18]?></h4>
                                    <div class="feature-icon"> <i class="chevron-down"></i> <i class="chevron-up"></i> </div>
                                </button>
                                <div class="feature-text">
                                    <p><?= $content['HomePage'][19]?> </p>
                                    <div class="screenshot mobile-screenshot" data-sal="slide-left" data-sal-once="false" data-sal-duration="600" data-sal-delay="400"></div> <a class="button hero-button" href="/features/social-media-publishing/" title="Intuitive Publishing"><?= $content['HomePage'][20]?></a> </div>
                            </div>
                            <div class="feature-row" data-feature-img="<?=$host?><?= $media['HomePage'][30]?>" data-feature-skin="monitoring">
                                <button>
                                    <h4><?= $content['HomePage'][21]?></h4>
                                    <div class="feature-icon"> <i class="chevron-down"></i> <i class="chevron-up"></i> </div>
                                </button>
                                <div class="feature-text">
                                    <p><?= $content['HomePage'][22]?> </p>
                                    <div class="screenshot mobile-screenshot" data-sal="slide-left" data-sal-once="false" data-sal-duration="600" data-sal-delay="400"></div> <a class="button hero-button" href="/features/social-media-monitoring/" title="Social Listening"><?= $content['HomePage'][23]?></a> </div>
                            </div>
                            <div class="feature-row" data-feature-img="<?=$host?><?= $media['HomePage'][31]?>" data-feature-skin="reporting">
                                <button>
                                    <h4><?= $content['HomePage'][24]?></h4>
                                    <div class="feature-icon"> <i class="chevron-down"></i> <i class="chevron-up"></i> </div>
                                </button>
                                <div class="feature-text">
                                    <p><?= $content['HomePage'][25]?> </p>
                                    <div class="screenshot mobile-screenshot" data-sal="slide-left" data-sal-once="false" data-sal-duration="600" data-sal-delay="400"></div> <a class="button hero-button" href="/features/social-media-reporting/" title="Insightful Analytics"><?= $content['HomePage'][26]?></a> </div>
                            </div>
                            <div class="feature-row" data-feature-img="<?=$host?><?= $media['HomePage'][32]?>" data-feature-skin="reporting">
                                <button>
                                    <h4><?= $content['HomePage'][27]?></h4>
                                    <div class="feature-icon"> <i class="chevron-down"></i> <i class="chevron-up"></i> </div>
                                </button>
                                <div class="feature-text">
                                    <p><?= $content['HomePage'][28]?> </p>
                                    <div class="screenshot mobile-screenshot" data-sal="slide-left" data-sal-once="false" data-sal-duration="600" data-sal-delay="400"></div> <a class="button hero-button" href="/features/roi/" title="Social Media ROI"><?= $content['HomePage'][29]?></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-img">
                        <div class="screenshot-container">
                            <div class="screenshot lozad" data-sal="slide-left" data-sal-once="false" data-sal-duration="600" data-sal-delay="400" data-background-image="<?=$host?><?= $media['HomePage'][33]?>"></div>
                            <div class="bottom-accent lozad" data-sal="zoom-in" data-sal-duration="300" data-sal-delay="700" data-background-image="<?=$host?><?= $media['HomePage'][34]?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="home-best-support" class="text-blocks">
            <div class="container">
                <div class="module text-block-center">
                    <video class="module-img lozad" autoplay playsinline muted data-poster="<?=$host?><?= $media['HomePage'][35]?>" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200" style="max-width:366px;">
                        <source data-src="<?=$host?><?= $media['HomePage'][36]?>" type="video/mp4"> </video>
                    <div class="module-text" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200">
                        <h2 class="black-section-title"><?= $content['HomePage'][30]?></h2>
                        <p><?= $content['HomePage'][31]?> </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="home-stats">
            <div class="container">
                <div class="module">
                    <article> <img class="img-fluid lozad" width="120" height="124" data-src="<?=$host?><?= $media['HomePage'][37]?>" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200" alt="Email icon" />
                        <div data-sal="slide-up" data-sal-duration="600" data-sal-delay="250">
                            <h3><?= $content['HomePage'][32]?> <small><?= $content['HomePage'][33]?></small></h3>
                            <p><?= $content['HomePage'][34]?>
                                <br><?= $content['HomePage'][35]?> </p>
                        </div>
                    </article>
                    <article> <img class="img-fluid lozad" width="120" height="120" data-src="<?=$host?><?= $media['HomePage'][38]?>" data-sal="slide-up" data-sal-duration="600" data-sal-delay="400" alt="Best support badge icon" />
                        <div data-sal="slide-up" data-sal-duration="600" data-sal-delay="450">
                            <h3><?= $content['HomePage'][36]?> <small><?= $content['HomePage'][37]?></small></h3>
                            <p><?=$namehost?><?= $content['HomePage'][38]?> </p>
                        </div>
                    </article>
                    <article> <img class="img-fluid lozad" width="120" height="120" data-src="<?=$host?><?= $media['HomePage'][39]?>" data-sal="slide-up" data-sal-duration="600" data-sal-delay="600" alt="Headphones icon" />
                        <div data-sal="slide-up" data-sal-duration="600" data-sal-delay="650">
                            <h3><?= $content['HomePage'][39]?> <small><?= $content['HomePage'][40]?></small></h3>
                            <p><?=$namehost?> <?= $content['HomePage'][41]?> </p>
                        </div>
                    </article>
                    <article> <img class="img-fluid lozad" width="120" height="120" data-src="<?=$host?><?= $media['HomePage'][40]?>" data-sal="slide-up" data-sal-duration="600" data-sal-delay="800" alt="Number one for support badge icon" />
                        <div data-sal="slide-up" data-sal-duration="600" data-sal-delay="850">
                            <h3><?= $content['HomePage'][42]?></small></h3>
                            <p><?= $content['HomePage'][43]?> </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="home-best-solution" class="text-blocks">
            <div class="container">
                <div class="module text-block-left">
                    <div class="module-text" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200">
                        <h2 class="black-section-title"><?= $content['HomePage'][44]?><br><?= $content['HomePage'][45]?></h2>
                        <p><?= $content['HomePage'][46]?> <?=$namehost?> <?= $content['HomePage'][47]?> </p></div>
                    <video class="module-img lozad" autoplay playsinline muted data-poster="<?=$host?><?= $media['HomePage'][41]?>">
                        <source data-src="<?=$host?><?= $media['HomePage'][42]?>" type="video/mp4"> </video>
                </div>
                <div class="module text-block-right">
                    <video class="module-img lozad" autoplay playsinline muted data-poster="<?=$host?><?= $media['HomePage'][43]?>">
                        <source data-src="<?=$host?><?= $media['HomePage'][44]?>" type="video/mp4"> </video>
                    <div class="module-text" data-sal="slide-up" data-sal-duration="600" data-sal-delay="200">
                        <h2 class="black-section-title"><?= $content['HomePage'][48]?></h2>
                        <p><?= $content['HomePage'][49]?> </p> <a class="button pricing-link-button mt-3" href="/pricing/"><?= $content['HomePage'][50]?></a> </div>
                </div>
            </div>
        </section>
        <div id="hometestimonial"></div>
        <section id="home-customer-story">
            <video class="lozad" playsinline autoplay loop muted loop id="home-customer-story-bg-video" width="100%">
                <source data-src="<?=$host?><?= $media['HomePage'][45]?>" type="video/mp4"> </video>
            <div class="customer-story-overlay"></div>
            <div class="container">
                <blockquote>
                    <p>&quot;<?=$namehost?><?= $content['HomePage'][51]?> </p>
                    <footer>
                        <p><?= $content['HomePage'][52]?></p>
                        <div class="wistia_embed wistia_async_9mwetfbvmq popover=true popoverContent=link">
                            <button class="button watch-video-button" data-wistia-id="9mwetfbvmq"><?= $content['HomePage'][53]?></button>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </section>
        <div id="pricing" style="padding: 160px 0 0 0;" class="pricing-cards annual">
            <div class="container">
                <div class="cards row">
                    <div class="card col-md-6 col-lg-3 en">
                        <div class="card-inner sal-animate" data-sal="slide-up" data-sal-duration="600" data-sal-delay="0">
                            <div class="card-head">
                                <h3 class="card-title"><?= $content['HomePage'][54]?></h3>
                                <div class="card-price">
                                    <div class="price annual"><span style="font-size: 28px; line-height: 34px;"><?= $content['HomePage'][55]?></span><span style="font-size: 38px; line-height: 46px;"><?= $content['HomePage'][56]?></span><?= $content['HomePage'][57]?></div>
                                    <div class="info annual"><?= $content['HomePage'][58]?>
                                        <br> <?= $content['HomePage'][59]?> </div>
                                    <div class="price monthly"><span style="font-size: 28px; line-height: 34px;"><?= $content['HomePage'][60]?></span><span style="font-size: 38px; line-height: 46px;"><?= $content['HomePage'][61]?></span><?= $content['HomePage'][62]?></div>
                                    <div class="info monthly"><?= $content['HomePage'][63]?>
                                        <br> <?= $content['HomePage'][64]?> </div>
                                </div>
                                <div class="card-text monthly"><?= $content['HomePage'][65]?>
                                    <br> <?= $content['HomePage'][66]?></div>
                                <div class="card-text annual"><?= $content['HomePage'][67]?>
                                    <br> <?= $content['HomePage'][68]?></div>
                            </div>
                            <div class="card-button annual"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup=""><?= $content['HomePage'][69]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-button monthly"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup=""><?= $content['HomePage'][70]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-info"><?= $content['HomePage'][71]?> </div>
                            <h4 class="card-list-title"><?= $content['HomePage'][72]?> <br> <?= $content['HomePage'][73]?> </h4>
                            <div class="card-list-wrap">
                                <ul class="card-list plist">
                                    <li><?= $content['HomePage'][74]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][75]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][76]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][77]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][78]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][79]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][80]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][81]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][82]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][83]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][84]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][85]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][86]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][87]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][88]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][89]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][90]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][91]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][92]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-6 col-lg-3 en">
                        <div class="card-inner sal-animate" data-sal="slide-up" data-sal-duration="600" data-sal-delay="250">
                            <div class="card-head">
                                <h3 class="card-title"><?= $content['HomePage'][93]?></h3>
                                <div class="card-price">
                                    <div class="price annual"><span style="font-size: 28px; line-height: 34px;"><?= $content['HomePage'][94]?></span><span style="font-size: 38px; line-height: 46px;"><?= $content['HomePage'][95]?></span><?= $content['HomePage'][96]?></div>
                                    <div class="info annual"><?= $content['HomePage'][97]?>
                                        <br><?= $content['HomePage'][98]?> </div>
                                    <div class="price monthly"><span style="font-size: 28px; line-height: 34px;"><?= $content['HomePage'][99]?></span><span style="font-size: 38px; line-height: 46px;"><?= $content['HomePage'][100]?></span><?= $content['HomePage'][101]?></div>
                                    <div class="info monthly"><?= $content['HomePage'][102]?>
                                        <br> <?= $content['HomePage'][103]?> </div>
                                </div>
                                <div class="card-text monthly"><?= $content['HomePage'][104]?>
                                    <br> <?= $content['HomePage'][105]?></div>
                                <div class="card-text annual" style=""><?= $content['HomePage'][106]?>
                                    <br> <?= $content['HomePage'][107]?></div>
                            </div>
                            <div class="card-button annual"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup=""><?= $content['HomePage'][108]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-button monthly"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup=""><?= $content['HomePage'][109]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-info"><?= $content['HomePage'][110]?> </div>
                            <h4 class="card-list-title"><?= $content['HomePage'][111]?> <br> <?= $content['HomePage'][112]?> </h4>
                            <div class="card-list-wrap">
                                <ul class="card-list plist">
                                    <li><?= $content['HomePage'][113]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][114]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][115]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][116]?>
                                        <br> <?= $content['HomePage'][117]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][118]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][119]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][120]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][121]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][122]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][123]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][124]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][125]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][126]?>
                                        <br> <?= $content['HomePage'][127]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][128]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][129]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-6 col-lg-3 popular en">
                        <div class="card-inner sal-animate" data-sal="slide-up" data-sal-duration="600" data-sal-delay="500">
                            <div class="card-head">
                                <h3 class="card-title"><?= $content['HomePage'][130]?></h3>
                                <div class="card-price">
                                    <div class="price annual"><span style="font-size: 28px; line-height: 34px;"><?= $content['HomePage'][131]?></span><span style="font-size: 38px; line-height: 46px;"><?= $content['HomePage'][132]?></span><?= $content['HomePage'][133]?></div>
                                    <div class="info annual"><?= $content['HomePage'][134]?>
                                        <br> <?= $content['HomePage'][135]?> </div>
                                    <div class="price monthly"><span style="font-size: 28px; line-height: 34px;"><?= $content['HomePage'][136]?></span><span style="font-size: 38px; line-height: 46px;"><?= $content['HomePage'][137]?></span><?= $content['HomePage'][138]?></div>
                                    <div class="info monthly"><?= $content['HomePage'][139]?>
                                        <br> <?= $content['HomePage'][140]?> </div>
                                </div>
                                <div class="card-text monthly"><?= $content['HomePage'][141]?>
                                    <br> <?= $content['HomePage'][142]?></div>
                                <div class="card-text annual"><?= $content['HomePage'][143]?>
                                    <br> <?= $content['HomePage'][144]?></div>
                            </div>
                            <div class="card-button annual"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup=""><?= $content['HomePage'][145]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-button monthly"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup=""><?= $content['HomePage'][146]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-info"><?= $content['HomePage'][147]?> </div>
                            <h4 class="card-list-title"><?= $content['HomePage'][148]?> </h4>
                            <div class="card-list-wrap">
                                <ul class="card-list plist">
                                    <li><?= $content['HomePage'][149]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][150]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][151]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][152]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][153]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][154]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][155]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][156]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][157]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][158]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][159]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][160]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][161]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][162]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][163]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][164]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][165]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][166]?></span></span>
                                    </li>
                                    <li><?= $content['HomePage'][167]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][168]?></span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-6 col-lg-3 en">
                        <div class="card-inner sal-animate" data-sal="slide-up" data-sal-duration="600" data-sal-delay="750">
                            <div class="card-head">
                                <h3 class="card-title"><?= $content['HomePage'][169]?></h3>
                                <div class="card-text monthly"><?= $content['HomePage'][170]?>
                                    <br> </div>
                                <div class="card-text annual"><?= $content['HomePage'][171]?>
                                    <br> </div>
                                <div class="card-icon"> <img src="<?=$host?><?= $media['HomePage'][46]?>" alt="icon-cogs-reporting"> </div>
                            </div>
                            <div class="card-button annual"> <a href="/contact" target="_blank" class="vbtn blue-sky" data-mobile-signup="/contact"><?= $content['HomePage'][172]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-button monthly"> <a href="/contact" target="_blank" class="vbtn blue-sky" data-mobile-signup="/contact"><?= $content['HomePage'][173]?><svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                            <div class="card-info">
                                <div class="card-button"> <a href="/request-demo/" target="_blank" class="vbtn-link"><?= $content['HomePage'][174]?> </a> </div>
                            </div>
                            <h4 class="card-list-title"><?= $content['HomePage'][175]?> <br> <?= $content['HomePage'][176]?> </h4>
                            <div class="card-list-wrap">
                                <ul class="card-list plist">
                                    <li><?= $content['HomePage'][177]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][178]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][179]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][180]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][181]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                    <li><?= $content['HomePage'][182]?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-free card ">
                    <div class="card-inner sal-animate" data-sal="slide-up" data-sal-duration="600" data-sal-delay="1250">
                        <div class="row">
                            <div class="col-auto col-title">
                                <h2><?= $content['HomePage'][183]?></h2> </div>
                            <div class="col-auto col-info">
                                <div class="price"><?= $content['HomePage'][184]?></div>
                                <div class="card-content"> <strong><?= $content['HomePage'][185]?></strong> <?= $content['HomePage'][186]?> <strong><?= $content['HomePage'][187]?></strong> <?= $content['HomePage'][188]?> </div>
                            </div>
                            <div class="col-auto col-list">
                                <div class="card-list-wrap">
                                    <ul class="card-list plist">
                                        <li><?= $content['HomePage'][189]?>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                            </svg>
                                        </li>
                                        <li><?= $content['HomePage'][190]?>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                            </svg>
                                        </li>
                                        <li><?= $content['HomePage'][191]?>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                            </svg>
                                        </li>
                                        <li><?= $content['HomePage'][192]?>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                            </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][193]?></span></span>
                                        </li>
                                        <li><?= $content['HomePage'][194]?>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="#344563"></path>
                                            </svg><span class="pricing-tooltip"><span class="tooltiptext"><?= $content['HomePage'][195]?></span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto col-button">
                                <div class="col-inner">
                                    <div class="card-button"> <a href="" target="_blank" class="vbtn blue-sky" data-mobile-signup="/signup/"> <?= $content['HomePage'][196]?> <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <line x1="1.89453" y1="5.7998" x2="12.6945" y2="5.7998" stroke="white" stroke-width="2.5" stroke-linecap="round"></line> <path d="M11.8447 2.1499L14.6447 5.9999L11.8447 9.8499" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <style>
        footer#footer .container {
            padding: 40px 0;
            border-top: none;
        }
        
        footer#footer #legal-nav {
            margin-bottom: 0px;
        }
        
        footer#footer {
            -webkit-user-select: none;
            user-select: none;
            padding: 0px 0 0 0;
            margin: 0;
        }
    </style>
    <footer id="footer">
        <div class="container">
            <div id="legal-nav" class="d-flex justify-content-between">
                <div class="d-flex legal-nav-left">
                    <div class="d-flex policy-links">
                        <p>&copy; <script>
                                document.write(new Date().getFullYear())

                            </script> <?=$namehost?></p>
                        <p><a href="<?=$host?>/terms-of-service"><?= $content['HomePage'][197]?></a></p>
                        <p><a href="<?=$host?>/privacy-policy"><?= $content['HomePage'][198]?></a></p>
                        <p><a href="<?=$host?>/refund-policy"><?= $content['HomePage'][199]?></a></p>
                        <p><a href="<?=$host?>/about-us"><?= $content['HomePage'][200]?></a></p>
                        <p><a href="<?=$host?>/delivery-policy"><?= $content['HomePage'][201]?></a></p>
                    </div>
                    <div class="social-links"> <a href="https://facebook.com/<?=$namehost?>" target="_blank" title="<?=$namehost?> Facebook page"> <img class="lozad" width="24" height="24" data-src="<?=$host?><?= $media['HomePage'][47]?>" alt="Facebook icon" /></a> <a href="https://www.instagram.com/<?=$namehost?>/" target="_blank" title="<?=$namehost?> Instagram profile"> <img class="lozad" width="24" height="24" data-src="<?=$host?><?= $media['HomePage'][48]?>" alt="Instagram icon" /></a> <a href="https://twitter.com/<?=$namehost?>" target="_blank" title="<?=$namehost?> Twitter account"> <img class="lozad" width="24" height="24" data-src="<?=$host?><?= $media['HomePage'][49]?>" alt="Twitter icon" /></a> <a href="https://www.youtube.com/user/<?=$namehost?>4Facebook" target="_blank" title="<?=$namehost?> YouTube channel"> <img class="lozad" width="24" height="24" data-src="<?=$host?><?= $media['HomePage'][50]?>" alt="YouTube icon" /></a> <a href="https://www.linkedin.com/company/<?=$namehost?>/" title="<?=$namehost?> LinkedIn company page"> <img class="lozad" width="24" height="24" data-src="<?=$host?><?= $media['HomePage'][51]?>" alt="LinkedIn icon"></a> <a href="https://www.tiktok.com/@<?=$namehost?>" target="_blank" title="<?=$namehost?> TikTok profile"> <img class="lozad" width="24" height="24" data-src="<?=$host?><?= $media['HomePage'][52]?>" alt="TikTok icon" /></a> </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>