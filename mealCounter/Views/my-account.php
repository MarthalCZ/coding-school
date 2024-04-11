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
        <section class="my-account">
            <h1 class="my-account__header">Můj účet</h1>
            <div class="my-account__content">
                <div class="account-header">
                    <div class="account-header__row account-header__column--one">
                        <span class="account-header__info account-header__name">Informace</span>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Datum registrace</span>
                        <span class="account-item__info account-item__value">
                            <?php echo $user['registered']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Email</span>
                        <span class="account-item__info account-item__value">
                            <?php echo $user['email']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <button class="global-button global-button--primary open-modal" data-target="change-email">Změnit</button>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Heslo</span>
                        <span class="account-item__info account-item__value global-password">
                            <?php echo "••••••••"; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <button class="global-button global-button--primary open-modal" data-target="change-password">Změnit</button>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Odběr novinek</span>
                        <span class="account-item__info account-item__value">
                            <?php echo $user['subscribed'] ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <button class="global-button global-button--tertiary">Odhlásit</button>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Jednotky</span>
                        <span class="account-item__info account-item__value">
                            <?php echo $user['units'] ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <label class="global-switch" for="unit" aria-label="Přepnout jednotky kCal / kJ">
                            <input class="global-switch__input" id="unit" name="unit" type="checkbox">
                            <div class="global-switch__slider"></div>
                        </label>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Počet vlastních jídel</span>
                        <span class="account-item__info account-item__value">
                            <?php echo $user['meals']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <a class="global-button global-button--secondary" href="my-meals">Zobrazit</a>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name">Počet vlastních ingrediencí</span>
                        <span class="account-item__info account-item__value">
                            <?php echo $user['ingredients']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <a class="global-button global-button--secondary" href="my-ingredients">Zobrazit</a>
                    </div>
                </div>
                    <div class="account-button">
                        <button class="global-button global-button--tertiary">Smazat účet</button>
                    </div>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
    <dialog class="modal" data-target="change-email">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Změnit email</h1>
            <input class="form__input" id="email" name="email" type="email" placeholder="Nový email" aria-label="Zadejte novou emailovou adresu">
            <p class="form__warning" id="email-warning">Email musí obsahovat @ symbol</p>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" id="show" type="button" data-target="change-email">Zpět</button>
                <button class="global-button global-button--primary close-modal" id="login" type="submit" data-target="change-email">Uložit</button>
            </div>
        </div>
    </dialog>
    <dialog class="modal" data-target="change-password">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Změnit heslo</h1>
            <input class="form__input"  id="password" name="password" type="password" placeholder="Nové heslo" aria-label="Zadejte nové heslo">
            <p class="form__warning" id="password-warning">Heslo musí obsahovat nejméně 8 znaků</p>
            <input class="form__input"  id="repeat" name="repeat" type="password" placeholder="Nové heslo znovu" aria-label="Zadejte nové heslo znovu">
            <p class="form__warning" id="repeat-warning">Hesla se neshodují</p>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" id="show" type="button" data-target="change-password">Zpět</button>
                <button class="global-button global-button--primary close-modal" id="login" type="submit" data-target="change-password">Uložit</button>
            </div>
        </div>
    </dialog>
    <script src="views/resources/scripts/warning.js"></script>
    <script src="views/resources/scripts/modal.js"></script>
</body>
</html>