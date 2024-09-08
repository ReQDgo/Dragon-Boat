<?php

// Función para configurar el tema y registrar los menús
function dragon_boat_theme_setup() {
    // Soporte para menús
    add_theme_support( 'menus' );

    // Registrar los menús de navegación
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'dragon-boat' ),
        'footer'  => __( 'Footer Menu', 'dragon-boat' ), // Agregar el menú del footer
    ) );
}
add_action( 'after_setup_theme', 'dragon_boat_theme_setup' );

// Función para encolar los scripts y estilos
function dragon_boat_scripts() {
    // Encolar el archivo de estilos generado por Tailwind (output.css)
    wp_enqueue_style( 'dragon-boat-style', get_template_directory_uri() . '/src/output.css' );
}
add_action( 'wp_enqueue_scripts', 'dragon_boat_scripts' );

?>
