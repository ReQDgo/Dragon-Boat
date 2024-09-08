<div style="background: linear-gradient(90deg, #FFF 0%, #FFF 21.13%, #FFF8FB 27.37%, #FFDBEC 44.35%, #FF97C9 72.5%, #FF1887 100%);" class="w-full h-72 flex flex-row justify-between items-center p-7">
    <div class="w-1/2 h-full">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Descripción de la imagen">
    </div>

    <div class="w-1/2 h-full flex flex-col text-white justify-center">
        <h2 class="text-xl tablet:text-2xl laptop:text-4xl desktop:text-4xl extra-large:text-5xl font-bold">Siempre adelante</h2>
        <h2 class="text-xl tablet:text-2xl laptop:text-4xl desktop:text-4xl extra-large:text-5xl font-bold">Fuertes, valientes, imparables</h2>
    </div>
</div>

<?php
/*
            Template Name: template-home
        */
get_template_part('parts/header');
?>

<div class="container mx-auto my-8 px-4">
    <?php
    // Comienza el bucle para un solo post
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <article class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Imagen destacada del post -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="w-full">
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                    </div>
                <?php endif; ?>

                <div class="p-6">
                    <!-- Título del post -->
                    <h1 class="text-3xl font-bold text-gray-800 mb-4"><?php the_title(); ?></h1>

                    <!-- Contenido del post -->
                    <div class="text-gray-700 leading-relaxed">
                        <?php the_content(); ?>
                    </div>

                    <!-- Meta información del post (opcional) -->
                    <div class="mt-6 text-gray-500">
                        Publicado el <?php echo get_the_date(); ?> por <?php the_author(); ?>
                    </div>
                </div>
            </article>

            <!-- Navegación entre posts -->
            <div class="flex justify-between mt-8">
                <div class="text-left">
                    <?php previous_post_link('%link', '← Post Anterior'); ?>
                </div>
                <div class="text-right">
                    <?php next_post_link('%link', 'Siguiente Post →'); ?>
                </div>
            </div>

    <?php
        endwhile;
    else :
        echo '<p>No hay contenido que mostrar.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>