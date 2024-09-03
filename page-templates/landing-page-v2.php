<?php 

/* Template Name: Landing v2 */ 

include_once( 'template-parts/landing-page-header.php' );?>

<section class="hero-sec-v2 hero-layout-three">
    <div class="section-a1">
        <div class="background" style="
        background-image: url(/wp-content/themes/rehab-facility/assets/images/hero-l.jpg);">
            <div class="opacity"></div>

            <div class="text m-auto text-center text-white">
			<?php 
			$hero_section_1_heading 	= get_field('hero_section_1_heading');
			$hero_section_1_content 	= get_field('hero_section_1_content');
			$hero_section_2_heading 	= get_field('hero_section_2_heading');
			$hero_section_2_sub_heading = get_field('hero_section_2_sub_heading');					
			?>

			<h1 class="text-white"><?php echo $hero_section_1_heading; ?></h1>
			<p class="text-white"><?php echo $hero_section_1_content; ?></p>

			<a class="btn btn-secondary btn-lg" href="tel:18889797127">
				<i class="fas fa-phone"></i> (888) 979-7127</a>
				</a>

			<?php if( have_rows('hero_section_2_list') ): ?>
			<div class="other-content">
                <h1 class="text-white"><?php echo $hero_section_2_heading; ?></h1>
                <h2 class="text-white"><?php echo $hero_section_2_sub_heading; ?></h2>
				<ul>
			<?php while ( have_rows('hero_section_2_list') ) : the_row(); ?>
			<li><i class="fas fa-check" aria-hidden="true"></i><?php the_sub_field('hero_section_2_list_item'); ?></li>
			<?php endwhile; ?>
				</ul>
			</div>		
			<?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php 
