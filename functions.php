<?php 
//Chamar a tag title
function memorial_title_tag() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'memorial_title_tag');

//Previnir o erro na tag title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function memorial_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'memorial_render_title');
}

//Registra o Custom Navigation Walker
require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';

//Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'memorial')
));

//Definir as imagens de destaque
add_theme_support('post-thumbnails');
//set_post_thumbnail_size( 300, 200, true );

//Definir o tamanho do Resumo
add_filter( 'excerpt_length', function($length) {
    return 80;
});

add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_action( 'init', 'add_support_to_pages' );
}

function add_support_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

// Remove a barra superior de edição do WP na visualizção do site
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

// No seu arquivo functions.php

function trocar_header_para_mobile() {
    // Verifica se o usuário está em um dispositivo móvel
    if (wp_is_mobile()) {
        // Carrega o arquivo header2.php
        get_template_part('header2');
    }
}

// Adiciona a ação para chamar a função no gancho 'wp_head'
add_action('wp_head', 'trocar_header_para_mobile');

function create_post_type_carrossel() {
    register_post_type('banners',
        array(
            'labels' => array(
                'name' => __('Carrossel'),
                'singular_name' => __('Carrossel')
            ),
            'supports' => array(
                'title', 'editor', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'banners'),
        )
    );
}

add_action('init', 'create_post_type_carrossel');

function get_carosel() {
    ob_start(); // Inicia o buffer de saída
    ?>
    <div class="container-fluid">
        <div class="col mb-5">
            <!-- Coloque aqui o código do carrossel, sem duplicar o código que já está acima -->
        </div>
    </div>
    <?php
    return ob_get_clean(); // Retorna o conteúdo do buffer de saída
}

add_shortcode('carrossel', 'get_carosel');

function add_custom_meta_boxes() {
    add_meta_box(
        'banner_link_box',
        'Link do Banner',
        'render_banner_link_box',
        'banners',
        'normal',
        'high'
    );
}

function render_banner_link_box($post) {
    // Adicione HTML para o campo de link do banner aqui
    $banner_link = get_post_meta($post->ID, 'link_banner', true);
    ?>
    <label for="banner_link">Link do Banner:</label>
    <input type="text" id="banner_link" name="banner_link" value="<?php echo esc_attr($banner_link); ?>" style="width: 100%;" />
    <?php
}

function save_custom_meta_data($post_id) {
    if (array_key_exists('banner_link', $_POST)) {
        update_post_meta(
            $post_id,
            'link_banner',
            sanitize_text_field($_POST['banner_link'])
        );
    }
}

add_action('save_post', 'save_custom_meta_data');
add_action('add_meta_boxes', 'add_custom_meta_boxes');

// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function adicionar_scripts_customizados() {
    // Primeiro script
    wp_enqueue_script('primeiro-script', get_template_directory_uri() . '/js/font.js', array('jquery'), '1.0', true);

    // Segundo script
    wp_enqueue_script('segundo-script', get_template_directory_uri() . '/js/contrast.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'adicionar_scripts_customizados');

include('custom-shortcodes.php');

function custom_lightbox_script() {
    if (is_singular() && is_main_query()) {
        wp_enqueue_script('custom-lightbox', get_template_directory_uri() . '/js/custom-lightbox.js', array('jquery'), '', true);

        $script_params = array(
            'lightbox_nonce' => wp_create_nonce('lightbox_nonce'),
        );

        wp_localize_script('custom-lightbox', 'lightbox_params', $script_params);
    }
}

add_action('wp_enqueue_scripts', 'custom_lightbox_script');

?>
