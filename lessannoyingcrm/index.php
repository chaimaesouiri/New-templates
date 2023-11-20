<?php include_once('website.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Less Annoying CRM | Simple Contact Management for Small Businesses</title>
    <meta content="Thousands of small businesses use Less Annoying CRM to manage contacts, track leads, and stay on top of follow-ups." name="description" />
    <meta content="Less Annoying CRM | Simple Contact Management for Small Businesses" property="og:title" />
    <meta content="Thousands of small businesses use Less Annoying CRM to manage contacts, track leads, and stay on top of follow-ups." property="og:description" />
    <meta content="https://account.lessannoyingcrm.com/i/social_logo.png" property="og:image" />
    <meta content="Less Annoying CRM | Simple Contact Management for Small Businesses" property="twitter:title" />
    <meta content="Thousands of small businesses use Less Annoying CRM to manage contacts, track leads, and stay on top of follow-ups." property="twitter:description" />
    <meta content="https://account.lessannoyingcrm.com/i/social_logo.png" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="kzwr89L43Y4JUReaE26uZrU8aMHNWa-zHgbSt1nNocA" name="google-site-verification" />
    <link href="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/css/lessannoyingcrm.webflow.542e32476.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link href="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/63160c1b88210d407213e953_32x32.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/63160cdfa8feb4b86a085c5e_256x256.png" rel="apple-touch-icon" />
    <meta name="st:robots" content="follow, index">
    <style>
        /* show mobile footer between 768px and 1235px */
        @media screen and (max-width: 1235px) and (min-width: 768px) {
            .simple-help-docs-footer-links-wrapper {
                display: flex;
                flex-direction: column;
                text-align: center;
            }
        }

        .help-articles-tags-item:last-child .help-article-tag-comma {
            display: none
        }
        .uui-navbar02_menu-left {
            min-width: 11.5rem;
            flex: 0 auto;
            display: flex;
        }
    </style>
</head>

<body class="body">
    <div data-w-id="35f03196-4dbe-732d-1db4-1f2f5b775208" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="hover-navbar w-nav">
        <div class="uui-navbar02_container"><a href="/" aria-current="page" class="uui-navbar02_logo-link w-nav-brand w--current">
                <div class="uui-logo_component">
                    <img src="<?= $media['HomePage'][0]?>" 
                    loading="lazy" alt="Untitled UI logotext" class="uui-logo_logotype" />
                    <img src="<?= $media['HomePage'][1]?>" loading="lazy" alt="Logo" class="uui-logo_image" /></div>
            </a>
            <nav role="navigation" class="uui-navbar02_menu w-nav-menu">
                <div class="uui-navbar02_menu-left">
                    <a href="<?=$host?>/#pricing" class="uui-navbar02_link w-nav-link"><?= $content['HomePage'][0]?></a>
                    <a href="<?=$host?>/contact" class="uui-navbar02_link w-nav-link"><?= $content['HomePage'][1]?></a>
                </div>
            </nav>
            <div class="uui-navbar02_menu-button w-nav-button">
                <div class="menu-icon_component">
                    <div class="menu-icon_line-top"></div>
                    <div class="menu-icon_line-middle">
                        <div class="menu-icon_line-middle-inner"></div>
                    </div>
                    <div class="menu-icon_line-bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="div-to-hide-when-nav-is-showing darker-background relative">
        <div class="hero new-graphic">
            <div class="page-section-spacer"></div>
            <div class="w-embed">
                <div id='HomePageWelcomeMessage' style='display:none;'>
                    <div class='page-content-spacer'></div>
                    <div class='max-width-page-section' style='display: block;'>
                        <div class='yellow-warning' id='HomePageWelcomeMessage_Text' style='text-align: center; font-weight: 500; font-size: 1.2em;'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section-spacer"></div>
            <div class="max-width-page-section homepage">
                <div class="container new-graphic">
                    <div class="hero-content-container text-align-center wider">
                        <div class="headline-container new-graphic">
                            <h1 class="main-header playbook"><?= $content['HomePage'][2]?> <br /><?= $content['HomePage'][3]?> <br /><span class="thick-underline-text"><?= $content['HomePage'][4]?></span> <?= $content['HomePage'][5]?><span data-w-id="a6764880-c443-3da2-c2c5-3a8e1784ffef" class="thick-underline-text"></span>.</h1>
                        </div>
                        <p class="paragraph-30 centered _26px"><?= $content['HomePage'][6]?> <br /><?= $content['HomePage'][7]?></p>
                        <div class="cta-container">
                            <div id="CTA-Button-Section" class="cta-button-section homepage-hero home-simple"><a id="freetrialbutton" data-event-category="Free Trial" data-event-label="Signup" href="" class="primary-button cta-button-section ga-event w-button"><?= $content['HomePage'][8]?></a><a id="livedemobutton" data-event-category="Button" data-event-label="Live Demo" href="" class="secondary-button live-demo-button ga-event w-button"><?= $content['HomePage'][9]?></a></div>
                            <div class="trial-info-tagline"><?= $content['HomePage'][10]?> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section-spacer"></div>
        </div>
        <div class="max-width-page-section homepage">
            <div class="header-column-pricing">
                <div class="header-column-pricing-wrapper">
                    <div class="home-grid-container">
                        <div class="w-layout-grid home-grid _3x1">
                            <div id="w-node-a6764880-c443-3da2-c2c5-3a8e17850004-cc300ba0" data-w-id="a6764880-c443-3da2-c2c5-3a8e17850004" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="homepage-grid-item _1">
                                <h3 class="numbering"><?= $content['HomePage'][11]?></h3>
                                <h3 class="support-heading new-graphic smaller _1"><?= $content['HomePage'][12]?></h3>
                                <p class="feature-desc playbook"><?= $content['HomePage'][13]?> <strong><?= $content['HomePage'][14]?></strong> <?= $content['HomePage'][15]?> <br /><br /><?= $content['HomePage'][16]?> <a href="" target="_blank"><?= $content['HomePage'][17]?></a><?= $content['HomePage'][18]?></p>
                            </div>
                            <div id="w-node-a6764880-c443-3da2-c2c5-3a8e17850014-cc300ba0" data-w-id="a6764880-c443-3da2-c2c5-3a8e17850014" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="homepage-grid-item _2">
                                <h3 class="numbering _2"><?= $content['HomePage'][19]?></h3>
                                <h3 class="support-heading new-graphic smaller _2"><?= $content['HomePage'][20]?></h3>
                                <p class="feature-desc playbook"><?= $content['HomePage'][21]?> <strong><?= $content['HomePage'][22]?></strong>.<br /> <br /><?= $content['HomePage'][23]?></p>
                            </div>
                            <div id="w-node-a6764880-c443-3da2-c2c5-3a8e17850022-cc300ba0" data-w-id="a6764880-c443-3da2-c2c5-3a8e17850022" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="homepage-grid-item _3">
                                <h3 class="numbering _3"><?= $content['HomePage'][24]?></h3>
                                <h3 class="support-heading new-graphic smaller _3"><?= $content['HomePage'][25]?></h3>
                                <p class="feature-desc playbook"><?= $content['HomePage'][26]?><br /><br /><?= $content['HomePage'][27]?> <strong><?= $content['HomePage'][28]?> </strong><a href="" target="_blank"><strong><?= $content['HomePage'][29]?></strong></a><strong> <?= $content['HomePage'][30]?></strong><?= $content['HomePage'][31]?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content-spacer"></div>
                <div class="page-content-spacer"></div>
            </div>
        </div>
        <div class="page-section-spacer"></div>
        <div class="page-section-spacer"></div>
        <div class="max-width-page-section sticky-scroll">
            <div class="two-columns left-align">
                <div class="story-wrapper">
                    <h2 class="pricing-header black _60h"><?= $content['HomePage'][32]?> <br /><?= $content['HomePage'][33]?></h2>
                    <div class="page-content-spacer"></div>
                    <div class="story-text w-richtext">
                        <p><?= $content['HomePage'][34]?> </p>
                        <p><?= $content['HomePage'][35]?></p>
                        <p><?= $content['HomePage'][36]?> <em><?= $content['HomePage'][37]?></em> <?= $content['HomePage'][38]?> </p>
                    </div>
                </div><img src="<?= $media['HomePage'][2]?>" loading="lazy" data-w-id="a6764880-c443-3da2-c2c5-3a8e1785004a" sizes="(max-width: 479px) 93vw, (max-width: 767px) 85vw, (max-width: 991px) 94vw, 100vw" alt="Reviews of other CRMs like &quot;About once a month I come away shaking my head saying, &#x27;What were they thinking?&#x27;&quot;, &quot;I come from a background of CRMs that end up being binned after two months because you need a degree to work it, and a Master&#x27;s to keep in the loop and stay on top of it.&quot;, and &quot;Not only do they upcharge you for every little thing, but for that price you&#x27;d expect to be able to have some tech support beyond an online Q&amp;A repository. Ridiculous.&quot;." srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b7502819fd57ea543cc1a_1-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b7502819fd57ea543cc1a_1-p-800.png 800w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b7502819fd57ea543cc1a_1-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b7502819fd57ea543cc1a_1-p-1600.png 1600w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b7502819fd57ea543cc1a_1.png 1920w" class="quote-bubbles-image" />
            </div>
            <div class="page-section-spacer"></div>
            <div class="page-section-spacer"></div>
            <div class="page-section-spacer"></div>
        </div>
        <div class="max-width-page-section sticky-scroll">
            <div class="two-columns space-between center-align"><img src="<?= $media['HomePage'][3]?>" loading="lazy" data-w-id="a6764880-c443-3da2-c2c5-3a8e17850050" sizes="(max-width: 479px) 93vw, (max-width: 767px) 85vw, (max-width: 991px) 94vw, 100vw" alt="The (usual) investor method: Build features that everyone can use. Start with a low price everyone can afford. Get as many customers as possible! Now with locked in customers, time to increase prices! Build features for enterprises since they have more money to spend, cut expenses (like customer service). Profit! Investors are happy!" srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/642b0f62cccaa7067b4f6629_workflow%20(3)-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/642b0f62cccaa7067b4f6629_workflow%20(3)-p-800.png 800w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/642b0f62cccaa7067b4f6629_workflow%20(3)-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/642b0f62cccaa7067b4f6629_workflow%20(3).png 1440w" class="quote-bubbles-image left" />
                <div class="right-column max-width-50">
                    <h2 class="pricing-header black _60h"><?= $content['HomePage'][39]?></h2>
                    <div class="page-content-spacer"></div>
                    <div class="story-text w-richtext">
                        <p><?= $content['HomePage'][40]?></p>
                        <p><?= $content['HomePage'][41]?></p>
                        <p><?= $content['HomePage'][42]?> <strong><?= $content['HomePage'][43]?></strong><?= $content['HomePage'][44]?> </p>
                        <p><?= $content['HomePage'][45]?> <em><?= $content['HomePage'][46]?></em> <?= $content['HomePage'][47]?></p>
                    </div>
                </div>
            </div>
            <div class="sticky-content-right">
                <div id="contact-profiles" class="sticky-story _1">
                    <div class="sticky-story-wrapper">
                        <h3 class="pricing-header black smaller"><?= $content['HomePage'][48]?></h3>
                        <p class="paragraph-30"><?= $content['HomePage'][49]?> <strong><?= $content['HomePage'][50]?></strong><?= $content['HomePage'][51]?> <em><?= $content['HomePage'][52]?></em> <?= $content['HomePage'][53]?> <br /></p>
                    </div>
                </div>
                <div id="custom-fields" class="sticky-story _2">
                    <div class="sticky-story-wrapper">
                        <h3 class="pricing-header black smaller"><?= $content['HomePage'][54]?> </h3>
                        <p class="paragraph-30"> <?= $content['HomePage'][55]?><strong><?= $content['HomePage'][56]?></strong> <?= $content['HomePage'][57]?></p>
                    </div>
                </div>
                <div id="team" class="sticky-story _3">
                    <div class="sticky-story-wrapper">
                        <h3 class="pricing-header black smaller"><?= $content['HomePage'][58]?> </h3>
                        <p class="paragraph-30"><?= $content['HomePage'][59]?> <strong><?= $content['HomePage'][60]?> </strong></p>
                    </div>
                </div>
                <div class="page-section-spacer"></div>
            </div>
        </div>
        <div class="page-section-spacer"></div>
        <div class="page-section-spacer"></div>
        <div class="page-section-spacer"></div>
        <div class="max-width-page-section sticky-scroll">
            <div class="two-columns left-align">
                <div class="story-wrapper">
                    <h2 class="pricing-header black _60h"><?= $content['HomePage'][61]?></h2>
                    <div class="page-content-spacer"></div>
                    <div class="story-text w-richtext">
                        <p><?= $content['HomePage'][62]?></p>
                        <p><?= $content['HomePage'][63]?> <strong><?= $content['HomePage'][64]?></strong><?= $content['HomePage'][65]?> </p>
                        <p><?= $content['HomePage'][66]?></p>
                        <p><?= $content['HomePage'][67]?>.</p>
                    </div>
                </div><img src="<?= $media['HomePage'][4]?>" loading="lazy" data-w-id="a6764880-c443-3da2-c2c5-3a8e1785009a" sizes="(max-width: 479px) 93vw, (max-width: 767px) 85vw, (max-width: 991px) 94vw, 100vw" alt="This means freedom to: have a name like Less Annoying CRM, price our software as low as we can, offer great customer service for free, let every customer sign up and cancel whenever they want, build features for small businesses with no pressure to target big companies, and pay our employees well (happy teammates make great software!)." srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/6425a4968d91cefd56dc30ef_checklist%20(5)-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/6425a4968d91cefd56dc30ef_checklist%20(5)-p-800.png 800w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/6425a4968d91cefd56dc30ef_checklist%20(5)-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/6425a4968d91cefd56dc30ef_checklist%20(5).png 1440w" class="quote-bubbles-image" />
            </div>
            <div class="page-section-spacer"></div>
            <div class="page-section-spacer"></div>
        </div>
        <div class="max-width-page-section sticky-scroll">
            <div class="sticky-content-right">
                <div id="contact-profiles" class="sticky-story _1">
                    <div class="sticky-story-wrapper">
                        <h3 class="pricing-header black smaller"><?= $content['HomePage'][68]?></h3>
                        <p class="paragraph-30"><?= $content['HomePage'][69]?><strong><?= $content['HomePage'][70]?></strong><?= $content['HomePage'][71]?> <br /></p>
                    </div>
                </div>
                <div id="custom-fields" class="sticky-story _2">
                    <div class="sticky-story-wrapper">
                        <h3 class="pricing-header black smaller"><?= $content['HomePage'][72]?> </h3>
                        <p class="paragraph-30"><?= $content['HomePage'][73]?> <strong><?= $content['HomePage'][74]?></strong> <?= $content['HomePage'][75]?></p>
                    </div>
                </div>
                <div id="team" class="sticky-story _3">
                    <div class="sticky-story-wrapper">
                        <h3 class="pricing-header black smaller"><?= $content['HomePage'][76]?> </h3>
                        <p class="paragraph-30"><?= $content['HomePage'][77]?> <strong><?= $content['HomePage'][78]?> </strong></p>
                    </div>
                </div>
                <div class="page-section-spacer"></div>
            </div>
        </div>
        <div class="max-width-page-section homepage relative-pos">
            <h2 class="pricing-header black condensed"><?= $content['HomePage'][79]?></h2><img src="<?= $media['HomePage'][5]?>" loading="lazy" sizes="100vw" srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/63fe398f67892d50b45e87c1_Down%20Arrow-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/63fe398f67892d50b45e87c1_Down%20Arrow-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/63fe398f67892d50b45e87c1_Down%20Arrow.png 1080w" alt="Red downward arrow" class="red-down-arrow" />
            <div class="page-section-spacer visible-in-mobile"></div>
            <div class="two-columns space-between center-align mobile-reversed">
                <div class="left-column playbook">
                    <h3 class="pricing-header black _35px"><?= $content['HomePage'][80]?></h3>
                    <div class="_18px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][81]?></li>
                            <li><?= $content['HomePage'][82]?></li>
                        </ul>
                    </div>
                </div>
                <div data-w-id="a6764880-c443-3da2-c2c5-3a8e178500ce" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="lighterbackground rounded-edges column-card">
                    <h3 class="pricing-header black smaller left-align-mobile"><?= $content['HomePage'][83]?></h3>
                    <div class="_20px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][84]?></li>
                            <li><?= $content['HomePage'][85]?></li>
                            <li><?= $content['HomePage'][86]?></li>
                        </ul>
                    </div>
                    <div class="page-content-spacer"></div>
                    <div class="text-align-left"><a href="/" class="primary-button w-button"><?= $content['HomePage'][87]?></a></div>
                </div>
            </div>
            <div class="page-section-spacer visible-in-mobile"></div>
            <div class="two-columns space-between center-align mobile-reversed">
                <div class="left-column playbook">
                    <h3 class="pricing-header black _35px"><?= $content['HomePage'][88]?></h3>
                    <div class="_18px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][89]?></li>
                            <li><?= $content['HomePage'][90]?></li>
                        </ul>
                    </div>
                </div>
                <div data-w-id="a6764880-c443-3da2-c2c5-3a8e178500e8" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="lighterbackground rounded-edges column-card">
                    <h3 class="pricing-header black smaller left-align-mobile"><?= $content['HomePage'][91]?></h3>
                    <div class="_20px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][92]?></li>
                            <li><?= $content['HomePage'][93]?></li>
                            <li><?= $content['HomePage'][94]?> <a href="" target="_blank"><?= $content['HomePage'][95]?></a> <?= $content['HomePage'][96]?></li>
                        </ul>
                    </div>
                    <div class="page-content-spacer"></div>
                    <div class="text-align-left"><a href="/#pricing" class="primary-button w-button"><?= $content['HomePage'][97]?></a></div>
                </div>
            </div>
            <div class="page-section-spacer visible-in-mobile"></div>
            <div class="two-columns space-between center-align mobile-reversed">
                <div class="left-column playbook">
                    <h3 class="pricing-header black _35px"><?= $content['HomePage'][98]?></h3>
                    <div class="_18px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][99]?> </li>
                            <li><?= $content['HomePage'][100]?></li>
                            <li><?= $content['HomePage'][101]?></li>
                        </ul>
                    </div>
                </div>
                <div data-w-id="a6764880-c443-3da2-c2c5-3a8e17850107" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="lighterbackground rounded-edges column-card">
                    <h3 class="pricing-header black smaller left-align-mobile"><?= $content['HomePage'][102]?></h3>
                    <div class="_20px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][103]?></li>
                            <li><?= $content['HomePage'][104]?></li>
                            <li><?= $content['HomePage'][105]?> <a href="/about"><?= $content['HomePage'][106]?></a><?= $content['HomePage'][107]?> <em><?= $content['HomePage'][108]?></em> <?= $content['HomePage'][109]?></li>
                        </ul>
                    </div>
                    <div class="page-content-spacer"></div>
                    <div class="text-align-left"><a href="/contact" class="primary-button w-button"><?= $content['HomePage'][110]?></a></div>
                </div>
            </div>
            <div class="page-section-spacer visible-in-mobile"></div>
            <div class="two-columns space-between center-align mobile-reversed">
                <div class="left-column playbook">
                    <h3 class="pricing-header black _35px"> <?= $content['HomePage'][111]?></h3>
                    <div class="_18px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][112]?></li>
                            <li><?= $content['HomePage'][113]?></li>
                        </ul>
                    </div>
                </div>
                <div data-w-id="a6764880-c443-3da2-c2c5-3a8e17850127" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="lighterbackground rounded-edges column-card">
                    <h3 class="pricing-header black smaller left-align-mobile"><?= $content['HomePage'][114]?></h3>
                    <div class="_20px-text w-richtext">
                        <ul role="list">
                            <li><?= $content['HomePage'][115]?></li>
                            <li><?= $content['HomePage'][116]?></li>
                            <li><?= $content['HomePage'][117]?></li>
                        </ul>
                    </div>
                    <div class="page-content-spacer"></div>
                    <div class="text-align-left"><a href="" class="primary-button w-button"><?= $content['HomePage'][118]?></a></div>
                </div>
            </div>
        </div>
        <div class="page-section-spacer"></div>
        <div class="max-width-page-section homepage">
            <div class="page-section-spacer"></div>
            <div class="page-content-spacer"></div>
            <h2 class="pricing-header black condensed"><?= $content['HomePage'][119]?></h2>
            <div class="page-content-spacer"></div>
            <div class="support-grid-container">
                <div class="w-layout-grid testimonials-grid"><img class="testimonial-bubble _1" src="<?= $media['HomePage'][6]?>" alt="LACRM Quotes: &quot;I keep getting more and more for my money. Thank you for being so honest to deal with, and so committed to my success in using your software!&quot;, &quot;It is absolutely refreshing and very satisfying to work with a company that actually delivers on what it promises.&quot;" sizes="100vw" data-w-id="a6764880-c443-3da2-c2c5-3a8e1785013f" id="w-node-a6764880-c443-3da2-c2c5-3a8e1785013f-cc300ba0" loading="lazy" srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9172200c823dc136e86a_testimonials%201-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9172200c823dc136e86a_testimonials%201-p-800.png 800w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9172200c823dc136e86a_testimonials%201-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9172200c823dc136e86a_testimonials%201.png 1200w" /><img src="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b917d362b2140a011a250_testimonials%202.png" loading="lazy" id="w-node-a6764880-c443-3da2-c2c5-3a8e17850140-cc300ba0" sizes="100vw" alt="LACRM Quotes: &quot;Sometimes in life you stumble upon something so unique and wonderful and just are always grateful you have it. That is how I feel about Less Annoying CRM.&quot;, &quot;I can&#x27;t imagine life without LACRM. I&#x27;d be happy to pay more for the CRM - I just really want you guys to stick around.&quot;" srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b917d362b2140a011a250_testimonials%202-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b917d362b2140a011a250_testimonials%202-p-800.png 800w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b917d362b2140a011a250_testimonials%202-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b917d362b2140a011a250_testimonials%202.png 1200w" class="testimonial-bubble _2" /><img class="testimonial-bubble _3" src="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9189362b2167a911a2e7_testimonials%203.png" alt="LACRM Quotes: &quot;LACRM really goes the extra mile to be your partner - anyone starting or trying to grow a business knows how important it is to have genuine trusted partners in your corner.&quot;, &quot;I am fiercely loyal to your company. LACRM is ideal for my needs and the customer service is excellent. Thank you.&quot;" sizes="100vw" data-w-id="a6764880-c443-3da2-c2c5-3a8e17850141" id="w-node-a6764880-c443-3da2-c2c5-3a8e17850141-cc300ba0" loading="lazy" srcset="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9189362b2167a911a2e7_testimonials%203-p-500.png 500w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9189362b2167a911a2e7_testimonials%203-p-800.png 800w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9189362b2167a911a2e7_testimonials%203-p-1080.png 1080w, https://assets-global.website-files.com/5eb25de94cee6c29635fe867/641b9189362b2167a911a2e7_testimonials%203.png 1200w" /></div>
            </div>
        </div>
        <div class="page-section-spacer"></div>
        <div class="max-width-page-section with-text">
            <div id="pricing" class="header-column-pricing">
                <h1 class="pricing-header centered"><?= $content['HomePage'][120]?></h1>
                <div class="integration-small-header centered"><?= $content['HomePage'][121]?></div>
                <div class="header-column-pricing-wrapper">
                    <div class="header-pricing-item-container"><img src="<?= $media['HomePage'][7]?>" loading="lazy" alt="" class="header-pricing-check">
                        <div><?= $content['HomePage'][122]?></div>
                    </div>
                    <div class="header-pricing-item-container"><img src="<?= $media['HomePage'][8]?>" loading="lazy" alt="" class="header-pricing-check">
                        <div><?= $content['HomePage'][123]?></div>
                    </div>
                    <div class="header-pricing-item-container"><img src="<?= $media['HomePage'][9]?>" loading="lazy" alt="" class="header-pricing-check">
                        <div><?= $content['HomePage'][124]?></div>
                    </div>
                </div>
                <div class="page-content-spacer"></div>
                <div class="page-content-spacer"></div>
            </div>
            <div class="two-columns space-between">
                <div class="pricing-column-details">
                    <div class="pricing-header-container">
                        <div class="price-header-wrapper">
                            <h4 class="price-large"><?= $content['HomePage'][125]?></h4>
                            <div> <?= $content['HomePage'][126]?></div>
                        </div>
                        <div class="page-content-spacer"></div><a id="freetrialbutton-pricing" data-event-category="Free Trial" data-event-label="Signup" href="" class="primary-button w-button"><?= $content['HomePage'][127]?></a>
                        <div class="page-content-spacer"></div>
                    </div>
                    <div class="pricing-extra-info-container">
                        <div class="integration-small-header"><?= $content['HomePage'][128]?></div>
                        <div class="feature-list">
                            <div class="single-feature"><img src="<?= $media['HomePage'][10]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][129]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][11]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][130]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][12]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][131]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][13]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][132]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][14]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][133]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][15]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][134]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][16]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][135]?></div>
                            </div>
                            <div class="single-feature"><img src="<?= $media['HomePage'][17]?>" loading="lazy" alt="" class="pricing-feature-check">
                                <div><?= $content['HomePage'][136]?></div>
                            </div>
                            <div class="single-feature">
                                <div><?= $content['HomePage'][137]?> <a href="/"><?= $content['HomePage'][138]?></a> <?= $content['HomePage'][139]?><a href="/"></a><?= $content['HomePage'][140]?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-testimonials-wrapper">
                    <div class="testimonials-wrapper">
                        <div class="left-column testimonials-wrapper"><img src="<?= $media['HomePage'][18]?>" loading="lazy" alt="William Hammett" class="customer-headshot"></div>
                        <div class="right-column">
                            <div class="quote">
                                <div><em><?= $content['HomePage'][141]?></em></div>
                            </div>
                            <div class="user-name">
                                <div><?= $content['HomePage'][142]?></div>
                            </div>
                            <div class="company">
                                <div><?= $content['HomePage'][143]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="page-content-spacer"></div>
                    <div class="testimonials-wrapper">
                        <div class="left-column testimonials-wrapper"><img src="<?= $media['HomePage'][19]?>" loading="lazy" alt="Mike Barclay" class="customer-headshot"></div>
                        <div class="right-column">
                            <div class="quote">
                                <div><em><?= $content['HomePage'][144]?></em></div>
                            </div>
                            <div class="user-name">
                                <div><?= $content['HomePage'][145]?></div>
                            </div>
                            <div class="company">
                                <div><?= $content['HomePage'][146]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="page-content-spacer"></div>
                    <div class="text-align-center"><a href="/" class="secondary-button w-button"><?= $content['HomePage'][147]?></a></div>
                </div>
            </div>
        </div>
        <div class="page-section-spacer"></div>
        <div class="white-background-section bottom-of-page">
            <div class="max-width-page-section homepage">
                <div class="page-section-spacer"></div>
                <div class="page-section-spacer"></div>
                <h1 class="pricing-header centered"><?= $content['HomePage'][148]?></h1>
                <p class="paragraph-30 centered"><?= $content['HomePage'][149]?> <br /><?= $content['HomePage'][150]?></p>
                <div class="page-content-spacer"></div>
                <div class="button-wrapper">
                    <div class="cta-container">
                        <div id="CTA-Button-Section" class="cta-button-section homepage-hero home-simple"><a id="freetrialbutton-footer" data-event-category="Free Trial" data-event-label="Signup" href="" class="primary-button cta-button-section ga-event w-button"><?= $content['HomePage'][151]?></a><a id="livedemobutton-footer" data-event-category="Button" data-event-label="Live Demo" href="" class="secondary-button live-demo-button ga-event w-button"><?= $content['HomePage'][152]?></a></div>
                    </div>
                </div>
            </div>
            <div class="page-section-spacer visible-in-mobile"></div>
            <div class="page-section-spacer visible-in-mobile"></div>
        </div>
    </div>
    <footer class="footer">
        <div class="max-width-page-section w-container">
            <div class="footer-columns-wrapper">
                <div class="footer-column">
                    <h3 class="footer-header"><?= $content['HomePage'][153]?></h3>
                    <a href="/terms-of-service" class="footer-line"><?= $content['HomePage'][154]?></a>
                    <a href="/privacy" class="footer-line"><?= $content['HomePage'][155]?></a>
                    <a href="/refund-policy" class="footer-line"><?= $content['HomePage'][156]?></a>
                    <a href="/delivery-policy" class="footer-line"><?= $content['HomePage'][157]?></a>
                </div>
                <div class="footer-column">
                    <h3 class="footer-header"><?= $content['HomePage'][158]?></h3>
                    <a href="/about" class="footer-line"><?= $content['HomePage'][159]?></a>
                    <a href="/contact" class="footer-line"><?= $content['HomePage'][160]?></a>
                </div>
                <div class="footer-column">
                    <h3 class="footer-header"><?= $content['HomePage'][161]?></h3>
                    <h3 class="footer-header"><?= $content['HomePage'][162]?></h3>
                    <p class="paragraph-7"><?= $content['HomePage'][163]?><br /><?= $content['HomePage'][164]?><br /><?= $content['HomePage'][165]?></p>
                </div>
            </div>
            <div class="border-bottom"></div>
            <div class="footer-social-links">
                <a href="http://www.facebook.com/" target="_blank" class="facebook-footer-link w-inline-block"></a>
                <a href="http://twitter.com/" target="_blank" class="twitter-footer-link w-inline-block"></a>
                <a href="http://www.linkedin.com/" target="_blank" class="linkedin-footer-link w-inline-block"></a>
            </div>
        </div>
    </footer>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5eb25de94cee6c29635fe867" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets-global.website-files.com/5eb25de94cee6c29635fe867/js/webflow.3b173c2f2.js" type="text/javascript"></script>
    <script src="https://app.bentonow.com/9ef4e8875bb2effd647cf3f0cc22bda2.js?webflow=true" defer async></script>
</body>
</html>