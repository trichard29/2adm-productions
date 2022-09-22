<?php 

/*
Template Name: Page "Contact"
*/

get_header(); ?>

  <!-- start form section -->
  <section class="wow animate__fadeIn" id="start-your-project">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-9 col-sm-10 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">tell us about your project</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text.</p>
                    </div>  
                </div>
                <form id="project-contact-form" action="email-templates/contact-form-budget.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-results d-none"></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="name" id="name" placeholder="Name *" class="big-input required">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="tel" name="phone" id="phone" placeholder="Phone"  class="big-input">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" id="email" placeholder="E-mail *" class="big-input required">
                        </div>
                        <div class="col-12">
                            <textarea name="comment" id="comment" placeholder="Describe your project" rows="6" class="big-textarea"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top submit">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end form section -->

         <!-- start information section -->
         <section class="p-0 wow animate__fadeIn">
            <div class="container-fluid p-0">
                <div class="row row-cols-1 row-cols-lg-3 justify-content-center g-0">
                    <!-- start info box item -->
                    <div class="col image-hover-style-3 last-paragraph-no-margin bg-light-gray">
                        <div class="feature-box-wrap">
                            <div class="w-100 d-table position-relative cover-background small-screen lg-h-350px sm-h-300px" style="background: url(https://via.placeholder.com/1200x854)"></div>
                            <div class="w-100 small-screen lg-h-350px sm-h-300px d-table">
                                <div class="d-table-cell align-middle padding-eighteen-lr lg-padding-twelve-lr text-center md-padding-ten-lr sm-padding-seven-all">
                                    <i class="icon-map text-deep-pink icon-medium margin-25px-bottom"></i>
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-bottom">Contact Address</div>
                                    <p class="w-55 mx-auto text-medium xl-w-75 lg-w-100">301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end info box item -->
                    <!-- start info box item -->
                    <div class="col image-hover-style-3 last-paragraph-no-margin bg-light-gray">
                        <div class="feature-box-wrap md-swap-block">
                            <div class="w-100 small-screen lg-h-350px sm-h-300px d-table">
                                <div class="d-table-cell align-middle padding-eighteen-lr lg-padding-twelve-lr text-center md-padding-ten-lr sm-padding-seven-all">
                                    <i class="icon-chat text-deep-pink icon-medium margin-25px-bottom"></i>
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-bottom">Let's Talk</div>
                                    <p class="mx-auto text-medium mb-0">Phone: 1-800-222-000</p>
                                    <p class="mx-auto text-medium">Fax: 1-800-222-002</p>
                                </div>
                            </div>
                            <div class="w-100 d-table position-relative cover-background small-screen lg-h-350px sm-h-300px" style="background: url(https://via.placeholder.com/1200x854)"></div>
                        </div>
                    </div>
                    <!-- end info box item -->
                    <!-- start info box item -->
                    <div class="col image-hover-style-3 last-paragraph-no-margin bg-light-gray">
                        <div class="feature-box-wrap">
                            <div class="w-100 d-table position-relative cover-background small-screen lg-h-350px sm-h-300px" style="background: url(https://via.placeholder.com/1200x854)"></div>
                            <div class="w-100 small-screen lg-h-350px sm-h-300px d-table">
                                <div class="d-table-cell align-middle padding-eighteen-lr lg-padding-twelve-lr text-center md-padding-ten-lr sm-padding-seven-all">
                                    <i class="icon-envelope text-deep-pink icon-medium margin-25px-bottom"></i>
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-bottom">Email Us</div>
                                    <p class="mx-auto text-medium mb-0"><a href="mailto:info@domain.com">info@domain.com</a></p>
                                    <p class="mx-auto text-medium"><a href="mailto:hire@domain.com">hire@domain.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end info box item -->
                </div>   
            </div>
        </section>
        <!-- start information section -->        

<?php get_footer(); ?>