<?php session_start();?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>E-Learning Kimia | for you.</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='full-descriptor-css'  href='portfolios/full-description/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='slide-details-css'  href='portfolios/slide-detail/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='sliders/flexslider/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-elegant-css'  href='sliders/flexslider-elegant/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-css'  href='sliders/revolution-slider/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-settings-css'  href='sliders/revolution-slider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-captions-css'  href='sliders/revolution-slider/rs-plugin/css/captions.css' type='text/css' media='all' />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />



    <script type='text/javascript' src='js/jquery/jquery.js'></script>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

<!-- START WRAPPER -->
<div id="wrapper" class="container group">
<!-- START TOP BAR -->

<!-- START TOP BAR -->
<div id="topbar">
    <div class="container">
        <div class="row">
            <div id="text-8" class=" widget-last span6 widget widget_text">
                <div class="textwidget">
                    <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                    <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                    <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                    <a href="#" class="socials-small google-small" title="Google"  >google</a>

                    <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                    <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a>
				</div>
            </div>
			<?php include('login.php');?>
        </div>
    </div>
</div>

<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>

<!-- END TOP BAR -->

<!-- START HEADER -->
<div id="header" class="group">
    <div class="group container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <!-- START LOGO -->
                    <div id="logo" class="span4 group">
                        <a id="logo-img" href="index.php" title="kimia">
                            <img src="images/celestino1.png" title="kimia" alt="kimia" />
                        </a>

                        <p id="tagline">for your education.</p>
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                        <?php include ('menu.php'); ?>
                        <!-- END MAIN NAVIGATION -->
                 </div>
                </div>
            </div>
        </div>
    </div>
    <div id="border-header"></div>
</div>
<!-- END HEADER -->

