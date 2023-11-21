<?php

$text = get_field('text');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

?>

<section <?php echo esc_attr( $anchor ); ?> class="l-content block b-text">
    <div class="l-content l-content--narrow b-text__content">
        <?= $text ?>
    </div>
</section>