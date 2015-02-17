<?php
/**
 * The template for displaying all pages
 * Template Name:Gallery Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" />
    <!-- Add custom CSS here -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/demo.js"></script>
<!--<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>-->
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
<!-- Magnific Popup core JS file -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js"></script>
<script language="javascript">
$(document).ready(function() {
    //alert('d');
    $('#swarupGallery').mycaptcha({
        width: '100',
        navHolder: '#navHolder',
        nextText: '+ More Photos',
        prevText: '< Prev',
        coloum: 50,
        gutterSpace: 10,
    });
    //$(".group2").colorbox({rel:'group2', transition:"fade"});
});
</script>
<style>
body {
  padding: 0;
  margin: 0;
}

#swarupGallery {
  width: 100%;
  height: auto;
}

#swarupGallery ul {
  width: 100%;
  height: auto;
  padding: 0;
  margin: 0;
  list-style: none;
}

#swarupGallery ul li {
  -webkit-transition: all .2s ease-in;
  -moz-transition: all .2s ease-in;
  -o-transition: all .2s ease-in;
  -ms-transition: all .2s ease-in;
  transition: all .2s ease-in;
}

#swarupGallery ul li:hover {
  opacity: 0.4;
  filter: alpha(opacity=40);
}

#swarupGallery #sscsworld {
width: 100%;
height: auto;
display: block;
margin-left: 7px !important;
}

#swarupGallery .gallary-row {
  width: 100%;
  height: auto;/*position:absolute;*/
}

#swarupGallery #navHolder {
  width: 100%;
  height: 30px;
  line-height: 30px;
  padding: 0;
  margin: 0;
  position: absolute;
}

.spacer {
  width: 100%;
  height: 0px;
  margin: 0;
  padding: 0;
  clear: both;
  display: block;
}

.swa-nav {
  width: auto;
  display: inline-block;
  height: 30px;
  position: absolute;
  cursor: pointer;
  padding: 0 5px;
}
#swarupGallery #navHolder{ display: none !important;}
#next-swa {
  right: 0px;
  top: 0px;
}

#prev-swa {
  left: 0px;
  top: 0px;
}

.kkk { display: none; }
</style>
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <hgroup>
             <?php if ( is_active_sidebar( 'logo' ) ) : ?>
                <div id="sidebar">
                    <?php dynamic_sidebar( 'logo' ); ?>
                </div>
            <?php endif; ?>
        </hgroup>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
            <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->

        <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
        <?php endif; ?>
    </header><!-- #masthead -->
    <div id="main" class="wrapper">
        <header class="entry-header"><h1 class="entry-title"> <?php echo  the_title(); ?></h1></header> <br /><br />
        <div id="swarupGallery">
          <ul>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" width="160" height="160" alt="image 01" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" width="160" height="160" alt="image 02" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/3.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" width="160" height="160" alt="image 03" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/4.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" width="160" height="160" alt="image 04" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/5.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" width="160" height="160" alt="image 05" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/6.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/6.jpg" width="160" height="160" alt="image 06" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/7.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/7.jpg" width="160" height="160" alt="image 07" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/8.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/8.jpg" width="160" height="160" alt="image 08" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/9.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/9.jpg" width="160" height="160" alt="image 09" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/10.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/10.jpg" width="160" height="160" alt="image 10" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/11.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/11.jpg" width="160" height="160" alt="image 11" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/12.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/12.jpg" width="160" height="160" alt="image 12" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/13.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/13.jpg" width="160" height="160" alt="image 13" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/14.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/14.jpg" width="160" height="160" alt="image 14" /></a></li>          
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/15.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/15.jpg" width="160" height="160" alt="image 15" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/16.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/16.jpg" width="160" height="160" alt="image 16" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/17.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/17.jpg" width="160" height="160" alt="image 17" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/18.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/18.jpg" width="160" height="160" alt="image 18" /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/19.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/19.jpg" width="160" height="160" alt="image 19" /></a></li>         
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/20.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/20.jpg" width="160" height="160" alt="image 20"  /></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/images/big/21.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/21.jpg" width="160" height="160" alt="image 21"  /></a></li>
          </div><!-- #main .wrapper -->
    <footer id="colophon" role="contentinfo">
        <div class="site-info">
            <?php do_action( 'twentytwelve_credits' ); ?>
            <b style=" text-align:center;">Website Designed by <a target="_blank" href="http://www.jtgsystems.com">JTG Systems.com</a></b>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>