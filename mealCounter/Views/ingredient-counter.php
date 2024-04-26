<!DOCTYPE html>
<html lang="cs">
<?php Core\View::render('head') ?>

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
        <div class="sub-nav">
            <menu class="sub-nav__menu">
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="meal-counter"><?php echo $localization['meal'] ?></a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="ingredient-counter"><?php echo $localization['ingredient'] ?></a></li>
            </menu>
        </div>
        <form class="my-ingredients" action="/GitHub/coding-school/mealCounter/ingredient-counter" method="post">
            <h1 class="my-ingredients__header"><?php echo $localization['new_ingredient'] ?></h1>
            <div class="meal-counter__stats">
                <span class="meal-counter__stats-name">
                    <input class="meal-counter__stats-name-input" id="name" name="name" type="text" placeholder="<?php echo $localization['ingredient_name'] ?>" aria-label="Zadejte název jídla" required>
                </span>
                <span class="meal-counter__stats-weight" id="weight">100</span>
                <span class="meal-counter__stats-spacer"></span>
                <span class="meal-counter__stats-energy">
                    <input class="meal-counter__stats-energy-input" id="energy" name="energy" type="number" min="0" placeholder="<?php echo $localization['energy'] ?>" aria-label="Zadejte energetickou hodnotu">
                </span>
                <span class="meal-counter__stats-ratio" id="ratio">100</span>
                <span class="meal-counter__stats-spacer"></span>
            </div>
            <div class="my-ingredients__content">
                <div class="ingredient-header">
                    <div class="ingredient-header__row ingredient-header__column--one">
                        <span class="ingredient-header__info ingredient-header__name"><?php echo $localization['macro'] ?></span>
                        <span class="ingredient-header__info ingredient-header__weight"><?php echo $localization['weight'] ?></span>
                        <span class="ingredient-header__info ingredient-header__energy"><?php echo $localization['energy'] ?></span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--three">
                        <span class="ingredient-header__info meal-counter-header__ratio"><?php echo $localization['ratio'] ?></span>
                        <span class="ingredient-header__info meal-counter-header__spacer"></span>
                    </div>
                </div>
                <?php
                // Check if ingredients array is not empty
                if (!empty($macros)) {
                    // Loop through each ingredient
                    foreach ($macros as $macro) {
                        // Render the macro-item component for each macro
                        Core\View::render('macro-item', $macro);
                    }
                } else {
                    // If no macros are found
                    echo "No macros found.";
                }
                ?>
                <div class="ingredient-buttons">
                    <button class="global-button global-button--primary open-modal" data-target="add-macro"><?php echo $localization['add_macro'] ?></button>
                    <button class="global-button global-button--primary open-modal" data-target="save-ingredient"><?php echo $localization['save_ingredient'] ?></button>
                </div>
            </div>
        </form>
    </main>
    <?php Core\View::render('footer') ?>
    <dialog class="modal" data-target="add-macro">
        <div class="modal__content">
            <h1 class="modal__header modal__row"><?php echo $localization['add_macro'] ?></h1>
            <p class="modal__register-info modal__row"><?php echo $localization['macro'] ?></p>
            <div class="modal__register-name modal__row"><?php echo $localization['fiber'] ?></div>
            <div class="modal__register-name modal__row"><?php echo $localization['alcohol'] ?></div>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="add-macro"><?php echo $localization['back'] ?></button>
                <button class="global-button global-button--primary close-modal" type="button" data-target="add-macro"><?php echo $localization['add_macro'] ?></button>
            </div>
        </div>
    </dialog>
    <dialog class="modal" data-target="save-ingredient">
        <div class="modal__content">
            <h1 class="modal__header modal__row"><?php echo $localization['save_ingredient'] ?></h1>
            <p class="modal__register-info modal__row"><?php echo $localization['ingredient_name'] ?></p>
            <div class="modal__register-name modal__row" id="name-display">Název ingredience</div>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="save-ingredient"><?php echo $localization['back'] ?></button>
                <button class="global-button global-button--primary close-modal" id="save-ingredient" type="button" data-target="save-ingredient"><?php echo $localization['save_ingredient'] ?></button>
            </div>
        </div>
    </dialog>
    <script src="views/resources/scripts/ingredientCounter.js"></script>
    <script src="views/resources/scripts/modal.js"></script>
</body>

</html>