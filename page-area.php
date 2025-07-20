<?php
/* Template Name: Area */
get_header();
?>

<div class="background-image">
    <?php if ($image = get_field('image_1')) : ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
    <?php endif; ?>
</div>

<h4 class="text-center titre-logos my-4"><?php the_field('titre_logos'); ?></h4>

<div class="area-logos">
    <?php
    $logos = ['logo_1', 'logo_2', 'logo_3', 'logo_4', 'logo_5', 'logo_6'];
    foreach ($logos as $logo_field) :
        $logo = get_field($logo_field);
        if ($logo) :
    ?>
        <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>">
    <?php endif; endforeach; ?>
</div>

<div class="area-text-section">
    <div>
        <h2><?php the_field('titre_paragraphe'); ?></h2>
        <h4><?php the_field('text_lege'); ?></h4>
        <h3><?php the_field('text_gras_1'); ?></h3>
        <h3><?php the_field('text_gras_2'); ?></h3>
        <h3><?php the_field('text_gras_3'); ?></h3>
        <h3><?php the_field('text_gras_4'); ?></h3>
        


        <?php
        $lien = get_field('lien_bouton');
        $texte = get_field('texte_bouton');
        ?>

        <?php
        $lien = get_field('lien_bouton');
        $texte = get_field('texte_bouton');
        ?>

        <?php if ($lien && $texte) : ?>
            <a href="<?php echo esc_url($lien); ?>" class="btn-discover">
                <?php echo esc_html($texte); ?>
            </a>
        <?php endif; ?>


    </div>
    <div>
        <?php if ($image = get_field('image_2')) : ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
        <?php endif; ?>
    </div>
</div>

<div class="area-final-section">
    <div>
        <?php if ($image = get_field('image_3')) : ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
        <?php endif; ?>
    </div>
    <div>
        <blockquote>“<?php the_field('text_paragraphe_fin'); ?>”</blockquote>
        <h4><?php the_field('signature_fin'); ?></h4>
        <h6><?php the_field('text_vert'); ?></h6>
    </div>
</div>

<?php get_footer(); ?>
