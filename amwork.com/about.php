<?php include_once ('website.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?=$namehost?> | About Us</title>
    <meta name="description" content="Discover <?=$namehost?> - the revolutionary NoCode Workspace Builder that empowers users to create unique software for all teams and business processes in just 15 seconds. With a mission driven by love, <?=$namehost?> aims to create a system that users will love and enjoy working with. Learn more and join us in the creation of a software we will all love." />
    <meta charSet="utf-8" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="keywords" content="workspace builder, CRM, management, project, task, supplier, contractor, HRM, email, <?=$namehost?>, integration, efficiency, free demo." />
    <link rel="icon" type="image/svg" sizes="16x16" href="<?=$host?>/favicons/favicon_16x16.svg" />
    <link rel="icon" type="image/svg" sizes="32x32" href="<?=$host?>/favicons/favicon_32x32.svg" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$host?>/favicons/favicon_16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$host?>/favicons/favicon_32x32.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$host?>/favicons/apple_touch_180x180.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$host?>/favicons/apple_touch_167x167.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$host?>/favicons/apple_touch_152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$host?>/favicons/apple_touch_120x120.png" />
    <link as="font" rel="preload" href="<?=$host?>/fonts/Lato/Lato-Regular.ttf" type="font/ttf" crossorigin="anonymous" />
    <link as="font" rel="preload" href="<?=$host?>/fonts/Montserrat/Montserrat-ExtraBold.ttf" type="font/ttf" crossorigin="anonymous" />
    <link as="font" rel="preload" href="<?=$host?>/fonts/Montserrat/Montserrat-Regular.ttf" type="font/ttf" crossorigin="anonymous" />
    <link as="font" rel="preload" href="<?=$host?>/fonts/Montserrat/Montserrat-Medium.ttf" type="font/ttf" crossorigin="anonymous" />
    <link as="font" rel="preload" href="<?=$host?>/fonts/GloriaHallelujah/GloriaHallelujah-Regular.ttf" type="font/ttf" crossorigin="anonymous" />
    <meta name="Author" content="Developed by Ilya Kruchinin, Namig Nurmamedov and Maxim Skvortsov, designed by Aleksei Tsvetkov." />
    <link rel="preload" href="<?=$host?>/_next/static/css/9d74404b9e1f3974.css" as="style" />
    <link rel="stylesheet" href="<?=$host?>/_next/static/css/9d74404b9e1f3974.css" data-n-g="" />
    <link rel="preload" href="<?=$host?>/_next/static/css/f6190630a62bbf31.css" as="style" />
    <link rel="stylesheet" href="<?=$host?>/_next/static/css/f6190630a62bbf31.css" data-n-p="" />
    <link rel="preload" href="<?=$host?>/_next/static/css/23d7c93092b9d460.css" as="style" />
    <link rel="stylesheet" href="<?=$host?>/_next/static/css/23d7c93092b9d460.css" data-n-p="" />
    <link rel="preload" href="<?=$host?>/_next/static/css/0ac7f461a05c0d5e.css" as="style" />
    <link rel="stylesheet" href="<?=$host?>/_next/static/css/0ac7f461a05c0d5e.css" data-n-p="" />
    <script defer="" nomodule="" src="<?=$host?>/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="<?=$host?>/_next/static/chunks/webpack-2dd545241c853dc7.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/main-ee0cf4b7f81d7c24.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/pages/_app-2a53bf1166cff223.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/297-046d164d6769c745.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/406-01d17ff9794e78f0.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/259-3734f551c393ec9d.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/523-763c2912419ed37e.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/344-86b5c3cc7faaa5c4.js" defer=""></script>
    <script src="<?=$host?>/_next/static/chunks/487-8990b75bce6609d0.js" defer=""></script>
</head>
<body>
    <div id="__next">
        <div class="PageTemplate_root__z_EYX">
            <header class="Header_root__pufPi">
                <div class="Container_root__qvtQX">
                    <div class="Header_header-wrapper__1qayX">
                        <nav class="Header_navigation__5F_RP">
                            <a href="/">
                                <svg width="104" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.695.746c1.496 0 2.8.293 3.91.879 1.11.586 1.974 1.45 2.59 2.59.617 1.142.926 2.522.926 4.141v8.86h-3.748V13.33H3.971v3.886H.27v-8.86c0-1.619.308-3 .925-4.14.617-1.142 1.48-2.005 2.591-2.591 1.11-.586 2.414-.88 3.91-.88Zm3.678 9.577V8.009c0-1.341-.331-2.351-.994-3.03-.663-.694-1.565-1.04-2.707-1.04-1.156 0-2.066.346-2.73 1.04-.647.679-.97 1.689-.97 3.03v2.314h7.402ZM34.504 4.586c1.557 0 2.79.462 3.7 1.388.926.91 1.389 2.282 1.389 4.117v7.125h-3.61v-6.57c0-.987-.207-1.719-.624-2.197-.4-.494-.979-.74-1.735-.74-.848 0-1.519.277-2.012.832-.494.54-.74 1.35-.74 2.43v6.245h-3.609v-6.57c0-1.958-.786-2.937-2.36-2.937-.832 0-1.495.277-1.989.832-.493.54-.74 1.35-.74 2.43v6.245h-3.609V4.771h3.447v1.434a4.576 4.576 0 0 1 1.689-1.203 5.81 5.81 0 0 1 2.22-.416c.88 0 1.674.177 2.383.532.71.34 1.28.84 1.712 1.503a5.126 5.126 0 0 1 1.92-1.503 6.173 6.173 0 0 1 2.568-.532Z" fill="#3D8FEC"></path>
                                    <path d="M62.25 4.77v6.87c0 1.835-.501 3.254-1.504 4.256-1.002 1.003-2.428 1.504-4.279 1.504-.894 0-1.689-.139-2.383-.416a4.014 4.014 0 0 1-1.711-1.342 4.013 4.013 0 0 1-1.712 1.342c-.679.277-1.48.416-2.406.416-1.866 0-3.292-.501-4.28-1.504-.986-1.002-1.48-2.42-1.48-4.256V4.77h3.609v6.593c0 1.033.177 1.796.532 2.29.354.478.91.717 1.665.717.771 0 1.342-.247 1.712-.74.37-.494.555-1.25.555-2.268V4.77h3.609v6.593c0 1.017.185 1.773.555 2.266.37.494.94.74 1.712.74.755 0 1.31-.238 1.665-.716.355-.494.532-1.257.532-2.29V4.77h3.61ZM71.415 17.4c-1.31 0-2.49-.27-3.539-.81a6.207 6.207 0 0 1-2.429-2.29c-.586-.971-.879-2.074-.879-3.308 0-1.233.293-2.336.88-3.308a6.043 6.043 0 0 1 2.428-2.267c1.049-.555 2.228-.832 3.54-.832 1.31 0 2.482.277 3.516.832a6.044 6.044 0 0 1 2.428 2.267c.586.972.88 2.075.88 3.308 0 1.234-.294 2.337-.88 3.308a6.207 6.207 0 0 1-2.428 2.29c-1.034.54-2.206.81-3.517.81Zm0-2.96c.926 0 1.681-.31 2.267-.926.602-.632.903-1.473.903-2.522 0-1.048-.301-1.881-.903-2.498-.586-.632-1.341-.948-2.267-.948-.925 0-1.688.316-2.29.948-.601.617-.902 1.45-.902 2.498 0 1.049.3 1.89.902 2.522.602.617 1.365.925 2.29.925ZM84.098 6.412a4.024 4.024 0 0 1 1.735-1.365c.74-.308 1.588-.462 2.545-.462v3.33c-.401-.03-.671-.045-.81-.045-1.033 0-1.843.293-2.429.879-.586.57-.879 1.434-.879 2.59v5.876h-3.609V4.77h3.447v1.642ZM95.867 12.334l-1.735 1.712v3.169h-3.609V.05h3.609v9.715l5.274-4.996h4.303l-5.182 5.274 5.644 7.17h-4.372l-3.932-4.88Z" fill="#555"></path>
                                </svg>
                            </a>
                            <a class="HeaderLink_root__IgnMk" href="/#pricing">Pricing</a>
                            <a class="HeaderLink_root__IgnMk" href="/about">About us</a>
                        </nav>
                        <div class="BurgerMenu_root__7i__7">
                            <div>
                                <svg width="18" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 7a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1ZM0 1a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1ZM0 13a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1Z" fill="#555"></path></svg>
                            </div>
                            <div class="BurgerMenu_menu__pdH5_">
                                <div class="HeaderDropdown_root__Ml7rA HeaderDropdown_burger__tcm8V">
                                    <a class="HeaderLink_root__IgnMk" href="/#pricing">Pricing</a>
                                    <a class="HeaderLink_root__IgnMk HeaderLink_active__mgfkI" href="/about">About us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <style>.PageTemplate_content__wv_Y9{min-height: 0dvh;}@media (max-width: 576px)
<style>
.AboutAmwork_slogan__7GL7d {
    font-size: 24px;
}

@media (max-width: 1320px)
<style>
.AboutAmwork_slogan__7GL7d {
    font-size: 32px;
    line-height: 110%;
}
<style>
.AboutAmwork_slogan__7GL7d {
    font-family: Montserrat,sans-serif;
    font-size: 32px;
    font-feature-settings: "salt" on;
    font-weight: 700;
    line-height: 39px;
    color: var(--black);
}</style>
            <main class="PageTemplate_content__wv_Y9 PageTemplate_secondary__Za0fJ">
                <div class="Container_root__qvtQX">
                    <section class="AboutAmwork_root__OT4En">
                        <h1 class="H1_root__s6kmw H1_weight-extra-bold___GmVr">About us</h1>
                        <div class="AboutAmwork_content__UO8SA">
                            <div class="AboutAmwork_left-block__1qNPR" style="display: inline-block;"><img alt="Oliver Grand, Founder &amp; CEO" src="images/Sections/MainPage/ceo_avatar.webp" width="184" height="184" decoding="async" data-nimg="1" style="color:transparent" />
                                <div class="AboutAmwork_caption__VR5L5">
                                    <div class="AnnotationLP2_root__2rm5W AnnotationLP2_bold__S7cyZ">Oliver Grand</div>
                                    <br>
                                </div>
                            </div>
                            <div class="AboutAmwork_right-block__Sb4aS">
                                <div class="AboutAmwork_slogan__7GL7d"><span>A</span>bout <span>m</span>y work - <span>Am</span>work</div>
                                <div class="AnnotationLP3_root__Mtluk">The idea behind our <?=$namehost?> product is the freedom of users to create unique software for all teams and business processes, without developers, without budget, all in a few seconds. Isn&#x27;t that great?</div>
                                <div class="AnnotationLP3_root__Mtluk">I&#x27;ve been helping companies Since 2017 implement various CRMs. Every time we recognize the fact that a CRM is a powerful tool for sales, we realize that it does not allow us to manage all the team and business processes in the company. So in 2019 I decided to create my CRM.</div>
                                <div class="AnnotationLP3_root__Mtluk">But it wasn&#x27;t until 2022 that the idea and vision for CRM+ Builder came about. When I recall mentioning the idea to my colleagues and customers, everyone said it was a fairy tale and unrealistic to create such a builder. Now it&#x27;s working and anyone can create a new functionality for any team or business processes in 15 seconds and it&#x27;s all very simple. it&#x27;s already here and you can even check it out now.</div>
                                <div class="AnnotationLP3_root__Mtluk">The second part of our product idea that has become our mission is Love. Yes, so simple and yet so complicated. Love is what drives us to create, and business is creation. I haven&#x27;t met a single end user who loves CRM as much as some other programs. Many just have to work with CRM because it&#x27;s their job. My dream is to create a CRM+ NoCode Builder that people love and want to work with . A CRM where the user wants to work and enjoys it. Yes, I&#x27;m a dreamer and I can&#x27;t change it.</div>
                                <div class="AnnotationLP3_root__Mtluk">Of course there are big challenges along the way, but we&#x27;re ready. We are open to ideas from users and would appreciate participation in the creation of a software which we will all love and which will help us to create.</div>
                                <div class="AnnotationLP3_root__Mtluk AnnotationLP3_bold__IuI64">And that&#x27;s all About My Work - <?=$namehost?>.</div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
            <div class="Pad_root__LKpEJ Pad_dark__zrBWu">
                <div class="Container_root__qvtQX">
                    <footer class="Footer_root__Ip214">
                        <div class="Footer_grid__S1b_W">
                            <a href="/">
                                <svg width="104" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#amwork_logo_medium_inversed_svg__a)">
                                        <path d="M7.695 3.746c1.496 0 2.8.293 3.91.88 1.11.585 1.974 1.449 2.59 2.59.617 1.141.926 2.521.926 4.14v8.86h-3.748V16.33H3.971v3.886H.27v-8.86c0-1.619.308-2.999.925-4.14.617-1.141 1.48-2.005 2.591-2.59 1.11-.587 2.414-.88 3.91-.88Zm3.678 9.577V11.01c0-1.342-.331-2.352-.994-3.03-.663-.695-1.565-1.042-2.707-1.042-1.156 0-2.066.347-2.73 1.041-.647.679-.97 1.689-.97 3.03v2.314h7.402ZM34.504 7.586c1.557 0 2.79.463 3.7 1.388.926.91 1.389 2.282 1.389 4.117v7.125h-3.61v-6.57c0-.986-.207-1.719-.624-2.197-.4-.493-.979-.74-1.735-.74-.848 0-1.519.277-2.012.833-.494.54-.74 1.35-.74 2.429v6.245h-3.609v-6.57c0-1.958-.786-2.937-2.36-2.937-.832 0-1.495.277-1.989.833-.493.54-.74 1.35-.74 2.429v6.245h-3.609V7.771h3.447v1.434a4.576 4.576 0 0 1 1.689-1.203 5.81 5.81 0 0 1 2.22-.416c.88 0 1.674.177 2.383.532.71.34 1.28.84 1.712 1.504a5.126 5.126 0 0 1 1.92-1.504 6.173 6.173 0 0 1 2.568-.532Z" fill="#3D8FEC"></path>
                                        <path d="M62.25 7.77v6.87c0 1.835-.501 3.254-1.504 4.256-1.002 1.003-2.428 1.504-4.279 1.504-.894 0-1.689-.139-2.383-.416a4.014 4.014 0 0 1-1.711-1.342 4.013 4.013 0 0 1-1.712 1.342c-.679.277-1.48.416-2.406.416-1.866 0-3.292-.501-4.28-1.504-.986-1.002-1.48-2.42-1.48-4.256V7.77h3.609v6.593c0 1.033.177 1.796.532 2.29.354.478.91.717 1.665.717.771 0 1.342-.247 1.712-.74.37-.494.555-1.25.555-2.267V7.77h3.609v6.593c0 1.017.185 1.773.555 2.266.37.494.94.74 1.712.74.755 0 1.31-.238 1.665-.716.355-.494.532-1.257.532-2.29V7.77h3.61ZM71.415 20.4c-1.31 0-2.49-.27-3.539-.81a6.207 6.207 0 0 1-2.429-2.29c-.586-.971-.879-2.074-.879-3.308 0-1.233.293-2.336.88-3.308a6.043 6.043 0 0 1 2.428-2.267c1.049-.555 2.228-.832 3.54-.832 1.31 0 2.482.277 3.516.832a6.044 6.044 0 0 1 2.428 2.267c.586.972.88 2.075.88 3.308 0 1.234-.294 2.337-.88 3.308a6.207 6.207 0 0 1-2.428 2.29c-1.034.54-2.206.81-3.517.81Zm0-2.96c.926 0 1.681-.31 2.267-.926.602-.632.903-1.473.903-2.522 0-1.048-.301-1.881-.903-2.498-.586-.632-1.341-.948-2.267-.948-.925 0-1.688.316-2.29.948-.601.617-.902 1.45-.902 2.498 0 1.049.3 1.89.902 2.522.602.617 1.365.925 2.29.925ZM84.098 9.412a4.024 4.024 0 0 1 1.735-1.365c.74-.308 1.588-.462 2.545-.462v3.33c-.401-.03-.671-.045-.81-.045-1.033 0-1.843.293-2.429.879-.586.57-.879 1.434-.879 2.59v5.876h-3.609V7.77h3.447v1.642ZM95.867 15.334l-1.735 1.712v3.169h-3.609V3.05h3.609v9.715l5.274-4.996h4.303l-5.182 5.274 5.644 7.17h-4.372l-3.932-4.88Z" fill="#fff"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="amwork_logo_medium_inversed_svg__a">
                                            <path fill="#fff" d="M0 0h104v24H0z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="Footer_delimiter__fXQSo"></div>
                        <div class="Footer_bottom-section__zboGl">
                            <div class="Footer_links-wrapper__gtOn2">
                               <a class="Footer_link__Eo6xs Footer_bold__uorYg" target="_blank" rel="noreferrer" href="/terms-of-service">Terms Of Service</a>
                               <a class="Footer_link__Eo6xs Footer_bold__uorYg" target="_blank" rel="noreferrer" href="/privacy">Privacy Policy</a>
                               <a class="Footer_link__Eo6xs Footer_bold__uorYg" target="_blank" rel="noreferrer" href="/refund-policy">Refund policy</a>
                               <a class="Footer_link__Eo6xs Footer_bold__uorYg" target="_blank" rel="noreferrer" href="/delivery-policy">delivery policy</a>
                               <a class="Footer_link__Eo6xs Footer_bold__uorYg" target="_blank" rel="noreferrer" href="/about">about us</a>
                                <p class="Footer_trademark__Zjo2O Footer_in-links__twS8e">© 2022 <?=$namehost?></p>
                            </div>
                            <div class="Footer_socials__ny3DR">
                                <a href="/" target="_blank" rel="noreferrer" class="Footer_icon-link-wrapper__A7c00">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 8a5.998 5.998 0 0 0-6 6v7h4v-7a2 2 0 0 1 4 0v7h4v-7a6 6 0 0 0-6-6ZM6 9v12H2V9h4ZM6 4a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" fill="#fff"></path>
                                    </svg>
                                </a>
                                <a href="/" class="Footer_icon-link-wrapper__A7c00" target="_blank" rel="noreferrer">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 19c2.3 0 6.4-.2 8.1-.6.7-.2 1.2-.7 1.4-1.4.3-1.1.5-3.4.5-5s-.2-3.9-.5-5c-.2-.7-.7-1.2-1.4-1.4-1.7-.4-5.8-.6-8.1-.6s-6.4.2-8.1.6c-.7.2-1.2.7-1.4 1.4-.3 1.1-.5 3.4-.5 5s.2 3.9.5 5c.2.7.7 1.2 1.4 1.4.302.071.68.136 1.112.195 1.99.27 5.097.405 6.988.405Z" fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="m15 12-5-3v6l5-3Z" fill="#555"></path>
                                    </svg>
                                </a>
                            </div>
                            <p class="Footer_trademark__Zjo2O Footer_at-bottom__moljn">© 2022 <?=$namehost?></p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <div class="Toastify"></div>
    </div>
<script src="<?=$host?>/_next/static/chunks/swiper-bundle.min.js"></script>
<script>
var mySwiper = new Swiper('.swiper', {
  direction: 'horizontal',
  slidesPerView: 2,
  centeredSlides: 1,
  spaceBetween: 30,
  loop: 1,
  navigation: {
    nextEl: '#solutions-carousel-navigation-next',
    prevEl: '#solutions-carousel-navigation-prev',
  },
  autoplay: {
    delay: 200000,
  },
});
</script>
</body>
</html>