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
        <div class="sub-nav">
            <menu class="sub-nav__menu">
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="meal-counter">Jídlo</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="ingredient-counter">Ingredience</a></li>
            </menu>
        </div>
        <section class="my-ingredients">
            <h1 class="my-ingredients__header">Nové jídlo</h1>
            <div class="meal-counter__stats">
                <span class="meal-counter__stats-name">
                    <input class="meal-counter__stats-name-input" id="name" name="name" type="text" placeholder="Název jídla" aria-label="Zadejte název jídla">
                </span>
                <span class="meal-counter__stats-weight" id="weight">0</span>
                <span class="meal-counter__stats-spacer"></span>
                <span class="meal-counter__stats-energy">
                    <input class="meal-counter__stats-energy-input" id="energy" name="energy" type="number" min="0" placeholder="Energie" aria-label="Zadejte energetickou hodnotu">
                </span>
                <span class="meal-counter__stats-ratio" id="ratio">0</span>
                <span class="meal-counter__stats-spacer"></span>
            </div>
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
                        <span class="ingredient-header__info meal-counter-header__ratio">Podíl</span>
                        <span class="ingredient-header__info meal-counter-header__spacer"></span>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Banán</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">98</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">1</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">23</span>
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
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Borůvky</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">64</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">1</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">15</span>
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
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Datle</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">282</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">2</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">68</span>
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
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Kokosové chipsy</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">703</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">7</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">24</span>
                        <span class="ingredient-item__macros ingredient-item__fat">65</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Ořechy vlašské</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">702</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">15</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">14</span>
                        <span class="ingredient-item__macros ingredient-item__fat">65</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Ovesné vločky</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">314</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">15</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">52</span>
                        <span class="ingredient-item__macros ingredient-item__fat">5</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Protein</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">412</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">82</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">4</span>
                        <span class="ingredient-item__macros ingredient-item__fat">8</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name">Rozinky</span>
                        <span class="ingredient-item__info ingredient-item__weight">100</span>
                        <span class="ingredient-item__info ingredient-item__energy">321</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--two">
                        <span class="ingredient-item__macros ingredient-item__protein">3</span>
                        <span class="ingredient-item__macros ingredient-item__carbs">76</span>
                        <span class="ingredient-item__macros ingredient-item__fat">5</span>
                    </div>
                    <div class="ingredient-item__row ingredient-item__column--three">
                        <div class="ingredient-item__ratio-container">
                            <input class="ingredient-item__ratio" name="ratio" type="number" min="0" max="100" placeholder="0 %" aria-label="Zadejte podíl ingredience">
                            <div class="global-spin">
                                <button class="global-spin__button global-spin__button--up" role="button" aria-label="Zvýšit podíl ingredience"></button>
                                <button class="global-spin__button global-spin__button--down" role="button" aria-label="Snížit podíl ingredience"></button>
                            </div>
                        </div>
                        <button class="global-button global-button--tertiary">Odstranit</button>
                    </div>
                </div>
                <div class="ingredient-buttons">
                    <button class="global-button global-button--primary open-modal" data-target="add-ingredient">Přidat ingredienci</button>
                    <button class="global-button global-button--primary open-modal" data-target="save-meal">Uložit jídlo</button>
                </div>
            </div>
        </section>    
    </main>
    <?php Core\View::render('footer')?>
    <dialog class="modal" data-target="add-ingredient">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Přidat ingredienci</h1>
            <p class="modal__register-info modal__row">Ingredience</p>
            <div class="modal__register-name modal__row">Rozinky</div>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="add-ingredient">Přidat</button>
            </div>
        </div>
    </dialog>
    <dialog class="modal" data-target="save-meal">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Uložit jídlo</h1>
            <p class="modal__register-info modal__row">Ingredience</p>
            <div class="modal__register-name modal__row">Rozinky</div>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button" data-target="save-meal">Přidat</button>
            </div>
        </div>
    </dialog>
    <script src="views/resources/scripts/mealCounter.js"></script>
    <script src="views/resources/scripts/modal.js"></script>
</body>
</html>