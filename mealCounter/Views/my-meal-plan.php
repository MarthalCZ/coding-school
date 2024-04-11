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
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-monday">Pondělí</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-tuesday">Úterý</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-wednesday">Středa</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-thursday">Čtvrtek</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-friday">Pátek</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-saturday">Sobota</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="my-meal-plan-sunday">Neděle</a></li>
            </menu>
        </div>
        <section class="my-ingredients">
            <div class="donut-chart" style="--protein: 35; --carbs: 54; --fat: 11;">
                <div class="donut-chart__segment donut-chart__segment--one"></div>
                <div class="donut-chart__segment donut-chart__segment--two"></div>
                <div class="donut-chart__segment donut-chart__segment--three"></div>
            </div>
        </section>
    </main>
    <?php Core\View::render('footer')?>
</body>
</html>