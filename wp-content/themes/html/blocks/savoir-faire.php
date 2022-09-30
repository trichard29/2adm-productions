<!-- Start Bloc Savoir-Faire -->
<!-- Start Savoir-Faire Texte -->
<section class="pb-0 wow animate__fadeIn" id="section-down">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8 col-lg-9 col-md-10 margin-six-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font text-primary-color font-weight-600 text-uppercase"><?= get_field('bloc_savoir_faire_title'); ?></h5>
                <p class="w-80 mx-auto d-inline-block sm-w-100"><?= get_field('bloc_savoir_faire_text'); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- End Savoir-Faire Texte  -->
<!-- Start Competences -->
    <section class=" wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
        <?php 
            $delay = 0.0;
            $competences = get_field('bloc_savoir_faire_competences');
            foreach( $competences as $competence ): ?>
                <!-- Start Competence -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 last-paragraph-no-margin md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="<?= $delay; ?>s">
                    <div class="padding-50px-all lg-padding-30px-all bg-primary-color box-shadow text-center h-100">
                        <div class="d-inline-block rounded-circle margin-40px-bottom sm-margin-30px-bottom bg-light-gray"><img src="<?= $competence['competence_logo']; ?>" alt=""/></div>
                        <span class="text-white-color"><?= $competence['competence_text']; ?></span>
                    </div>                    
                </div>
                <!-- End Competence -->
           <?php $delay += 0.2; endforeach; ?>
        </div>
    </div>
</section>
<!-- End Competences -->