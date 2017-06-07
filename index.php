<?php
/**
 * Created by PhpStorm.
 * User: Seite Romain
 * Date: 07/06/17
 * Time: 09:24
 */ ?>
<?php get_header(); ?>
<div class="wrapper">
    <div class="header">
        <h1><?php bloginfo('name'); ?></h1>
        <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
        <p><?php bloginfo('description') ?></p>
        <p></p>
    </div>

</div>
<div class="content">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_posts();
        }
    }
    ?>
</div>
</body>
</html>
