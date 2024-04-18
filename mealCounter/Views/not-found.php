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
    <div class="modal">
        <div class="modal__content">
            <h1 class="modal__header modal__row"><?php echo $localization['not_found'] ?></h1>
            <p class="modal__register-info modal__row"><?php echo $localization['not_found_message'] ?></p>
            <div class="modal__register-name modal__row"><?php echo $_SERVER['REQUEST_URI'] ?></div>
            <div class="modal__buttons modal__row">
                <a class="global-button global-button--primary" href="login"><?php echo $localization['back_to_homepage'] ?></a>
            </div>
        </div>
    </div>
    </main>
    <?php Core\View::render('footer')?>
    <script src="resources/scripts/password.js"></script>
    <script src="resources/scripts/warning.js"></script>
</body>
</html>