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

function zeintheme_customize_register($wp_customize) {
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
