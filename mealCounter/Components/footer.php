<?php $localization = App\Utils\Helpers::getLocalization(); ?>
<footer class="footer--general">
        <div class="social">
            <h2 class="social__header"><?php echo $localization['social_media'] ?></h2>
            <div class="social__content">
                <a class="social__link" href="https://www.facebook.com" target="_blank"><img class="global-image" src="views/resources/images/logo-facebook.svg" alt="Logo Facebooku"></a>
                <a class="social__link" href="https://www.twitter.com" target="_blank"><img class="global-image" src="views/resources/images/logo-twitter.svg" alt="Logo Twitteru"></a>
                <a class="social__link" href="https://www.instagram.com" target="_blank"><img class="global-image" src="views/resources/images/logo-instagram.svg" alt="Logo Instagramu"></a>
                <a class="social__link" href="https://www.pinterest.com" target="_blank"><img class="global-image" src="views/resources/images/logo-pinterest.svg" alt="Logo Pinterestu"></a>
                <a class="social__link" href="https://www.youtube.com" target="_blank"><img class="global-image" src="views/resources/images/logo-youtube.svg" alt="Logo YouTube"></a>
            </div>
        </div>
        <div class="about">
            <h2 class="about__header"><?php echo $localization['information'] ?></h2>
            <div class="about__content">
                <a href="about-gdpr" class="about__link"><?php echo $localization['about_gdpr'] ?></a>
                <a href="about-author" class="about__link"><?php echo $localization['copyright'] ?></a>
            </div>
        </div>
        <div class="subscribe">
            <h2 class="subscribe__header"><?php echo $localization['newsletter'] ?></h2>
            <form class="subscribe__content" action="">
                <input class="subscribe__input" id="subscribe" name="subscribe" type="email" placeholder="Email" aria-label="Vyplntě emailovou adresu pro odběr novinek">
                <button class="global-button global-button--secondary" type="submit"><?php echo $localization['subscribe'] ?></button>
            </form>
        </div>
    </footer>