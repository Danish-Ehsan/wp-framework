<?php

$imageOne = get_field('image_one');
$imageTwo = get_field('image_two');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

?>

<section <?php echo esc_attr( $anchor ); ?> class="l-section l-section--nopadding block block--fullwidth b-banner">
    <img src="<?= $imageOne['url'] ?>" alt="<?= $imageOne['alt'] ?>" class="b-banner__img">
    <img src="<?= $imageTwo['url'] ?>" alt="<?= $imageTwo['alt'] ?>" class="b-banner__img">
</section>