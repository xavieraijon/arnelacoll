<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Arnela Coll</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/screen.css">
    
    <!-- Modernizr -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!-- Favicon & Apple Touch Icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
</head>
<body>
            
    <header id="header">
        
        <div class="container">
            
            <div class="top-header row">

                <div class="logo span4">
                    
                    <figure><img src="images/arnela_coll_logo.png" alt="Arnela Coll S.L." title="Arnela Coll S.L."></figure>

                </div><!-- end logo -->
            
                <div class="social"></div><!-- end social -->
                
            </div><!-- end row -->

            <nav class="nav top-nav">
                
                <ul class="main-nav fr">

                    <li><a href="index" <?php echo (basename($_SERVER['PHP_SELF']) == "index.php") ? "class='current'" : "" ?>>Inicio</a></li>
                    <li><a href="quienes_somos" <?php echo (basename($_SERVER['PHP_SELF']) == "quienes_somos.php") ? "class='current'" : "" ?>>Quienes Somos</a></li>
                    <li><a href="que_hacemos" <?php echo (basename($_SERVER['PHP_SELF']) == "que_hacemos.php") ? "class='current'" : "" ?>>Que Hacemos</a></li>
                    <li><a href="contactar" <?php echo (basename($_SERVER['PHP_SELF']) == "contactar.php") ? "class='current'" : "" ?>>Contactar</a></li>

                </ul>
                
            </nav><!-- end nav -->
            
        </div><!-- end container -->
                        
    </header><!-- end main-header -->