<?php
/**
 * Created by PhpStorm.
 * User: Seite Romain
 * Date: 07/06/17
 * Time: 09:24
 */ ?>
<?php get_header(); ?>


<div class="container">
    <header>
        <!-- Début du menu-->
        <nav class="menu">
            <ul class="navbar">
                <a href="#" class="nav-links-current">Home</a>
                <a href="#" class="nav-links">About the tests</a>
                <a href="#" class="nav-links">Buy themes</a>
                <a href="#" class="nav-links">Page layouts</a>
                <a href="#" class="nav-links">Contact us</a>
            </ul>
        </nav>
        <!-- // Fin du menu-->

        <!-- Titres header-->
        <h1 class="titre-header"><?php bloginfo('name'); ?></h1>
        <h2 class="soustitre-header">
            <?php bloginfo('description') ?>
        </h2>
    </header>
    <!-- // Fin du header-->

    <!-- Début de la barre des réseaux sociaux-->
    <div class="social-bar">
        <div class="icones-bar">
            <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus-square"></i></a>
            <a href="https://fr.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
            <a href="https://youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a>
        </div>
    </div>
    <!-- // Fin de la barre des réseaux sociaux-->

    <!-- Début du jumbetron-->
    <div class="jumbetron">
        <p class="headline">
            Make first impression count with a large headline & full-page background.<br> Create is super easy to use,
            works out-of-the-box and it's great for your personal, business or even <br> organization site.
        </p>
    </div>
    <!-- // Fin du jumbetron-->

    <!-- Barre de séparation-->
    <div class="separation"></div>
    <div id="content">
        <?php if (have_posts()){
            while (have_posts()){
                the_post();
                the_title();
                the_content();
            }
        }

        ?>
    </div>

</div>
<!-- // fermeture du container -->
</body>

</html>