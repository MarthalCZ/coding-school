<!DOCTYPE html>
<html lang="cs">
<?php Core\View::render('head')?>
<body>
    <?php Core\View::render('header-1')?>
    <main class="main main--general">
        <section class="my-meals">
            <h1 class="my-meals__header">Moje jídla</h1>
            <div class="my-meals__content">
                <div class="meal-header">
                    <div class="meal-header__row meal-header__column--one">
                        <span class="meal-header__info meal-header__name">Jídlo</span>
                        <span class="meal-header__info meal-header__weight">Hmotnost</span>
                        <span class="meal-header__info meal-header__energy">Energie</span>
                    </div>
                    <div class="meal-header__row meal-header__column--two">
                        <span class="meal-header__info meal-header__macros">Bílkoviny</span>
                        <span class="meal-header__info meal-header__macros">Sacharidy</span>
                        <span class="meal-header__info meal-header__macros">Tuky</span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--three">
                    </div>
                </div>
                <?php
                // Check if meals array is not empty
                if (!empty($meals)) {
                    // Loop through each meal
                    foreach ($meals as $meal) {
                        // Render the meal-item component for each mealt
                        Core\View::render('meal-item', $meal);
                    }
                } else {
                    // If no meals are found
                    echo "No meals found.";
                }
                ?>
                </div>
                <div class="meal-button">
                    <a class="global-button global-button--primary" href="meal-counter">Nové jídlo</a>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
</body>
</html>