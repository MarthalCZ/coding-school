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
    <main class="main main--login">
        <form class="form" action="/GitHub/coding-school/mealCounter/register" method="post">
            <h1 class="form__header form__row">Registrace</h1>
            <input class="form__input" id="email" name="email" type="email" placeholder="Email" aria-label="Zadejte emailovou adresu">
            <p class="form__warning" id="email-warning">Email musí obsahovat @ symbol</p>
            <input class="form__input"  id="password" name="password" type="password" placeholder="Heslo" aria-label="Zadejte heslo">
            <p class="form__warning" id="password-warning">Heslo musí obsahovat nejméně 8 znaků</p>
            <div class="form__buttons form__row">
                <button class="global-button global-button--primary" id="show" type="button">Zobrazit heslo</button>
                <button class="global-button global-button--primary " id="register" type="submit" data-target="register-success">Zaregistrovat se</button>
            </div>
            <div class="form__info form__row">
                <p class="form__info__text">Již máte účet?</p>
                <a class="form__info__link" href="login">Přihlaste se zde!</a>
            </div>
        </form>
    </main>
    <?php Core\View::render('footer')?>
    <dialog class="modal" data-target="register-success">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Registrace úspěšná</h1>
            <p class="modal__register-info modal__row">Účet vytvořen</p>
            <div class="modal__register-name modal__row">martasek.pospisil@seznam.cz</div>
            <div class="modal__buttons modal__row">
                <a class="global-button global-button--primary" href="login" >Zpět na přihlášení</a>
            </div>
        </div>
    </dialog>
    <dialog class="modal" data-target="register-failed">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Registrace neúspěšná</h1>
            <p class="modal__register-info modal__row">Účet již existuje</p>
            <div class="modal__register-name modal__row">martasek.pospisil@seznam.cz</div>
            <div class="modal__buttons modal__row">
                <a class="global-button global-button--primary" href="register">Zpět na registraci</a>
            </div>
        </div>
    </dialog>
    <script src="views/resources/scripts/password.js"></script>
    <script src="views/resources/scripts/warning.js"></script>
    <script src="views/resources/scripts/modal.js"></script>
</body>
</html>
