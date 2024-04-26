<?php $localization = App\Utils\Helpers::getLocalization(); ?>
<div class="ingredient-item">
    <div class="ingredient-item__row ingredient-item__column--one">
        <span class="ingredient-item__info ingredient-item__name"><?php echo $name; ?></span>
        <span class="ingredient-item__info ingredient-item__weight">0</span>
        <span class="ingredient-item__info ingredient-item__energy">0</span>
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