<?php
  get_header();
 ?>
    <main>
        <section class="sec_1">
            
            <div class="sec_1_wrapper container">
                <figure id="fade_in">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/black_ink_shadow_transparent_logo.png" alt="">
                </figure>
            </div>
            <div class="services" id="fade_in_services">
                <div id="carouselExampleSlidesOnly" class="carousel carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <p>ROOF CLEANING</p>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <p>ROOF SEALING</p>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <p>ENVIRONMENTALLY FRIENDLY</p>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <p>GUTTER CLEANING</p>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <p>2-YEAR LEAK WARRANTY</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec_2">
            <div class="form_wrapper container">
                <?php echo do_shortcode("[ninja_form id='2']"); ?>
            </div>
            

        </section>

        <section class="sec_3">
            <div class="video_wrapper container">
                <h2>ROOF RESTORATION VIDEO</h2>
                <p>Learn about our proven process to clean and seal roofs in this short informational video with our restoration specialist Casey:</p>
            </div>

        </section>

        <section class="sec_4">
            <div class="par_wrapper">
                <div class="par_content1">
                    <div class="container">
                        <div class="text_wrap">
                            <h3>ECO-FRIENDLY ROOF CLEANING</h3>
                            <p>Our roof cleaning process uses a biodegradable, non-toxic, and environmentally-friendly detergent that effectively breaks down dirt, stains, moss, and algae while being safe for landscaping. The solution is evenly sprayed onto the roof to penetrate and loosen buildup without harsh scrubbing, and on hot days, we wet the roof beforehand to enhance performance and protect the surface. Once the detergent has worked, we thoroughly rinse the roof, removing all debris and leaving it clean and refreshed.</p>
                        </div>
                        <div class="img_wrap">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detergent.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="par_content2">
                    <div class="container">
                        <div class="img_wrap">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brush.png" alt="">
                            </figure>
                        </div>
                        <div class="text_wrap">
                            <h3>SOFT-BRISTLED BRUSHING</h3>
                            <p>Our roof specialists use a specialized roof brush to remove stubborn moss and tough stains that cannot be fully addressed by detergent alone. The brush is designed to be gentle on roofing materials while effectively scrubbing away buildup and restoring the roof’s surface. This step ensures that visible growth and discoloration are thoroughly eliminated, leaving the roof looking clean and well-maintained.</p>
                        </div>
                    </div>
                </div>
                <div class="par_content3">
                    <div class="container">
                        <div class="text_wrap">
                            <h3>ROOF SEALING</h3>
                            <p>Our roof restoration and protection process involves applying a clear roof sealant to shingles using either a sprayer or a roller, ensuring even and complete coverage. The sealant creates a durable water barrier that protects the roof from moisture infiltration, helping to prevent damage and leaks. Additionally, it retards the growth of moss, algae, and other plants, keeping the roof cleaner for longer periods. This protective layer significantly extends the life of the roof by safeguarding it from the elements and reducing the need for frequent maintenance.</p>
                        </div>
                        <div class="img_wrap">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sealant.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="par_content4">
                    <div class="container">
                        <div class="img_wrap">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gutter-cleaning.png" alt="">
                            </figure>
                        </div>
                        <div class="text_wrap">
                            <h3>GUTTER CLEANING</h3>
                            <p>Our gutter cleaning service ensures your gutters are free of leaves, debris, and blockages, allowing water to flow properly and preventing damage to your home. We carefully remove all buildup by hand or with specialized tools, ensuring no mess is left behind on your property. Clean gutters protect your roof, siding, and foundation from water damage, reducing the risk of costly repairs and maintaining the integrity of your home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_5">
            <div class="services_detail">
                <div class="container">
                    <h3>SERVICE DETAILS</h3>
                    <p>This website outlines the services provided by Best Way Roof Restoration, a DBA of Professional Masonry Co., with all services governed by the terms specified in signed contracts, which take precedence over promotional materials, catalogs, brochures, or verbal representations. Roof cleaning and sealing services are offered for most roofs at a cost of $5,000 or less, though larger or older roofs may require additional charges; all services come with a two-year warranty that excludes liability for damages such as water damage, mold, structural deterioration, or interior harm allegedly caused by roof leaks. Marketing materials, including images, are illustrative only and do not represent actual work performed, and the products used may include but are not limited to Simple Green House and Siding Cleaner for cleaning and LANCO AS-210 5 Gal. 100% Acrylic Clear Roof Primer and Sealer for sealing; customers agree to these terms by engaging services, with binding agreements existing only in fully executed contracts, and the company reserves the right to update terms and conditions without notice.
                    </p>
                </div>
            </div>
        </section>
    </main>
<?php
  get_footer();
?>