$section_a_heading = get_field('section_a_heading');
$section_a_content = get_field('section_a_content');
if($section_a_heading): ?>
<section class="center-heading-content horizontal">
    <div class="section-a2 remove-top-padding remove-bottom-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-12 align-self-center text-center">
                    <h2 class="mb-5 mb-lg-0">
                        <br />
                        <span class="font-weight-bold"><?php the_field('section_a_heading'); ?></span>
                    </h2>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <p style="text-align: center">
					<?php the_field('section_a_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="inline-cta cta-padding ">
    <div class="container-fluid">
        <div class="cta-flex">
            <div>Speak with a Treatment Specialist Now</div>
            <a class="btn btn-secondary" href="#"> (888) 979-7127</a>

        </div>
    </div>
</section>

<section class="content-layout-slider">
    <div class="section-d2 d2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="box">
                        <div class="title">
                            <h2>How We Can Help</h2>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Provide a full continuum of care for lasting recovery</li>
                                <li>Build a community of support and promote family involvement</li>
                                <li>Offer varying levels of care with an individualized approach</li>
                                <li>Treat the underlying causes of addiction for better mental health</li>
                            </ul>
                            <p><img loading="lazy" class="alignnone size-full wp-image-14409"
                                    src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/joint-commission-150x150-1-1.png"
                                    alt="" width="150" height="150"></p>
                        </div>
                        <div class="button-wrapper two">
                            <a class="btn" target="" href="#"> CALL TODAY FOR MORE INFO<i
                                    class="fas fa-caret-right ml-6" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="box-slider">
                        <div id="gallery-top1"
                            class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" id="swiper-wrapper-ca3cbc2e95ba54b3" aria-live="polite"
                                style="transform: translate3d(-3680px, 0px, 0px); transition: all 0ms ease 0s;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="1" role="group" aria-label="1 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.36-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                    role="group" aria-label="2 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.23-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    role="group" aria-label="3 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-x9qqJBK-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                    role="group" aria-label="4 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-WNkXxvH-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                    data-swiper-slide-index="5" role="group" aria-label="5 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-JnVnqNk-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group"
                                    aria-label="6 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.42.03-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group"
                                    aria-label="7 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.36-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="8 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.23-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="9 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-x9qqJBK-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="10 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-WNkXxvH-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5"
                                    role="group" aria-label="11 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-JnVnqNk-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="0" role="group" aria-label="12 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.42.03-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="1" role="group" aria-label="13 / 16"
                                    style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.36-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                    role="group" aria-label="14 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.23-PM-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    role="group" aria-label="15 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-x9qqJBK-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                    role="group" aria-label="16 / 16" style="width: 726px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-WNkXxvH-2722x1728-1-725x485.jpg"
                                        alt="" width="100%">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div id="snext1" class="swiper-button-next swiper-button-white" tabindex="0" role="button"
                                aria-label="Next slide" aria-controls="swiper-wrapper-ca3cbc2e95ba54b3"><i
                                    class="fas fa-chevron-right" aria-hidden="true"></i>
                            </div>
                            <div id="sprev1" class="swiper-button-prev swiper-button-white" tabindex="0" role="button"
                                aria-label="Previous slide" aria-controls="swiper-wrapper-ca3cbc2e95ba54b3"><i
                                    class="fas fa-chevron-left" aria-hidden="true"></i>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div id="gallery-thumbs1"
                            class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                            <div class="swiper-wrapper" id="swiper-wrapper-b717fb9a9d6f1048e" aria-live="polite"
                                style="transform: translate3d(-920px, 0px, 0px); transition: all 0ms ease 0s;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="1" role="group" aria-label="1 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.36-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                    role="group" aria-label="2 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.23-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    role="group" aria-label="3 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-x9qqJBK-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                    role="group" aria-label="4 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-WNkXxvH-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                    data-swiper-slide-index="5" role="group" aria-label="5 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-JnVnqNk-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                    data-swiper-slide-index="0" role="group" aria-label="6 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.42.03-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                    data-swiper-slide-index="1" role="group" aria-label="7 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.36-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" data-swiper-slide-index="2" role="group"
                                    aria-label="8 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.23-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" data-swiper-slide-index="3" role="group"
                                    aria-label="9 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-x9qqJBK-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="10 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-WNkXxvH-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5"
                                    role="group" aria-label="11 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-JnVnqNk-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-thumb-active"
                                    data-swiper-slide-index="0" role="group" aria-label="12 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.42.03-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="1" role="group" aria-label="13 / 16"
                                    style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.36-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                    role="group" aria-label="14 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/Screen-Shot-2020-10-26-at-12.41.23-PM-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    role="group" aria-label="15 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-x9qqJBK-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                    role="group" aria-label="16 / 16" style="width: 174px; margin-right: 10px;">
                                    <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2022/01/i-WNkXxvH-2722x1728-1-175x115.jpg"
                                        alt="" width="100%">
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    <div class="button-wrapper on text-center pt-5">
                        <a class="btn" target="" href="#"> CALL TODAY FOR MORE INFO<i class="fas fa-caret-right ml-6"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="center-heading-content horizontal">
    <div class="section-a2 remove-top-padding ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-12 align-self-center text-center">
                    <h2 class="mb-5 mb-lg-0"> <br>
                        <span class="font-weight-bold">Start your recovery today</span>
                    </h2>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <p style="text-align: center;">Our phone number is available 24/7 to help you or your loved one find
                        a treatment provider. It only takes one call to start your new life in recovery.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="inline-cta ">
    <div class="container-fluid">
        <div class="cta-flex">

            <div>Speak with a Treatment Specialist Now</div>
            <a class="btn btn-secondary" href="#">(888) 979-7127</a>

        </div>
    </div>
</section>


<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 m-auto text-center">
                <div class="pre-heading-h2">Hear From Some Of Our</div>
                <h2>PAST CLIENTS</h2>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png"
                                srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png 2x"
                                alt="">
                            <p>“When I got there I didn't love myself, but when I left I did. They loved me back to
                                life. Not everyday was a good day, but it was better than getting high. I am so much
                                happier today than I ever was before thanks to all the staff. The program is tough but
                                very rewarding.”</p>
                            <div class="author"><strong>— Bridget Hayden</strong> Recovering Champions</div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png"
                                srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png 2x"
                                alt="">
                            <p>““I came to RCI twice this year. I left the first time because I DIDN'T let the process
                                play out. When I came back in July 2020, I totally let the process play out and I cannot
                                say enough about how much it worked. Be prepared to have the best-HARDEST change happen
                                to you in your life, but the work is so WORTH IT.”</p>
                            <div class="author"><strong>— Laura Harlan</strong> Recovering Champions</div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png"
                                srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png 2x"
                                alt="">
                            <p>“I was at Recovering Champions summer of 2020 for over seven weeks. I have been to
                                several other programs in the past and Recovering Champions is the first one that
                                convinced me to work the steps”</p>
                            <div class="author"><strong>— Jourdan Stein</strong> Recovering Champions</div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png"
                                srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/themes/rehab-facility/assets/images/5-star-review-1.png 2x"
                                alt="">
                            <p>“The staff is very helpful and attentive to all of the patients. I have come a long way
                                from where I was when I first arrived and I would not have been able to do it without
                                the help of my clinician, case manager, and the general staff. I would recommend this
                                place for anyone in need.”</p>
                            <div class="author"><strong>— Shamu Abuse</strong> Recovering Champions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once( 'template-parts/landing-page-footer.php' ); ?>