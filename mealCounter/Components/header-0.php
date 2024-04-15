<?php $localization =App\Utils\Helpers::getLocalization(); ?>
<header class="header--logged-out">
    <a class="logo" href="index">
        <img class="logo__image" src="views/resources/images/logo.png" alt="Logo">
        <h1 class="logo__title" aria-label="title">MealCounter</h1>
    </a>
    <nav class="nav" role="navigation">
    </nav>
    <menu class="switches" aria-label="Menu módu a jazyka">
        <li>
            <form class="account-item__form" id="mode-form" action="/GitHub/coding-school/mealCounter/change-mode"></form>
                <label class="global-switch" for="toggle-mode" aria-label="Přepnout denní / noční mód">
                    <input class="global-switch__input" id="toggle-mode" name="toggle-mode" type="checkbox">
                    <div class="global-switch__slider"></div>
                </label>
            </form>
        </li>
        <li>
            <form class="account-item__form" id="lang-form" action="/GitHub/coding-school/mealCounter/change-language">
                <label class="global-switch" for="toggle-lang" aria-label="Přepnout český / anglický jazyk">
                    <input class="global-switch__input" id="toggle-lang" name="lang" type="checkbox">
                    <div class="global-switch__slider"></div>
                </label>
            </form>
        </li>
    </menu>
</header>