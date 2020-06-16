    <footer>
        
    </footer>
    <script src="<?= URL ?>public/assets/script.js"></script>
    <?php
        if(!empty($scripts))
        {
            foreach ($scripts as $script)
            {
                echo '<script src="'.URL . $script .'"></script>';
            }
        }
    ?>
</body>
</html>