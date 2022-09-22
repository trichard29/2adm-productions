<!-- start section -->
<section class="p-0 bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 order-1 order-lg-2 text-center text-lg-start md-padding-50px-all sm-padding-15px-lr">
                <i class="fas fa-quote-left text-deep-pink icon-medium margin-15px-bottom"></i>
                <h5 class="text-extra-dark-gray alt-font text-uppercase font-weight-700"><?= get_field('texte_droite_titre'); ?></h5>
                <p class="w-90 md-w-100"><?= get_field('texte_droite_contenu'); ?></p>
                <a href="<?= esc_url( get_field('texte_droite_lien')['url'] ); ?>" target="<?php echo esc_attr( get_field('texte_droite_lien')['target'] ); ?>" class="btn btn-small btn-rounded btn-dark-gray margin-20px-top sm-margin-5px-top"><?php echo esc_html( get_field('texte_droite_lien')['title'] ); ?></a>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-1 text-center align-self-end">
                <img src="https://via.placeholder.com/600x741" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end section -->