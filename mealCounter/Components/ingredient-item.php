<?php $localization = App\Utils\Helpers::getLocalization(); ?>
<div class="ingredient-item">
    <div class="ingredient-item__row ingredient-item__column--one">
        <span class="ingredient-item__info ingredient-item__name"><?php echo $name; ?></span>
        <span class="ingredient-item__info ingredient-item__weight"><?php echo $weight; ?></span>
        <span class="ingredient-item__info ingredient-item__energy"><?php echo $energy; ?></span>
    </div>
    <div class="ingredient-item__row ingredient-item__column--two">
        <span class="ingredient-item__macros ingredient-item__protein"><?php echo $protein; ?></span>
        <span class="ingredient-item__macros ingredient-item__carbs"><?php echo $carbs; ?></span>
        <span class="ingredient-item__macros ingredient-item__fat"><?php echo $fat; ?></span>
    </div>
    <div class="ingredient-item__row ingredient-item__column--three">
        <form action="">
            <button class="global-button global-button--secondary" type="submit"><?php echo $localization['display'] ?></button>
        </form>
        <form action="/GitHub/coding-school/mealCounter/my-ingredients/delete-ingredient" method="post">
            <input name="delete" type="hidden" value="<?php echo $id; ?>">
            <button class="global-button global-button--tertiary" type="submit"><?php echo $localization['remove'] ?></button>
        </form>
    </div>
</div>