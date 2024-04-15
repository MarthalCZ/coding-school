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
    <main class="main main--general">
        <section class="my-account">
            <h1 class="my-account__header"><?php echo $localization['my_account'] ?></h1>
            <div class="my-account__content">
                <div class="account-header">
                    <div class="account-header__row account-header__column--one">
                        <span class="account-header__info account-header__name"><?php echo $localization['information'] ?></span>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['registration_date'] ?></span>
                        <span class="account-item__info account-item__value">
                            <?php echo $account['registered']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['email'] ?></span>
                        <span class="account-item__info account-item__value">
                            <?php echo $account['email']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <button class="global-button global-button--primary open-modal" data-target="change-email"><?php echo $localization['update'] ?></button>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['password'] ?></span>
                        <span class="account-item__info account-item__value global-password">
                            <?php echo "••••••••"; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <button class="global-button global-button--primary open-modal" data-target="change-password"><?php echo $localization['update'] ?></button>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['newsletter'] ?></span>
                        <span class="account-item__info account-item__value">
                            <?php echo $account['subscribed'] ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <form action="/GitHub/coding-school/mealCounter/my-account/change-subscription" method="post">
                            <input class="account-item__input" id="toggle-subscription" name="toggle-subscription" type="hidden" value="toggle">
                            <button class="global-button global-button--tertiary" type="submit"><?php echo $sub_button; ?></button>
                        </form>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['units'] ?></span>
                        <span class="account-item__info account-item__value">
                            <?php echo $account['units'] ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <form class="account-item__form" id="units-form" action="/GitHub/coding-school/mealCounter/my-account/change-units" method="post">
                            <label class="global-switch" for="toggle-units" aria-label="Přepnout jednotky kCal / kJ">
                                <input class="global-switch__input" id="toggle-units" name="toggle-units" type="checkbox" <?php echo $units_button; ?>>
                                <div class="global-switch__slider"></div>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['meal_count'] ?></span>
                        <span class="account-item__info account-item__value">
                            <?php echo $account['meals']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <a class="global-button global-button--secondary" href="my-meals"><?php echo $localization['display'] ?></a>
                    </div>
                </div>
                <div class="account-item">
                    <div class="account-item__row account-item__column--one">
                        <span class="account-item__info account-item__name"><?php echo $localization['ingredient_count'] ?></span>
                        <span class="account-item__info account-item__value">
                            <?php echo $account['ingredients']; ?>
                        </span>
                    </div>
                    <div class="account-item__row account-item__column--two">
                        <a class="global-button global-button--secondary" href="my-ingredients"><?php echo $localization['display'] ?></a>
                    </div>
                </div>
                    <div class="account-button">
                        <button class="global-button global-button--tertiary open-modal" data-target="delete-account"><?php echo $localization['delete_account'] ?></button>
                    </div>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
    <dialog class="modal" data-target="change-email">
        <form class="modal__content" action="/GitHub/coding-school/mealCounter/my-account/change-email" method="post">
            <h1 class="modal__header modal__row"><?php echo $localization['update_email'] ?></h1>
            <input class="form__input" id="new-email" name="new-email" type="email" placeholder="<?php echo $localization['new_email'] ?>" aria-label="Zadejte nový email" required>
            <p class="form__warning" id="email-warning">Email musí obsahovat @ symbol</p>
            <input class="form__input" id="repeat-email" name="repeat-email" type="email" placeholder="<?php echo $localization['repeat_email'] ?>" aria-label="Zadejte nový email znovu" required>
            <p class="form__warning" id="email-warning">Emaily se neshodují</p>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="change-email"><?php echo $localization['back'] ?></button>
                <button class="global-button global-button--primary" id="change-email" type="submit" data-target="change-email"><?php echo $localization['save'] ?></button>
            </div>
        </form>
    </dialog>
    <dialog class="modal" data-target="change-password">
        <form class="modal__content" action="/GitHub/coding-school/mealCounter/my-account/change-password" method="post">
            <h1 class="modal__header modal__row"><?php echo $localization['update_password'] ?></h1>
            <input class="form__input" id="new-password" name="new-password" type="password" placeholder="<?php echo $localization['new_password'] ?>" aria-label="Zadejte nové heslo" required>
            <p class="form__warning" id="password-warning">Heslo musí obsahovat nejméně 8 znaků</p>
            <input class="form__input" id="repeat-password" name="repeat-password" type="password" placeholder="<?php echo $localization['repeat_password'] ?>" aria-label="Zadejte nové heslo znovu" required>
            <p class="form__warning" id="repeat-warning">Hesla se neshodují</p>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="change-password"><?php echo $localization['back'] ?></button>
                <button class="global-button global-button--primary" id="change-password" type="submit" data-target="change-password"><?php echo $localization['save'] ?></button>
            </div>
        </form>
    </dialog>
    <dialog class="modal" data-target="delete-account">
        <form class="modal__content" action="/GitHub/coding-school/mealCounter/my-account/delete-account" method="post">
            <h1 class="modal__header modal__row"><?php echo $localization['delete_account'] ?></h1>
            <p class="modal__register-info modal__row"><?php echo $localization['delete_account_message'] ?></p>
            <div class="modal__register-name modal__row"><?php echo $account['email']; ?></div>
            <input class="form__input" id="password" name="password" type="password" placeholder="<?php echo $localization['password'] ?>" aria-label="Zadejte heslo" required>
            <p class="form__warning" id="password-warning">Heslo není správné</p>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="delete-account"><?php echo $localization['back'] ?></button>
                <button class="global-button global-button--primary" id="delete-account" type="submit" data-target="delete-account"><?php echo $localization['delete'] ?></button>
            </div>
        </form>
    </dialog>
    <script src="views/resources/scripts/warning.js"></script>
    <script src="views/resources/scripts/modal.js"></script>
    <script src="views/resources/scripts/units.js"></script>
</body>
</html>