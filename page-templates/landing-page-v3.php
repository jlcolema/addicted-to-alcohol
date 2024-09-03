<?php 

/* Template Name: Landing v3 */ 

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

<section class="multi-columns multi-bg-blue three-columns">
    <div class="container">
        <h2>THREE SIMPLE STEPS</h2>
        <div class="multi-col-wrapper">
            <div>
                <p><strong>1. Insurance Verification</strong><br>
                    Call us to verify your PPO insurance coverage for our programs. Most PPO plans cover the majority of
                    treatment costs, others may require an out-of-pocket fee.</p>
            </div>
            <div>
                <p><strong>2. Personal Consultation</strong><br>
                    We know that people are different. Our team consults with you to build a treatment plan that is
                    tailored to your specific addiction and personal requirements.</p>
            </div>
            <div>
                <p><strong>3. Choose Your Program</strong><br>
                    We offer programs to reach clients at any stage of their recovery process. In addition, we provide
                    ongoing individual and family therapy, outreach and aftercare, as needed.</p>
            </div>
        </div>
    </div>
</section>

<div class="text-section who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>WHO WE ARE</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Recovering Champions is a comprehensive drug &amp; alcohol treatment program in Massachusetts
                    specializing in substance abuse and co-occurring disorders. To give our clients the best chance of
                    recovery, we offer a structured yet personalized approach that fosters life-changing experiences of
                    hope and freedom.</p>
                <p>We support each of our clients through a warm, encouraging, and vibrant safe space on beautiful Cape
                    Cod, which helps each member of our community to develop lasting relationships, define long-term
                    goals, and achieve ongoing success.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h4>Experienced Staff</h4>
                <p>Our compassionate team of licensed alcohol and drug counselors, board-certified psychiatrists, and
                    case managers work around the clock to give you the best chance at success. We’re personable,
                    qualified, and committed to supporting your recovery goals.</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="video-container">
                    <iframe width="480" height="270" src="https://www.youtube.com/embed/QQyxACUcVRU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="why-choose">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 m-auto text-center text-black pb-5">
                <div class="pre-heading-h2">Why Choose</div>
                <h2>RECOVERING CHAMPIONS?</h2>
                <p>Each client recovers from addictive behaviors differently. That’s why we customize our treatment
                    plans for our clients’ individual needs.</p>
            </div>
        </div>
        <div class="row text-center text-black">
            <div class="col-12 col-md-6 col-lg-4">
                <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/clinical-round-1-200x200.png"
                    srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/clinical-round-1.png 2x"
                    alt="">
                <h3>Family Counseling</h3>
                <p>No matter the level of care needed, we ensure each client receives supervised treatment from licensed
                    clinical experts.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/community-round-200x200.png"
                    srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/community-round.png 2x"
                    alt="">
                <h3>Welcoming Community</h3>
                <p>Our clients build lasting friendships and lifelong recovery behaviors through our Recovering
                    Champions family.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/footsteps-round-200x200.png"
                    srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/footsteps-round.png 2x"
                    alt="">
                <h3>Personalized Recovery Plans</h3>
                <p>Every client receives an assessment and a personalized treatment plan from a licensed clinical
                    professional.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/medication-round-200x200.png"
                    srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/medication-round.png 2x"
                    alt="">
                <h3>Psychopharmacology</h3>
                <p>Onsite psychiatric support alongside counseling and behavioral therapies, specifically designed for
                    co-occurring disorders.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/plans-round-200x200.png"
                    srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/plans-round.png 2x"
                    alt="">
                <h3>12-Step Recovery</h3>
                <p>Our personalized treatment plans are supported by the proven and successful 12 Steps to Recovery
                    model.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/continuity-round-200x200.png"
                    srcset="https://wordpress-451580-2313043.cloudwaysapps.com/wp-content/uploads/2021/12/continuity-round.png 2x"
                    alt="">
                <h3>Continuity of Care</h3>
                <p>Clients seamlessly transition between levels of care, ensuring they are accompanied by trusted team
                    members at all times.</p>
            </div>
        </div>
    </div>
</div>


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