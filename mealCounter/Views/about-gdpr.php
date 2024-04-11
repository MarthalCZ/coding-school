<!DOCTYPE html>
<html lang="cs">
<?php Core\View::render('head')?>
<body>
    <?php 
        if (Core\Auth::user()) {
            Core\View::render('header-1');
        } else {
            Core\View::render('header-0');
        }
    ?>
    <main class="main main--general">
        <div class="sub-nav">
            <menu class="sub-nav__menu">
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="about-gdpr">Ochrana osobních údajů</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="about-author">O autorovi</a></li>
            </menu>
        </div>
        <section class="my-ingredients">
            
        </section>
    </main>
    <?php Core\View::render('footer')?>
</body>
</html>