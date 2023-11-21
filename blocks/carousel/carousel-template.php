<?php

$rows = get_field('carousel_images');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

if ($rows) : ?>
    <section <?php echo esc_attr( $anchor ); ?> class="l-section l-section--nopadding b-carousel block block--fullwidth">
    <div class="l-content l-content--fullwidth js-carousel">

    <?php 
    foreach($rows as $row) {
        echo '<img src="' . $row['image']['url'] . '">';
    }
    ?>
    </div>
    </section>
<?php endif; ?>