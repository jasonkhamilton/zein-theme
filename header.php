<!doctype html>
<html <?php language_attributes(); ?> class="light">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-background text-on-background font-body-md antialiased selection:bg-secondary selection:text-on-secondary'); ?>>
<?php wp_body_open(); ?>
<header class="bg-surface border-b-2 border-outline-variant sticky top-0 z-50 transition-all duration-300">
    <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
        <div class="flex items-center gap-4">
            <?php $homepage_url = esc_url(home_url('/')); ?>
            <a class="flex items-center gap-4" href="<?php echo $homepage_url; ?>" rel="home">
                <?php if (function_exists('has_custom_logo') && has_custom_logo()): ?>
                    <?php echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', false, array('class' => 'h-12 w-auto object-contain hidden md:block')); ?>
                <?php endif; ?>
                <span class="text-headline-md font-headline-md tracking-tighter text-primary font-bold uppercase"><?php bloginfo('name'); ?></span>
            </a>
        </div>
        <nav class="hidden md:flex items-center gap-8 ml-auto">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex items-center gap-8 ml-auto',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'fallback_cb' => 'zeintyres_menu_fallback',
                    'walker' => new Zeintyres_Primary_Walker(),
                ));
            } else {
                zeintyres_menu_fallback();
            }
            ?>
        </nav>
        <div class="flex items-center gap-4 ml-8">
            <?php $phone_number = zeintyres_get_contact_field('zeintyres_phone_number', null, '0400 000 000'); ?>
            <?php $phone_tel = 'tel:' . preg_replace('/[^0-9+]/', '', $phone_number); ?>
            <a class="inline-flex items-center justify-center bg-secondary text-on-secondary font-button-text text-button-text px-6 py-3 uppercase tracking-widest hover:bg-caution-red transition-colors duration-300" href="<?php echo esc_url($phone_tel); ?>">
                <span>CALL NOW</span>
                <span class="hidden md:inline ml-2"><?php echo esc_html($phone_number); ?></span>
            </a>
            <button aria-label="Menu" class="md:hidden text-on-surface-variant">
                <span class="material-symbols-outlined text-[32px]">menu</span>
            </button>
        </div>
    </div>
</header>
