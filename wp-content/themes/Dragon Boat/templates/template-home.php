<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .wrapper,
        .slide {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            overflow: hidden;
        }

        .slide::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 10;
        }

        .slide .image {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .slide .image-data {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            z-index: 100;
        }

        .image-data span.text {
            font-size: 14px;
            font-weight: 400;
            color: #fff;
        }

        .image-data h2 {
            font-size: 45px;
            font-weight: 600;
            color: #fff;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            color: #333;
            background: #fff;
            text-decoration: none;
            margin-top: 25px;
            transition: all 0.3s ease;
        }

        a.button:hover {
            color: #fff;
            background-color: #c87e4f;
        }

        .sect {
            height: 700px;
            width: 100%;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            /* Negro con 40% de opacidad */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            transition: background-color 0.3s ease;
            z-index: 10;
        }

        /* Efecto de hover para cambiar el color del overlay */
        .w-third:hover .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            /* Negro con 60% de opacidad */
        }

        .item {
            position: relative;
            transition: width 0.5s ease;
            /* Transición para el ancho */
            overflow: hidden;
            /* Asegura que el contenido no se desborde */
        }

        .item:hover {
            width: 100%;
            /* Aumenta el ancho al 100% del contenedor */
            z-index: 20;
            /* Asegúrate de que esté encima de los otros elementos */
        }

        .bg-quienes-somos-1,
        .bg-quienes-somos-2,
        .bg-quienes-somos-3 {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            transition: background-color 0.3s ease;
            z-index: 10;
        }

        .item:hover .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            /* Cambia el color del overlay en hover */
        }

        .text-overlay {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .description {
            opacity: 0;
            /* Oculto por defecto */
            visibility: hidden;
            /* Oculto por defecto */
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .item:hover .description {
            opacity: 1;
            /* Visible en hover */
            visibility: visible;
            /* Visible en hover */
        }
    </style>
</head>

<body>
    <main>
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

        <section class="sect swiper mySwiper">
            <div class="wrapper swiper-wrapper">
                <div class="slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/todas-juntas.png" alt="" class="image" />
                    <div class="image-data">
                        <span class="text">Enjoy the finest coffee drinks.</span>
                        <h2>
                            Enjoy Our Exclusive <br />
                            Coffee and Cocktails
                        </h2>
                        <a href="#" class="button">About Us</a>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/dragon.png" alt="" class="image" />
                    <div class="image-data">
                        <span class="text">We really like what we do.</span>
                        <h2>
                            Coffee Beans with a <br />
                            Perfect Aroma
                        </h2>
                        <a href="#" class="button">About Us</a>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-home/barcas-en-agua.png" alt="" class="image" />
                    <div class="image-data">
                        <span class="text">Making Our coffee with lover.</span>
                        <h2>
                            Alluring and Fragrant <br />
                            Coffee Aroma
                        </h2>
                        <a href="#" class="button">About Us</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </section>

        <section class="w-full h-[700px] p-20 flex flex-row">
            <div class="w-50 bg-blue-300">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/todos-con-banderas.png" alt="" class="h-full w-full" />
            </div>

            <div class="w-50 flex flex-col p-5 align-start">
                <h2 class="text-3xl font-semibold">
                    Dragon Boat Marina Valencia BCS-ACS, un equipo de vida.
                </h2>

                <p class="text-md hoText">
                    Dragon Boat BCS Valencia nace en septiembre de 2018 como iniciativa terapéutica para mujeres supervivientes de cáncer de mama. El deporte de Dragon Boat proporciona una rehabilitación integral. Somos el primer equipo Dragon Boat BCS de la Comunidad Valenciana y de la ciudad de Valencia integrado por mujeres supervivientes de cáncer de mama y primer equipo de Dragon Boat BCS-ACS de España.
                    Poco a poco, el equipo va creciendo y se abre a otras supervivientes de cáncer (ACS). En junio de 2019, nace DRAGON BOAT MARINA VALENCIA. Si una cosa tenemos clara es que el navegar, competir y formar equipo con nuestro Dragón nos ha hecho a todas más fuertes, valientes e imparables . Queremos extender esta filosofía de vida a todas aquellas personas que han padecido un cáncer. Ahora somos DRAGON BOAT MARINA VALENCIA integrado en el Club de Vela Marina Valencia Sailing Club. Categoría BCS-ACS Si eres una superviviente de Cáncer, este es tu equipo.
                </p>
                <button class="rounded-full border-black border-2 w-44 p-2 mt-4">
                    Saber más
                </button>
            </div>
        </section>

        <section class="w-full h-auto p-20 flex flex-col justify-center items-center ">
            <h2 class="text-2xl font-semibold mb-1">¿Quiénes somos?</h2>
            <p class="text-center mb-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam possimus dolorum at expedita saepe alias natus ab sunt. Perferendis vero quibusdam ratione quasi laboriosam nesciunt dicta quae itaque aperiam odio.</p>

            <div class="w-full space-x-4 flex flex-row justify-center items-center">
                <div class="bg-quienes-somos-1 h-72 w-third p-10 flex flex-row space-x-5 relative bg-overlay-hover item">
                    <div class="overlay">
                        <div class="text-overlay">
                            <h3 class="text-3xl font-semibold">Nuestro equipo</h3>
                            <p class="description">Descripción o información adicional</p>
                        </div>
                    </div>
                </div>
                <div class=" h-72 w-third p-10 flex flex-row space-x-5 relative bg-overlay-hover item">
                    <div class="overlay">
                        <div class="text-overlay">
                            <h3 class="text-3xl font-semibold">Nuestro objetivo</h3>
                            <p class="description">Descripción o información adicional</p>
                        </div>
                    </div>
                </div>
                <div class="bg-quienes-somos-3 h-72 w-third p-10 flex flex-row space-x-5 relative bg-overlay-hover item">
                    <div class="overlay">
                        <div class="text-overlay">
                            <h3 class="text-3xl font-semibold">Nuestro dragón</h3>
                            <p class="description">Descripción o información adicional</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="w-full h-[550px] p-20 flex flex-row">
            <div class="w-50 flex flex-col p-5 align-start">
                <h2 class="text-3xl font-semibold">
                    Ayudanos a mantener nuestro dragón en el agua.
                </h2>

                <p class="text-md hoText">
                    Hay muchas formas de colaborar con nuestro equipo. Con ayudas puntuales, donaciones de material o económicas, o convirtiéndote en uno de nuestros patrocinadores. Muchas empresas ya han puesto su granito de arena y desde aquí queremos agradecerles su inestimable colaboración porque sin su ayuda este proyecto no podría seguir adelante. Te invitamos a que nos ayudes a mantenernos en el agua de la manera que desees. Solo tienes que <span class="text-pink-500 font-bold">contactar con nosotras</span> te diremos como hacerlo.
                </p>
                <button class="rounded-full border-black border-2 w-44 p-2 mt-4">
                    Saber más
                </button>
            </div>

            <div class="w-50 bg-blue-300">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empujando-barco.jpg" alt="" class="h-full w-full" />
            </div>
        </section>

        <section class="w-full flex flex-col items-center py-8">
            <h2 class="text-2xl font-semibold">Últimas noticias</h2>

            <div class="p-20">
            <?php
            // Argumentos del query para obtener los posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3, // Ajusta según cuántos posts deseas mostrar
            );

            // Query personalizado de WordPress
            $query = new WP_Query($args);

            // Bucle para recorrer los posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="w-full max-w-6xl flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <!-- Imagen destacada -->
                        <div class="w-full md:w-1/3">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <!-- Contenido del post -->
                        <div class="w-full md:w-2/3 p-6 flex flex-col justify-between">
                            <div>
                                <h2 class="text-lg font-bold text-gray-800"><?php the_title(); ?></h2>
                                <p class="text-gray-600 mt-4"><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                            </div>

                            <div class="mt-4 ">
                                <a href="<?php the_permalink(); ?>" class="inline-block bg-pink-500 text-white py-2 px-4 rounded-full">Leer más</a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Resetea los datos de post
            else :
                echo '<p>No hay posts disponibles.</p>';
            endif;
            ?>
            </div>
        </section>



    </main>
    <?php get_template_part('parts/footer'); ?>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        document.querySelectorAll('.item').forEach((item) => {
            item.addEventListener('mouseover', () => {
                const items = document.querySelectorAll('.item');
                items.forEach((el) => {
                    if (el !== item) {
                        el.style.transform = 'scale(1)';
                        el.style.zIndex = '10';
                    }
                });
            });
        });
    </script>

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 25px;
            color: #fff;
        }

        .swiper-button-next {
            right: 50px;
        }

        .swiper-button-prev {
            left: 50px;
        }
    </style>

</body>

</html>