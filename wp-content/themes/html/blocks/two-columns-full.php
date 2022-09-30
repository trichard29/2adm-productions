 <!-- Start Bloc Two Columns Full Left -->
<section class="p-0 wow animate__fadeIn bg-white">
    <div class="container-fluid p-0">
        <div class="row row-cols-1 row-cols-lg-2 m-0 <?php if(get_field('bloc_two_columns_full_image_position')[0] == "droite"){ echo "flex-row-reverse";} ?> "> 
            <div class="col position-relative md-h-500px sm-h-300px cover-background wow animate__fadeIn" style="background-image: url('<?= get_field('groupe_image_texte')['bloc_two_columns_full_image']; ?>"></div>
            <div class="col text-center padding-seven-lr padding-six-half-tb xl-padding-six-lr xl-padding-five-tb md-padding-nine-half-tb md-padding-eleven-half-lr sm-padding-15px-lr text-lg-start wow animate__fadeIn">
                <i class="fas fa-quote-left text-primary-color icon-medium margin-15px-bottom"></i>
                <h5 class="text-black alt-font font-weight-700"><?= get_field('groupe_image_texte')['bloc_two_columns_full_title']; ?></h5>
                <p class="w-90 md-w-100"><?= get_field('groupe_image_texte')['bloc_two_columns_full_text']; ?></p>
                <?php if(get_field('groupe_image_texte')['bloc_two_columns_full_add_button']) : ?><a class="btn btn-small btn-rounded btn-dark-gray margin-20px-top sm-margin-5px-top" href="<?php echo esc_url( get_field('groupe_image_texte')['bloc_two_columns_full_button']['url'] ); ?>" target="<?php echo esc_attr( get_field('groupe_image_texte')['bloc_two_columns_full_button']['target'] ); ?>"><?php echo esc_html( get_field('groupe_image_texte')['bloc_two_columns_full_button']['title'] ); ?></a><?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end Bloc Two Columns Full Left -->

