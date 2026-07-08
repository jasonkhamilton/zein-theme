<?php
function zeintheme_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'zein-theme'),
    ));
}
add_action('after_setup_theme', 'zeintheme_theme_setup');

function zeintheme_get_contact_field($key, $post_id = null, $default = '') {
    $post_ids = array();

    if (empty($post_id)) {
        $queried_object = get_queried_object();
        if (!empty($queried_object) && !empty($queried_object->ID)) {
            $post_ids[] = $queried_object->ID;
        }
    } else {
        $post_ids[] = $post_id;
    }

    $front_page_id = get_option('page_on_front');
    if ($front_page_id) {
        $post_ids[] = $front_page_id;
    }

    $contact_page = get_page_by_path('contact');
    if ($contact_page instanceof WP_Post) {
        $post_ids[] = $contact_page->ID;
    }

    foreach (array_unique($post_ids) as $id) {
        if (!$id) {
            continue;
        }
        $value = get_post_meta($id, $key, true);
        if (!empty($value)) {
            return sanitize_textarea_field($value);
        }
    }

    return sanitize_textarea_field(get_theme_mod($key, $default));
}

function zeintheme_sanitize_checkbox($checked) {
    return (isset($checked) && ($checked === true || $checked === '1' || $checked === 1)) ? true : false;
}

function zeintheme_sanitize_url($url) {
    return esc_url_raw($url);
}

function zeintheme_sanitize_hex_color($color) {
    return sanitize_hex_color($color);
}

function zeintheme_get_contrast_color($hex_color) {
    $hex_color = ltrim($hex_color, '#');

    if (strlen($hex_color) === 3) {
        $hex_color = $hex_color[0] . $hex_color[0] . $hex_color[1] . $hex_color[1] . $hex_color[2] . $hex_color[2];
    }

    if (strlen($hex_color) !== 6) {
        return '#ffffff';
    }

    $red = hexdec(substr($hex_color, 0, 2));
    $green = hexdec(substr($hex_color, 2, 2));
    $blue = hexdec(substr($hex_color, 4, 2));
    $luminance = (0.2126 * $red + 0.7152 * $green + 0.0722 * $blue) / 255;

    return $luminance > 0.6 ? '#111111' : '#ffffff';
}

