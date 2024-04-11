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
        <section class="my-ingredients">
            <h1 class="my-ingredients__header">Moje ingredience</h1>
            <div class="my-ingredients__content">
                <div class="ingredient-header">
                    <div class="ingredient-header__row ingredient-header__column--one">
                        <span class="ingredient-header__info ingredient-header__name">Ingredience</span>
                        <span class="ingredient-header__info ingredient-header__weight">Hmotnost</span>
                        <span class="ingredient-header__info ingredient-header__energy">Energie</span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--two">
                        <span class="ingredient-header__info ingredient-header__macros">Bílkoviny</span>
                        <span class="ingredient-header__info ingredient-header__macros">Sacharidy</span>
                        <span class="ingredient-header__info ingredient-header__macros">Tuky</span>
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
                    <a class="global-button global-button--primary" href="ingredient-counter">Nová ingredience</a>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
</body>
</html>