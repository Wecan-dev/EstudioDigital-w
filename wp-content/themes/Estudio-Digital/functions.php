<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
/*******truncar cantidad de palabras******/

function my_theme_setup() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



// Register Custom Banner Home
function Banner() {

  $labels = array(
    'name'                  => _x( 'Banner ', 'Post Type General Name', 'EstudioDigital' ),
    'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'EstudioDigital' ),
    'menu_name'             => __( 'Banners', 'EstudioDigital' ),
    'name_admin_bar'        => __( 'Banners', 'EstudioDigital' ),
    'archives'              => __( 'Archivo', 'EstudioDigital' ),
    'attributes'            => __( 'Atributos', 'EstudioDigital' ),
    'parent_item_colon'     => __( 'Artículo principal', 'EstudioDigital' ),
    'all_items'             => __( 'Todos los artículos', 'EstudioDigital' ),
    'add_new_item'          => __( 'Agregar ítem nuevo', 'EstudioDigital' ),
    'add_new'               => __( 'Añadir nuevo', 'EstudioDigital' ),
    'new_item'              => __( 'Nuevo artículo', 'EstudioDigital' ),
    'edit_item'             => __( 'Editar elemento', 'EstudioDigital' ),
    'update_item'           => __( 'Actualizar artículo', 'EstudioDigital' ),
    'view_item'             => __( 'Ver ítem', 'EstudioDigital' ),
    'view_items'            => __( 'Ver artículos', 'EstudioDigital' ),
    'search_items'          => __( 'Buscar artículo', 'EstudioDigital' ),
    'not_found'             => __( 'Extraviado', 'EstudioDigital' ),
    'not_found_in_trash'    => __( 'No se encuentra en la basura', 'EstudioDigital' ),
    'featured_image'        => __( 'Foto principal', 'EstudioDigital' ),
    'set_featured_image'    => __( 'Establecer imagen destacada', 'EstudioDigital' ),
    'remove_featured_image' => __( 'Remove featured image', 'EstudioDigital' ),
    'use_featured_image'    => __( 'Usar como imagen destacada', 'EstudioDigital' ),
    'insert_into_item'      => __( 'Insertar en el elemento', 'EstudioDigital' ),
    'uploaded_to_this_item' => __( 'Subido a este artículo', 'EstudioDigital' ),
    'items_list'            => __( 'Lista de artículos', 'EstudioDigital' ),
    'items_list_navigation' => __( 'Lista de elementos de navegación', 'EstudioDigital' ),
    'filter_items_list'     => __( 'Lista de elementos de filtro', 'EstudioDigital' ),
  );
  $args = array(
    'label'                 => __( 'Banner Home', 'EstudioDigital' ),
    'description'           => __( 'Post Type Description', 'EstudioDigital' ),
    'labels'                => $labels,
    'supports'              => array( 'title','editor', 'thumbnail' ),
    'taxonomies'            => array(  ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-images-alt2',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );




// Register Custom Services
function Servicios() {

    $labels = array(
        'name'                  => _x( 'Servicios ', 'Post Type General Name', 'EstudioDigital' ),
        'singular_name'         => _x( 'Servicios', 'Post Type Singular Name', 'EstudioDigital' ),
        'menu_name'             => __( 'Servicios', 'EstudioDigital' ),
        'name_admin_bar'        => __( 'Servicios', 'EstudioDigital' ),
        'archives'              => __( 'Archivo', 'EstudioDigital' ),
        'attributes'            => __( 'Atributos', 'EstudioDigital' ),
        'parent_item_colon'     => __( 'Artículo principal', 'EstudioDigital' ),
        'all_items'             => __( 'Todos los artículos', 'EstudioDigital' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'EstudioDigital' ),
        'add_new'               => __( 'Añadir nuevo', 'EstudioDigital' ),
        'new_item'              => __( 'Nuevo artículo', 'EstudioDigital' ),
        'edit_item'             => __( 'Editar elemento', 'EstudioDigital' ),
        'update_item'           => __( 'Actualizar artículo', 'EstudioDigital' ),
        'view_item'             => __( 'Ver ítem', 'EstudioDigital' ),
        'view_items'            => __( 'Ver artículos', 'EstudioDigital' ),
        'search_items'          => __( 'Buscar artículo', 'EstudioDigital' ),
        'not_found'             => __( 'Extraviado', 'EstudioDigital' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'EstudioDigital' ),
        'featured_image'        => __( 'Foto principal', 'EstudioDigital' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'EstudioDigital' ),
        'remove_featured_image' => __( 'Remove featured image', 'EstudioDigital' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'EstudioDigital' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'EstudioDigital' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'EstudioDigital' ),
        'items_list'            => __( 'Lista de artículos', 'EstudioDigital' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'EstudioDigital' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'EstudioDigital' ),
    );
    $args = array(
        'label'                 => __( 'Servicios Home', 'EstudioDigital' ),
        'description'           => __( 'Post Type Description', 'EstudioDigital' ),
        'labels'                => $labels,
        'supports'              => array( 'title','editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-ol',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Servicios', $args );

}
add_action( 'init', 'Servicios', 0 );



// Register Custom Coments
function Comentarios() {

    $labels = array(
        'name'                  => _x( 'Comentarios ', 'Post Type General Name', 'EstudioDigital' ),
        'singular_name'         => _x( 'Comentarios', 'Post Type Singular Name', 'EstudioDigital' ),
        'menu_name'             => __( 'Comentarios', 'EstudioDigital' ),
        'name_admin_bar'        => __( 'Comentarios', 'EstudioDigital' ),
        'archives'              => __( 'Archivo', 'EstudioDigital' ),
        'attributes'            => __( 'Atributos', 'EstudioDigital' ),
        'parent_item_colon'     => __( 'Artículo principal', 'EstudioDigital' ),
        'all_items'             => __( 'Todos los artículos', 'EstudioDigital' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'EstudioDigital' ),
        'add_new'               => __( 'Añadir nuevo', 'EstudioDigital' ),
        'new_item'              => __( 'Nuevo artículo', 'EstudioDigital' ),
        'edit_item'             => __( 'Editar elemento', 'EstudioDigital' ),
        'update_item'           => __( 'Actualizar artículo', 'EstudioDigital' ),
        'view_item'             => __( 'Ver ítem', 'EstudioDigital' ),
        'view_items'            => __( 'Ver artículos', 'EstudioDigital' ),
        'search_items'          => __( 'Buscar artículo', 'EstudioDigital' ),
        'not_found'             => __( 'Extraviado', 'EstudioDigital' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'EstudioDigital' ),
        'featured_image'        => __( 'Foto principal', 'EstudioDigital' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'EstudioDigital' ),
        'remove_featured_image' => __( 'Remove featured image', 'EstudioDigital' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'EstudioDigital' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'EstudioDigital' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'EstudioDigital' ),
        'items_list'            => __( 'Lista de artículos', 'EstudioDigital' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'EstudioDigital' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'EstudioDigital' ),
    );
    $args = array(
        'label'                 => __( 'Comentarios Home', 'EstudioDigital' ),
        'description'           => __( 'Post Type Description', 'EstudioDigital' ),
        'labels'                => $labels,
        'supports'              => array( 'title','editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-ol',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Comentarios', $args );

}
add_action( 'init', 'Comentarios', 0 );



// Register Custom Coments
function Clientes() {

    $labels = array(
        'name'                  => _x( 'Clientes ', 'Post Type General Name', 'EstudioDigital' ),
        'singular_name'         => _x( 'Clientes', 'Post Type Singular Name', 'EstudioDigital' ),
        'menu_name'             => __( 'Clientes', 'EstudioDigital' ),
        'name_admin_bar'        => __( 'Clientes', 'EstudioDigital' ),
        'archives'              => __( 'Archivo', 'EstudioDigital' ),
        'attributes'            => __( 'Atributos', 'EstudioDigital' ),
        'parent_item_colon'     => __( 'Artículo principal', 'EstudioDigital' ),
        'all_items'             => __( 'Todos los artículos', 'EstudioDigital' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'EstudioDigital' ),
        'add_new'               => __( 'Añadir nuevo', 'EstudioDigital' ),
        'new_item'              => __( 'Nuevo artículo', 'EstudioDigital' ),
        'edit_item'             => __( 'Editar elemento', 'EstudioDigital' ),
        'update_item'           => __( 'Actualizar artículo', 'EstudioDigital' ),
        'view_item'             => __( 'Ver ítem', 'EstudioDigital' ),
        'view_items'            => __( 'Ver artículos', 'EstudioDigital' ),
        'search_items'          => __( 'Buscar artículo', 'EstudioDigital' ),
        'not_found'             => __( 'Extraviado', 'EstudioDigital' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'EstudioDigital' ),
        'featured_image'        => __( 'Foto principal', 'EstudioDigital' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'EstudioDigital' ),
        'remove_featured_image' => __( 'Remove featured image', 'EstudioDigital' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'EstudioDigital' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'EstudioDigital' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'EstudioDigital' ),
        'items_list'            => __( 'Lista de artículos', 'EstudioDigital' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'EstudioDigital' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'EstudioDigital' ),
    );
    $args = array(
        'label'                 => __( 'Clientes Home', 'EstudioDigital' ),
        'description'           => __( 'Post Type Description', 'EstudioDigital' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-ol',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Clientes', $args );

}
add_action( 'init', 'Clientes', 0 );