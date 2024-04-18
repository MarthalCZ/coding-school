<?php $localization = App\Utils\Helpers::getLocalization(); ?>
<dialog class="modal" data-target="display-ingredient-<?php echo $id ?>">
        <div class="modal__content--wide">
            <div class="modal__content-column modal__content-column--one">
                <div class="modal__content-column-header">
                    <h1 class="my-ingredients__header"><?php echo $localization['detail'] ?></h1>
                    <div class="ingredient-button">
                        <button class="global-button global-button--tertiary close-modal" data-target="display-ingredient-<?php echo $id ?>"><?php echo $localization['close'] ?></button>
                    </div>
                </div>
                <div class="ingredient-header">
                    <div class="ingredient-header__row ingredient-header__column--one">
                        <span class="ingredient-header__info ingredient-header__name"><?php echo $localization['ingredient'] ?></span>
                        <span class="ingredient-header__info ingredient-header__weight"><?php echo $localization['weight'] ?></span>
                        <span class="ingredient-header__info ingredient-header__energy"><?php echo $localization['energy'] ?></span>
                    </div>
                </div>
                <div class="ingredient-item">
                    <div class="ingredient-item__row ingredient-item__column--one">
                        <span class="ingredient-item__info ingredient-item__name"><?php echo $name ?></span>
                        <span class="ingredient-item__info ingredient-item__weight"><?php echo $weight ?></span>
                        <span class="ingredient-item__info ingredient-item__energy"><?php echo $energy ?></span>
                    </div>
                </div>
            </div>
            <div class="modal__content-column modal__content-column--two">
                <div class="donut-chart" style="--protein: <?php echo $protein ?>; --carbs: <?php echo $protein; ?>; --fat: <?php echo $protein; ?>;">
                    <div class="donut-chart__segment donut-chart__segment--one"></div>
                    <div class="donut-chart__segment donut-chart__segment--two"></div>
                    <div class="donut-chart__segment donut-chart__segment--three"></div>
                </div>
                <div class="donut-chart__macros">
                    <div class="donut-chart__macros-dot macro-dot--protein"><?php echo $localization['protein'] ?></div>
                    <div class="donut-chart__macros-dot macro-dot--carbs"><?php echo $localization['carbs'] ?></div>
                    <div class="donut-chart__macros-dot macro-dot--fat"><?php echo $localization['fat'] ?></div>
                </div>
            </div>
        </div>
    </dialog>