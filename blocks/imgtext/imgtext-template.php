<?php

$image = get_field('image');
$imageAlignment = get_field('image_alignment');
$text = get_field('text');
$link = get_field('link');
$backgroundColor = get_field('background_color');
$backgroundImage = get_field('background_image');
$styles = [];

if ($backgroundColor) {
    $styles[] = "background-color: $backgroundColor;";
}

if ($backgroundImage) {
    $styles[] = "background-image: $backgroundImage;";
}

if ($styles) {
    $styles = implode(' ', $styles);
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

?>

<section <?php echo esc_attr( $anchor ); ?> class="l-section block block--fullwidth b-imgtext" <?= $styles ? "style=\"$styles\"" : '' ?>>
    <div class="l-content">
        <div class="l-content l-content--narrow b-imgtext__content">
            <div class="b-imgtext__image b-imgtext__image--<?= $imageAlignment ?>">
                <?php if ($link) : ?>
                <a href="<?= $link['url'] ?>" aria-label="Follow hyperlink" class="b-imgtext__link">
                <?php endif; ?>
                <img src="<?= $image['sizes']['large'] ?>" alt="<?= $image['alt'] ?>" class="b-imgtext__img">
                <?php if ($link) : ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="b-imgtext__text">
                <?= $text ?>
                <?php if ($link) : ?>
                <a href="<?= $link['url'] ?>" <?= $link['target'] ? 'target=' . $link['target'] : '' ?>><?= $link['title'] ?: 'Learn more' ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>