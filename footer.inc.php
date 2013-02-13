        <footer id="footer">

            <nav class="nav">
                
                <ul class="footer-nav fl">

                    <li><a href="index" <?php echo (basename($_SERVER['PHP_SELF']) == "index.php") ? "class='current'" : "" ?>>Inicio</a></li>
                    <li><a href="quienes_somos" <?php echo (basename($_SERVER['PHP_SELF']) == "quienes_somos.php") ? "class='current'" : "" ?>>Quienes Somos</a></li>
                    <li><a href="que_hacemos" <?php echo (basename($_SERVER['PHP_SELF']) == "que_hacemos.php") ? "class='current'" : "" ?>>Que Hacemos</a></li>
                    <li><a href="contactar" <?php echo (basename($_SERVER['PHP_SELF']) == "contactar.php") ? "class='current'" : "" ?>>Contactar</a></li>

                </ul>
                
            </nav><!-- end nav -->

            <div class="rights">

                <p>&copy; 2013 www.arnelacoll.com - Todos los derechos reservados</p>

            </div><!-- end rights -->

        </footer><!-- end footer -->

    </div><!-- end container -->
                
    
    <!-- Scripts -->
    <script src="js/vendor/jquery-1.8.2.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics -->
    <!-- 
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    -->
</body>
</html>