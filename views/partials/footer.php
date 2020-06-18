    <footer>
        
    </footer>
    <script src="<?= URL ?>public/assets/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/PixiPlugin.min.js"></script>

    <?php
        if(!empty($scripts))
        {
            foreach ($scripts as $script)
            {
                echo '<script src="'.URL . $script .'"></script>';
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/pixi-filters@latest/dist/pixi-filters.js"></script>

    </body>
</html>