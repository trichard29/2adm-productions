                    <!-- start information section -->
<section class="p-0 wow animate__fadeIn">
            <div class="container-fluid p-0">
                <div class="row row-cols-1 row-cols-lg-3 justify-content-center g-0">

                    <?php $cpt=0;
                    $informations = get_field('bloc_contact_info_grid_infos');

                    foreach($informations as $information) : ?>
                    <?php if($cpt%2==0) : ?>

         
                    <!-- start info box item -->
                    <div class="col image-hover-style-3 last-paragraph-no-margin bg-light-gray">
                        <div class="feature-box-wrap">
                            <div class="w-100 d-table position-relative cover-background small-screen lg-h-350px sm-h-300px" style="background: url(<?= $information['information_image']; ?>)"></div>
                            <div class="w-100 small-screen lg-h-350px sm-h-300px d-table">
                                <div class="d-table-cell align-middle padding-eighteen-lr lg-padding-twelve-lr text-center md-padding-ten-lr sm-padding-seven-all">
                                    <i class="icon-map text-deep-pink icon-medium margin-25px-bottom"></i>
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-bottom"><?= $information['information_title']; ?></div>
                                    <p class="w-55 mx-auto text-medium xl-w-75 lg-w-100"><?= $information['information_text']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end info box item -->
                    <?php else : ?>
                    <!-- start info box item -->
                    <div class="col image-hover-style-3 last-paragraph-no-margin bg-light-gray">
                        <div class="feature-box-wrap md-swap-block">
                            <div class="w-100 small-screen lg-h-350px sm-h-300px d-table">
                                <div class="d-table-cell align-middle padding-eighteen-lr lg-padding-twelve-lr text-center md-padding-ten-lr sm-padding-seven-all">
                                    <i class="icon-chat text-deep-pink icon-medium margin-25px-bottom"></i>
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-bottom"><?= $information['information_title']; ?></div>
                                    <p class="mx-auto text-medium mb-0"><?= $information['information_text']; ?></p>
                                </div>
                            </div>
                            <div class="w-100 d-table position-relative cover-background small-screen lg-h-350px sm-h-300px" style="background: url(<?= $information['information_image']; ?>)"></div>
                        </div>
                    </div>
                    <!-- end info box item -->
                    <?php endif; $cpt++; endforeach;?>
                    
                </div>   
            </div>
        </section>
        <!-- start information section -->        