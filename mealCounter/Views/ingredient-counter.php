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
        <div class="sub-nav">
            <menu class="sub-nav__menu">
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="meal-counter"><?php echo $localization['meal'] ?></a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="ingredient-counter"><?php echo $localization['ingredient'] ?></a></li>
            </menu>
        </div>
        <section class="my-ingredients">
            <h1 class="my-ingredients__header"><?php echo $localization['new_ingredient'] ?></h1>
            <div class="meal-counter__stats">
                <span class="meal-counter__stats-name">
                    <input class="meal-counter__stats-name-input" id="name" name="name" type="text" placeholder="<?php echo $localization['ingredient_name'] ?>" aria-label="Zadejte název jídla">
                </span>
                <span class="meal-counter__stats-weight" id="weight">100</span>
                <span class="meal-counter__stats-spacer"></span>
                <span class="meal-counter__stats-energy">
                    <input class="meal-counter__stats-energy-input" id="energy" name="energy" type="number" min="0" placeholder="<?php echo $localization['energy'] ?>" aria-label="Zadejte energetickou hodnotu">
                </span>
                <span class="meal-counter__stats-ratio" id="ratio">0</span>
                <span class="meal-counter__stats-spacer"></span>
            </div>
            <div class="my-ingredients__content">
                <div class="ingredient-header">
                    <div class="ingredient-header__row ingredient-header__column--one">
                        <span class="ingredient-header__info ingredient-header__name"><?php echo $localization['macro'] ?></span>
                        <span class="ingredient-header__info ingredient-header__weight"><?php echo $localization['weight'] ?></span>
                        <span class="ingredient-header__info ingredient-header__energy"><?php echo $localization['energy'] ?></span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--two">
                        <span class="ingredient-header__info ingredient-header__macros"><?php echo $localization['protein'] ?></span>
                        <span class="ingredient-header__info ingredient-header__macros"><?php echo $localization['carbs'] ?></span>
                        <span class="ingredient-header__info ingredient-header__macros"><?php echo $localization['fat'] ?></span>
                    </div>
                    <div class="ingredient-header__row ingredient-header__column--three">
                        <span class="ingredient-header__info meal-counter-header__ratio"><?php echo $localization['ratio'] ?></span>
                        <span class="ingredient-header__info meal-counter-header__spacer"></span>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name"><?php echo $localization['protein'] ?></span>
                        <span class="ingredient-item__info ingredient-item__weight">0</span>
                        <span class="ingredient-item__info ingredient-item__energy">0</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">0</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">0</span>
                        <span class="ingredient-item__macros ingredient-item__fat">0</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary"><?php echo $localization['remove'] ?></button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name"><?php echo $localization['carbs'] ?></span>
                        <span class="ingredient-item__info ingredient-item__weight">0</span>
                        <span class="ingredient-item__info ingredient-item__energy">0</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">0</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">0</span>
                        <span class="ingredient-item__macros ingredient-item__fat">0</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary"><?php echo $localization['remove'] ?></button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name"><?php echo $localization['fat'] ?></span>
                        <span class="ingredient-item__info ingredient-item__weight">0</span>
                        <span class="ingredient-item__info ingredient-item__energy">0</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">0</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">0</span>
                        <span class="ingredient-item__macros ingredient-item__fat">0</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary"><?php echo $localization['remove'] ?></button>
                    </div>
                </div>
                <div class="ingredient-buttons">
                    <button class="global-button global-button--primary open-modal" data-target="add-macro"><?php echo $localization['add_macro'] ?></button>
                    <button class="global-button global-button--primary open-modal" data-target="save-ingredient"><?php echo $localization['save_ingredient'] ?></button>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
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
            <div class="modal__register-name modal__row">Ovesné vločky</div>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="save-ingredient"><?php echo $localization['back'] ?></button>
                <button class="global-button global-button--primary close-modal" type="button" data-target="save-ingredient"><?php echo $localization['save_ingredient'] ?></button>
            </div>
        </div>
    </dialog>
    <script src="views/resources/scripts/ingredientCounter.js"></script>
    <script src="views/resources/scripts/modal.js"></script>
</body>
</html>