<!DOCTYPE html>
<html lang="cs">
<?php

use App\Utils\Debug;

 Core\View::render('head') ?>
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
        <section class="my-ingredients">
            <h1 class="my-ingredients__header"><?php echo $localization['my_ingredients'] ?></h1>
            <div class="my-ingredients__content">
                <div class="ingredient-header">
                    <div class="ingredient-header__row ingredient-header__column--one">
                        <span class="ingredient-header__info ingredient-header__name"><?php echo $localization['ingredient'] ?></span>
                        <span class="ingredient-header__info ingredient-header__weight"><?php echo $localization['weight'] ?></span>
                        <span class="ingredient-header__info ingredient-header__energy"><?php echo $localization['energy'] ?></span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--two">
                        <span class="ingredient-header__info ingredient-header__macros"><?php echo $localization['protein'] ?></span>
                        <span class="ingredient-header__info ingredient-header__macros"><?php echo $localization['carbs'] ?></span>
                        <span class="ingredient-header__info ingredient-header__macros"><?php echo $localization['fat'] ?></span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--three">
                    </div>
                </div>
                <?php
                // Check if ingredients array is not empty
                if (!empty($ingredients)) {
                    // Loop through each ingredient
                    foreach ($ingredients as $ingredient) {
                        // Render the ingredient-item component for each ingredient
                        Core\View::render('ingredient-item', $ingredient);
                    }
                } else {
                    // If no ingredients are found
                    echo "No ingredients found.";
                }
                ?>
                <div class="ingredient-button">
                    <a class="global-button global-button--primary" href="ingredient-counter"><?php echo $localization['new_ingredient'] ?></a>
                </div>
            </div>
        </section>
    </main>
    <?php Core\View::render('footer') ?>
    <?php
                // Check if ingredients array is not empty
                if (!empty($ingredients)) {
                    // Loop through each ingredient
                    foreach ($ingredients as $ingredient) {
                        // Render the ingredient-item component for each ingredient
                        Core\View::render('ingredient-modal', $ingredient);
                    }
                }
                ?>
    <script src="views/resources/scripts/modal.js"></script>
</body>
</html>