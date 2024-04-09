<!DOCTYPE html>
<html lang="cs">
<?php Core\View::render('head')?>
<body>
    <?php Core\View::render('header-0')?>
    <main class="main main--login">
        <div class="form">
            <h1 class="form__header form__row">Nenalezeno</h1>
            <p class="modal__register-info modal__row">Hledaná stránka neexistuje</p>
            <div class="modal__register-name modal__row"><?php echo "Tady bude URL adresa"?></div>
            <div class="form__buttons form__row">
                <a class="global-button global-button--primary close-modal" href="login" type="button">Zpět na hlavní stránku</a>
            </div>
        </div>
    </main>
    <?php Core\View::render('footer')?>
    <script src="resources/scripts/password.js"></script>
    <script src="resources/scripts/warning.js"></script>
</body>
</html>