<!DOCTYPE html>
<html lang="cs">
<?php

use App\Utils\Debug;

 Core\View::render('head') ?>

<body>
    <?php
    $localization = App\Utils\Helpers::getLocalization();
    if (Core\Auth::user()) {
        Core\View::render('header-1');
    } else {
        Core\View::render('header-0');
    }
    ?>
    <main class="main main--general">
        <div class="sub-nav">
            <menu class="sub-nav__menu">
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="about-gdpr"><?php echo $localization['about_gdpr'] ?></a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="about-author"><?php echo $localization['about_author'] ?></a></li>
            </menu>
        </div>
            <article class="article">
                <?php echo App\Utils\Helpers::getArticle('about-gdpr'); ?>
            </article>
    </main>
    <?php Core\View::render('footer') ?>
</body>

</html>