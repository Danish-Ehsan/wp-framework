<?php

$rows = get_field('link_cards');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

if ($rows) : ?>
    <section <?php echo esc_attr( $anchor ); ?> class="l-content l-grid block b-linkcards">

    <?php 
    foreach($rows as $row) : 
        $image = $row['image'];
        $text = $row['text'];
        $link = $row['link'];
    ?>
        <article <?= post_class('c-card') ?>>
            <?php if ($link) : ?>
                <a href="<?= $link['url'] ?>" aria-label="<?= $link['url'] ?>" <?= $link['target'] ? 'target=' . $link['target'] : '' ?> class="c-card__imagelink">
            <?php endif; ?>
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
            <?php if ($link) : ?>
                </a>
            <?php endif; ?>
            <div class="c-card__text">
                <?= $text ?: '' ?>
                <?php if ($link) : ?>
                    <a href="<?= $link['url'] ?>" <?= $link['target'] ? 'target=' . $link['target'] : '' ?>><?= $link['title'] ?: 'Learn more' ?></a>
                <?php endif; ?>
            </div>
        </article>
    <?php endforeach; ?>
    </section>
<?php endif; ?>