</div> <!-- Fin de #content -->

<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Enlaces Rápidos -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Enlaces Rápidos</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer', // Asegúrate de registrar un menú para el footer
                    'menu_class'     => 'space-y-2',
                    'container'      => 'nav',
                    'items_wrap'     => '<ul>%3$s</ul>',
                ));
                ?>
            </div>
            <!-- Información de Contacto -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contacto</h3>
                <p>Email: <a href="mailto:dragonboatmarinavalencia@gmail.com" class="text-pink-500">dragonboatmarinavalencia@gmail.com</a></p>
            </div>
            <!-- Redes Sociales -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Síguenos</h3>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-pink-500"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="text-pink-500"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="text-pink-500"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="text-pink-500"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="mt-8 text-center text-sm">
            <p>&copy; <?php echo date('Y'); ?> Dragon Boat Marina Valencia. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>