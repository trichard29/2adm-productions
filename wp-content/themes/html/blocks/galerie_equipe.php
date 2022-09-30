 
 <?php $colonne = 0; $delay = 0.0; $equipes = get_field('bloc_galerie_equipe_equipes')?>
 <section class="wow animate__fadeIn pt-0 pb-1 z-index-5">
    <div class="container-fluid padding-thirteen-lr lg-padding-six-lr">
    <?php $i = count($equipes);
        foreach($equipes as $equipe) : ?>
        <?php if($colonne == 0) : ?>
            <!-- start team section -->
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                    <?php endif; ?>
                    <!-- start team item -->
                    <div class="col team-block  pt-5 text-start team-style-1 <?php if($i==0) echo "xs-margin-30px-bottom"; else echo "md-margin-seven-bottom sm-margin-30px-bottom"; ?> wow animate__fadeInUp" data-wow-delay="<?php echo $delay; $delay += 0.2; ?>s">
                        <figure>
                            <div class="team-image sm-w-100">
                                <?= wp_get_attachment_image( $equipe['equipe_image'], 'full' ); ?>
                                <div class="overlay-content text-center d-flex align-items-center justify-content-center">
                                    <div class="icon-social-small">
                                        <a href="http://facebook.com" target="_blank" class="text-white-2 text-white-2-hover"><i class="fab fa-facebook-f"></i></a>
                                        <a href="http://twitter.com" target="_blank" class="text-white-2 text-white-2-hover"><i class="fab fa-twitter"></i></a>
                                        <a href="http://plus.google.com" target="_blank" class="text-white-2 text-white-2-hover"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="http://instagram.com" target="_blank" class="text-white-2 text-white-2-hover"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-overlay bg-deep-pink opacity8"></div>
                            </div>
                            <figcaption>
                                <div class="team-member-position margin-20px-top text-center">
                                    <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase"><?= $equipe['equipe_nom'];?></div>
                                    <div class="text-extra-small text-uppercase text-medium-gray"><?= $equipe['equipe_fonction']; ?></div>
                                </div>   
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <?php $colonne++; $i--; if($colonne == 4 || $i==0) : ?>
                </div> 
            <!-- end team section -->
        <?php $colonne = 0; $delay = 0.0; endif; ?>
    <?php endforeach; ?>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8 col-lg-9 col-md-10 pt-5 text-center last-paragraph-no-margin">
                <p class="w-80 mx-auto d-inline-block sm-w-100 wow animate__fadeInUp"><?php echo get_field('bloc_galerie_equipe_bottom_text',false,false); ?></p>
            </div>
        </div>
                    </div>
</section>

                
               
       