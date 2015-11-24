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
    <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='slide-details-css'  href='portfolios/pinterest/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='sliders/flexslider-elegant/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-css'  href='sliders/revolution-slider/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-settings-css'  href='sliders/revolution-slider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-captions-css'  href='sliders/revolution-slider/rs-plugin/css/captions.css' type='text/css' media='all' />
    <link rel='stylesheet' id='cycle-slider-css'  href='sliders/cycle/css/cycle.css' type='text/css' media='all' />


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

    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />

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
					<a href="fnreg.php" rel="lightbox" class="btn btn-small  btn-mfast-3 ch-info-lightbox " style="font-size: 14px;">
						sign up
					</a>
					
					<a href="login.php" rel="lightbox" class="btn btn-small  btn-mfast-3 ch-info-lightbox " style="font-size: 14px;"> sign in</a>	
				</div> 
			</div>     		
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
                            <img src="images/logo1.png" title="kimia" alt="kimia" />
                        </a>

                        <p id="tagline">for your education.</p>
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                     <?php include('menu.php');?>
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
<div id="slider-cycle" class="slider slider-cycle cycle no-responsive slider_cycle group" style="height:485px;">
    <ul class="slider">
        <li>
            <div class="slide-holder" style="background:  url('images/slider/003.jpg') no-repeat center; height:483px;">
                <div class="slide-content-holder container" style="height:483px;">
                    <div class="slide-content-holder-content" style="position: absolute; bottom:22px;left:500px;">
                        <div class="slide-title">
						
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="slide-holder" style="background:  url('images/slider/002.jpeg') no-repeat center; height:483px;">
                <div class="slide-content-holder container" style="height:483px;">
					<div class="slide-content-holder-content" style="position: absolute; bottom:22px;left:500px;">
						<div class="slide-title">
							
                    	</div>
                	</div>
            	</div>
			</div>
        </li>
    </ul>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){

        var     yit_slider_cycle_fx = 'easing',
                yit_slider_cycle_speed = 800,
                yit_slider_cycle_timeout = 3000,
                yit_slider_cycle_directionNav = true,
                yit_slider_cycle_directionNavHide = true,
                yit_slider_cycle_autoplay = true;


        if( $.browser.msie && parseInt($.browser.version.substr(0,1),10) <= '8' ) {
            $('#slider-cycle ul.slider').anythingSlider({
                expand              : true,
                startStopped        : false,
                buildArrows         : yit_slider_cycle_directionNav,
                buildNavigation     : false,
                buildStartStop      : false,
                delay               : yit_slider_cycle_timeout,
                animationTime       : yit_slider_cycle_speed,
                easing              : yit_slider_cycle_fx,
                autoPlay            : yit_slider_cycle_autoplay ? true : false,
                pauseOnHover        : true,
                toggleArrows        : false,
                resizeContents      : true
            });
        } else {
            $('#slider-cycle ul.slider').anythingSlider({
                expand              : true,
                startStopped        : false,
                buildArrows         : yit_slider_cycle_directionNav,
                buildNavigation     : false,
                buildStartStop      : false,
                delay               : yit_slider_cycle_timeout,
                animationTime       : yit_slider_cycle_speed,
                easing              : yit_slider_cycle_fx,
                autoPlay            : yit_slider_cycle_autoplay ? true : false,
                pauseOnHover        : true,
                toggleArrows        : yit_slider_cycle_directionNavHide ? true : false,
                onSlideComplete     : function(slider){},
                resizeContents      : true,
                onSlideBegin        : function(slider) {

                },
                onSlideComplete     : function(slider) {

                }
            });

        }
    });
</script>
<div class="mobile-slider cycle">
    <div class="slider fixed-image container">
        <img src="images/slider/002.jpg" alt="" />
    </div>
</div>

<!-- START PAGE META -->
<div id="page-meta" class="container">
    <!-- SLOGAN -->
    <div class="slogan">
        <h2>Welcome to my website</h2>
    </div>
