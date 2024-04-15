<!DOCTYPE html>
<html lang="cs">
<?php Core\View::render('head')?>
<body>
    <?php
        $localization = App\Utils\Helpers::getLocalization();
        if (Core\Auth::user()) {
            Core\View::render('header-1');
        } else {
            Core\View::render('header-0');
        }
    ?>
    <main class="main main--login">
        <form class="form" action="/GitHub/coding-school/mealCounter/login" method="post">
            <h1 class="form__header form__row">Přihlášení</h1>
            <input class="form__input" id="email" name="email" type="email" placeholder="Email" aria-label="Zadejte emailovou adresu">
            <p class="form__warning" id="email-warning">Zadaný email není správný</p>
            <input class="form__input" id="password" name="password" type="password" placeholder="Heslo" aria-label="Zadejte heslo">
            <p class="form__warning" id="password-warning">Zadané heslo není správné</p>
            <div class="form__buttons form__row">
                <button class="global-button global-button--primary" id="show" type="button">Zobrazit heslo</button>
                <button class="global-button global-button--primary" id="login" type="submit">Přihlásit se</button>
            </div>
            <div class="form__info form__row">
                <p class="form__info__text">Ještě nemáte účet?</p>
                <a class="form__info__link" href="register">Založte si ho zde!</a>
            </div>
        </form>
    </main>
    <?php Core\View::render('footer')?>
    <script src="views/resources/scripts/password.js"></script>
    <script src="views/resources/scripts/warning.js"></script>
</body>
</html>