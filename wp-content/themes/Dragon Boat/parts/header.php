<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?> class=" text-gray-900">

    <header id="header" class="w-full flex p-5">
        <nav class="w-full container mx-auto flex flex-row items-center space-x-4">

            <ul class="w-full flex justify-center space-x-11">
                <li><a href="/" class="transition-colors-font text-gray-800 font-normal hover:text-pink-500">Inicio</a></li>
                <li><a href="<?php echo home_url('/noticias'); ?>" class="transition-colors-font text-gray-800 font-normal hover:text-pink-500">Noticias</a></li>
                <li><a href="<?php echo home_url('/eventos'); ?>" class="transition-colors-font text-gray-800 font-normal hover:text-pink-500">Todos los eventos</a></li>
                <li><a href="<?php echo home_url('/donde-entrenamos'); ?>" class="transition-colors-font text-gray-800 font-normal hover:text-pink-500">¿Donde entrenamos?</a></li>
                <li><a href="<?php echo home_url('/medallero'); ?>" class="transition-colors-font text-gray-800 font-normal hover:text-pink-500">Medallero</a></li>
                <li><a href="<?php echo home_url('/contacto'); ?>" class="transition-colors-font text-gray-800 font-normal hover:text-pink-500">Contacto</a></li>
            </ul>

        </nav>
    </header>

    <?php wp_footer(); ?>
</body>

</html>