function zeintheme_customize_register($wp_customize) {
    $wp_customize->add_section('zeintheme_front_page_section', array(
        'title' => __('Front Page', 'zein-theme'),
        'priority' => 25,
    ));

    $wp_customize->add_setting('front_page_hero_tag', array(
        'default' => 'EXPERT AUTO ELECTRICAL SERVICE',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('front_page_hero_tag', array(
        'label' => __('Hero Tag', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('front_page_hero_icon', array(
        'default' => 'bolt',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('front_page_hero_icon', array(
        'label' => __('Hero Icon', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'text',
        'description' => __('Use a Material Symbols icon name, e.g. bolt.', 'zein-theme'),
    ));

    $wp_customize->add_setting('front_page_hero_title', array(
        'default' => 'Expert Auto Electrical Service in Melbourne',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('front_page_hero_title', array(
        'label' => __('Hero Title', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('front_page_hero_text', array(
        'default' => 'Specializing in diagnostics, wiring repairs, and battery systems for all makes and models. Fast, reliable, and professional electrical solutions at our Melbourne workshop.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('front_page_hero_text', array(
        'label' => __('Hero Text', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('front_page_hero_primary_button_text', array(
        'default' => 'Get a Quote',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('front_page_hero_primary_button_text', array(
        'label' => __('Primary Button Text', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('front_page_hero_primary_button_url', array(
        'default' => '#quote',
        'sanitize_callback' => 'zeintheme_sanitize_url',
    ));
    $wp_customize->add_control('front_page_hero_primary_button_url', array(
        'label' => __('Primary Button URL', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('front_page_hero_secondary_button_text', array(
        'default' => 'Explore Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('front_page_hero_secondary_button_text', array(
        'label' => __('Secondary Button Text', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('front_page_hero_secondary_button_url', array(
        'default' => '#services',
        'sanitize_callback' => 'zeintheme_sanitize_url',
    ));
    $wp_customize->add_control('front_page_hero_secondary_button_url', array(
        'label' => __('Secondary Button URL', 'zein-theme'),
        'section' => 'zeintheme_front_page_section',
        'type' => 'url',
    ));

    $wp_customize->add_section('zeintheme_contact_section', array(
        'title' => __('Contact', 'zein-theme'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('zeintheme_phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('zeintheme_phone_number', array(
        'label' => __('Phone Number', 'zein-theme'),
        'section' => 'zeintheme_contact_section',
        'type' => 'tel',
    ));
    $wp_customize->add_setting('zeintheme_service_area', array(
        'default' => 'Melbourne Wide - Specializing in Northern Suburbs',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('zeintheme_service_area', array(
        'label' => __('Service Area', 'zein-theme'),
        'section' => 'zeintheme_contact_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('zeintheme_open_hours', array(
        'default' => 'Mon-Fri: 9:00am - 5:30pm | Sat: 9:00am - 3:00pm',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('zeintheme_open_hours', array(
        'label' => __('Open Hours', 'zein-theme'),
        'section' => 'zeintheme_contact_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('zeintheme_contact_shortcode', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('zeintheme_contact_shortcode', array(
        'label' => __('Contact Form 7 Shortcode', 'zein-theme'),
        'section' => 'zeintheme_contact_section',
        'type' => 'text',
        'description' => __('Paste the Contact Form 7 shortcode to display in the front-page contact form area.', 'zein-theme'),
    ));
    $wp_customize->add_setting('zeintheme_contact_address', array(
        'default' => '12-14 Motto Dr, Coolaroo VIC 3048',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('zeintheme_contact_address', array(
        'label' => __('Address', 'zein-theme'),
        'section' => 'zeintheme_contact_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('zeintheme_primary_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'zeintheme_sanitize_hex_color',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zeintheme_primary_color', array(
        'label' => __('Primary Color', 'zein-theme'),
        'section' => 'title_tagline',
        'description' => __('Controls the main brand color used across headings, buttons, and key accents.', 'zein-theme'),
    )));

    $wp_customize->add_setting('zeintheme_secondary_color', array(
        'default' => '#b7102a',
        'sanitize_callback' => 'zeintheme_sanitize_hex_color',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zeintheme_secondary_color', array(
        'label' => __('Secondary Color', 'zein-theme'),
        'section' => 'title_tagline',
        'description' => __('Controls secondary highlights and call-to-action accents.', 'zein-theme'),
    )));

    $wp_customize->add_setting('zeintheme_background_color', array(
        'default' => '#f8f9fa',
        'sanitize_callback' => 'zeintheme_sanitize_hex_color',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zeintheme_background_color', array(
        'label' => __('Background Color', 'zein-theme'),
        'section' => 'title_tagline',
        'description' => __('Sets the overall page background color.', 'zein-theme'),
    )));

    $wp_customize->add_setting('zeintheme_surface_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'zeintheme_sanitize_hex_color',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zeintheme_surface_color', array(
        'label' => __('Surface Color', 'zein-theme'),
        'section' => 'title_tagline',
        'description' => __('Sets the color for cards, panels, and other surface elements.', 'zein-theme'),
    )));

    $wp_customize->add_setting('zeintheme_show_site_title', array(
        'default' => true,
        'sanitize_callback' => 'zeintheme_sanitize_checkbox',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('zeintheme_show_site_title', array(
        'label' => __('Display Site Title in Header', 'zein-theme'),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    ));
}
add_action('customize_register', 'zeintheme_customize_register');

function zeintheme_enqueue_assets() {
    wp_enqueue_style('zeintheme-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@700&display=swap', array(), null);
    wp_enqueue_style('zeintheme-material-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null);
    wp_enqueue_style('zeintheme-theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

    $primary_color = get_theme_mod('zeintheme_primary_color', '#000000');
    $secondary_color = get_theme_mod('zeintheme_secondary_color', '#b7102a');
    $background_color = get_theme_mod('zeintheme_background_color', '#f8f9fa');
    $surface_color = get_theme_mod('zeintheme_surface_color', '#ffffff');
    $on_primary_color = zeintheme_get_contrast_color($primary_color);
    $on_secondary_color = zeintheme_get_contrast_color($secondary_color);

    $custom_css = sprintf("
        :root {
            --zein-primary: %s;
            --zein-secondary: %s;
            --zein-background: %s;
            --zein-surface: %s;
            --zein-on-primary: %s;
            --zein-on-secondary: %s;
            --zein-on-surface: #191c1d;
            --zein-on-surface-variant: #444748;
            --zein-outline: #747878;
            --zein-outline-variant: #e1e3e4;
        }
        .bg-background { background-color: var(--zein-background) !important; }
        .text-primary, .hover\\:text-primary:hover { color: var(--zein-primary) !important; }
        .bg-primary, .hover\\:bg-primary:hover { background-color: var(--zein-primary) !important; }
        .border-primary, .focus\\:border-primary:focus { border-color: var(--zein-primary) !important; }
        .text-secondary, .hover\\:text-secondary:hover { color: var(--zein-secondary) !important; }
        .bg-secondary, .hover\\:bg-secondary:hover { background-color: var(--zein-secondary) !important; }
        .border-secondary, .focus\\:border-secondary:focus { border-color: var(--zein-secondary) !important; }
        .text-on-primary { color: var(--zein-on-primary) !important; }
        .bg-on-primary { background-color: var(--zein-on-primary) !important; }
        .text-on-secondary { color: var(--zein-on-secondary) !important; }
        .bg-on-secondary { background-color: var(--zein-on-secondary) !important; }
        .bg-surface { background-color: var(--zein-surface) !important; }
        .text-on-surface { color: var(--zein-on-surface) !important; }
        .text-on-surface-variant { color: var(--zein-on-surface-variant) !important; }
        .border-outline { border-color: var(--zein-outline) !important; }
        .border-outline-variant { border-color: var(--zein-outline-variant) !important; }
    ", esc_attr($primary_color), esc_attr($secondary_color), esc_attr($background_color), esc_attr($surface_color), esc_attr($on_primary_color), esc_attr($on_secondary_color));
    wp_add_inline_style('zeintheme-theme-style', $custom_css);

    wp_register_script('zeintheme-tailwind', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false);
    wp_enqueue_script('zeintheme-tailwind');

    $tailwind_config = "tailwind.config = { darkMode: 'class', theme: { extend: { colors: { 'on-secondary-fixed-variant': '#92001c', 'inverse-on-surface': '#f0f1f2', 'primary-container': '#1c1b1b', 'on-tertiary-fixed': '#001e2e', 'surface-container': '#edeeef', 'on-primary-fixed': '#1c1b1b', 'tertiary-container': '#001e2e', 'surface-container-lowest': '#ffffff', 'secondary-fixed-dim': '#ffb3b1', 'primary': '#000000', 'on-primary-container': '#858383', 'secondary-fixed': '#ffdad8', 'on-tertiary-fixed-variant': '#064c6b', 'secondary': '#b7102a', 'on-tertiary-container': '#548aac', 'primary-fixed-dim': '#c8c6c5', 'surface-tint': '#5f5e5e', 'surface-container-high': '#e7e8e9', 'on-surface': '#191c1d', 'surface-container-low': '#f3f4f5', 'tertiary-fixed': '#c7e7ff', 'surface-dim': '#d9dadb', 'on-error': '#ffffff', 'on-secondary': '#ffffff', 'surface-bright': '#f8f9fa', 'steel-gray': '#CED4DA', 'on-surface-variant': '#444748', 'on-tertiary': '#ffffff', 'surface': '#f8f9fa', 'background': '#f8f9fa', 'error-container': '#ffdad6', 'caution-red': '#C92A3E', 'primary-fixed': '#e5e2e1', 'inverse-primary': '#c8c6c5', 'tertiary-fixed-dim': '#98cdf2', 'outline': '#747878', 'on-error-container': '#93000a', 'error': '#ba1a1a', 'on-primary': '#ffffff', 'surface-variant': '#e1e3e4', 'on-primary-fixed-variant': '#474746', 'on-secondary-container': '#fffbff', 'inverse-surface': '#2e3132', 'overcast-white': '#FFFFFF', 'tarmac-black': '#0F0F0F', 'secondary-container': '#db313f', 'on-secondary-fixed': '#410007', 'surface-container-highest': '#e1e3e4' }, borderRadius: { DEFAULT: '0.125rem', lg: '0.25rem', xl: '0.5rem', full: '0.75rem' }, spacing: { 'margin-mobile': '20px', gutter: '16px', unit: '8px', 'margin-desktop': '40px', 'container-max': '1280px' }, fontFamily: { 'headline-sm': ['Montserrat'], 'label-caps': ['JetBrains Mono'], 'display-lg-mobile': ['Montserrat'], 'body-lg': ['Work Sans'], 'body-md': ['Work Sans'], 'display-lg': ['Montserrat'], 'button-text': ['Montserrat'], 'headline-md': ['Montserrat'] }, fontSize: { 'headline-sm': ['20px', { lineHeight: '28px', fontWeight: '700' }], 'label-caps': ['12px', { lineHeight: '16px', letterSpacing: '0.1em', fontWeight: '700' }], 'display-lg-mobile': ['32px', { lineHeight: '38px', letterSpacing: '-0.01em', fontWeight: '800' }], 'body-lg': ['18px', { lineHeight: '28px', fontWeight: '400' }], 'display-lg': ['48px', { lineHeight: '56px', letterSpacing: '-0.02em', fontWeight: '800' }], 'button-text': ['14px', { lineHeight: '20px', letterSpacing: '0.05em', fontWeight: '700' }], 'headline-md': ['24px', { lineHeight: '32px', fontWeight: '700' }], 'body-md': ['16px', { lineHeight: '24px', fontWeight: '400' }] } } } };";
    wp_add_inline_script('zeintheme-tailwind', $tailwind_config, 'after');
}
add_action('wp_enqueue_scripts', 'zeintheme_enqueue_assets');

function zeintheme_nav_menu_item_classes($classes, $item, $args, $depth) {
    if ('primary' === $args->theme_location) {
        $classes[] = 'inline-block';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'zeintheme_nav_menu_item_classes', 10, 4);

class ZeinTheme_Primary_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = 'inline-block';
        $output .= '<li class="' . esc_attr($class_names) . '">';
        $atts = array();
        $atts['title']  = !empty($item->title) ? $item->title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class'] = 'text-on-surface-variant hover:text-primary transition-colors text-headline-sm font-body-md';
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = esc_attr($value);
                $attributes .= " $attr=\"$value\"";
            }
        }
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = '<a' . $attributes . '>' . $title . '</a>';
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= '</li>';
    }
}

function zeintheme_menu_fallback() {
    echo '<ul class="flex items-center gap-8 ml-auto">';
    echo '<li><a class="text-on-surface-variant hover:text-primary transition-colors text-headline-sm font-body-md" href="' . esc_url(home_url('/#services')) . '">Services</a></li>';
    echo '<li><a class="text-on-surface-variant hover:text-primary transition-colors text-headline-sm font-body-md" href="' . esc_url(home_url('/#about')) . '">About</a></li>';
    echo '<li><a class="text-on-surface-variant hover:text-primary transition-colors text-headline-sm font-body-md" href="' . esc_url(home_url('/#quote')) . '">Contact</a></li>';
    echo '</ul>';
}
