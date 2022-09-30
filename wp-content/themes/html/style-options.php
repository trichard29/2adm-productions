<?php 
    header('Content-type: text/css');
    include('../../../wp-load.php'); 
?>

:root {
    --primary-color: <?= get_field('primary_color','colors'); ?>;
    --secondary-color: <?= get_field('secondary_color','colors'); ?>;
    --third-color: <?= get_field('third_color','colors'); ?>;
    --white-color: #FFFFFF;
    --black-color: #000000;
}