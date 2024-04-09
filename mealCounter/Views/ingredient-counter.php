<!DOCTYPE html>
<html lang="cs">
<?php Core\View::render('head')?>
<body>
    <?php Core\View::render('header-1')?>
    <main class="main main--general">
        <div class="sub-nav">
            <menu class="sub-nav__menu">
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="meal-counter">Jídlo</a></li>
                <li class="sub-nav__menu-item"><a class="global-button global-button--menu" href="ingredient-counter">Ingredience</a></li>
            </menu>
        </div>
        <section class="my-ingredients">
            
        </section>    
    </main>
    <?php Core\View::render('footer')?>
    <dialog class="modal">
        <div class="modal__content">
            <h1 class="modal__header modal__row">Přidat makronutrient</h1>
            <p class="modal__register-info modal__row">Makronutrienty</p>
            <div class="modal__register-name modal__row">Vláknina</div>
            <div class="modal__buttons modal__row">
                <button class="global-button global-button--primary close-modal" type="button">Přidat</button>
            </div>
        </div>
    </dialog>
    <script src="resources/scripts/ingredientCounter.js"></script>
    <script src="resources/scripts/modal.js"></script>
</body>
</html>