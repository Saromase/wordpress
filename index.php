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
            <?php bloginfo('description')?>
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
            Make first impression count with a large headline & full-page background.<br> Create is super easy to use, works out-of-the-box and it's great for your personal, business or even <br> organization site.
        </p>
    </div>
    <!-- // Fin du jumbetron-->

    <!-- Barre de séparation-->
    <div class="separation"></div>

    <!-- Début de la section articles-->
    <section id="articles">
        <article>
            <img class="article-img" src="images/img1.jpg" alt="image article">
            <h3 class="article-titre">Catch flames pro</h3>
            <div class="article-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis, urna non accumsan pellentesque, lacus justo consequat risus, nec fermentum sem nulla ac sapien. Maecenas pharetra urna et elit sodales, vitae vestibulum massa porta. Donec id elit neque.
                    Sed fringilla justo ut metus sodales bibendum. Quisque aliquet tristique est sed dapibus. Ut sed sagittis tellus, sed sagittis turpis. Cras pharetra imperdiet nisl id vulputate. Aliquam non purus eget felis vulputate auctor quis
                    nec ante. Cras laoreet nibh id lorem pellentesque sollicitudin. Nunc nunc magna, fringilla a eleifend et, sodales nec leo. Nulla eu turpis ut ipsum condimentum imperdiet sit amet sit amet turpis. Sed posuere volutpat justo vitae
                    ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam elementum egestas ornare. Sed suscipit magna. [...]</p>
            </div>
        </article>

        <article>
            <img class="article-img" src="images/img2.jpg" alt="image article">
            <h3 class="article-titre">Adventurous pro</h3>
            <div class="article-content">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis, urna non accumsan pellentesque, lacus justo consequat risus, nec fermentum sem nulla ac sapien. Maecenas pharetra urna et elit sodales, vitae vestibulum massa porta.
                    Donec id elit neque. Sed fringilla justo ut metus sodales bibendum. Quisque aliquet tristique est sed dapibus. Ut sed sagittis tellus, sed sagittis turpis. Cras pharetra imperdiet nisl id vulputate. Aliquam non purus eget felis
                    vulputate auctor quis nec ante. Cras laoreet nibh id lorem pellentesque sollicitudin. Nunc nunc magna, fringilla a eleifend et, sodales nec leo. Nulla eu turpis ut ipsum condimentum imperdiet sit amet sit amet turpis. Sed posuere
                    volutpat justo vitae ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam elementum egestas ornare. Sed suscipit magna. [...]</p>
            </div>
        </article>


        <article>
            <img class="article-img" src="images/img3.jpg" alt="image article">
            <h3 class="article-titre">Catch kathmandu pro</h3>
            <div class="article-content">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis, urna non accumsan pellentesque, lacus justo consequat risus, nec fermentum sem nulla ac sapien. Maecenas pharetra urna et elit sodales, vitae vestibulum massa porta.
                    Donec id elit neque. Sed fringilla justo ut metus sodales bibendum. Quisque aliquet tristique est sed dapibus. Ut sed sagittis tellus, sed sagittis turpis. Cras pharetra imperdiet nisl id vulputate. Aliquam non purus eget felis
                    vulputate auctor quis nec ante. Cras laoreet nibh id lorem pellentesque sollicitudin. Nunc nunc magna, fringilla a eleifend et, sodales nec leo. Nulla eu turpis ut ipsum condimentum imperdiet sit amet sit amet turpis. Sed posuere
                    volutpat justo vitae ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam elementum egestas ornare. Sed suscipit magna. [...]</p>
            </div>
        </article>
    </section>
    <!-- // Fin de la section articles-->
</div>
<!-- // fermeture du container -->
</body>

</html>