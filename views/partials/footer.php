    <footer>
        
    </footer>
    <script src="<?= URL ?>assets/script.js"></script>
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