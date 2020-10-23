<?php
/**
 * The template for displaying the footer
 */

wp_footer(); ?>
<footer class="footer">
    <h3 class="footer__text"><?php the_field('footer_block'); ?></h3>
</footer>
<!--модальное окно-->

<div class="modal_window__main">
    <div class="modal_window__main_title">
        <a class="main_title_modal_close" href="#">
            <span></span>
        </a>
        <h2 class="modal__main_title">Форма обратной связи</h2>
    </div>
    <div class="modal__main-text">
        <div class="modal__main-text__form">
            <h3 class="modal__main-text__form_title">Получите индивидуальное предложение <br><span>на производство и поставку изделий</span></h3>
            <form id="telephone_modal" method="post" action="smart.php">
                <label class="telephone_form_label" for="telephone_modal">Введите номер телефона:</label>
                <input id="telephone_modal" class="telephone_input modal-input" name="user_phone" type="tel" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" form="telephone_modal" size="21" required>
                <button type="submit" class="telephone_submit modal-submit" form="telephone_modal">Оставить заявку!</button>
                <span class="telephone_modal_span">*Минимальный заказ 499шт</span>
            </form>
        </div>
    </div>
</div>
<!-- конец модального окна-->

<!--модальное окно при отправке формы-->
<div class="modal_window_thanks">
    <h3 class="modal_window_thanks_text">Спасибо Вам за заявку!</h3>
    <div class="modal_window_thanks__close"></div>
</div>
<!-- конец модального окна при отправке формы-->


<!-- библиотека wow для работы с анимацией -->
<script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
<script>
    new WOW().init();

</script>
<!-- jquery для работы со слайдером -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.3.1.min.js"></script>
<!-- подключение slick-cлайдера -->
<script src="<?php echo get_template_directory_uri();?>/slick/slick.min.js"></script>
<!--    скрипт slick-слайдера-->
<script>
    $('.factory-slider-top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.factory-slider-bottom',
        responsive: [{
            breakpoint: 780,
            settings: {
                arrows: true
            }
        }, ]
    });
    $('.factory-slider-bottom').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.factory-slider-top',
        dots: false,
        centerMode: false,
        focusOnSelect: true
    });

    $('.review__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev-big"></button>',
        nextArrow: '<button type="button" class="slick-next-big"></button>',
        responsive: [{
                breakpoint: 780,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button type="button" class="slick-prev"></button>',
                    nextArrow: '<button type="button" class="slick-next"></button>'
                }
            }
        ]
    });

</script>

<!--  скрипт для бургер меню  -->

<script>
    $('.burger-menu').on('click', function(e) {
        e.preventDefault;
        $(this).toggleClass('burger-menu_active');
        $('.header__burger').toggleClass('header__burger_active');
        $('.page-content').toggleClass('page-content_active');
        $('.burger-menu_span').toggleClass('burger-menu_span_active');
    });

    $('.burger_data_anchor').click(function(close) {
        close.preventDefault;
        $('.burger-menu').removeClass('burger-menu_active');
        $('.header__burger').removeClass('header__burger_active');
        $('.page-content').removeClass('page-content_active');
        $('.burger-menu_span').removeClass('burger-menu_span_active');
    });

</script>

<!--  cкрипт для модального окна  -->
<script>
    $('.header-button__button').click(function(openModal) {
        $('.popup-overlay').toggleClass('popup-overlay_active');
        $('.modal_window__main').toggleClass('modal_window__main_active');
    });
    $('.main_title_modal_close').click(function(closeModal) {
        closeModal.preventDefault;
        $('.popup-overlay').removeClass('popup-overlay_active');
        $('.modal_window__main').removeClass('modal_window__main_active');
    });
    $('.modal-submit').click(function(closeModal) {
        closeModal.preventDefault;
        $('.popup-overlay').removeClass('popup-overlay_active');
        $('.modal_window__main').removeClass('modal_window__main_active');
    })

</script>

<!--  cкрипт для модального окна при отправке формы  -->

<script>
    $(document).ready(function() {
        //E-mail Ajax Send
        $("form").submit(function() { //Change
            var th = $(this);
            $.ajax({
                type: "POST",
                url: "<?php echo get_template_directory_uri();?>/smart.php", //Change
                data: th.serialize()
            }).done(function() {
                $('.modal_window_thanks').toggleClass('modal_window_thanks-active');
                $('.popup-overlay').toggleClass('popup-overlay_blur');
                setTimeout(function() {
                    // Done Functions
                    th.trigger("reset");
                }, 1000);
            });
            return false;
        });
    });

    $('.modal_window_thanks__close').click(function(closeModalThanks) {
        $('.popup-overlay').removeClass('popup-overlay_blur');
        $('.modal_window_thanks').removeClass('modal_window_thanks-active');

    });

</script>

<!--  скрипт для масок  -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.maskedinput.js"></script>
<script>
    jQuery(function($) {
        $(".telephone_input").mask("+7(999) 999-9999");
        $(".offer_form_tel").mask("+7(999) 999-9999");
    })

</script>

</body>

</html>