<!-- START SLIDER -->
<div id="slider-revolution-slider" class="slider slider-revolution-slider revolution-slider">
    <div class="shadowWrapper">

        <!-- START REVOLUTION SLIDER  -->
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:400px;">
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:400px;height:400;">
                <ul>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                        <img src="images/slider/1-bg.jpg">

                        <div class="tp-caption lfb"
                             data-x="30"
                             data-y="13"
                             data-speed="2000"
                             data-start="300"
                             data-easing="easeOutQuint">
                            <img src="images/slider/1-l1.png" alt="Image1">
                        </div>

                        <div class="tp-caption main_title lft"
                             data-x="490"
                             data-y="71"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="easeOutQuint"  >
                            WELCOME.
                        </div>

                        <div class="tp-caption paragraph lfb"
                             data-x="489"
                             data-y="143"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="easeOutQuint"  >
                            I�m Celestino, and this is a creative and responsive portfolio theme based on WordPress.
                            <br />
                            7 different sliders, unlimited portfolio pages...for a great portfolio & personal site.
                        </div>

                        <div class="tp-caption paragraph_highlighted lfr"
                             data-x="490"
                             data-y="232"
                             data-speed="1000"
                             data-start="2100"
                             data-easing="easeOutQuint"  >
                            Be different. Be creative. Enjoy Celestino.
                        </div>

                        <div class="tp-caption lfb"
                             data-x="494"
                             data-y="313"
                             data-speed="1200"
                             data-start="2500"
                             data-easing="easeOutQuint"  >
                            <img src="images/slider/1-l2.png" alt="Image 5">
                        </div>

                        <div class="tp-caption lft"
                             data-x="587"
                             data-y="306"
                             data-speed="1200"
                             data-start="3000"
                             data-easing="easeOutBounce"  >
                            <img src="images/slider/1-l3.png" alt="Image 8">
                        </div>

                        <div class="tp-caption lfr"
                             data-x="676"
                             data-y="311"
                             data-speed="1200"
                             data-start="3400"
                             data-easing="easeOutQuint"  >
                            <img src="images/slider/1-l4.png" alt="Image 9">
                        </div>

                        <div class="tp-caption lfl"
                             data-x="786"
                             data-y="316"
                             data-speed="1200"
                             data-start="3800"
                             data-easing="easeOutQuint"  >
                            <img src="images/slider/1-l5.png" alt="Image 10">
                        </div>

                        <div class="tp-caption lft"
                             data-x="858"
                             data-y="298"
                             data-speed="1200"
                             data-start="4200"
                             data-easing="easeOutQuint"  >
                            <img src="images/slider/1-l6.png" alt="Image 11">
                        </div>

                        <div class="tp-caption lfb"
                             data-x="954"
                             data-y="308"
                             data-speed="1200"
                             data-start="4600"
                             data-easing="easeOutQuint"  >
                            <img src="images/slider/1-l7.png" alt="Image 12">
                        </div>

                        <div class="tp-caption lft"
                             data-x="1051"
                             data-y="329"
                             data-speed="1200"
                             data-start="5200"
                             data-easing="easeOutQuint"  >
                            <img src="images/slider/1-l8.png" alt="Image 13">
                        </div>
                    </li>
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                    <img src="images/slider/2-bg.jpg" alt="2-bg" >

                    <div class="tp-caption main_title lfr"
                         data-x="0"
                         data-y="60"
                         data-speed="1000"
                         data-start="300"
                         data-easing="easeOutQuint"  >
                        POWERFUL <span style="font-family:'Dancing Script';font-weight:400;">&</span> <br />
                        RESPONSIVE
                    </div>

                    <div class="tp-caption paragraph lfb"
                         data-x="0"
                         data-y="194"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeOutQuint"  >
                        A powerful 1170 pixel layout for a great and strong layout. <br />
                        <b>Optimized for minor resolutions and mobile devices.</b>
                    </div>

                    <div class="tp-caption paragraph lfb"
                         data-x="0"
                         data-y="300"
                         data-speed="1200"
                         data-start="3300"
                         data-easing="easeOutQuint"  >
                        <a href="http://www.themeforest.net/item/pink-rio-responsive-multipurpose-theme/3091259"  class="btn btn-xlarge  btn-mfast-3 ">Purchase the theme</a>
                    </div>

                    <div class="tp-caption lft"
                         data-x="753"
                         data-y="25"
                         data-speed="1000"
                         data-start="1600"
                         data-easing="easeOutQuint"  >
                        <img src="images/slider/2-l1.png" alt="Image 4">
                    </div>

                    <div class="tp-caption lfb"
                         data-x="598"
                         data-y="166"
                         data-speed="900"
                         data-start="2000"
                         data-easing="easeOutQuint"  >
                        <img src="images/slider/2-l2.png" alt="Image 5">
                    </div>

                    <div class="tp-caption lfl"
                         data-x="795"
                         data-y="158"
                         data-speed="900"
                         data-start="2400"
                         data-easing="easeOutQuint"  >
                        <img src="images/slider/2-l3.png" alt="Image 6">
                    </div>
                </li>
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                    <img src="images/slider/3-bg.jpg" alt="3-bg" >

                    <div class="tp-caption paragraph sft"
                         data-x="0"
                         data-y="10"
                         data-speed="1000"
                         data-start="300"
                         data-easing="easeOutQuint"  >
                        Unlimited portfolio with 8 different layouts
                    </div>

                    <div class="tp-caption paragraph_highlighted sft"
                         data-x="0"
                         data-y="35"
                         data-speed="1000"
                         data-start="300"
                         data-easing="easeOutQuint"  >
                        Interactive javascript portfolio + the creative �pinterest� style portfolio
                    </div>

                    <div class="tp-caption paragraph sfb"
                         data-x="0"
                         data-y="60"
                         data-speed="1000"
                         data-start="800"
                         data-easing="easeOutQuint"  >
                        Unlimited sliders  with 7 different sliders (parallax Layer slider included)
                    </div>

                    <div class="tp-caption paragraph_highlighted sfb"
                         data-x="0"
                         data-y="85"
                         data-speed="1000"
                         data-start="800"
                         data-easing="easeOutQuint"  >
                        Post formats: audio, gallery and video
                    </div>

                    <div class="tp-caption paragraph sft"
                         data-x="0"
                         data-y="110"
                         data-speed="1000"
                         data-start="1300"
                         data-easing="easeOutQuint"  >
                        Background uploader for each page and post
                    </div>

                    <div class="tp-caption paragraph_highlighted sft"
                         data-x="0"
                         data-y="135"
                         data-speed="1000"
                         data-start="1300"
                         data-easing="easeOutQuint"  >
                        Unlimited colors
                    </div>

                    <div class="tp-caption paragraph sfb"
                         data-x="0"
                         data-y="160"
                         data-speed="1000"
                         data-start="1800"
                         data-easing="easeOutQuint"  >
                        500+ google fonts
                    </div>

                    <div class="tp-caption paragraph_highlighted sfb"
                         data-x="0"
                         data-y="185"
                         data-speed="1000"
                         data-start="1800"
                         data-easing="easeOutQuint"  >
                        SEO optimized
                    </div>

                    <div class="tp-caption paragraph sft"
                         data-x="0"
                         data-y="210"
                         data-speed="1000"
                         data-start="2300"
                         data-easing="easeOutQuint"  >
                        Shortcode manager with 100+ shortcodes
                    </div>

                    <div class="tp-caption paragraph_highlighted sft"
                         data-x="0"
                         data-y="235"
                         data-speed="1000"
                         data-start="2300"
                         data-easing="easeOutQuint"  >
                        Gallery, Video gallery, Services page and Team page
                    </div>

                    <div class="tp-caption paragraph sfb"
                         data-x="0"
                         data-y="260"
                         data-speed="1000"
                         data-start="2800"
                         data-easing="easeOutQuint"  >
                        Testimonials page
                    </div>

                    <div class="tp-caption paragraph_highlighted sfb"
                         data-x="0"
                         data-y="285"
                         data-speed="1000"
                         data-start="2800"
                         data-easing="easeOutQuint"  >
                        3 blog layouts
                    </div>

                    <div class="tp-caption paragraph sft"
                         data-x="0"
                         data-y="310"
                         data-speed="1000"
                         data-start="3300"
                         data-easing="easeOutQuint"  >
                        Unlimited Sidebar + Unlimited contact form
                    </div>

                    <div class="tp-caption lfl"
                         data-x="1"
                         data-y="356"
                         data-speed="1000"
                         data-start="4200"
                         data-easing="easeOutQuint"  >
                        <img src="images/slider/3-l3.png" alt="Image 14">
                    </div>

                    <div class="tp-caption lfr"
                         data-x="338"
                         data-y="10"
                         data-speed="1000"
                         data-start="4500"
                         data-easing="easeOutQuint"  >
                        <img src="images/slider/3-l1.png" alt="Image 15">
                    </div>

                    <div class="tp-caption lfb"
                         data-x="681"
                         data-y="163"
                         data-speed="1500"
                         data-start="5000"

                         data-easing="easeOutQuint"  >
                        <img src="images/slider/3-l2.png" alt="Image 16">
                    </div>
                </li>
                </ul>
            </div>
        </div>

    <script type="text/javascript">

        var tpj=jQuery;

        tpj.noConflict();

        var revapi1;

        tpj(document).ready(function() {

            if (tpj.fn.cssOriginal != undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            if(tpj('#rev_slider_1_1').revolution == undefined)
                revslider_showDoubleJqueryError('#rev_slider_1_1');
            else
                revapi1 = tpj('#rev_slider_1_1').show().revolution(
                    {
                        delay:9000,
                        startwidth:1170,
                        startheight:400,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:3,

                        navigationType:"none",
                        navigationArrows:"nexttobullets",
                        navigationStyle:"round",

                        touchenabled:"on",
                        onHoverStop:"off",

                        navOffsetHorizontal:0,
                        navOffsetVertical:20,

                        shadow:0,
                        fullWidth:"on",

                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off",

                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0					});

        });	//ready

    </script>

    <!-- END REVOLUTION SLIDER -->
    </div>
</div>
<!-- END SLIDER -->

<!-- START PAGE META -->
<div id="page-meta" class="container">

    <!-- TITLE -->
    <div class="title">
        <h1>Login</h1>
    </div>

    <!-- BREDCRUMB -->
    <div class="breadcrumbs">
        <p id="yit-breadcrumb" itemprop="breadcrumb">
            <a class="home" href="index.php">Home Page</a> &gt;
            <a class="no-link current" href="#">Login</a>
        </p>
    </div>
</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
	<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span9 content group">
                <div class="page type-page status-publish hentry group">
                    <h3></h3>
                    <p>&nbsp;</p>
					
                </div>

                <!-- START COMMENTS -->
                <div id="comments"></div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-contact" class="span3 sidebar group">
                <div id="contact-info-2" class="widget-first widget contact-info">
                    <h3>Contact info</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Address:</span> Celestino, 115 Avenue - Italy
                            </li>

                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Phone:</span> +00 39 71717174
                            </li>

                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Fax:</span> +39 0035 356 765
                            </li>

                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> pinkrio@yit.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="text-2" class="widget-2 widget-last widget widget_text">
                    <h3>I&#8217;m social</h3>
                    <div class="textwidget">Praesent ultricies iaculis erat iaculis feugiat. Sed suscipit tempor felis, sit amet aliquam nunc sollicitudin sed.
                <br /><br />

                <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                <a href="#" class="socials-small google-small" title="Google"  >google</a>

                <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
            </div>
        </div>
            <!-- END SIDEBAR -->

            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->

        </div>
    </div>
</div>
        <p>&nbsp;</p>
        <p>
        <div class="row box-title">
            <div class="span5">
                <div class="border-line"></div>
            </div>

            <h3 class="span2">Random numbers</h3>

            <div class="span5">
                <div class="border-line"></div>
            </div>
        </div>


        <div class="one-fourth ">
            <div class="random-numbers">
                <img src="images/110.jpg" alt="" width="52" height="52" />
                <p>satisfied customers</p>
                <span class="number">1590</span>
            </div>
        </div>

        <div class="one-fourth ">
            <div class="random-numbers">
                <img src="images/25.jpg" alt="" width="52" height="52" />
                <p>Freelance projects</p>
                <span class="number">65</span>
            </div>
        </div>

        <div class="one-fourth ">
            <div class="random-numbers">
                <img src="images/31.jpg" alt="" width="52" height="52" />
                <p>sales on themeforest</p>
                <span class="number">12.845</span>
            </div>
        </div>

        <div class="one-fourth last">
            <div class="random-numbers">
                <img src="images/41.jpg" alt="" width="52" height="52" />
                <p>...Weekly Coffee!</p>
                <span class="number">36</span>
            </div>
        </div>
        </div>
        <!-- START COMMENTS -->
        <div id="comments"></div>
        <!-- END COMMENTS -->
        </div>
<!-- END CONTENT -->

<!-- START EXTRA CONTENT -->
<!-- END EXTRA CONTENT -->

        </div>
    </div>
</div>
<!-- END PRIMARY -->


<!-- START FOOTER -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div>
                <div class="widget-first widget span3 recent-posts">
                    <h3>From my blog</h3>
                    <div class="recent-post">
                        <div class="post type-post status-publish format-gallery hentry category-web-design group">

                            <div class="date">
                                <span class="month">Oct</span>
                                <span class="day">8</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="blog-detail.html" title="This is the title of the first article. Enjoy it.">
                                        This is the title of the first article. Enjoy it.
                                    </a>
                                </h3>
                                <p>by
                                    <a href="author-celestino.html" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -

                                    <a href="blog-detail.html#respond" title="Comment on This is the title of the first article. Enjoy it.">
                                        0 comments
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="post type-post status-publish format-standard hentry category-elegant-vintage group">

                            <div class="date">
                                <span class="month">Sep</span>
                                <span class="day">12</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="#" title="Nice &amp; Clean. The best for your blog!">
                                        Nice &amp; Clean. The best for your blog!
                                    </a>
                                </h3>

                                <p>by
                                    <a href="#" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -
                                    <a href="#" title="Comment on Nice &amp; Clean. The best for your blog!">
                                        0 comments
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget span3 widget_flickrRSS">
                    <h3>My Flickr</h3>

                    <a title="1P4B6832" href="http://www.flickr.com/photos/gordonkw41/8756237357/"><img alt="1P4B6832" src="http://farm9.staticflickr.com/8553/8756237357_32d559d451_s.jpg"></a>
                    <a title="DSC03253" href="http://www.flickr.com/photos/dovz/8756237387/"><img alt="DSC03253" src="http://farm8.staticflickr.com/7422/8756237387_1c3013358d_s.jpg"></a>
                    <a title="Tappas in Hondarribia" href="http://www.flickr.com/photos/francolupo/8756237389/"><img alt="Tappas in Hondarribia" src="http://farm3.staticflickr.com/2867/8756237389_faae5159f8_s.jpg"></a>
                    <a title="P1000624" href="http://www.flickr.com/photos/24690780@N02/8756237421/"><img alt="P1000624" src="http://farm9.staticflickr.com/8393/8756237421_43de542797_s.jpg"></a>
                    <a title="" href="http://www.flickr.com/photos/chioushibo/8756237483/"><img alt="" src="http://farm6.staticflickr.com/5454/8756237483_9a8805a3d4_s.jpg"></a>
                    <a title="P1010059" href="http://www.flickr.com/photos/uzagaku/8756237507/"><img alt="P1010059" src="http://farm4.staticflickr.com/3777/8756237507_e6e45db22a_s.jpg"></a>
                    <a title="Berlijn 2013" href="http://www.flickr.com/photos/carlawiddershoven/8756237559/"><img alt="Berlijn 2013" src="http://farm3.staticflickr.com/2809/8756237559_16964e44ea_s.jpg"></a>
                    <a title="20130518-_DSC9574" href="http://www.flickr.com/photos/fomalhaut/8757363666/"><img alt="20130518-_DSC9574" src="http://farm3.staticflickr.com/2857/8757363666_cce1ef7ea5_s.jpg"></a>
                    <a title="20130519_144623.jpg" href="http://www.flickr.com/photos/lewisdgriffin/8757363718/"><img alt="20130519_144623.jpg" src="http://farm4.staticflickr.com/3817/8757363718_64d870995a_s.jpg"></a>
                    <a title="baden-w�rttenmberg und bayern 2013 1 284" href="http://www.flickr.com/photos/russianchild007/8757363726/"><img alt="baden-w�rttenmberg und bayern 2013 1 284" src="http://farm4.staticflickr.com/3773/8757363726_e7c9ed61a7_s.jpg"></a>
                </div>
                <div  class="widget span3 contact-info">
                    <h3>Get in touch</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Address:</span> Celestino, 115 Avenue - Italy
                            </li>
                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Mobile:</span> +39 3471717174
                            </li>
                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Fax:</span> +39 0035 356 765
                            </li>
                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> celestino@yit.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="last-tweets-2" class=" widget span3 last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets-2">

                    </div>

                    <script type="text/javascript">
                        jQuery(function($){
                            $('#last-tweets-2 .list-tweets-2').tweetable({
                                listClass: 'tweets-widget-2',
                                username: 'envato',
                                time: true,
                                limit: 2,
                                replies: true
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- START COPYRIGHT -->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="left span6">
                <strong>Welcome To My E-Learning Website</strong>
            </div>
            <div class="right span6">
                <p>Copyright by
                        <strong>Fatwa Maulina</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->

</div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->



<!-- START CUSTOM SCRIPT -->

<!-- END CUSTOM SCRIPT -->

<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>
</body>
<!-- END BODY -->
</html>