<?php
/*
 * header.php
 *
 * Le template Header
 *
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?>class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?>class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?>class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|',true,'right');?> <?php bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!--    Favicon + apple touch icon   -->
<?php
$favicon = IMAGES. '/icons/favicon.ico';
$touchicon = IMAGES. '/icons/apple-touch-icon-precomposed.png';
?>

<?php wp_head(); ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<nav class="navbar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                Ice Breaker
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

