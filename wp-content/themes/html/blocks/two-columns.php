<!-- Start Bloc Two Columns -->
    <section id="about" class="wow animate__fadeIn">
        <div class="container"> 
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center">
                <div class="col text-center sm-margin-35px-bottom wow animate__fadeIn">
                    <img src="<?= get_field('bloc_two_columns_image'); ?>" alt="" class="w-100">
                </div>
                <div class="col padding-six-lr lg-padding-15px-lr text-center text-md-start wow animate__fadeIn" data-wow-delay="0.2s">
                    <i class="fas fa-quote-left text-primary-color icon-medium margin-15px-bottom"></i>
                    <h3 class="font-weight-600 alt-font text-extra-dark-gray"><?= get_field('bloc_two_columns_title'); ?></h3>
                    <p><?= get_field('bloc_two_columns_text'); ?></p>
                </div>
            </div>
        </div>
    </section>
<!-- End Bloc Two Columns -->