</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-home" class="span12 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="section portfolio">
                        <!-- section blog wrapper -->

                        <!-- sticky portfolio -->
                        <div class="row">
                            <div class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">

                                <div class="work-thumbnail span6">
                                    <div class="thumb-wrapper">
                                        <div class="related_img">
                                            <div class="picture_overlay">
                                                <img width="573" height="285" src="images/portfolios/0049-573x285.jpg" class="attachment-section_portfolio" alt="004" />
                                                <div class="overlay">
                                                    <div>
                                                        <p>
                                                            <a href="images/portfolios/0411.jpg" rel="lightbox" class="ch-info-lightbox">
                                                                <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                            </a>
                                                            <a href="portfolio-slide-detail.html">
                                                                <img src="images/icons/project.png" alt="" />
                                                            </a>
                                                        </p>
                                                        <p class="title">Ilmu Kimia</p>
                                                        <p class="subtitle">Peranan dan Perkembangan</p>
                                                    </div>
                                                </div>
                                                <!-- end overlay -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end thumb wrapper -->
                                </div>
                                <!-- end work-thumbnail -->
                                <div class="span6">
                                    <div class="work-description">
                                        <h2>
                                            <a href="full-descriptor-digitpool.html">
                                                Pengertian Ilmu Kimia
                                            </a>
                                        </h2>
                                        <p><strong>Ilmu kimia</strong> merupakan bagian dari ilmu pengetahuan alam (sains) yang memepelajari tentang sifat materi, struktur materi, komposisi materi, perubahan materi, dan energi yang menyertai perubahan materi. materi adalah sesuatu yang mempunyai massa dan volum (menempati ruang), misalnya benda-benda disekitar kita seperti meja,mobil,buku,air, dan udara, selain menempati ruang juga harus mempunyai massa.</p>
                                    </div>
                                    <!-- end work-description -->
                                </div>
                            </div>
                        </div>
                        <!-- span wrapper -->

                    <!-- end section blog wrapper -->
                    <div class="clear"></div>

                    <div class="row">
                        <div class="section blog">
                            <h3 class="title span12">
                                News from the blog
                            </h3>
                            <div class="span3 post_first">
                                <div class="post type-post status-publish format-gallery hentry category-web-design tag-design tag-developing tag-web hentry-post">
                                    <div class="meta group">
                                        <h4>
                                            <a href="blog-detail.html" title="This is the title of the first article. Enjoy it.">
                                                This is the title of the first article. Enjoy it.
                                            </a>
                                        </h4>
                                        <p class="date">October 8, 2012</p>
                                        <p class="comments">
                                            <span>
                                                <a href="blog-detail.html#respond" title="Comment on This is the title of the first article. Enjoy it.">
                                                    No comments
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end span -->

                            <div class="span3">
                                <div class="post type-post status-publish format-standard hentry category-elegant-vintage hentry-post">
                                    <div class="meta group">
                                        <h4>
                                            <a href="#" title="Nice &amp; Clean. The best for your blog!">
                                                Nice &amp; Clean. The best for your blog!
                                            </a>
                                        </h4>
                                        <p class="date">September 12, 2012</p>
                                        <p class="comments">
                                            <span>
                                                <a href="#" title="Comment on Nice &amp; Clean. The best for your blog!">
                                                    No comments
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end span -->

                            <div class="span3">
                                <div class="post type-post status-publish format-audio hentry category-elegant-vintage tag-elegant tag-vintage hentry-post">
                                    <div class="meta group">
                                        <h4>
                                            <a href="#" title="Another theme by YIThemes!">
                                                Another theme by YIThemes!
                                            </a>
                                        </h4>
                                        <p class="date">September 12, 2012</p>
                                        <p class="comments">
                                            <span>
                                                <a href="#" title="Comment on Another theme by YIThemes!">
                                                    3 comments
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end span -->

                            <div class="span3">
                                <div class="post type-post status-publish format-video hentry category-web-design hentry-post">
                                    <div class="meta group">
                                        <h4>
                                            <a href="#" title="Section shortcodes &amp; sticky posts!">
                                                Section shortcodes &amp; sticky posts!
                                            </a>
                                        </h4>
                                        <p class="date">August 21, 2012</p>
                                        <p class="comments">
                                            <span>
                                                <a href="#" title="Comment on Section shortcodes &amp; sticky posts!">
                                                    No comments
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end span -->

                            <div class="clear"></div>
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
                    <a title="baden-württenmberg und bayern 2013 1 284" href="http://www.flickr.com/photos/russianchild007/8757363726/"><img alt="baden-württenmberg und bayern 2013 1 284" src="http://farm4.staticflickr.com/3773/8757363726_e7c9ed61a7_s.jpg"></a>
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
			<strong>Welcome In My E-Learning Website</strong>
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
<script type="text/javascript" src="js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="sliders/cycle/js/jquery.anythingslider.js"></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>