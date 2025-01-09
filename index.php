<?php
  get_header();
 ?>
    <main>
        <section class="sec_1">
            
            <div class="sec_1_wrapper container">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/black_ink_shadow_transparent_logo.png" alt="">
                </figure>
            </div>
            <div class="services">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
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
                    </div>
                </div>
            </div>
        </section>
        <section class="sec_2">
            <div class="form_wrapper container">
            <?php echo do_shortcode("[ninja_form id='2']"); ?>

                <h1>SCHEDULE FREE ROOF INSPECTION</h1>

                <form id="serviceForm" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                    <label for="fullName">Full Name<span>*</span>: </label>
                    <input type="text" id="fullName" name="fullName" required><br><br>
            
                    <label for="phoneNumber">Phone Number<span>*</span>: </label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" required><br><br>
            
                    <label for="emailAddress">Email Address<span>*</span>: </label>
                    <input type="email" id="emailAddress" name="emailAddress" required><br><br>
            
                    <label for="propertyAddress">Property Address<span>*</span>: </label>
                    <input type="text" id="propertyAddress" name="propertyAddress" required><br><br>
            
                    <label>Services Interested in (optional):</label><br>
                    <input type="checkbox" id="roofCleaning" name="services" value="Roof Cleaning">
                    <label for="roofCleaning">Roof cleaning</label><br>
                    <input type="checkbox" id="gutterCleaning" name="services" value="Gutter Cleaning">
                    <label for="gutterCleaning">Gutter cleaning</label><br>
                    <input type="checkbox" id="roofSealing" name="services" value="Roof Sealing">
                    <label for="roofSealing">Roof sealing</label><br><br>
            
                    <label for="message">Message (optional): </label><br>
                    <textarea id="message" name="message"></textarea><br><br>
            
                    <button type="submit">
                        Submit
                        <i class="fa-solid fa-check"></i>
                    </button>
                </form>
            
                <script>
                    document.getElementById('serviceForm').addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent default form submission
                        const formData = {
                            fullName: document.getElementById('fullName').value,
                            phoneNumber: document.getElementById('phoneNumber').value,
                            emailAddress: document.getElementById('emailAddress').value,
                            propertyAddress: document.getElementById('propertyAddress').value,
                            services: Array.from(document.querySelectorAll('input[name="services"]:checked')).map(checkbox => checkbox.value),
                            message: document.getElementById('message').value
                        };
                        console.log('Form Data:', formData);
                        alert('Form submitted successfully!');
                    });
                </script>
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
                        <h3>ECO-FRIENDLY ROOF CLEANING</h3>
                        <p>Our roof cleaning process uses a biodegradable, non-toxic, and environmentally-friendly detergent that effectively breaks down dirt, stains, moss, and algae while being safe for landscaping. The solution is evenly sprayed onto the roof to penetrate and loosen buildup without harsh scrubbing, and on hot days, we wet the roof beforehand to enhance performance and protect the surface. Once the detergent has worked, we thoroughly rinse the roof, removing all debris and leaving it clean and refreshed.</p>
                    </div>
                </div>
                <div class="par_content2">
                    <div class="container">
                        <h3>SOFT-BRISTLED BRUSHING</h3>
                        <p>Our roof specialists use a specialized roof brush to remove stubborn moss and tough stains that cannot be fully addressed by detergent alone. The brush is designed to be gentle on roofing materials while effectively scrubbing away buildup and restoring the roof’s surface. This step ensures that visible growth and discoloration are thoroughly eliminated, leaving the roof looking clean and well-maintained.</p>
                    </div>
                </div>
                <div class="par_content3">
                    <div class="container">
                        <h3>ROOF SEALING</h3>
                        <p>Our roof restoration and protection process involves applying a clear roof sealant to shingles using either a sprayer or a roller, ensuring even and complete coverage. The sealant creates a durable water barrier that protects the roof from moisture infiltration, helping to prevent damage and leaks. Additionally, it retards the growth of moss, algae, and other plants, keeping the roof cleaner for longer periods. This protective layer significantly extends the life of the roof by safeguarding it from the elements and reducing the need for frequent maintenance.</p>
                    </div>
                </div>
                <div class="par_content4">
                    <div class="container">
                        <h3>GUTTER CLEANING</h3>
                        <p>Our gutter cleaning service ensures your gutters are free of leaves, debris, and blockages, allowing water to flow properly and preventing damage to your home. We carefully remove all buildup by hand or with specialized tools, ensuring no mess is left behind on your property. Clean gutters protect your roof, siding, and foundation from water damage, reducing the risk of costly repairs and maintaining the integrity of your home.</p>
                    </div>
                </div>
                <div class="par_content5">
                    <div class="container">
                        <h3>SERVICE DETAILS</h3>
                        <p>This brochure lays out services provided by Best Way Roof Restoration, a DBA of Professional Masonry Co. All services are subject to the terms outlined in signed contracts, which supersede any promotional materials, catalogs, brochures, or verbal promises. Roof cleaning and sealing services are available for most roofs for $5,000 or less; however, larger or older roofs may incur additional costs. Our services include a two-year warranty, which excludes liability for any damages, including but not limited to water damage, mold, structural deterioration, or interior damage allegedly caused by roof leaks. Marketing materials, including pictures, are for illustrative purposes only and do not depict actual work performed by Best Way Roof Restoration. The products we use include Simple Green House and Siding Cleaner for cleaning and LANCO AS-210 5 Gal. 100% Acrylic Clear Roof Primer and Sealer for roof sealing. By engaging our services, the customer agrees to these terms and acknowledges that only a fully executed contract constitutes a binding agreement. Best Way Roof Restoration reserves the right to modify terms and conditions at any time without prior notice.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
  get_footer();
?>