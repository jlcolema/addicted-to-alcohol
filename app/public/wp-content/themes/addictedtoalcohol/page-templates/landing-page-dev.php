<?php 

/* Template Name: Landing Dev */ 

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
                        <li><i class="fas fa-check"
                                aria-hidden="true"></i><?php the_sub_field('hero_section_2_list_item'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="content-block-v2">
    <div class="container">
        <h4>MASSACHUSETTS' PREMIER</h4>

        <h2>ALCOHOL &amp; DRUG REHAB CENTERS</h2>

        <p class="sub-heading">From Cape Cod to secluded woodland or metropolitan Boston, each of our facilities offer a
            comfortable setting with individualized treatment plans. Based on an initial assessment, our treatment
            specialists can help you choose the best location for you.</p>

        <div class="content-block-wrapper">
            <div class="facility-card">
                <a href="#"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/optimized-bedrock-recovery.jpg" 
                alt="Bedrock Recovery">
                <div class="block-title">Bedrock Recovery</div>
                <div class="block-loc">CANTON, MA</div>
                <div class="block-content">
                <ul>
                    <li><a href="/bedrock/">Medical detox</a></li>
                    <li><a href="/bedrock/">Inpatient/residential treatment</a></li>
                    <li><a href="/bedrock/">Medication-assisted treatment</a></li>
                    <li><a href="/bedrock/">Spacious rooms and bonus amenities</a></li>
                </ul>
                </div>
            </div>
            <div class="facility-card">
                <a href="#"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/optimized-northeast-addictions.jpg"
                    alt="Northeast Addictions">
                <div class="block-title">Northeast Addictions</div>
                <div class="block-loc">QUINCY, MA</div>
                <div class="block-content">
                <ul>
                    <li><a href="https://www.arkbh.com/northeast/">Day treatment program</a></li>
                    <li><a href="https://www.arkbh.com/northeast/">Intensive outpatient program (IOP)</a></li>
                    <li><a href="https://www.arkbh.com/northeast/">Family, group, and individual therapy</a></li>
                    <li><a href="https://www.arkbh.com/northeast/">12-step programming and support</a></li>
                </ul>
                </div>
            </div>
            <div class="facility-card">
                <a href="#"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/optimized-recovering-champions.jpg"
                    alt="Recovering Champions">
                <div class="block-title">Recovering Champions</div>
                <div class="block-loc">FALMOUTH, MA</div>
                <div class="block-content">
                <ul>
                    <li><a href="https://www.arkbh.com/recovering-champions/">Scenic Cape Cod</a></li>
                    <li><a href="https://www.arkbh.com/recovering-champions/">Day treatment/IOP</a></li>
                    <li><a href="https://www.arkbh.com/recovering-champions/">Individual and family counseling</a></li>
                    <li><a href="https://www.arkbh.com/recovering-champions/">Medication-assisted treatment</a></li>
                </ul>
                </div>
            </div>
            <div class="facility-card">
                <a href="#"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/optimized-spring-hill.jpg"
                    alt="Spring Hill">
                <div class="block-title">Spring Hill</div>
                <div class="block-loc">ASHBY, MA</div>
                <div class="block-content">
                <ul>
                    <li><a href="https://www.arkbh.com/spring-hill/">Residential facility on 70 acres of woodland</a></li>
                    <li><a href="https://www.arkbh.com/spring-hill/">Evidence-based therapies</a></li>
                    <li><a href="https://www.arkbh.com/spring-hill/">Whole-patient approach for co-occurring disorders</a></li>
                    <li><a href="https://www.arkbh.com/spring-hill/">Recreation and outdoor therapy</a></li>
                </ul>
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


<section class="inline-cta-landing">
    <div class="container-fluid">
        <div class="cta-flex">

            <div>Speak with a Treatment Specialist Now</div>
            <a class="btn btn-secondary" href="#">(888) 979-7127</a>

        </div>
    </div>
</section>

<?php include_once( 'template-parts/landing-page-form-a.php' ); ?>



<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 m-auto text-center">
                <div class="pre-heading-h2">Hear From Some Of Our</div>
                <h2>PAST CLIENTS</h2>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
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
                        <div class="carousel-item active">
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