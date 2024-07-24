
<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        
        <title>Les toiles</title>
        <meta name="description" content="Resonance &mdash; One & Multi Page Creative Template">  
        <meta charset="utf-8">
        <meta name="author" content="https://theme—forest.net/user/bestlooker/portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="any">
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">         

        <!-- CSS -->
        <link rel="stylesheet" href="<?= URL ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/style.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/style-responsive.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/splitting.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/YTPlayer.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/demo-main/demo-main.css">
        <link rel="stylesheet" href="<?= URL ?>assets/css/personnal.css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"> 

    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation Panel -->
            <nav class="main-nav transparent stick-fixed wow-menubar">
                <div class="main-nav-sub full-wrapper">
                    
                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format. 
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <!-- <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo">
                            <img src="images/logo-dark.svg" alt="Your Company Logo" width="105" height="34" />
                        </a>
                    </div> -->
                    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist local-scroll">
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/" class="mn-has-sub active">Accueil <i class="mi-chevron-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#" class="mn-has-sub">Main <i class="mi-chevron-right right"></i></a>
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Typed Text <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page-typed-text.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-typed-text-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-typed-text.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-typed-text-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page-image-parallax.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-image-parallax-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-image-parallax.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-image-parallax-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Slider Fullscreen <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page-slider-fullscreen.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-slider-fullscreen-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-slider-fullscreen.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-slider-fullscreen-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Slider Background <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page-slider-background.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-slider-background-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-slider-background.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-slider-background-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video HTML5 <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video Youtube <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="main-one-page-bg-video-youtube.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-one-page-bg-video-youtube-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-bg-video-youtube.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="main-multi-page-bg-video-youtube-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Bold <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="bold-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Typed Text <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="bold-one-page-typed-text.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-one-page-typed-text-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-multi-page-typed-text.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-multi-page-typed-text-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="bold-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="bold-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Brutalist <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="brutalist-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="brutalist-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video Youtube <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="brutalist-one-page-bg-video-youtube.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-one-page-bg-video-youtube-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-multi-page-bg-video-youtube.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="brutalist-multi-page-bg-video-youtube-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Corporate <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="corporate-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="corporate-one-page-image-parallax.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-one-page-image-parallax-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-image-parallax.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-image-parallax-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="corporate-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Split Screen <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="corporate-one-page-split.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-one-page-split-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-split.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="corporate-multi-page-split-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Elegant <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="elegant-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="elegant-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Split Screen <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="elegant-one-page-split.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-one-page-split-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-multi-page-split.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="elegant-multi-page-split-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Fancy <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="fancy-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="fancy-one-page-image-parallax.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-one-page-image-parallax-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-multi-page-image-parallax.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-multi-page-image-parallax-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="fancy-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="fancy-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Gradient <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="gradient-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax 1 <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="gradient-one-page-image-parallax-1.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-one-page-image-parallax-1-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-image-parallax-1.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-image-parallax-1-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax 2 <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="gradient-one-page-image-parallax-2.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-one-page-image-parallax-2-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-image-parallax-2.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-image-parallax-2-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="gradient-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="gradient-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Modern <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="modern-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax 1 <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="modern-one-page-image-parallax-1.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-one-page-image-parallax-1-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-image-parallax-1.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-image-parallax-1-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax 2 <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="modern-one-page-image-parallax-2.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-one-page-image-parallax-2-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-image-parallax-2.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-image-parallax-2-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Typed Text <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="modern-one-page-typed-text.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-one-page-typed-text-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-typed-text.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-typed-text-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="modern-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="modern-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Slick <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="slick-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="slick-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="slick-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="slick-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Split Screen <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="slick-one-page-split.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="slick-one-page-split-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="slick-multi-page-split.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="slick-multi-page-split-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Strong <i class="mi-chevron-right right"></i></a>
                                        
                                        <!-- Sub Sub -->
                                        <ul class="mn-sub">
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Main Demo <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="strong-one-page.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-one-page-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-multi-page.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-multi-page-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">Image Parallax <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="strong-one-page-image-parallax.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-one-page-image-parallax-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-multi-page-image-parallax.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-multi-page-image-parallax-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="mn-has-sub">BG Video <i class="mi-chevron-right right"></i></a>
                                                
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="strong-one-page-bg-video.html" target="_blank">One Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-one-page-bg-video-dark.html" target="_blank">One Page Dark</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-multi-page-bg-video.html" target="_blank">Multi Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="strong-multi-page-bg-video-dark.html" target="_blank">Multi Page Dark</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Sub Sub -->
                                    </li>
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/cours-de-couture" class="mn-has-sub">Cours de couture <i class="mi-chevron-down"></i></a>
                                <!-- Sub Megamenu -->
                                <ul class="mn-sub mn-has-multi">
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Group 1</span>
                                        <ul>
                                            <li>
                                                <a href="main-pages-about-1.html" target="_blank">About Us 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-about-2.html" target="_blank">About Us 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-about-3.html" target="_blank">About Us 3</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-services-1.html" target="_blank">Services 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-services-2.html" target="_blank">Services 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-services-3.html" target="_blank">Services 3</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-clients.html" target="_blank">Clients</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Group 2</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-pages-team.html" target="_blank">Team</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-faq-1.html" target="_blank">FAQ 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-faq-2.html" target="_blank">FAQ 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-pricing-1.html" target="_blank">Pricing 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-pricing-2.html" target="_blank">Pricing 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-contact-1.html" target="_blank">Contact 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-contact-2.html" target="_blank">Contact 2</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Group 3</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-pages-gallery-1col.html" target="_blank">Gallery Col 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-gallery-2col.html" target="_blank">Gallery Col 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-gallery-3col.html" target="_blank">Gallery Col 3</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-gallery-4col.html" target="_blank">Gallery Col 4</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-account.html" target="_blank">Login / Register</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-under-construction.html" target="_blank">Under Construction</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-404.html" target="_blank">Error 404</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                
                                </ul>
                                <!-- End Sub Megamenu -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/retouches" class="mn-has-sub">Retouches <i class="mi-chevron-down"></i></a>
                                <!-- Sub Megamenu -->
                                <ul class="mn-sub mn-has-multi">
                                    <li class="mn-sub-multi">
                                        <ul>
                                            <li>
                                                <a href="main-elements-accordions.html" target="_blank"><i class="mi-circle-add"></i> Accordions</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-alert-messages.html" target="_blank"><i class="mi-circle-information"></i> Alert Messages</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-animation.html" target="_blank"><i class="mi-play"></i> Animation</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-bars.html" target="_blank"><i class="mi-bar-chart"></i> Bars (Progress)</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-buttons.html" target="_blank"><i class="mi-link"></i> Buttons</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-cookie-banner.html" target="_blank"><i class="mi-flag"></i> Cookie Banner</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-features.html" target="_blank"><i class="mi-grid"></i> Feature Boxes</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-forms.html" target="_blank"><i class="mi-three-rows"></i> Form Fields</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-grid.html" target="_blank"><i class="mi-layout"></i> Grid</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-brands.html" target="_blank"><i class="mi-circle"></i> Icons Brands</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-iconmonstr.html" target="_blank"><i class="mi-favorite"></i> Icons Iconmonstr</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-Ionicons.html" target="_blank"><i class="mi-heart"></i> Icons Ionicons</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-monoicons.html" target="_blank"><i class="mi-sun"></i> Icons Monoicons</a>
                                            </li>                                                                                        
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        
                                        <ul>
                                            <li>
                                                <a href="main-elements-images-lazyload.html" target="_blank"><i class="mi-image"></i> Images Lazyload</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-lightbox.html" target="_blank"><i class="mi-window"></i> Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-sliders.html" target="_blank"><i class="mi-circle-arrow-right"></i> Sliders</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-sliders-lazyload.html" target="_blank"><i class="mi-circle-arrow-right"></i> Sliders Lazyload</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-tabs.html" target="_blank"><i class="mi-two-columns"></i> Tabs</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-tooltips.html" target="_blank"><i class="mi-message"></i> Tooltips</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-typography.html" target="_blank"><i class="mi-text"></i> Typography</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-video-sound.html" target="_blank"><i class="mi-webcam"></i> Video / Sound</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-dark-light.html" target="_blank"><i class="mi-book"></i> Header Dark</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-dark-transparent.html" target="_blank"><i class="mi-book"></i> Header Dark Transp</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-white.html" target="_blank"><i class="mi-book"></i> Header White</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-white-transparent.html" target="_blank"><i class="mi-book"></i> Header White Transp</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-white-after-scroll.html" target="_blank"><i class="mi-book"></i> Header Scroll-White</a>
                                            </li>
                                        </ul>
                                    </li>
                                
                                </ul>
                                <!-- End Sub Megamenu -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/creation-sur-mesure" class="mn-has-sub">Créations sur mesure <i class="mi-chevron-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#" class="mn-has-sub">Boxed <i class="mi-chevron-right right"></i></a>
                                        
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-boxed-2col.html" target="_blank">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-boxed-3col.html" target="_blank">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-boxed-4col.html" target="_blank">4 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Wide <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-wide-2col.html" target="_blank">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-wide-3col.html" target="_blank">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-wide-4col.html" target="_blank">4 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Masonry <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-masonry-2col.html" target="_blank">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-masonry-3col.html" target="_blank">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-masonry-4col.html" target="_blank">4 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-single-1.html" target="_blank">Single 1</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-single-2.html" target="_blank">Single 2</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-single-3.html" target="_blank">Single 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="main-portfolio-lazyload.html" target="_blank">Lazyload</a>
                                    </li>
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/atelier-zero-dechets" class="mn-has-sub">Atelier zéro dechets <i class="mi-chevron-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#" class="mn-has-sub">Classic <i class="mi-chevron-right right"></i></a>
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-classic-sidebar-left.html" target="_blank">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-sidebar-right.html" target="_blank">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-fullwidth.html" target="_blank">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Columns <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-columns-2col.html" target="_blank">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-columns-3col.html" target="_blank">3 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-single-sidebar-left.html" target="_blank">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-sidebar-right.html" target="_blank">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-fullwidth.html" target="_blank">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>                                    
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/mercerie" class="mn-has-sub">Mercerie <i class="mi-chevron-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#" class="mn-has-sub">Classic <i class="mi-chevron-right right"></i></a>
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-classic-sidebar-left.html" target="_blank">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-sidebar-right.html" target="_blank">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-fullwidth.html" target="_blank">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Columns <i class="mi-chevron-right right"></i></a>
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-columns-2col.html" target="_blank">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-columns-3col.html" target="_blank">3 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-single-sidebar-left.html" target="_blank">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-sidebar-right.html" target="_blank">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-fullwidth.html" target="_blank">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>                                    
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->  
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/contact" class="mn-has-sub">Contact <i class="mi-chevron-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#" class="mn-has-sub">Classic <i class="mi-chevron-right right"></i></a>
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-classic-sidebar-left.html" target="_blank">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-sidebar-right.html" target="_blank">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-fullwidth.html" target="_blank">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Columns <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-columns-2col.html" target="_blank">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-columns-3col.html" target="_blank">3 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-single-sidebar-left.html" target="_blank">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-sidebar-right.html" target="_blank">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-fullwidth.html" target="_blank">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>                                    
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->  
                            
                        </ul>
                        
                        <ul class="items-end clearlist">
                            
                            <!-- Languages -->
                            <!-- <li>
                                <a href="#" class="mn-has-sub opacity-1">En <i class="mi-chevron-down"></i></a>
                                
                                <ul class="mn-sub to-left">                                    
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>                                    
                                </ul>
                                
                            </li> -->
                            <!-- End Languages -->  
                            <!-- <li><a href="//1.envato.market/R5abDb" target="_blank" rel="nofollow noopener" class="opacity-1 no-hover"><span class="link-hover-anim underline" data-link-animate="y">Buy on Envato Market</span></a></li> -->
                            
                        </ul>                        
                        
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            <!-- End Navigation Panel -->
            
            <main id="main">
                <?= $content ?>

                <!-- Contact Section -->
                <section class="page-section pt-100" id="contact">
                    <div class="container position-relative wow fadeInUp">
                        <div class="row mb-60 mb-sm-50">
                            <div class="col-lg-6 mb-sm-50">
                                <div class="pe-lg-5">
                                    <h2 class="section-caption mb-xs-10 mb-0">Contactez nous</h2>
                                    <h2 class="contact-title mb-2">Vous avez une question ?</h2>
                                    <p class="text-gray mb-0 fs-12">
                                        Alors, comme à chaque question, il existe une — ou plusieurs — réponses, contactez-moi.
                                        <br>
                                        Je me ferai une joie de vous répondre !
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <!-- Contact Item -->
                                    <div class="col-sm-6 mb-xs-30 d-flex align-items-stretch">
                                        <div class="alt-features-item border-left mt-0">
                                            <div class="alt-features-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="48" height="64" viewBox="0 0 48 64">
                                                    <path d="M45.375 41.375c1.5 0 2.625 1.125 2.625 2.625v9.375c0 1.5-1.125 2.625-2.625 2.625-25.125 0-45.375-20.25-45.375-45.375 0-1.5 1.125-2.625 2.625-2.625h9.375c1.5 0 2.625 1.125 2.625 2.625 0 3.375 0.5 6.5 1.625 9.625 0.25 0.875 0 2-0.625 2.625l-5.875 5.875c3.875 7.625 10 13.75 17.625 17.625l5.875-5.875c0.625-0.75 1.75-0.875 2.625-0.625 2.875 0.875 6.125 1.5 9.5 1.5z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <h4 class="alt-features-title">Contact</h4>
                                            <div class="alt-features-descr clearlinks">
                                                <div><a href="mailto:">email</a></div>
                                                <div><a href="tel:0661591091">06 61 59 10 91</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Contact Item -->
                                    
                                    <!-- Contact Item -->
                                    <div class="col-sm-6 d-flex align-items-stretch">
                                        <div class="alt-features-item border-left mt-0">
                                            <div class="alt-features-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="40" height="64" viewBox="0 0 40 64">
                                                    <path d="M20 4c11 0 20 8.875 20 19.625 0 14.75-20 36.375-20 36.375s-20-21.625-20-36.375c0-10.75 9-19.625 20-19.625zM20 30.625c4 0 7.125-3.125 7.125-7s-3.125-7-7.125-7-7.125 3.125-7.125 7 3.125 7 7.125 7z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <h4 class="alt-features-title">Adresse</h4>
                                            <div class="alt-features-descr">
                                                123 King Street,<br> London W6 9JG,<br> United Kingdom 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Contact Item -->

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-sm-50">
                                <!-- Contact Form -->
                                <form class="form contact-form pe-lg-5" id="contact_form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Name -->
                                            <div class="form-group">
                                                <label for="name">Nom et prénom</label>
                                                <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="renseignez votre nom entier" pattern=".{3,100}" required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Email -->
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Renseignez votre email" pattern=".{5,100}" required aria-required="true">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Message -->
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="input-lg round form-control" style="height: 130px;" placeholder="Ecrivez votre message"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- Send Button -->
                                            <div class="pt-20">
                                                <button class="submit_btn btn btn-mod btn-large btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                                    <span>Envoyer le Message</span>
                                                </button>
                                            </div>                              
                                        </div>
                                        <div class="col-lg-7">
                                            <!-- Inform Tip -->
                                            <div class="form-tip pt-20 pt-sm-0 mt-sm-20">
                                                <i class="icon-info size-16"></i>
                                                All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>
                                </form>
                                <!-- End Contact Form -->
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch">
                                <!-- Google Map -->
                                <div class="map-boxed">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3071.5318265717196!2d-75.60465104752062!3d39.660249785873326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3cdadbfdb%3A0x80d20252268fc006!2zMjQ1IFF1aWdsZXkgQmx2ZCBzdGUgaywgTmV3IENhc3RsZSwgREUgMTk3MjAsINCh0L_QvtC70YPRh9C10L3RliDQqNGC0LDRgtC4INCQ0LzQtdGA0LjQutC4!5e0!3m2!1suk!2sua!4v1662469609333!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <!-- End Google Map -->
                            </div>
                        </div>   
                    </div>
                </section>
                <!-- End Contact Section -->
            </main>
            
            <!-- Footer -->
            <footer class="page-section footer bg-gray-light-1 pb-30">
                <div class="container">
                    
                    <div class="row pb-120 pb-sm-80 pb-xs-50">
                                                
                        <div class="col-md-4 col-lg-3 text-gray mb-sm-50">
                            
                            <div class="mb-30">
                                <img src="<?= URL ?>assets/images/logo-dark.svg" width="105" height="34" alt="Your Company Logo" />
                            </div>
                            
                            <p>
                                Chez les Toiles 3C2R, découvrez les joies et le plaisir de la couture : ateliers pour tous les âges, réparations, créations sur mesure
                            </p>
                            
                            <div class="clearlinks">                                
                                <strong>T.</strong> <a href="tel:+18376528800">+1 837 652 8800</a>
                            </div>
                            
                            <div class="clearlinks">
                                <strong>E.</strong> <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2">                            
                            <div class="row mt-n30">
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">Site web</h3>
                                    
                                    <ul class="fw-menu clearlist">                                        
                                        <li><a href="/">Accueil</a></li>
                                        <li><a href="/cours-de-couture">Cours de couture</a></li>
                                        <li><a href="/retouches">Retouches</a></li>
                                        <li><a href="/creation-sur-mesure">Création sur mesure</a></li>
                                        <li><a href="/atelier-zero-dechets">Atelier zéro déchets</a></li>
                                        <li><a href="/mercerie">Mercerie</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">Réseaux sociaux</h3>
                                    
                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-instagram"></i>
                                                Instagram
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">Legal & Press</h3>
                                    
                                    <ul class="fw-menu clearlist">                                     
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Presskit</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->                                
                                
                            </div>                            
                        </div>
                        
                    </div>
                    
                    <!-- Footer Text -->
                    <div class="row text-gray">
                        
                        <div class="col-md-4 col-lg-3">
                            <b>© LesToiles3C2R 2024.</b>
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2 clearfix">
                            
                            <!-- Back to Top Link -->
                            <div class="local-scroll float-end mt-n20 mt-sm-10">
                                <a href="#top" class="link-to-top">                                
                                    <i class="mi-arrow-up size-24"></i>
                                    <span class="visually-hidden">Scroll to top</span>
                                </a>
                            </div>
                            <!-- End Back to Top Link -->
                            
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                </div>                 
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->      
        
        <!-- JS -->
        <script src="<?= URL ?>assets/js/jquery.min.js"></script>
        <script src="<?= URL ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= URL ?>assets/js/plugins.js"></script>
        <script src="<?= URL ?>assets/js/jquery.ajaxchimp.min.js"></script>             
        <script src="<?= URL ?>assets/js/contact-form.js"></script>        
        <script src="<?= URL ?>assets/js/all.js"></script> 
        <!-- End JS -->       
        
    </body>
</html>ain