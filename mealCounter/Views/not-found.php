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
        <div class="form">
            <h1 class="form__header form__row"><?php echo $localization['not_found'] ?></h1>
            <p class="modal__register-info modal__row"><?php echo $localization['not_found_message'] ?></p>
            <div class="modal__register-name modal__row"><?php echo $_SERVER['REQUEST_URI'] ?></div>
            <div class="form__buttons form__row">
                <a class="global-button global-button--primary close-modal" href="login" type="button"><?php echo $localization['back_to_homepage'] ?></a>
            </div>
        </div>
    </main>
    <?php Core\View::render('footer')?>
    <script src="resources/scripts/password.js"></script>
    <script src="resources/scripts/warning.js"></script>
</body>
</html>