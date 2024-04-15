<?php $localization =App\Utils\Helpers::getLocalization(); ?>
<header class="header--logged-in">
    <a class="logo" href="index">
        <img class="logo__image" src="views/resources/images/logo.png" alt="Logo">
        <h1 class="logo__title" aria-label="title">MealCounter</h1>
    </a>
    <nav class="nav" role="navigation">
        <menu class="nav__main-menu" aria-label="Hlavní menu">
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="my-meal-plan"><?php echo $localization['my_diet'] ?></a></li>
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="my-meals"><?php echo $localization['my_meals'] ?></a></li>
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="my-ingredients"><?php echo $localization['my_ingredients'] ?></a></li>
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="meal-counter"><?php echo $localization['meal_counter'] ?></a></li>
        </menu>
        <menu class="nav__account-menu" aria-label="Menu účtu">
            <li class="nav__account-menu-item"><a class="global-button global-button--menu" href="my-account"><?php echo $localization['my_account'] ?></a></li>
            <li class="nav__account-menu-item"><a class="global-button global-button--menu" href="logout"><?php echo $localization['logout'] ?></a>
            </li>
        </menu>
    </nav>
    <menu class="switches" aria-label="Menu módu a jazyka">
        <li>
            <form class="account-item__form" id="mode-form" action="/GitHub/coding-school/mealCounter/change-mode" method="post">
                <label class="global-switch" for="toggle-mode" aria-label="Přepnout denní / noční mód">
                    <input class="global-switch__input" id="toggle-mode" name="toggle-mode" type="checkbox" <?php echo $mode_button = ($_SESSION['account']['mode'] == 0) ? "" : "checked"; ?>>
                    <div class="global-switch__slider"></div>
                </label>
            </form>
        </li>
        <li>
            <form class="account-item__form" id="lang-form" action="/GitHub/coding-school/mealCounter/change-language" method="post">
                <label class="global-switch" for="toggle-lang" aria-label="Přepnout český / anglický jazyk">
                    <input class="global-switch__input" id="toggle-lang" name="toggle-lang" type="checkbox" <?php echo $lang_button = ($_SESSION['account']['language'] == 0) ? "" : "checked"; ?>>
                    <div class="global-switch__slider"></div>
                </label>
            </form>
        </li>
    </menu>
</header>
<script src="views/resources/scripts/switch.js"></script>