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
        <section class="my-meals">
            <h1 class="my-meals__header"><?php echo $localization['my_meals'] ?></h1>
            <div class="my-meals__content">
                <div class="meal-header">
                    <div class="meal-header__row meal-header__column--one">
                        <span class="meal-header__info meal-header__name"><?php echo $localization['meal'] ?></span>
                        <span class="meal-header__info meal-header__weight"><?php echo $localization['weight'] ?></span>
                        <span class="meal-header__info meal-header__energy"><?php echo $localization['energy'] ?></span>
                    </div>
                    <div class="meal-header__row meal-header__column--two">
                        <span class="meal-header__info meal-header__macros"><?php echo $localization['protein'] ?></span>
                        <span class="meal-header__info meal-header__macros"><?php echo $localization['carbs'] ?></span>
                        <span class="meal-header__info meal-header__macros"><?php echo $localization['fat'] ?></span>
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
                    <a class="global-button global-button--primary" href="meal-counter"><?php echo $localization['new_meal'] ?></a>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
</body>
</html>