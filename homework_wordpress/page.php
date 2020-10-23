<?php
/*
 * The template for displaying all pages
 */

get_header();
$sp_obj = New SpClass();

while ( have_posts() ) : the_post(); ?>
					
					        <section id="main" class="main" style="background: #373737 url(<?php the_field('main_background');?>) center no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-5">
                        <div class="main-img wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <img src="<?php the_field('main_box');?>" alt="Box">
                        </div>
                    </div>
                    <!-- /.col-5 -->
                    <div class="col-12 col-lg-7 col-xl-7 align-self-start">
                        <div class="main-text">
                            <h1 class="main-text__title"><?php the_field('main_title');?></h1>
                            <p class="main-text__subtitle"><?php the_field('main_subtitle');?></p>
                            <div class="main-text__form">
                                <h3 class="main-text__form_title"><?php the_field('main_block_text');?></h3>
                                <p class="main-text__form_subtitle"><?php the_field('main_block_text_footer');?></p>
                                <form id="telephone">
                                    <input name="user_phone" class="telephone_input" type="tel" placeholder="Введите номер телефона" size="21" required>
                                    <button type="submit" class="telephone_submit"><?php the_field('main_button_text');?></button>
                                    <span><?php the_field('main_form_text_span');?></span>
                                </form>
                            </div>
                        </div>
                        <!-- /.main-text -->

                    </div>
                    <!-- /.col-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <section id="advantages">
            <div class="wrap">
                <div class="advantages-titles wow fadeInDown" data-wow-delay="0.2s">
					
						<?php
			$advantages_box_1 = get_field('advantages_box_1');	
			if( $advantages_box_1 ): ?>
							
					                    <div class="advantages-titles__box">
                        <h1><?php echo $advantages_box_1['advantages_title_1']; ?></h1>
                        <p сlass="advantages-titles__box_text"><?php echo $advantages_box_1['advantages_subtitle_1']; ?></p>
                    </div>

					<?php endif; ?>

	<?php
			$advantages_box_2 = get_field('advantages_box_2');	
			if( $advantages_box_2 ): ?>

                    <div class="advantages-titles__box">
                        <h1><span class="text"><?php echo $advantages_box_2['advantages_title_2']; ?></span></h1>
                        <p сlass="advantages-titles__box_text"><?php echo $advantages_box_2['advantages_subtitle_2']; ?></p>
                    </div>
			<?php endif; ?>
					
						<?php
			$advantages_box_3 = get_field('advantages_box_3');	
			if( $advantages_box_3 ): ?>
                    <div class="advantages-titles__box">
                        <h1><?php echo $advantages_box_3['advantages_title_3']; ?></h1>
                        <p сlass="advantages-titles__box_text"><?php echo $advantages_box_3['advantages_subtitle_3']; ?></p>
                    </div>
			<?php endif; ?>
                </div>
                <!-- /.advantages-titles -->

                <div class="advantages-blocks ">

                    <div class="advantages-blocks__block wow fadeInDown" data-wow-delay="0.2s">
						
						<?php
			$Advantages_block_1 = get_field('Advantages_block_1');	
			if( $Advantages_block_1 ): ?>
                        <div class="advantages-blocks__block-img">
                            <img src="<?php echo $Advantages_block_1['advantages_block_img_1']; ?>" alt="factory">
                        </div>
                        <div class="advantages-blocks__block-info">
                            <h3><?php echo $Advantages_block_1['advantages_block_title_1']; ?></h3>
                            <p><?php echo $Advantages_block_1['advantages_block_text_1']; ?></p>
                        </div>
									<?php endif; ?>
                    </div>
                    <!-- /.advantages-blocks__block -->

                    <div class="advantages-blocks__block wow fadeInDown" data-wow-delay="0.4s">

			<?php
			$Advantages_block_2 = get_field('Advantages_block_2');	
			if( $Advantages_block_2 ): ?>
                        <div class="advantages-blocks__block-img">
                            <img src="<?php echo $Advantages_block_2['advantages_block_img_2']; ?>" alt="samples">
                        </div>
                        <div class="advantages-blocks__block-info">
                            <h3><?php echo $Advantages_block_2['advantages_block_title_2']; ?></h3>
                            <p><?php echo $Advantages_block_2['advantages_block_text_2']; ?></p>
                        </div>
							<?php endif; ?>
                    </div>
                    <!-- /.advantages-blocks__block -->

                    <div class="advantages-blocks__block wow fadeInDown" data-wow-delay="0.6s">

									<?php
			$Advantages_block_3 = get_field('Advantages_block_3');	
			if( $Advantages_block_3 ): ?>
                        <div class="advantages-blocks__block-img">
                            <img src="<?php echo $Advantages_block_3['advantages_block_img_3']; ?>" alt="factory">
                        </div>
                        <div class="advantages-blocks__block-info">
                            <h3><?php echo $Advantages_block_3['advantages_block_title_3']; ?></h3>
                            <p><?php echo $Advantages_block_3['advantages_block_text_3']; ?></p>
                        </div>
						<?php endif; ?>
                    </div>
                    <!-- /.advantages-blocks__block -->

                    <div class="advantages-blocks__block wow fadeInDown" data-wow-delay="0.8s">
				<?php
			$Advantages_block_4 = get_field('Advantages_block_4');	
			if( $Advantages_block_4 ): ?>
                        <div class="advantages-blocks__block-img">
                            <img src="<?php echo $Advantages_block_4['advantages_block_img_4']; ?>" alt="factory">
                        </div>

                        <div class="advantages-blocks__block-info">
                            <h3><?php echo $Advantages_block_4['advantages_block_title_4']; ?></h3>
                            <p><?php echo $Advantages_block_4['advantages_block_text_4']; ?></p>
                        </div>
						<?php endif; ?>
                    </div>
                    <!-- /.advantages-blocks__block -->

                    <div class="advantages-blocks__block wow fadeInDown" data-wow-delay="1s">
				<?php
			$Advantages_block_5 = get_field('Advantages_block_5');	
			if( $Advantages_block_5 ): ?>
                        <div class="advantages-blocks__block-img">
                            <img src="<?php echo $Advantages_block_5['advantages_block_img_5']; ?>" alt="factory">
                        </div>
                        <div class="advantages-blocks__block-info">
                            <h3><?php echo $Advantages_block_5['advantages_block_title_5']; ?></h3>
                            <p><?php echo $Advantages_block_5['advantages_block_text_5']; ?></p>
                        </div>
						<?php endif; ?>
                    </div>
                    <!-- /.advantages-blocks__block -->

                    <div class="advantages-blocks__block wow fadeInDown" data-wow-delay="1.2s">
						
										<?php
			$Advantages_block_6 = get_field('Advantages_block_6');	
			if( $Advantages_block_6 ): ?>
                        <div class="advantages-blocks__block-img">
                            <img src="<?php echo $Advantages_block_6['advantages_block_img_6']; ?>" alt="factory">
                        </div>
                        <div class="advantages-blocks__block-info">
                            <h3><?php echo $Advantages_block_6['advantages_block_title_6']; ?></h3>
                            <p><?php echo $Advantages_block_6['advantages_block_text_6']; ?></p>
                        </div>
						<?php endif; ?>
                    </div>
                    <!-- /.advantages-blocks__block -->

                </div>
                <!-- /.advantages-blocks -->
            </div>
        </section>
        <section id="production">
            <div class="container">
                <h1 class="production_title"><?php the_field('production_title'); ?></h1>
                <div class="row justify-content-center align-items-center">	
					<div class="col-12 col-lg-6">
			<?php
			$production_box_1 = get_field('production_box_1');	
			if( $production_box_1 ): ?>
                        <div class="production_block">
                            <div class="production_img">
                                <img class="img_full" src="<?php echo $production_box_1['production_img']; ?>" alt="cardboard">
                                <img class="img_mobile" src="<?php echo $production_box_1['production_img_mobile']; ?>" alt="cardboard_mobile">
                            </div>
                            <h4 class="production_text"><?php echo $production_box_1['production_box_title']; ?></h4>
                            <div class="production_button_block">
                                <button class="button-o"><?php echo $production_box_1['production_box_button-1']; ?></button>
                                <button class="production-button"><?php echo $production_box_1['production_box_button-2']; ?></button>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-6">
									<?php
			$production_box_2 = get_field('production_box_2');	
			if( $production_box_2 ): ?>
                        <div class="production_block">
                            <div class="production_img">
                                <img class="img_full" src="<?php echo $production_box_2['production_img']; ?>" alt="cardboard">
                                <img class="img_mobile" src="<?php echo $production_box_2['production_img_mobile']; ?>" alt="cardboard_mobile">
                            </div>
                            <h4 class="production_text"><?php echo $production_box_2['production_box_title']; ?></h4>
                            <div class="production_button_block">
                                <button class="button-o"><?php echo $production_box_2['production_box_button-1']; ?></button>
                                <button class="production-button"><?php echo $production_box_2['production_box_button-2']; ?></button>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-6">
									<?php
			$production_box_3 = get_field('production_box_3');	
			if( $production_box_3 ): ?>
                        <div class="production_block">
                            <div class="production_img">
                                <img class="img_full" src="<?php echo $production_box_3['production_img']; ?>" alt="cardboard">
                                <img class="img_mobile" src="<?php echo $production_box_3['production_img_mobile']; ?>" alt="cardboard_mobile">
                            </div>
                            <h4 class="production_text"><?php echo $production_box_3['production_box_title']; ?></h4>
                            <div class="production_button_block">
                                <button class="button-o"><?php echo $production_box_3['production_box_button-1']; ?></button>
                                <button class="production-button"><?php echo $production_box_3['production_box_button-2']; ?></button>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-6">
									<?php
			$production_box_4 = get_field('production_box_4');	
			if( $production_box_4 ): ?>
                        <div class="production_block">
                            <div class="production_img">
                                <img class="img_full" src="<?php echo $production_box_4['production_img']; ?>" alt="cardboard">
                                <img class="img_mobile" src="<?php echo $production_box_4['production_img_mobile']; ?>" alt="cardboard_mobile">
                            </div>
                            <h4 class="production_text"><?php echo $production_box_4['production_box_title']; ?></h4>
                            <div class="production_button_block">
                                <button class="button-o"><?php echo $production_box_4['production_box_button-1']; ?></button>
                                <button class="production-button"><?php echo $production_box_4['production_box_button-2']; ?></button>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <section id="offer" style="background: #373737 url(<?php the_field('offer_background_img');?>) no-repeat center top -200px;">
            <div class="container">
                <div class="offer_flex_wrap">
                    <div class="offer_title">
                        <p class="offer_title_text">
                            <?php the_field('offer_title');?> <span class="offer_title_text_span"><?php the_field('offer_subtitle');?></span>
                        </p>
                        <p class="offer_subtitle"><?php the_field('offer_form_title');?></p>
                    </div>
                    <div class="offer_form">
                        <form id="offer_phone">
                            <input type="tel" class="offer_form_tel" name="user_phone" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" form="offer_phone" required> <br>
                            <button type="submit" class="offer_form_submit" form="offer_phone"><?php the_field('offer_button_text');?></button>
                            <span><?php the_field('offer_form_footer');?></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="factory">
            <div class="container">
                <div class="factory_wrap">
                    <div class="row">
                        <div class="col-lg-7 order-lg-first col-12">
                            <div class="factory-slider-top">
                                <img src="<?php the_field('slider_image_1');?>" alt="1">
                                <img src="<?php the_field('slider_image_2');?>" alt="2">
                                <img src="<?php the_field('slider_image_3');?>" alt="3">
                                <img src="<?php the_field('slider_image_4');?>" alt="4">
                                <img src="<?php the_field('slider_image_5');?>" alt="5">
                                <img src="<?php the_field('slider_image_6');?>" alt="6">
                                <img src="<?php the_field('slider_image_7');?>" alt="7">
                            </div>

                            <!-- /.factory-slider-top -->

                            <div class="factory-slider-bottom">
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_1');?>" alt="1">
                                </div>
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_2');?>" alt="2">
                                </div>
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_3');?>" alt="3">
                                </div>
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_4');?>" alt="4">
                                </div>
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_5');?>" alt="5">
                                </div>
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_6');?>" alt="6">
                                </div>
                                <div class="factory-slider-bottom_img">
                                    <img src="<?php the_field('slider_image_7');?>" alt="7">
                                </div>
                            </div>
							
                            <!-- /.factory-slider-bottom -->
                        </div>
                        <!-- /.col-7 -->
                        <div class="col-lg-5 order-first col-12">
                            <h3 class="factory_wrap_title"><?php the_field('Factory_title');?></h3>
                            <p class="factory_wrap_text"><?php the_field('factory_text_1');?></p>
                            <p class="factory_wrap_text"><?php the_field('factory_text_2');?></p>
                            <p class="factory_wrap_text"><?php the_field('factory_text_3');?></p>
                        </div>
                        <!-- /.col-5 -->
                    </div>
                </div>
                <!-- /.factory_wrap -->
            </div>
        </section>
        <section id="partners">
            <div class="container">
                <div class="partners_wrap">
                    <div class="row justify-content-center">
                        <h2 class="partners__title"><?php the_field('partners_title');?></h2>
                    </div>
														<?php
			$partners_image = get_field('partners_image');	
			if( $partners_image ): ?>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_1']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_2']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_3']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img img-padding-25" src="<?php echo $partners_image['partners_image_4']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                    </div>
                    <!-- /.row -->
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_5']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img img-padding-30" src="<?php echo $partners_image['partners_image_6']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_7']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img img-padding-45" src="<?php echo $partners_image['partners_image_8']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                    </div>
                    <!-- /.row -->
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_9']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img img-padding-45" src="<?php echo $partners_image['partners_image_10']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_11']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="partners-box">
                                <img class="partners-box_img" src="<?php echo $partners_image['partners_image_12']; ?>" alt="partners">
                            </div>
                        </div>
                        <!-- /.col-3 -->
                    </div>
                    <!-- /.row -->
					<?php endif; ?>
                </div>
            </div>
        </section>
        <section id="review">
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="review__title"><?php the_field('review_title');?></h2>
                    <div class="review__slider">
                        <div class="review_slider_data">
                            <img src="<?php the_field('review_slider_image_1');?>" alt="1">
                        </div>
                        <div class="review_slider_data">
                            <img src="<?php the_field('review_slider_image_2');?>" alt="2">
                        </div>
                        <div class="review_slider_data">
                            <img src="<?php the_field('review_slider_image_3');?>" alt="3">
                        </div>
                        <div class="review_slider_data">
                            <img src="<?php the_field('review_slider_image_1');?>" alt="1">
                        </div>
                        <div class="review_slider_data">
                            <img src="<?php the_field('review_slider_image_2');?>" alt="2">
                        </div>
                        <div class="review_slider_data">
                            <img src="<?php the_field('review_slider_image_3');?>" alt="3">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="map">
            <div class="map__wrap">
                <div class="map__block-mobile">
                    <div class="map__block_title">
                        <h2 class="header_title_mobile"><?php the_field('contacts_title_mobile');?></h2>
																				<?php
			$contacts_adress_mobile = get_field('contacts_adress_mobile');	
			if( $contacts_adress_mobile ): ?>
                        <h3 class="header_text"><?php echo $contacts_adress_mobile['office_adress_title']; ?></h3>
                        <p class="adress_text"><?php echo $contacts_adress_mobile['office_adress']; ?></p>
                        <h3 class="header_text"><?php echo $contacts_adress_mobile['storage_adress_title']; ?></h3>
                        <p class="adress_text"><?php echo $contacts_adress_mobile['storage_adress']; ?></p>
						<?php endif; ?>
                    </div>

                    <div class="map__block_phone">
				<?php
			$phone_numbers_mobile = get_field('phone_numbers_mobile');	
			if( $phone_numbers_mobile ): ?>
                        <h3 class="header_text"><?php echo $phone_numbers_mobile['phone_numbers_title']; ?></h3>
                        <a href="tel:+8(347)271-54-28" class="adress_text"><?php echo $phone_numbers_mobile['phone_number_1']; ?></a>
                        <a href="tel:+8(937)363-30-00" class="adress_text"><?php echo $phone_numbers_mobile['phone_number_2']; ?></a>

                        <button class="header-button__button map_button"><?php echo $phone_numbers_mobile['contact_button_text']; ?></button>
						<?php endif; ?>
                    </div>

                    <div class="map__block_mail">
			<?php
			$email_adress_mobile = get_field('email_adress_mobile');	
			if( $email_adress_mobile ): ?>
                        <h3 class="header_text"><?php echo $email_adress_mobile['email_title']; ?></h3>
                        <a href="mailto:urals.karton@gmail.com" class="adress_text"><?php echo $email_adress_mobile['email_adress']; ?></a>
						<?php endif; ?>
                    </div>

                </div>
                <div class="map__script">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Accb98133f48d7794372b33832e256f3f3213a183a175a9d800f6439266022898&amp;width=100%&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
                <div class="map__block">
                    <div class="map__block_title">
																										<?php
			$contacts_adress_full = get_field('contacts_adress_full');	
			if( $contacts_adress_full ): ?>
                        <h3 class="header_text"><?php echo $contacts_adress_full['office_adress_title']; ?></h3>
                        <p class="adress_text"><?php echo $contacts_adress_full['office_adress']; ?></p>
                        <h3 class="header_text"><?php echo $contacts_adress_full['storage_adress_title']; ?></h3>
                        <p class="adress_text"><?php echo $contacts_adress_full['storage_adress']; ?></p>
						<?php endif; ?>
                    </div>

                    <div class="map__block_phone">
																																<?php
			$phone_numbers_full = get_field('phone_numbers_full');	
			if( $phone_numbers_full ): ?>
                        <h3 class="header_text">Тел. отдела продаж:</h3>
                        <a href="tel:+8(347)271-54-28" class="adress_text"><?php echo $phone_numbers_full['phone_number_1']; ?></a>
                        <a href="tel:+8(937)363-30-00" class="adress_text"><?php echo $phone_numbers_full['phone_number_2']; ?></a>


                        <button class="header-button__button map_button"><?php echo $phone_numbers_mobile['contact_button_text']; ?></button>
						<?php endif; ?>
                    </div>

                    <div class="map__block_mail">
																																<?php
			$email_adress_full = get_field('email_adress_full');	
			if( $email_adress_full ): ?>
                        <h3 class="header_text"><?php echo $email_adress_full['email_title']; ?></h3>
                        <a href="mailto:urals.karton@gmail.com" class="adress_text"><?php echo $email_adress_full['email_adress']; ?></a>
						<?php endif; ?>
                    </div>

                </div>
            </div>
        </section>
<?php endwhile; 

get_footer();