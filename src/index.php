<?php

$uiStrings = array(
    'title'                 => 'Philipp Moers',
    'subtitle'              => 'Software Engineer / Musician / Banana Nerd',
    'home'                  => 'Home',
    'aboutme'               => 'About Me',
    'blog'                  => 'Blog',
    'imprint'               => 'Imprint',
    'toggle_background'     => 'Background',
    'toggle_dark'           => 'Dark',
    'toggle_bright'         => 'Bright',
);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        <?php echo $uiStrings['title']; ?>
    </title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="sflip">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
       window.jQuery || document.write('<script src="lib/jquery-1.12.0.min.js"><\/script>');
    </script>

    <script src="js/home.js" charset="utf-8"></script>

    <link href="https://fonts.googleapis.com/css?family=Oxygen|Playfair+Display" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">
    <link href="css/colors.bright.css" class="stylesheet_bright" rel="stylesheet" type="text/css" media="screen" disabled>
    <link href="css/colors.dark.css" class="stylesheet_dark" rel="stylesheet" type="text/css" media="screen">

</head>
<body>

    <header class="header">

        <div class="branding">
            <a href="?page=home">
            <h1>
                <?php echo $uiStrings['title']; ?>
            </h1>
            <h2>
                <?php echo '&thinsp;' . $uiStrings['subtitle']; ?>
            </h2>
            </a>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="?page=home">
                        <?php echo $uiStrings['home']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=aboutme">
                        <?php echo $uiStrings['aboutme']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=blog">
                        <?php echo $uiStrings['blog']; ?>
                    </a>
                </li>
            </ul>
        </nav>

    </header>


    <div class="pagewrapper">
        <img class="background" loading="lazy" src="img/monkeymagicos.jpeg" alt=""/>
        <div class="page">

            <?php

                switch ($_GET['page']) {

                    case 'home':
                        include 'pages/home/home.php';
                        break;

                    case 'aboutme':
                        include 'pages/aboutme/aboutme.php';
                        break;

                    case 'blog':
                        include 'pages/blog/blog.php';
                        break;

                    case 'imprint':
                        include 'pages/imprint/imprint.php';
                        break;

                    default:
                        include 'pages/home/home.php';
                        break;
                }

             ?>

        </div>
    </div>


    <footer class="footer">

        <div class="copyright">
            © <?php echo date("Y"); ?> Philipp Moers.
        </div>

        <nav>
            <ul>
                <li>
                    <a href="#" onclick="return false" class="toggle_dark">
                        <?php echo $uiStrings['toggle_dark']; ?>
                    </a>
                    <a href="#" onclick="return false" class="toggle_bright">
                        <?php echo $uiStrings['toggle_bright']; ?>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="return false" class="toggle_background">
                        <?php echo $uiStrings['toggle_background']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=home">
                        <?php echo $uiStrings['home']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=aboutme">
                        <?php echo $uiStrings['aboutme']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=imprint">
                        <?php echo $uiStrings['imprint']; ?>
                    </a>
                </li>
            </ul>
        </nav>

    </footer>

</body>
